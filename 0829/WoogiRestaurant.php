<?php
require_once "HandlerAbstract.php";
require_once "models/wc/WcUser.php";
require_once "models/wc/WcSystemMessage.php";
require_once "models/wc/WcFriendRequest.php";
require_once "models/wc/WcFriend.php";
require_once "models/wc/WcGroupUser.php";
require_once "models/auth/AuthUserLogin.php";
require_once "worker/building/Restaurant.php";
require_once "worker/building/Chair.php";

class WoogiRestaurant extends HandlerAbstract implements Restaurant, Asset{
    /**
     * @describe:当用户进入餐厅广播所有的人我已经进入餐厅了
     * @param $user_id
     * @return int
     */
    public function enter_resturant($user_id)
    {
        $user = new WcUser();
        //get Online User 获取在线用户id
        $online_user_ids = OnlineUserCache::getInstance()->getUsersId();

        //check user exists and user online 检查这个用户存在并且在线
        if (!($user->existUser($user_id)) || !(in_array($user_id, $online_user_ids)))
        {
            $this->sendBack($this->getErrorArray(1));
            return;
        }

        //notify online user
        $data = array();
        $data['uid'] = $user_id;
        $data['msg'] = $user->getNickName($user_id).' enter resturant';
        $data['stats'] = 3;

        //通知所有在线用户我进入餐厅了
        foreach($online_user_ids as $uid)
        {

            $this->sendWithId($uid, $data);
        }

    }


    /**
     * @describe:person walk move position
     * @param $user_id
     * @param int $x
     * @param int $y
     * @return int
     */
    public function walk_move($user_id, $x=0, $y=0, $z)
    {
        $user = new WcUser();
        //sender id
        $sender_id = $this->getId();

        //get Online User获取在线用户id
        $online_user_ids = OnlineUserCache::getInstance()->getUsersId();

        //check user exists and user online 检查这个用户存在并且在线
        if (!($user->existUser($user_id)) || !(in_array($user_id, $online_user_ids)))
        {
            $this->sendBack($this->getErrorArray(1));
            return;
        }

        //ontify online user my position
        $data = array();
        $data['uid'] = $user_id;
        $data['point_x'] = $x;
        $data['point_y'] = $y;
        $data['point_z'] = $z;
        $data['msg'] = $user->getNickName($user_id).' position';
        $data['status'] = 3;

        foreach($online_user_ids as $uid)
        {
            if($uid == $sender_id)
                continue;  //do not send message back to sender self
            $this->sendWithId($uid, $data);
        }

    }

    //person eat food
    public function eat($user_id, $food)
    {
        $sender_id = $this->getId();
        $user = new WcUser();
        //get Online User获取在线用户id
        $online_user_ids = OnlineUserCache::getInstance()->getUsersId();

        //check user exists and user online 检查这个用户存在并且在线
        if (!($user->existUser($user_id)) || !(in_array($user_id, $online_user_ids)))
        {
            $this->sendBack($this->getErrorArray(1));
            return;
        }


        //notify online use eat food
        $data = array();
        $data['uid'] = $user_id;
        $data['food'] = $food;
        $data['msg'] = $user->getNickName($user_id).' eat '. $food;
        $data['status'] = 3;

        foreach($online_user_ids as $uid)
        {
            if($uid == $sender_id)
                continue;
            $this->sendWithId($uid, $data);
        }


    }

    //person shopping
    public function shopping($user_id)
    {
        $sender_id = $this->getId();
        $user = new WcUser();
        //get Online User获取在线用户id
        $online_user_ids = OnlineUserCache::getInstance()->getUsersId();

        //check user exists and user online 检查这个用户存在并且在线
        if (!($user->existUser($user_id)) || !(in_array($user_id, $online_user_ids)))
        {
            $this->sendBack($this->getErrorArray(1));
            return;
        }

        if($user_id != $sender_id)
        {
            $this->sendBack($this->getErrorArray(2));  //判断是不是自己发送的
            return;
        }

        //notify online user shopping now
        $data = array();
        $data['uid'] = $user_id;
        $data['goods'] = 'coffee'; //from database
        $data['msg'] = $user->getNickName($user_id).' shopping ';
        $data['status'] = 3;

        foreach($online_user_ids as $uid)
        {
            if($uid == $sender_id)
                continue;
            $this->sendWithId($uid, $data);
        }


    }

    //sit chair
    public function sit_chair($user_id, $chair_id)
    {
        $sender_id = $this->getId();
        $user = new WcUser();
        $online_user_ids = OnlineUserCache::getInstance()->getUsersId();

        $char = new Chair();

        //check user exists and user online 检查这个用户存在并且在线
        if (!($user->existUser($user_id)) || !(in_array($user_id, $online_user_ids)))
        {
            $this->sendBack($this->getErrorArray(1));
            return;
        }

        if($user_id != $sender_id)
        {
            $this->sendBack($this->getErrorArray(2));  //判断是不是自己发送的
            return;
        }


        //notify online user sit chair

        if($char->use_chair($chair_id))   //如果座位号存在就广播给大家
        {
            $data = array();
            $data['uid'] = $sender_id;
            $data['chair_id'] = $chair_id;
            $data['stats'] = 3;
            $data['msg'] = $user->getNickName($sender_id). ' sit chiar '. $chair_id;

            foreach($online_user_ids as $uid)
            {
                if($uid == $sender_id)
                    continue;
                $this->sendWithId($uid, $data);
            }
        }
        else
        {
            $this->sendBack($this->getErrorArray(4)); //申请失败
        }

    }

    //leave chair
    public function leave_chair($user_id, $chair_id)
    {

        $user = new WcUser();
        $online_user_ids = OnlineUserCache::getInstance()->getUsersId();
        $sender_id = $this->getId();
        $char = new Chair();

        //check user exists and user online 检查这个用户存在并且在线
        if (!($user->existUser($user_id)) || !(in_array($user_id, $online_user_ids)))
        {
            $this->sendBack($this->getErrorArray(1));
            return;
        }
        if($user_id != $sender_id)
        {
            $this->sendBack($this->getErrorArray(2));  //判断是不是自己发送的
            return;
        }
        //notify online user leave chair  把自己离开椅子的信息广播给其它人
            if($char->recover_chair($chair_id))
            {
                $data = array();
                $data['uid'] = $sender_id;
                $data['chair_id'] = $chair_id;
                $data['stats'] = 3;
                $data['msg'] = $user->getNickName($sender_id) . ' leave chiar ' . $chair_id;

                foreach($online_user_ids as $uid)
                {
                    if($uid == $sender_id)
                        continue;
                    $this->sendWithId($uid, $data);
                }
            }
            else
            {
                $this->sendBack($this->getErrorArray(4)); //leave chair faild
            }
    }

}