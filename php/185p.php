<?php
class People
{
    // protected $name;
    private $name;

    // public function __construct($param_name)
    // {
    //     $this->name=$param_name;
    // }
    public function setName($param_name)
    {
        $this->name=$param_name;
    }
    public function peoplePrint()
    {
        $str=$this->name;
        echo "학생이름 : ".$str."\n";
    }
}

class Student extends People
{
    public $id;

    // public function __construct($param_name,$param_setid)
    // {
    //     $this->name=$param_name;
    //     $this->id=$param_setid;
    // }
    public function setid($param_setid)
    {
        $this->id=$param_setid;
    }
    public function peoplePrint()
    {
        parent::peoplePrint();
        $str = $this->id;
        echo "ID : ".$str."\n";
    }
}
// $obj_people=new People;
// $obj_people->setName("홍길동");
$obj_student_people= new Student;
$obj_student_people->setName("홍길동");
$obj_student_people->setid(1);
$obj_student_people->peoplePrint();

// $obj_student_people= new Student("홍길동",1);
// $obj_student_people->peoplePrint();