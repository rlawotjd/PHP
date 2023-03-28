<?php
    // function func_add($int_a, $int_b) {
    //     $sum = $int_a+$int_b;
    //     return $sum;
    // }
    // // 두개다 같음
    // function func_add($int_a, $int_b) {
    //     return $int_a+$int_b;
    // }

    // $result = func_add(10, 20);
    // echo $result;

    function func_args_add()
    {
        $args=func_get_args(); // 가변 파라미터 부여
        $sum=0; //더하기 결과 저장 변수

        // 루프 : 더하기 실행
        foreach ($args as $key =>$val) {
            $sum +=$val;
        }

        return $sum;
    }
    echo func_args_add(1,2,3,4,5,6,7,8,9,10);

    // function func_args_add()
    // {
    //     $args=func_get_args(1,2,3,4,5,6,7,8,9,10); // 가변 파라미터 부여
    //     $sum=0; //더하기 결과 저장 변수

    //     // 루프 : 더하기 실행
    //     foreach ($args as $val) {
    //         $sum +=$val;
    //     }

    //     return $sum;
    // }
    // echo $func_get_args;