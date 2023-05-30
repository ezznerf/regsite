let form = document.querySelector('.forma')
let errCount = 0;
function ValidPhone(){
    let re =/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
    let myPhone = document.querySelector('#pnumber').value;
    let valid = re.test(myPhone);
    if (!valid){
        alert('Номер телефона введен неправильно!');
        errCount += 1;
    }
    
}
function ValidMail(){
    let re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
    let myMail = document.querySelector('#email').value;
    let valid = re.test(myMail);
    if (!valid){
        alert('Почта введена неправильно!');
        errCount += 1;
    }
}
function ValidName(){
    let re = /^[а-яА-Я]{1,}[\s][а-яА-Я]{1,}[\s][а-яА-Я]{1,}$/g;
    let myName = document.querySelector('#name').value;
    let valid = re.test(myName);
    if (!valid){
        alert( 'ФИО введена неправильно!');
        errCount += 1;
    }
}
function ChangeAction(){
    let select = document.getElementById("save_method");
    let value = select.value;
    if (value == "text"){
       form.action = "text1.php"
    }
    if (value == "serialize"){
        form.action = "text2.php"
    }
}

const btn = document.querySelector('#button')
form.onsubmit = function(){
    ChangeAction();
    ValidPhone();
    ValidMail();
    ValidName();
    console.log(errCount)
    if (errCount >= 1){
        errCount = 0
        return false;
    }
}