function ValidateEmail() 
{
  
  var email=document.getElementById("mail").value;
  const pattern  = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  var msg=document.getElementById("msg");

 if (email.match(pattern))
  {
    msg.innerHTML="Mail valid"
    msg.style.color="green"

      }else  {msg.innerHTML="Mail invalid"
    
      msg.style.color="#ff0000"
    }
}

function verifpwd(){
var pwd1=document.getElementById("pwd1").value;
var pwd2=document.getElementById("pwd2").value;
msg=document.getElementById("msgpwd");

if(pwd1!=pwd2){
  msg.innerHTML='password is not matching'
}else{msg.innerHTML='password is  matching'
    msg.style.color='green';
}
}
function pwdcheck(){
var pwd1=document.getElementById("pwd1").value;
msg=document.getElementById("msgp");
var chaine="your password requires :"
var  va=0;
msg.innerHTML=pwd1
const low=new RegExp('(?=.*[a-z])')
const up=new RegExp('(?=.*[A-Z])')
const num=new RegExp('(?=.*[0-9])')
const spe=new RegExp('(?=.*[!@#\$%\^&\*])')
if (pwd1.length<8)
{chaine=chaine+'8 chars';
va++;
}
if (!low.test(pwd1)){
chaine=chaine+' / a lower case';
va++;
}
if (!up.test(pwd1)){
chaine=chaine+' / an upper case';
va++;
}
if (!num.test(pwd1)){
chaine=chaine+' / a number';
va++;
}
if (!spe.test(pwd1)){
chaine=chaine+' / a special char';
va++;
}

if (va==0){
  chaine='password is Okay'
  msg.style.color='green'; 
}msg.innerHTML=chaine;





}


function verifname(){
  const spe=new RegExp('(?=.*[!@#\$%\^&\*])')
  var name=document.getElementById("name").value;
  msg=document.getElementById("msgn");
  chaine='';
  t=0;
  if(!name.includes(" ")){
    chaine=chaine+'write your full name'
    t++;
  }
  if (spe.test(name)) {
    chaine=chaine+"  your name can't containe a special"
  }
  msg.innerHTML=chaine;
}

