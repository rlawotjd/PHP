if (1>0) {
    console.log("1>0")
}
else if (1<0) {
    console.log("1<0")
} else {
    console.log("etc")
}
let u_age = 30;
switch (u_age) {
    case 20:
        console.log("20")
        break;

    default:
        console.log(u_age)
        break;
}
//-- 반복문( while, do_while, for, foreach, for...in, for...of)---
let num=0;
while (num <=3) {
    console.log(num)
    num++;
}
//초기화 안되는군 오호라
let dan=2;

do {
    num++;
    let temp = dan+"*"+num+"="+dan*num;
    console.log(temp);
} while (num<9);

let array=[1,2,3,4,5,6,7,8,9]
for (let index = 0; index < array.length; index++) {
    const element =2*array[index]
    console.log(element)
}

let arr=[1,2,3,4]
arr.forEach(function (val) { //배열만 가능
    console.log(val);
})
arr.forEach(element => {
    console.log(element);
});

// for...in 모든객체를 루프 가능
object={
    u_nmae: "홍길동"
    ,u_age: 20
    ,u_gender: "M"
}
for (const key in object) {
    if (Object.hasOwnProperty.call(object, key)) {
        const element = object[key];
        console.log(key+" : "+element);
    }
}
//for...of : 배열 모드 루프 가능
object1=[5,4,3,2,8,1]
object1.num = 2;
for (const iterator of object1) {
    console.log(iterator)
}