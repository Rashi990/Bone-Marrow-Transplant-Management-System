<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultant Reports</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_reports.css?v=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="left">
            <img src="../../public/images/logo.png" class="logo">

          <div class="tabs">

            <a class="hi" href="consultant_appointments.php">Appointments</a>
            <a class="hi-selected">Reports</a>
            <a class="hi" href="consultant_calendar.php">Calendar</a>
            <a class="hi" href="consultant_patient.php">Patient</a>
            <a class="hi" href="consultant_donor.php">Donor</a>

            <div class="logout">
              <abbr title="Logout">
                <a class="hi" href="consultant_login.php">
                  <span class="material-symbols-rounded">
                    logout
                  </span>
                </a>
              </abbr>
            </div>

          </div>
        </div>
        <div class="right">
          <div class="rtop">
            <div class="empty">
              <p>Reports</p>
            </div>
            <div class="profile">
              <abbr title="notifications">
                <a href="../../public/html/consultant_notifications.html">
                  <div class="icon">
                    <span class="material-icons">
                      notifications
                    </span>
                  </div>
                </a>
              </abbr>
              <abbr title="messages">
                <a href="../../public/html/consultant_messages.html">
                  <div class="icon">
                    <span class="material-icons">
                      chat_bubble
                    </span>
                  </div>
                </a>
              </abbr>
              <abbr title="Home">
                <a href="consultant_home.php">
                  <div class="icon">
                    <span class="material-icons">
                      home
                    </span>
                  </div>
                </a>
              </abbr>
              <abbr title="Welcome!">
                <div class="greet">
                  <h3 class="greet-text">Hi, Dr.<?php echo $_SESSION['consultant_name'];?></h3>
                </div>
              </abbr>
              <abbr title="Profile">
                <a href="../../public/html/consultant_profile.html">
                  <div class="pp">
                    <span class="material-icons">
                      account_circle
                    </span>
                  </div>
                </a>
              </abbr>
            </div>
          </div>
          <div class="rbottom">
            <div class="banner2">
              <div class="phara2">
                <p>This is a phara. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <button type="button" name="button">Read More</button>
              </div>
            </div>
            <div class="read-m">
              <div class="read">
                <div class="pic">
                  <span class="material-symbols-outlined">
                    sick
                  </span>
                </div>
                <div class="topic">
                  Disease-Specific Indications and Outcomes
                </div>
                <div class="desc">
                  <br>Find the latest references, outcomes, and referral timing guidelines by disease. Access patient-friendly handouts.
                  <br>
                </div>
                <div class="but1">
                  <a href="consultant_disease.php">Browse All Diseases</a><br>
                  <select id="d1" name="disease" onchange="selectDisease();">
                    <option selected="selected" disabled=disabled>Select the Disease</option>
                    <option value="AML-Adult">AML - Adult</option>
                    <option value="AML-Pediatric">AML-Pediatric</option>
                    <option value="ALL-Adult">ALL-Adult</option>
                    <option value="ALL-Pediatric">ALL-Pediatric</option>
                    <option value="MDS">MDS</option>
                    <option value="CML">CML</option>
                    <option value="CLL">CLL</option>
                    <option value="NHL">NHL</option>
                    <option value="HodgkinLymphoma">Hodgkin Lymphoma</option>
                    <option value="MultipleMyeloma">Multiple Myeloma</option>
                    <option value="SevereAplasticAnemia&MarrowFailure">Severe Aplastic Anemia & Marrow Failure</option>
                    <option value="SickleCellDisease">Sickle Cell Disease</option>
                    <option value="ImmuneDeficiencyDiseases">Immune Deficiency Diseases</option>
                    <option value="InheritedMetabolicDisorders">Inherited Metabolic Disorders</option>
                    <option value="Thalassemia">Thalassemia</option>
                    <option value="OtherDiseases">Other Diseases</option>
                    <option value="MultipleSclerosis">Multiple Sclerosis</option>
                    <option value="SystemicSclerosis">Systemic Sclerosis</option>
                  </select>
                  <!--<select class="fancy_select fancy_selects-active" name="diseases" id="diseases" onchange="gotoDisease(this.value);" style="opacity: 0; min-height: 100%; min-width: 100%; position: absolute; top: 0px; left: 0px; z-index: 2; cursor: pointer;">-->
                </div>
              </div>
              <div class="read">
                <div class="pic">
                  <span class="material-symbols-outlined">
                    rheumatology
                  </span>
                </div>
                <div class="topic">
                  HLA Today
                </div>
                <div class="desc">
                    Remove barriers to patient and family member HLA typing at diagnosis. Get the critical info you need to make treatment decisions.
                </div>
                <div class="but2">
                  <a href="consultant_discover.php">Discover How</a>
                </div>
              </div>
            </div>
            <div class="banner">
              <div class="phara">
                <p>This is a phara. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <button type="button" name="button">Read More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="bottom-input">
          <span>© 2022 SLBMTMS. All rights reserved.</span>
        </div>
        <div class="bottom-input">
          <span>Terms and conditions</span>
        </div>
      </div>
    </div>
  </body>
</html>
}

<?php
}
?>
