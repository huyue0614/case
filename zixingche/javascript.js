/**
 * Created by Admin on 2016/6/14.
 */
window.onload=function()
{
  var Omain=document.getElementById("main");
  var Omright=document.getElementsByClassName("main-right")[0];
  var Oli=Omright.getElementsByTagName('li');
     for(var i=0; i<Oli.length; i++)
     {
         if(i%2==0)
         {
             Oli[i].style.backgroundColor="#ffffff";
         }
         else{
             Oli[i].style.backgroundColor="#f2f2f2";
         }

     }

}