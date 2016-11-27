<?php

/**
 * Interface Restaurant
 */
interface Restaurant{
    // enter resurant
    public function enter_resturant($user_id);

    //person walk move
    public function walk_move($user_id, $x, $y, $z);

    //person eat food
    public function eat($user_id, $food);

    //person shopping
    public function shopping($user_id);

}



interface Asset{
    //sit chair
    public function sit_chair($user_id, $chair_id);

    //leave chair
    public function leave_chair($user_id, $chair_id);

}