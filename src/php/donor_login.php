
<?php
    // --Add dbh file--
    require_once "../../config/connection.php";
    // --Add validation file--
    require_once "../php/donor_sign_validations.php";
    
    // If user clicks the login button
    if(isset($_POST["login-btn"])){
        // Get form input data
        $user_name = $_POST["username"];
        $pass = $_POST["pass"];
       // $remember = $_POST["re-check"];

        // Input validation
        if(inputsEmptyLogin($user_name, $pass)){
            
            header("location: donor_login_index.php?error=Please enter Username and Password");
        exit();
        }
        else if(usernameInvalid($user_name)){
            header("location: donor_login_index.php?error=Invalid Username");
        }
        else if(passwordInvalid($pass)){
            header("location: donor_login_index.php?error=Invalid Password");
        }
        else{
            // If all inputs are error free
            loginUser($connection, $user_name, $pass);
        }
    }
    else{
        header("location: donor_login_index.php");
        exit();
    }

    // Function for login
function loginUser($connection, $user_name, $pass)
{
    // Query
    $sql = "SELECT * FROM donor WHERE user_name = ?;";
    // Initialize the prepared statement
    $stmt = mysqli_stmt_init($connection);
    // Bind the statement with the query and check errors
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: donor_login_index.php?error=failedstmt");
    } else {
        // Bind data with the statement
        mysqli_stmt_bind_param($stmt, "s", $user_name);
        // Execute the statement
        mysqli_stmt_execute($stmt);
        // Save results if available
        $data = mysqli_stmt_get_result($stmt);
        // Check if there is at least one result
        if ($row = mysqli_fetch_assoc($data)) {


            if ($row['user_name'] === $user_name && $row['password'] === $pass) {
                session_start();
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['donor_id'] = $row['donor_id'];
                $_SESSION['first_name'] = $row['first_name'];
                header("Location: ../../public/html/donor_clinical_history.html");
                exit();
            } else {
                header("location: donor_login_index.php?error=Incorrect Password");
                exit();
            }
        } else {
            header("location: donor_login_index.php?error=Incorrect Username");
            exit();
        }
    }
    // Close the statement
    mysqli_stmt_close($stmt);
}



