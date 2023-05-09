//For inserting new clinician,consultant
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
};

// Autofill date based on entered birthdate
document.getElementById("date_of_birth").addEventListener("change", function() {
    var dob = new Date(this.value);
    var today = new Date();
    var age = today.getFullYear() - dob.getFullYear();
    var monthDiff = today.getMonth() - dob.getMonth();
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
        age--;
    }
    document.getElementById("age").value = age;
});

// Check if the entered date is a future date
document.getElementById("date_of_birth").addEventListener("blur", function() {
    var dob = new Date(this.value);
    var today = new Date();
    if (dob > today) {
        alert("Date of birth cannot be a future date");
        this.value = "";
        document.getElementById("age").value = "";
    }
});