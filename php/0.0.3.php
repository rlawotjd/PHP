<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수
// 4-2. K·Q·J,10은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 스페이드>크로버>다이아>하트 순
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료




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

// var_dump($value_2); //생각 실패

// function fnc_static()
// {
//     static $statuc_i =0;
//     return $statuc_i;
//     $statuc_i++;
// }

//초기값 초기화
$sum_dil=0;
$sum_player=0;
$count_cad=0;
$count_player=0;
$count_dil=0;

for ($i=0; $i < 2; $i++) { //플레이어 2장 뽑기
    if ($value_2[$count_cad]=="a") {
        if ($sum_player<=21) {
            $value_2[$count_cad]=11;
            $sum_player+=$value_2[$count_cad];
            $count_cad++;
        }
        elseif ($sum_player>21) {
            $value_2[$count_cad]=1;
            $sum_player+=$value_2[$count_cad];
            $count_cad++;
        }
        else{
            $sum_player+=$value_2[$count_cad];
            $count_cad++;
        }
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
echo "플레이어",$sum_player,"\t","딜러",$sum_dil,"\t",$count_cad,"\n";

//블랙잭 여부 확인
if ($sum_dil==21) {
    echo "딜러 승리";

}
elseif($sum_player==21){
    echo "플레이어 승리";
}

// 값을 뽑기 전에 문자열 숫자 부여 필요
if ($sum_player>21) {
    echo "딜러 승리";
}

// 플레이어 카드 뽑기 끝 딜러 드로우 시작 플레이어 메커니즘필요
// function fnc_player_draw($input)
// {

    // if ($input===1){
        $count_player++;
        if ($sum_player<=21) {
            if ($value_2[$count_cad]=="a") {
                if ($sum_player<=21) {
                    $value_2[$count_cad]=11;
                    $sum_player+=$value_2[$count_cad];
                    $count_cad++;
                }
                elseif ($sum_player>21) {
                    $value_2[$count_cad]=1;
                    $sum_player+=$value_2[$count_cad];
                    $count_cad++;
                }
            }
            else{
            $sum_player+=$value_2[$count_cad];
            $count_cad++;
            }
        }
        elseif($sum_player>21){
        echo "딜러승리";
            }
    // }   

// 딜러의 카드 2차 뽑기 

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
echo "딜러",$sum_dil,"\t",$count_cad,"\n";

if ($sum_dil>21) {
    echo "플레이어 승리";
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


// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}

// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";