function f_color() {

    if (document.getElementById('status_cl').innerHTML  === 'Disqualified'){
       document.getElementById('status_cl').style.color = "red";
    }
  else if(document.getElementById('status_cl').innerHTML ==='Qualified') 
   {document.getElementById('status_cl').style.color = "yellow";}
       
   
};
f_color();

// function isChecked(){
// if(document.getElementById("accept").checked){
//   document.getElementById("message").textContent = "checked";
// }
// else{
//    document.getElementById("message").textContent = " Not checked";
// }

// }