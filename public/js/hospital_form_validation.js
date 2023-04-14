//for insert new
function conpassword_validation(){
    var x = document.getElementById("password");
    var y = document.getElementById("conpassword");

    if(x.value==y.value){
        return;
    }else{
        document.getElementById("password").value="";
        document.getElementById("conpassword").value="";
        alert("Confirmed password is not same !");
    }
}