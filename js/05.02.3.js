//전역 스코프 어디서든 사용가능
let s_name = "김삿갓"; //php 글로벌 비슷하네 사용도 낮음(?)뭔 개소리래 그냥PHP도 그냥 위에서 선언하는데 이당시 나는 무슨생각으로 이딴 개소리를 짖거린거지

function test() {
  //함수레벨 스코프
  console.log(s_name);
  let s_age = 30;
  console.log(s_age);
}

function test1() {
  if (true) {
    let f_test1 = "함수 : 테스트1"; //블록래벨 스코프
    var f_var1 = "var로 선언";
    console.log(f_test1);
  }
  // console.log(f_test1); //작동 안됨
  console.log(f_var1);
}
