function conpassword_validation(){
    var s = document.getElementById("password");
    var t = document.getElementById("conpassword");

    if(s.value==t.value){
        return;
    }else{
        document.getElementById("password").value="";
        document.getElementById("conpassword").value="";
        alert("Confirmed password is not same !");
    }
}