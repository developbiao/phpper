<?php
require_once "HandlerAbstract.php";
require_once "models/wc/WcUser.php";
require_once "models/wc/WcSystemMessage.php";
require_once "models/wc/WcFriendRequest.php";
require_once "models/wc/WcFriend.php";
require_once "models/wc/WcGroupUser.php";
require_once "models/auth/AuthUserLogin.php";

class ChatGame extends HandlerAbstract
{
    //test socket send data
    public function movePoint($x=null, $y=null)
    {
        $array['cmd'] = 'ChatGame.MovePoint';
        $array['x'] = $x;
        $array['y'] = $y;
        $array['stats'] = 'ok';
        $this->sendBack($array);
    }

    //test get username
    public function getMyName($id)
    {
        $user = new WcFriend();
        $count = $user->getFriendsAmount($id);

        $array = array();
        $array['cmd'] = 'ChatGame.getMyName';
        $array['count'] =  $count;
        $array['satus'] = 'succefully';

        $this->sendBack($array);
    }


    //test send Messgae to Client(系统发送数据给每一个在线用户)

    public function sendMsg($id)
    {
        //$user = new WcUser();
        $online_user_ids = OnlineUserCache::getInstance()->getUsersId();
        $array = array();
        $array['cmd'] = 'ChatGame.sendMsg';
        $array['id'] = $id;
        $array['msg'] = 'Hello Every Body!';
        $array['status'] = 3;
        foreach($online_user_ids as $uid)
        {
            $this->sendWithId($uid, $array);
        }

        $this->sendBack(['Messge Send Ok!']);

    }

    //test user login send Message to Online Client

    public function sendMsgOnline($id)
    {
        $user = new WcUser();
        //get Online user获取在线用户
        $online_user_ids = OnlineUserCache::getInstance()->getUsersId();


        //check user exists and  user online
        if(!($user->existUser($id) && in_array($id, $online_user_ids)))
        {
            $this->sendBack($this->getErrorArray(1));
            return 0;
        }

        $data = array();
        $data['uid'] = $id;
        $data['NickName'] = $user->getNickName($id);
        $data['msg'] = 'Hello, How are you, My Name is--->'.$user->getNickName($id);
        $data['stats'] = 7;


        //send Message to all oneline Users
        foreach($online_user_ids as $uid)
        {
            $this->sendWithId($uid, $data);
        }

        //tel system messge send successful
        $this->sendBack(['Send Message succeful!']);
    }

    //send Message to appoint user
    public function sendMsgToUser($id, $user_id, $msg='Hi')
    {
        $user = new WcUser();
        //get Online user获取在线用户
        $online_user_ids = OnlineUserCache::getInstance()->getUsersId();


        //check user exists and  user online
        if(!($user->existUser($id) && in_array($id, $online_user_ids)))
        {
            $this->sendBack($this->getErrorArray(1));
            return 0;
        }

        //judge user_Id online用户在线就发送消息
        if(in_array($user_id, $online_user_ids))
        {
            $data = array();
            $data['form'] = $user->getNickName($id);
            $data['msg'] =  $msg;
            $data['status'] = 3;
            //send Message
            $this->sendWithId($user_id, $data);
        }
        else
        {
            //对方不在线
            $this->sendBack([$user->getNickName($user_id),'the user offline!']);
        }


    }

}

