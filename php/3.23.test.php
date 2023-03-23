<?php
    $enemy= rand(0,2);
    // echo $enemy,"\n";
    // 0=가위 1=바위 2=보
    // 0>2 1>0 2>1
    $win="이겼";
    $dra="비겼";
    $los="졌";
    $r="바위";
    $s="가위";
    $p="보";

    $me = 2;
    if($me>2||$me<0)
    echo "장난똥때리지마라";
    else{
        if($enemy==0){
            if($me==0){
                    // echo "여기냐";
                    $scor=$dra;
                }
            else if($me==1){
                    // echo "여기냐1";
                // echo $win;
                $scor=$win;
            }
            else{
                // echo "여기냐2";
                // echo $los;
                $scor=$los;
            }
            $enemy_event=$s;
        }
        else if($enemy==1){
            if($me==0){
                // echo "여기냐3";
                // echo $los;
                $scor=$los;
            }
            else if($me==1){
                // echo "여기냐4왜여기서 탈출하냐왜?";
                // echo $dra;
                $scor=$dra;
            }
            else{
                // echo "여기냐5";
                // echo $win;
                $scor=$win;
            }
            $enemy_event=$r;
        }
        else{
            if($me==0){
                // echo "여기냐6";
                // echo $win;
                $scor=$win;
            }
            else if($me==1){
                // echo "여기냐7";
                // echo $los;
                $scor=$los;
            }
            else{
                // echo "여기냐8";
                // echo $dra;
                $scor=$dra;
            }
            $enemy_event=$p;
        }
        echo "상대는 ",$enemy_event," 입니다.\n당신은 ",$scor,"습니다";
    }
    // if($me=1){
    //     if($enemy=0){
    //         // echo $dra;
    //         $scor=$dra;
    //     }
    //     else if($enemy=1){
    //         // echo $win;
    //         $scor=$win;
    //     }
    //     else{
    //         // echo $los;
    //         $scor=$los;
    //     }
    // }
    // else if($me=1){
    //     if($enemy=0){
    //         // echo $los;
    //         $scor=$los;
    //     }
    //     else if($enemy=1){
    //         // echo $dra;
    //         $scor=$dra;
    //     }
    //     else{
    //         // echo $win;
    //         $scor=$win;
    //     }
    // }
    // else{
    //     if($enemy=0){
    //         // echo $win;
    //         $scor=$win;
    //     }
    //     else if($enemy=1){
    //         // echo $los;
    //         $scor=$los;
    //     }
    //     else{
    //         // echo $dra;
    //         $scor=$dra;
    //     }
    // }
    //     echo "당신은",$scor,"입니다";
    
    ?>