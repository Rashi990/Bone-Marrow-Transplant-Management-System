function togglePopup(){
    document.getElementById("popup").classList.toggle("active");
}



function toggle(){
     var blur = document.getElementById("blur");
       blur.classList.toggle("active");
       var mssg = document.getElementById("mssg");
       mssg.classList.toggle("active");
     }

function validate(){
    var valid=false;
  
    if((document.getElementById("frd").checked)){
        valid=true;
    

        
        location.replace("donor_reg3_index.php");
    }

    else{
       
       if((document.getElementsByClassName("disease"))){ 
          toggle();
    }
    }
    
    return validate;
}

 