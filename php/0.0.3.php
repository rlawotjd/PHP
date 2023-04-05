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

// $ace=11;

// if ($sum>21) {
//     $ace=1;
// }

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

for ($i=0; $i < 13; $i++) {  //전체 카드 만들기
    for ($u=0; $u < 4; $u++) { 
        $dack[]=$num[$i].$shape[$u];
    }
}

// var_dump($dack);

for ($i=0; $i < 52; $i++) { //덱 섞기
    $shuffle_dack[$i]=$dack[rand(0,51)];
    for ($u=0; $u < $i; $u++) { 
        if ($shuffle_dack[$i]==$shuffle_dack[$u]) {
            $i--;
        }
    }
}

// var_dump($shuffle_dack);

for ($i=0; $i < 52; $i++) { //값으로 만듬1 문자열 자르기
    $value_1[]=mb_substr($shuffle_dack[$i],0,1);
}
// var_dump($value_1);

for ($i=0; $i < 52; $i++) { //문자열을 int로 변경
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

// var_dump($value_2);

// function fnc_static()
// {
//     static $statuc_i =0;
//     return $statuc_i;
//     $statuc_i++;
// }

// 값을 뽑기 전에 문자열 숫자 부여 필요
// 딜러의 카드 뽑기
$sum_dil=0;
$count_cad=0;
while ($sum_dil<=17) {
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
echo $sum_dil,"\t",$count_cad;

//플레이어 카드 뽑기
// $start=0;
// while ($start <= 2) {
//     $start++;

// }