<?php
require_once "models/BaseModel.php";

class WcItemInventory extends BaseModel
{
    const SLOTS_AMOUNT = 27;
    const CHUNK_LIMIT = 20;

    public function initial($user_id)
    {
        if(self::SLOTS_AMOUNT > R::count($this->table_name(), 'user_id=?', array($user_id)))
        {
            for($i = 0; $i < self::SLOTS_AMOUNT; $i++)
            {
                $slot = R::findOne($this->table_name(), 'user_id=? and slot_id=?', array($user_id, $i));
                if(!$slot || $slot->id == 0)
                {
                    $record = R::dispense($this->table_name());
                    $record->user_id    = $user_id;
                    $record->slot_id    = $i;
                    $record->time       = time();
                    R::store($record);
                }
            }
        }
    }

    public function add($user_id, $item_id, $amount)
    {
        $record = R::findOne($this->table_name(), 'user_id=? and item_id=?', array($user_id, $item_id));

        if($record && $record->id > 0)
            $record->amount    += $amount;
        else
        {
            $record = R::findOne($this->table_name(), 'user_id=? and item_id=0 order by slot_id limit 1', array($user_id));
            $record->item_id    = $item_id;
            $record->amount     = $amount;
            $record->time       = time();
        }

        if($record->amount > 0)
            R::store($record);
        else
        {
            $record->item_id = 0;
            $record->amount = 0;
            R::store($record);
        }
    }

    //add item auto allocate chunk
    public function new_add($user_id, $item_id, $amount)
    {
        $record = R::findOne($this->table_name(), 'user_id=? and item_id=?', array($user_id, $item_id));
        if ($record && $record->id > 0)//judge item_id exists
        {
            $available_chunk = $this->getAvailableChunk($user_id, $item_id, $amount);
            $current_chunk = $this->getCurrentChunk($user_id, $item_id, $amount);
            if($record->amount >= self::CHUNK_LIMIT)//继续查找记录没有使用完单个chunk的行
            {
                $record1 = R::findOne($this->table_name(), 'user_id=? and item_id=? and amount<?', array($user_id, $item_id, self::CHUNK_LIMIT));
                if($record1 && $record1->id > 0)
                    $record = $record1;

            }


            if ($amount > $available_chunk)//amount greater thant availble chunk
                return;

            //start saved item amount
           if($amount > self::CHUNK_LIMIT || $amount > $current_chunk)  //bug
           {
               if ($current_chunk)
               {
                   $amount -= $current_chunk;
                   $record->amount += $current_chunk;
                   R::store($record);
               }

               $this->saveToNewChunk($user_id, $item_id, $amount); //save to new chunk position
           }
           else
           {
               $record->amount    += $amount;
               R::store($record);
           }

        }
        else  //new item recored
        {
            $new_available_chunk = $this->getNewAvailableChunk($user_id, self::CHUNK_LIMIT);
            if($amount > $new_available_chunk)
                return;
            $this->saveToNewChunk($user_id, $item_id, $amount);
        }
    }


    public function exist($user_id, $item_id, $amount = 1)
    {
        return R::count($this->table_name(), 'user_id=? and item_id=? and amount>=?', array($user_id, $item_id, $amount)) > 0;
    }

    public function getAll($user_id)
    {
        return R::findAll($this->table_name(), 'user_id=? order by slot_id', array($user_id));
    }

    public function changeSlot($user_id, $slot_src, $slot_dest)
    {
        $record = R::findOne($this->table_name(), 'user_id=? and slot_id=?', array($user_id, $slot_src));
        $record->slot_id = $slot_dest;

        $record1 = R::findOne($this->table_name(), 'user_id=? and slot_id=?', array($user_id, $slot_dest));
        $record1->slot_id = $slot_src;

        R::store($record);
        R::store($record1);
    }

    //get total available chunk
    public function getAvailableChunk($user_id, $item_id, $limit)
    {
        $record = R::count($this->table_name(), 'user_id=? and item_id=? and amount=?', array($user_id, 0, 0));
        $available_chunk = 0;
        if($record > 0)
            $available_chunk = $limit * $record;

        $record1 = R::findAll($this->table_name(), 'user_id=? and item_id=? and amount!=? order by slot_id', array($user_id, $item_id, 0));
        foreach($record1 as $ele)
        {
            if($ele->amount > 0)
            {
                $available_chunk  += $limit - $ele->amount;
            }
        }

        return $available_chunk;
    }

    //get total not used chunk
    public function getNewAvailableChunk($user_id, $limit)
    {
        $record = R::count($this->table_name(), 'user_id=? and item_id=? and amount=?', array($user_id, 0, 0));
        $available_chunk = 0;
        if($record > 0)
            $available_chunk = $limit * $record;
        return $available_chunk;
    }


    //get current item available chunk
    public function getCurrentChunk($user_id, $item_id, $limit)
    {
        $record = R::findOne($this->table_name(), 'user_id=? and item_id=? order by slot_id', array($user_id, $item_id));
        $current_chunk = 0;
        if($record && $record->id > 0)
            $current_chunk = $limit - $record->amount;
        return $current_chunk;
    }


    //save item
    public function saveItemAmount($user_id ,$item_id, $amount)
    {
        $record = R::findOne($this->table_name(), 'user_id=? and item_id=0 order by slot_id limit 1', array($user_id));
        $record->item_id    = $item_id;
        $record->amount     = $amount;
        $record->time       = time();
        R::store($record);
    }

    //save item to new chunk
    public function saveToNewChunk($user_id ,$item_id, $amount)
    {
        while ($amount != 0) {
            if ($amount > self::CHUNK_LIMIT || $amount == self::CHUNK_LIMIT)
            {
                $this->saveItemAmount($user_id, $item_id, self::CHUNK_LIMIT);
                $amount -= self::CHUNK_LIMIT;
            }
            else
            {
                $this->saveItemAmount($user_id, $item_id, $amount);
                $amount = 0;
            }
        }
    }

}