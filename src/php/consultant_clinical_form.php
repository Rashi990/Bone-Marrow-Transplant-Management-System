<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient Clinical Form</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_clinical_form.css?v=2">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>

  <body>
    <div class="hero">
      <div class="top">
          <div class="empty">
            <h2>Patient Clinical Form</h2>
          </div>
          <div class="profile">
            <a href="consultant_notifications.html">
              <div class="icon">
                <span class="material-symbols-outlined" style="font-size:42px;">
                  notifications
                </span>
              </div>
            </a>
            <a href="consultant_messages.html">
              <div class="icon">
                <span class="material-symbols-outlined" style="font-size:42px;">
                  message
                </span>
              </div>
            </a>
            <a href="consultant_home.html">
              <div class="icon">
                <span class="material-symbols-outlined" style="font-size:42px;">
                  home
                </span>
              </div>
            </a>
            <a href="../../src/php/consultant_index.php">
              <div class="icon">
                <span class="material-symbols-outlined" style="font-size:42px;">
                  logout
                </span>
              </div>
            </a>
              <div class="greet">
                <h3 class="greet-text">Hi,User</h3>
              </div>
            <a href="consultant_profile.html">
              <div class="pp">
                <span class="material-symbols-outlined" style="font-size:60px;">
                  account_circle
                </span>
              </div>
            </a>
          </div>
      </div>

      <div class="middle">
        <?php
          require('consultant_connection.php');
          if (isset($_POST['Add Record'])) {
            $p_id=$_POST['p_id'];
            $date=$_POST['date'];
            $drug=$_POST['drug'];
            $dose=$_POST['dose'];
            $route=$_POST['route'];
            $freq=$_POST['freq'];
            if (!empty($_POST['p_id'] && !empty($_POST['date']) && !empty($_POST['drug']) && !empty($_POST['dose']) && !empty($_POST['route']) && !empty($_POST['freq']))) {
              $p=crud::conect()->prepare('INSERT INTO patient_clinical_reports(patient_id,date,drug_name,dosage,route,frequency) VALUES(:p,:da,:dn,:do,:r,:f)');
              $p->bindValue(':p',$p_id);
              $p->bindValue(':da',$date);
              $p->bindValue(':dn',$drug);
              $p->bindValue(':do',$dose);
              $p->bindValue(':r',$route);
              $p->bindValue(':f',$freq);
              $p->execute();
              echo "Successfully added!";
            }
          }
        ?>
        <div class="form">
          <div class="title">
            <p>Clinical Form</p>
          </div>
          <form class="" action="" method="post">
            <label class="lbl">Patient ID</label>
            <input type="text" name="p_id" placeholder="Enter Patient ID">
            <label class="lbl">Date</label>
            <input type="date" name="date" placeholder="Choose Date">
            <label class="lbl">Drug Name</label>
            <input type="text" name="drug" placeholder="Choose Drug Name">
            <label class="lbl">Dosage</label>
            <input type="text" name="dose" placeholder="Choose Dosage">
            <label class="lbl">Route</label>
            <input type="text" name="route" placeholder="Choose Route">
            <label class="lbl">Frequency</label>
            <input type="text" name="freq" placeholder="Choose Frequency">
            <input type="submit" name="Add Record" value="Add Record">
          </form>
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
