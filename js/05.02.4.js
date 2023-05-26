//--기본타입--
//숫자 (number)
let num = 1;

//문자열(string)
let str = "str";

//불리언(boolean)
let bool = true;

//null
let t_null = null;

//undefined
let t_undefine;
// t_null==t_undefine//true
// t_null===t_undefine//false

//심볼(symbol)
const s_const1 = Symbol("symbol");
const s_const2 = Symbol("symbol");
// s_const1===s_const2 //false
// s_const1==s_const2 //false 이건 예상 외다

//--객체타입(JSON)--

//배열(인덱스 배열 형태)
let arr = Array(1, 2, 3, 4, 5);
let arr1 = [1, 2, 3, 4, 5, 6];

//date
date = Date();

//object
let obj = {
  u_name: "홍길동",
  u_age: 30,
  u_gender: "M",
  test: function () {
    console.log("test fnc");
  },
  add1: {
    add1: "add1",
    add2: "add2",
  },
};
// obj==>{u_name: '홍길동', u_age: 30, u_gender: 'M'}
// obj.u_name==> '홍길동'
