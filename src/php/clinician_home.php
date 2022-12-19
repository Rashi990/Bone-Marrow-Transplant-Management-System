<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['clinician_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clinician Home Page</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/clinician_home.css">
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

            <a class="hi" href="clinician_requests.php">Requests</a>
            <a class="hi" href="clinician_calendar.php">Calendar</a>
            <a class="hi" href="clinician_patient.php">Patient</a>
            <a class="hi" href="clinician_donor.php">Donor</a>
            <a class="hi" href="clinician_match.php">Match</a>

            <div class="logout">
              <abbr title="Logout">
                <a class="hi" href="home.php">
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
                  <h3 class="greet-text">Welcome! Dr.<?php echo $_SESSION['clinician_name'];?></h3>
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
              <div class="banner2">
                <div class="phara2">
                  <p class="p2">This is a phara. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <button type="button" name="button">Read More</button>
                </div>
              </div>
              <div class="cases">

                <div class="case">
                  <div class="name">
                    <span class="material-symbols-rounded">
                      healing
                    </span>
                    Cell<br />
                    Sources
                  </div>
                  <div class="descript">
                    Clinicians can select from three hematopoietic cell sources for patients in need of transplantation—bone marrow, peripheral blood stem cells (PBSC), and umbilical cord blood. Physicians can often select the hematopoietic cells based on a patient's characteristics, disease, and disease status.
                  </div>
                  <a href="">
                    <div class="button">
                      <button type="button" name="button">Read More</button>
                    </div>
                  </a>
                </div>

                <div class="case">
                  <div class="name">
                    <span class="material-symbols-rounded">
                      emergency
                    </span>
                    HLA Typing and<br />
                    Matching
                  </div>
                  <div class="descript">
                    Multiple pre and post-transplant factors can impact transplant outcomes. The degree of human leukocyte antigen(HLA) matching between the transplant recipient and the hematopoietic cell graft has a significant impact the outcomes of related and unrelated donor hematopoietic cell transplantation(HCT).
                  </div>
                  <a href="">
                    <div class="button">
                      <button type="button" name="button">Read More</button>
                    </div>
                  </a>
                </div>

                <div class="case">
                  <div class="name">
                    <span class="material-symbols-rounded">
                      calendar_apps_script
                    </span>
                    Donor or Cord Blood<br />
                    Search Process
                  </div>
                  <div class="descript">
                    Clinicians can search the Sri Lanka Bone Marrow Transplant Management System for an unrelated donor or cord blood unit on behalf of their patients needing hematopoietic cell transplantation (HCT). We provide access to more than a million potential donors and nearly 1,000 cord blood units in Sri Lanka.
                  </div>
                  <a href="">
                    <div class="button">
                      <button type="button" name="button">Read More</button>
                    </div>
                  </a>
                </div>

              </div>
              <div class="banner">
                <div class="phara">
                  <p class="p2">This is a phara. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
