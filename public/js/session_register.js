function confirmRegistration(donor_id ,session_id) {
    // Show the popup message
   
    var popup = document.getElementById("confirm-registration-popup");
    popup.style.display = "flex";
  
    // Add event listeners to the Confirm and Cancel buttons
    var confirmButton = document.getElementById("confirm-button");
    confirmButton.addEventListener("click", function() {
      // Send an AJAX request to register the donor
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "donor_session_register.php");
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            // Display a success message and update the page
            var successMessage = document.createElement("p");
            successMessage.innerHTML = "Registered";
            document.body.appendChild(successMessage);
          } else {
            // Display an error message
            alert("There was an error registering. Please try again later.");
          }
        }
      };

      xhr.send("donor_id=" + donor_id + "&session_id=" + session_id);
  
      // Hide the popup message
      popup.style.display = "none";
    });
  
    var cancelButton = document.getElementById("cancel-button");
    cancelButton.addEventListener("click", function() {
      // Hide the popup message
      popup.style.display = "none";
    });
  }
  




  