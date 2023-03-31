<?php

//파일 을 여는방법 : fopen(파일위치, 파일여는 방식)
// $file_open=fopen("../training/tx1.txt",'r');//읽기전용
// $file_rsetwrite=fopen("../training/tx1.txt",'w'); //쓰기전용(포인터가 파일 첫부분) 그래서 기존 내용 삭제
$file_write=fopen("../training/tx1.txt",'a');// 쓰기전용 (포인터 파일의 끝부분)

// var_dump($file_open);

// print fgets($file_open);
// print fgets($file_open);
// print fgets($file_open);

// var_dump( feof($file_open));

fputs($file_write,"\n돈까스");

fclose($file_open);//파일크로즈 메모리 문제 떄문에 바로 닫는게 좋음
