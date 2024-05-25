function verify(){
    const inputPassword= document.querySelector('#inputPassword')
    const confirmPasword=document.querySelector('#confirmPassword')
    const passwordAlert=document.querySelector('#password')
    // password verify condition

    if(inputPassword.value===confirmPasword.value){
        console.log("password match")
        passwordAlert.style.display="none"
    }
    else {
        console.log("password not match")
        passwordAlert.innerHTML="hello password doesn't match";
        passwordAlert.style.display="block"
    }


}
let fruits=["mango","apple","banana"]
console.log(fruits);
const details=[{name:"usman",
    age:21
},{
    name:"keerthi",
    age:21
},{
    name:"sameer",
    age:22
}]
console.log(details);
