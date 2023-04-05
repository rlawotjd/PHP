<?php

class Food
{
    protected $str_name;
    protected $int_price;

    public function __construct($param_name,$param_price) //new 생성시 디폴트 실행
    {
        $this->str_name= $param_name;
        $this->int_price=$param_price;
    }
    public function fnc_print_food()
    {
        $str=$this->str_name." : ". $this->int_price. "원\n";
        echo $str;
        }
    public function fnc_chang_price($param_pirce)
    {
        $this->int_price=$param_pirce;
    }
}

class KoreanFood extends Food
{
    protected $side_dish;

    public function __construct($param_name, $parm_price, $param_side_dish)
    {
        $this->str_name=$param_name;
        $this->int_price = $parm_price;
        $this->side_dish = $param_side_dish;
    }
    // 오버 라이딩 :부모꺼 내꺼로 바꿈
    // public function fnc_print_food()
    // {
    //     $str=$this->str_name." : ". $this->int_price. "원 \t ".$this->side_dish."\n";
    //     echo $str;
    // }
    // public function fnc_print_food()
    // {
    //     $str_side=$this-> $str."\t".$this->$param_side_dish."\n";
    //     echo $str_side;
    // }
    public function fnc_print_food()
    {
        parent::fnc_print_food();
        $str = "반찬 : ". $this->side_dish."\n";
        echo $str;
    }
}
$obj_korean_food=new KoreanFood("치킨",20000,"치킨무");
$obj_korean_food->fnc_print_food();
