function editer(){
    let pass1=document.getElementById('pass1').value;
    let pass2=document.getElementById('pass2').value;
    let pass3=document.getElementById('passn').value;
    let choix1=document.getElementById('choix1');
    let choix2=document.getElementById('choix2');

    let ok=true;let i=0;

   
            return changer_mdp() ;

function changer_mdp(){
    if (pass1.length==0)
    {
 alert('saisir votre ancien mdp svp');
return false; 
}
if (pass2.length==0)
{
 alert('saisir votre nouveau mdp svp');
return false; 
}
if (pass3.length==0)
{
 alert('confirmez votre nouveau mdp svp');
return false; 
}
if(compatible(pass2,pass3)==false) 
{
alert('votre nv mdp est incompatible');
return false; }
}
 
function compatible(x,y){
    let K=true;let i=0;

if(x.length!=y.length){
K=false;
}else{

while(K && i<x.length){
if (x.charAt(i)!=y.charAt(i)){
    K=false;
}else i++;

}
}
    return K;

}
}
document.getElementById('edit').addEventListener('click', editer);