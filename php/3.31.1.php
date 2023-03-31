<?php

class Food
{
    private $food_name;

    //생성자(constructor)
    public function __construct($parama_food_name) //모든버전에서 이용가능
    // public function Food($parama_food_name) // 클래스명 이용은 7.x버전이후 사용가능
    {
        $this->food_name = $parama_food_name;
    }

    public function print_food_name()
    {
        echo $this->food_name;
    }
}

$obj_food=new Food("탕수육");

$obj_food->print_food_name();
