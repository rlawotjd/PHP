<?php
// $arr_test=array("a","3","4");
// $sum=0;
// $sum+=$arr_test[1];
// $sum+=$arr_test[2];
// echo $sum;
// $sum+=$arr_test[0];
// $sum+=$arr_test[2];
// echo $sum;

// function fnc_static()
// {
//     static $statuc_i =0;
//     echo $statuc_i;
//     $statuc_i++;
// }
// $i=0;
// // while (fnc_static() <= 10) {죽음
// //     echo $i++;
// // }
// // fnc_static();
// // fnc_static();
// // fnc_static();
// // echo $statuc_i;

// while ($a <= 10) {
//     # code...
// }

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
// $a=3;
// if ($a==1) {
// 	echo 1,"\t",$a,"\n";
// 	$a++;
// }
// elseif ($a==2) {
// 	echo 2,"\t",$a,"\n";
// 	$a++;
// }
// elseif ($a==3) {
// 	echo 3,"\t",$a,"\n";
// 	$a++;
// }
// elseif ($a==4) {
// 	echo 4,"\t",$a,"\n";
// 	$a++;
// }
// elseif ($a==5) {
// 	echo 5,"\t",$a,"\n";
// 	$a++;
// }
// elseif ($a==6) {
// 	echo 6,"\t",$a,"\n";
// 	$a++;
// }

// // array_pop
// $arr=array(1,2,3,4,5,6);
// $arr2=array_pop($arr);
// // $arr2=array_pop($arr);
// var_dump($arr);
// var_dump($arr2);
// var_dump($arr2);

// static
function fnc_static()
{
	static $arr=array(1,2,3,4,5,6);
	array_pop($arr);
	print_r( $arr );
}
fnc_static();
fnc_static();