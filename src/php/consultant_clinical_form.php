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
            <select class="select" name="drug" placeholder="Choose Drug Name">
              <option selected="selected" disabled="disabled">Choose drug name</option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
              <option></option>
            </select>
            <label class="lbl">Dosage</label>
            <select class="select" name="dose">
              <option selected="selected" disabled="disabled">Choose dosage</option>
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04</option>
              <option>05</option>
              <option>06</option>
              <option>07</option>
              <option>08</option>
              <option>09</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
            </select>
            <label class="lbl">Route</label>
            <select class="select" name="route" placeholder="Choose Route">
              <option selected="selected" disabled="disabled">Choose route</option>
              <option>one time a day</option>
              <option>two times a day</option>
              <option>three times a day</option>
              <option>op4</option>
              <option>op05</option>
            </select>
            <label class="lbl">Frequency</label>
            <select class="select" name="freq" placeholder="Choose Frequency">
              <option selected="selected" disabled="disabled">Choose frequency</option>
              <option>1 day</option>
              <option>2 days</option>
              <option>3 days</option>
              <option>4 days</option>
              <option>5 days</option>
              <option>6 days</option>
              <option>7 days</option>
              <option>8 days</option>
              <option>9 days</option>
              <option>10 days</option>
              <option>11 days</option>
              <option>12 days</option>
              <option>13 days</option>
              <option>2 weeks</option>
              <option>3 weeks</option>
              <option>4 weeks</option>
            </select>
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
