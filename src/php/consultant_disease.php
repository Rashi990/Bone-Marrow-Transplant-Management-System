<?php
session_start();
if($_SESSION['userlevel']=1)
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Diseases</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_disease.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="empty">
          <p>Disease-Specific Indications and Outcomes</p>
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
              <h3 class="greet-text">Welcome!, Dr.<?php echo $_SESSION['username'];?></h3>
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
      <div class="middle">
        <div class="tabs">
          <div class="box">
            <a href="#">AML - Adult</a>
          </div>
          <div class="box">
            <a href="#">AML - Pediatric</a>
          </div>
          <div class="box">
            <a href="#">ALl Adult</a>
          </div>
          <div class="box">
            <a href="#">ALL Pediatric</a>
          </div>
          <div class="box">
            <a href="#">MDS</a>
          </div>
          <div class="box">
            <a href="#">CML</a>
          </div>
          <div class="box">
            <a href="#">CLL</a>
          </div>
          <div class="box">
            <a href="#">NHL</a>
          </div>
          <div class="box">
            <a href="#">HodgkinLymphoma</a>
          </div>
          <div class="box">
            <a href="#">MultipleMyeloma</a>
          </div>
          <div class="box">
            <a href="#">SevereAplasticAnemia&MarrowFailure</a>
          </div>
          <div class="box">
            <a href="#">SickleCellDisease</a>
          </div>
          <div class="box">
            <a href="#">ImmuneDeficiencyDiseases</a>
          </div>
          <div class="box">
            <a href="#">InheritedMetabolicDisorders</a>
          </div>
          <div class="box">
            <a href="#">Thalassemia</a>
          </div>
          <div class="box">
            <a href="#">OtherDiseases</a>
          </div>
          <div class="box">
            <a href="#">MultipleSclerosis</a>
          </div>
          <div class="box">
            <a href="#">SystemicSclerosis</a>
          </div>
        </div>
        <div class="descript">
        </div>
      </div>
    </div>
  </body>
</html>

<?php
}
?>
