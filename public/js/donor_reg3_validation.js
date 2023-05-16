const form = document.getElementById('form');
const fullname = document.getElementById('fullname');
//const lastname = document.getElementById('lname');
const nic = document.getElementById('nic');
const dob = document.getElementById('dob');
const email = document.getElementById('email');
const tel = document.getElementById('tel');
const city=document.getElementById('city');
const address = document.getElementById('address');
const username = document.getElementById('username');
const password = document.getElementById('password');
const conf_password = document.getElementById('conf_password');




const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
    
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');

};



$(document).ready(function() {
    $("#form").submit(function(event) {
      event.preventDefault(); // prevent default form submission
      
      // validate form data here
      validateInputs();
      // send form data using AJAX

      $.ajax({
        type: "POST",
        url: "../../src/php/donor_reg3.php", //  PHP file path
        data: $("#form").serialize(), // serialize form data
        success: function(response) {
          console.log(response); // response handling code
        },
        error: function() {
          console.error("An error occurred"); //  error handling code
        }
      });
    });
  });







//const validateInputs = () => {
    function validateInputs () {
    const fullnameValue = fullname.value.trim();
   // const lastnameValue = lastname.value.trim();
    const nicValue = nic.value.trim();
   const emailValue = email.value.trim();
   const telValue = tel.value.trim();
   const cityValue=city.value.trim();
   const addressValue = address.value.trim();
   const usernameValue = username.value.trim();
   const passwordValue = password.value.trim();
   const conf_passwordValue = conf_password.value.trim();


    if(fullnameValue === '') {
        setError(fullname, 'Full Name is required');
    } else if (!isValid_FullName(fullnameValue)){
        setError(fullname, 'Provide a valid Name');
    } else{
        setSuccess(fullname);
    }

  /*  if(lastnameValue === '') {
        setError(lastname, 'Last Name is required');
    } else if (!isValid_LastName(lastnameValue)){
        setError(lastname, 'Provide a valid Name');
    } else {
        setSuccess(lastname);
    }
  */  

    if(passwordValue===''){
        setError(nic, 'Password is required');
    } 
    else if (!isValidPassword(passwordValue)){
        setError(password, 'Provide a password more than 5 characters');
    } else{
        setSuccess(password);
    }








    if(nicValue===''){
        setError(nic, 'National Identity Card Number is required');
    } else if (!isValidNic(nicValue)){
        setError(nic, 'Provide a valid NIC Number');
    } else{
        setSuccess(nic);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(telValue===''){
        setError(tel, 'Mobile Number is required');
    } else if (!isValidTel(telValue)){
        setError(tel, 'Provide a valid Mobile Number');
    } else{
        setSuccess(tel);
    }

    if(addressValue === '') {
        setError(address, 'Address is required');
    } else{
        setSuccess(address);
    }

    if(cityValue === '') {
        setError(city, 'City Name is required');
       
    } else{
        setSuccess(city);
    }


    if(usernameValue === '') {
        setError(username, 'Username is required');
    } else{
        setSuccess(username);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else{
        setSuccess(password);
    }

    if(conf_passwordValue === '') {
        setError(conf_password, 'Confirm Password is required');
    } else{
        setSuccess(conf_password);
    }


    
    if(!(passwordValue === conf_passwordValue)) {
        setError(conf_password, 'Confirm Password must be equal to  required');
    } else{
        setSuccess(conf_password);
    }




};


const isValidPassword= password=>{
    const re=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$/;
    return re.test(password);
}



const isValid_FullName= fullname=>{
    const re =/^[a-zA-Z]+ [a-zA-Z]+(?: [a-zA-Z]+)*$/;
    return re.test(fullname);
}

/*const isValid_LastName= lastname=>{
    const re = /^[a-zA-Z]+$/;
    return re.test(lastname);
}
*/
const isValidNic = nic =>{
   const re= /^([0-9]{9}[x|X|v|V]|[0-9]{12})$/;
    //const re=/^((19[5-9][3-9]|[2-9][0-9]{3})\d{8})|([8-9]{2}\d{7}[vV])$/;
    return re.test(nic);


}
        /* re = /^([0-9]{9}[x|X|v|V]|[0-9]{12})$/;
        if (!re.test(nic)) {
          return false;
        }
        if (nic.length === 12) {
          const year = parseInt(nic.substring(0, 4));
          if (year < 1900 || year > 2999) {
            return false;
          }
          const daysInYear = isLeapYear(year) ? 366 : 365;
          const dayOfYear = parseInt(nic.substring(4, 7));
          if (dayOfYear < 1 || dayOfYear > daysInYear) {
            return false;
          }
        } else {
          const genderDigit = parseInt(nic.substring(2, 3));
          if (genderDigit < 0 || genderDigit > 4) {
            return false;
          }
        }
        return true;
      }
      
      function isLeapYear(year) {
        return (year % 4 === 0 && year % 100 !== 0) || year % 400 === 0;
      }
      



    
















/*---------- calendar date range validation-------------------*/
var todayDate = new Date();
var month = todayDate.getMonth()+1; // current month
var year = todayDate.getUTCFullYear() - 18; //current year
var tdate = todayDate.getDate(); // current date 
if (month < 10) {
    month = "0" + month //'0' + month no = 04
}
if (tdate < 10) {
    tdate = "0" + tdate;
}
var maxDate = year + "-" + month + "-" + tdate;
var lastYear = todayDate.getUTCFullYear()-40;
var minDate = lastYear + "-" + month + "-" + tdate;
document.getElementById("dob").setAttribute("max", maxDate);
document.getElementById("dob").setAttribute("min", minDate);


const isValidTel = tel =>{
    const re=/^[0][7][\d]{8}$/;
    return re.test(tel);
}


const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

