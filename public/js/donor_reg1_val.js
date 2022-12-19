function togglePopup(){
    document.getElementById("popup").classList.toggle("active");
}


function validate(){
    var valid=false;
  
    if((document.getElementById("frd").checked)){
        valid=true;
    

        
        location.replace("donor_reg3_index.php");
    }

    else{
        alert("Sorry!For the safty of the patients, you can not be a donor at this time.");
    }
    
    return validate;
}







