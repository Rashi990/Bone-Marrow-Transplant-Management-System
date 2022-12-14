<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultant Home Page</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="../../public/js/consultant_disease.js">

    </script>
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="left">
            <img src="../../public/images/logo.png" class="logo">

          <div class="tabs">

            <a class="hi" href="consultant_appointments.php">Appointments</a>
            <a class="hi" href="consultant_reports.php">Reports</a>
            <a class="hi" href="consultant_calendar.php">Calendar</a>
            <a class="hi" href="consultant_patient.php">Patient</a>
            <a class="hi" href="consultant_donor.php">Donor</a>

            <div class="logout">
              <abbr title="Logout">
                <a class="hi" href="consultant_logout.php">
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
              <p></p>
              <!--<div class="search-bar">
                <span class="material-icons">search</span>
                <input type="search" placeholder="search here">
              </div>-->
            </div>
            <div class="profile">
              <abbr title="Notifications">
                <a href="../../public/html/consultant_notifications.html">
                  <div class="icon">
                    <span class="material-icons">
                      notifications
                    </span>
                  </div>
                </a>
              </abbr>
              <abbr title="Messages">
                <a href="../../public/html/consultant_messages.html">
                  <div class="icon">
                    <span class="material-icons">
                      chat_bubble
                    </span>
                  </div>
                </a>
              </abbr>
              <abbr title="Welcome!">
                <div class="greet">
                  <h3 class="greet-text">Welcome! Dr.<?php echo $_SESSION['consultant_name'];?></h3>
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
            <div class="main">
              <div class="banner">
                <div class="phara">
                  <p>Bone marrow is the primary source of pluripotent stem cells that give rise to all hemopoietic cells (blood cells) including lymphocytes. As a part of the lymphatic system, it is the major organ for B cell maturation and gives rise to the precursor cells of the thymic lymphocytes.
                  </p>
                  <button type="button" name="button">Read More</button>
                </div>
              </div>
              <div class="cases">
                <a href="">
                <div class="case">
                  <div class="name">
                    <span class="material-symbols-rounded">
                      healing
                    </span>
                    Primary Care
                  </div>
                  <div class="descript">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                </div>
                </a>
                <a href="">
                <div class="case">
                  <div class="name">
                    <span class="material-symbols-rounded">
                      emergency
                    </span>
                    Emergency Cases
                  </div>
                  <div class="descript">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                </div>
                </a>
                <a href="consultant_calendar.php">
                <div class="case">
                  <div class="name">
                    <span class="material-symbols-rounded">
                      calendar_apps_script
                    </span>
                    Online Appoinments
                  </div>
                  <div class="descript">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </div>
                  </a>
                </div>
              </div>
              <div class="banner2">
                <div class="phara2">
                  <p>There are two categories of bone marrow tissue: red marrow and yellow marrow. Most of the bone marrow during birth to early adolescence is red marrow while the red marrow is replaced with yellow with age.
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
            </div>
          </div>
        </div>
      </div>
      <!--<div class="bottom">
        <div class="bottom-input">
          <span>?? 2022 SLBMTMS. All rights reserved.</span>
        </div>
        <div class="bottom-input">
          <span>Terms and conditions</span>
        </div>
      </div>-->
    </div>
  </body>
</html>
}

<?php
}
?>
