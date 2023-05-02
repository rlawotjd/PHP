//호이스팅(hoisting) : 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는것
//인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램
//코드가 실행 되기전 변수와 함수를 우선순위를 높이는것

console.log(h_test());
console.log("6라인"+var_test); //undefine 뜸 먼저 자리 잡아준거
console.log(let_test); //
console.log(const_test); //

function h_test() {
    return "함수 : 호스팅 테스트"
}

var var_test = "var : var변수";
console.log("13라인"+var_test); //정상작동

let let_test="let 변수";
const const_test="const 변수";
