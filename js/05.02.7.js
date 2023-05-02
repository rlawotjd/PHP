//함수

function add(a,b) {
    return a+b;
    
}
let add2=function (a,b) { //익명함수
    return a+b;
}

//에로우 함수 : 리턴값만 있는경우 한줄로표현가능

let test1= () =>"hello world"

let add3=(a,b)=>a+b;

//함수 생성자 함수
let add4=Function("a","b","return a+b;");