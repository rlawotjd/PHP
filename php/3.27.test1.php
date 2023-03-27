<?php
    // $food = array("한식","중식","일식","양식","분식");

    // $count_room = 5;
    // $index_line = --$count_room;

    
    // $rd = rand(0,$index_line); 
    // // echo $food[rand(0,4)];

    // echo $rd,"\n";
    // echo $food[$rd];

    // // for ($i=0; $i <5 ; $i++) { 
    // //     echo $food[$i],"\n";
    // // }

$food_ass = array(
        "rice"=>"water1"
        ,"tea"=>"water2"
        ,"del"=>"valval"
        ,"drink"=>"water3"
        ,"coffee"=>"water4");
// var_dump($food_ass);

foreach($food_ass as $key =>$val){
    if($key==="del")
    // 느슨한 비교보단 완전비교 추천
    {
        unset($food_ass[$key]);
        // unset($key);
    }
    else
    echo $key," : ",$val,"\n";
}
// var_dump($food_ass);