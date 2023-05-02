console.log("방가링","반갑띠");

var u_name = "홍길동";
var u_name = "김삿갓"; //중복선언
u_name = "삿갓삿갓" // 재할당
// 중복선언 가능 재할당 가능 함수레벨 스코프
console.log(u_name);

let u_age = 20;
// let u_age = 30; //빨간줄 생기네
u_age =21;
//중복선언 불가능 재할당 가가능 블록레벨 스코프
console.log(u_age);

const gender="man";
// const gender=
gender="woman";
//중복선언 불가능 재할당 불가능 블록레벨 스코프

