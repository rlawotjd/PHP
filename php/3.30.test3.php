<?php

class Car
{
    public $car_name;
    public $car_color;

    public function car_make($param_name,$param_color)
    {
        $this->car_name=$param_name;
        $this->car_color=$param_color;
    }
    public function car_out()
    {
        echo $this->car_color."색".$this->car_name;
    }
}

    $obj_car = new Car;
    $obj_car->car_make("마티즈","황금");
    $obj_car->car_out();