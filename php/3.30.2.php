<?php

class Student
{
    // 접근제어 지시자 : public, private, protected
    public $std_name; //어디서든 사용가능
    private $std_id; //클래스내에서만 사용가능
    protected $std_age; // 상속 클래스내에서도 사용가능
    
    public function print_std($param_dtd_name,$std_age)
    {
        $result_name =  "이름 : ".$param_dtd_name;
        $result_age= "나이 : ".$std_age;
        echo $result_name;
        echo "\n";
        echo $result_age;
    }
    public function get_std_id() 
    {  
        return $this->std_id; //this 포인터 : class 자기 자신을 가르키고있음
    }
    public function set_std_id($param_id)
    {
        $this->std_id = $param_id;
    }
}

    // print_std("aaa","bbb"); //오류발생 클래스안에 묶여있어서 그럼
    
    $obj_Student=new Student;
    
    // $obj_Student->print_std("홍길동",27);
// //클래스외 사용불가    
//     $obj_Student->std_name="김삿갓";
//     echo $obj_Student->std_name;

    $obj_Student->set_std_id("삿갓삿갓");
    echo $obj_Student->get_std_id();


