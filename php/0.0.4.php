<?php

$num = array(
    "2"
    ,"3"
    ,"4"
    ,"5"
    ,"6"
    ,"7"
    ,"8"
    ,"9"
    ,"10"
    ,"j"
    ,"q"
    ,"k"
    ,"a"
);
$shape = array(
    's'
    ,'c'
    ,'h'
    ,'d' 
);

// echo $num[0].$shape[1];

for ($i=0; $i < count($num); $i++) {  //전체 카드 만들기
    for ($u=0; $u < count($shape); $u++) { 
        $dack[]=$num[$i].$shape[$u];
    }
}

// var_dump($dack);

for ($i=0; $i < count($dack); $i++) { //덱 섞기
    $shuffle_dack[$i]=$dack[rand(0,51)];
    for ($u=0; $u < $i; $u++) { 
        if ($shuffle_dack[$i]==$shuffle_dack[$u]) {
            $i--;
        }
    }
}

// var_dump($shuffle_dack);

for ($i=0; $i < count($shuffle_dack); $i++) { //값으로 만듬1 문자열 자르기
    $value_1[]=mb_substr($shuffle_dack[$i],0,1);
}
// var_dump($value_1);

for ($i=0; $i < count($value_1); $i++) { //문자열을 int로 변경
    if ($value_1[$i]=="1"||$value_1[$i]=="j"||$value_1[$i]=="q"||$value_1[$i]=="k") {
        $value_2[$i]=10;
    }
    // elseif ($value_1[$i]=="a") { //노답
    //     $value_2[$i]=$a;
    // }
    else {
        $value_2[$i]=$value_1[$i];
    }
}
$sum_dil=0;
$sum_player=0;
$count_cad=0;
$count_player=0;
$count_dil=0;
$sum_temp_player=0;
$first_start=0;
$input_temp=3;
$reset=1;

while(true) {
	echo '시작';
	print "\n";
    $sum_player=$sum_temp_player;
    while ($first_start==0) {
        $first_start++;
        for ($i=0; $i < 2; $i++) { //플레이어 2장 뽑기
            if ($value_2[$count_cad]=="a") { //a두장 뽑으니까 ?? 상관없지않나
                $value_2[$count_cad]=11;
                $sum_player+=$value_2[$count_cad];
                $count_cad++;
            }
            else{
                $sum_player+=$value_2[$count_cad];
                $count_cad++;
            }
        }
        for ($i=0; $i < 2; $i++) { //딜러 2장 뽑기
            if ($value_2[$count_cad]=="a") {
                $value_2[$count_cad]=11;
                $sum_dil+=$value_2[$count_cad];
                $count_cad++;
            }
            else{
                $sum_dil+=$value_2[$count_cad];
                $count_cad++;
            }
        }
    }
    echo "플레이어 : ",$sum_player,"\t","딜러 : ",$sum_dil,"\t","\n";

    //블랙잭 여부 확인
    if ($sum_dil==21) {
        echo "딜러 승리";
        $reset=0;
    }
    elseif($sum_player==21){
        echo "플레이어 승리";
        $reset=0;
    }

    fscanf(STDIN, "%d\n", $input);  


	if($input === 0) {
		break;
	}
    elseif($input===1){
        $count_player++;
        $sum_temp_player=$sum_player;
        if ($sum_temp_player<=21) {
            if ($value_2[$count_cad]=="a") {
                if ($sum_player<=21) {
                    $value_2[$count_cad]=11;
                    $sum_temp_player+=$value_2[$count_cad];
                    $count_cad++;
                }
                elseif ($sum_player>21) {
                    $value_2[$count_cad]=1;
                    $sum_temp_player+=$value_2[$count_cad];
                    $count_cad++;
                }
            }
            else{
                $sum_temp_player+=$value_2[$count_cad];
                $count_cad++;
            }
        }
        elseif($sum_temp_player>21){
        $input_temp=2;
        }
        echo "플레이어 : ",$sum_temp_player,"\n";
        $input=$input_temp;
    }
    elseif($input===2)
    {
        while ($sum_dil<=17) {
            $count_dil++;
            if ($value_2[$count_cad]=="a") {
                if ($sum_dil<=21) {
                    $value_2[$count_cad]=11;
                    $sum_dil+=$value_2[$count_cad];
                    $count_cad++;
                }
                elseif ($sum_dil>=21) {
                    $value_2[$count_cad]=1;
                    $sum_dil+=$value_2[$count_cad];
                    $count_cad++;
                }
            } 
            else{
                $sum_dil+=$value_2[$count_cad];
                $count_cad++;
            }
        }
        echo "딜러 : ",$sum_dil,"\n";
        
        if ($sum_dil>21) {
            echo "플레이어 승리";
            break;
        }
        
        if ($sum_player<$sum_dil) {
            echo "딜러 승리";
        }
        elseif ($sum_player>$sum_dil) {
            echo "플레이어 승리";
        }
        elseif ($sum_player==$sum_dil){
            if ($count_player<$count_dil) {
                echo "플레이어 승리";
            }
            elseif ($count_player>$count_dil) {
                echo "딜러 승리";
            }
            elseif ($count_player==$count_dil) {
                echo "draw";
            }
        }
        $reset=0;
    }
    $first_start=$reset;
	echo $input;
	print "\n";
}
echo "\n끝!\n";