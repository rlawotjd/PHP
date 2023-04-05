<?php

class Food
{
    //접근 제어 지시자
    //public    : 아무데나 부르수있지않나?
    //private   : 클래스 안에서서
    //protected : 하위상속 클래스
    
    //멤버 변수 : 클래스내 변수
    private $str_name;
    private $int_price;

    //메소드 : 클래스내 함수
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

$obj_food= new Food("짬뽕",8000);
// $obj_food= new Food("짬뽕",12000); 아쉽
$obj_food->fnc_chang_price(12000);
echo $obj_food->fnc_print_food();



