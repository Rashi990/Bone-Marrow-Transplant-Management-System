<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Patient Clinical Records</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_patient_clinical_reports_update.css?v=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <body>
    <div class="hero">
      <div class="rtop">
        <div class="empty">
          <p>Patient Clinical Details</p>
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
          <abbr title="Logout">
            <a href="consultant_login.php">
              <div class="icon">
                <span class="material-icons">
                  logout
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

      <div class="middle">
        <div class="form">
          <form class="" action="" method="post">
            <div class="title">
              <p>Clinical Update Form</p>
            </div>
            <label class="lbl">Patient Clinical Report ID</label>
            <input type="text" name="p_cr_id" placeholder="Enter Patient Clinical Report ID">
            <label class="lbl">Patient ID</label>
            <input type="text" name="p_id" placeholder="Enter Patient ID">
            <label class="lbl">Date</label>
            <input type="date" name="date" placeholder="Choose Date">
            <label class="lbl">Drug Name</label>
            <select class="select" name="drug" placeholder="Choose Drug Name">
              <option selected="selected" disabled="disabled">Choose drug name</option>
              <option>Amino Acids</option>
              <option>Amoxapine</option>
              <option>Amoxicillin</option>
              <option>Ampicillin</option>
              <option>Aspirin</option>
              <option>Azithromycin</option>
              <option>Cetirizine</option>
              <option>Dexamethasone</option>
              <option>Flagyl</option>
              <option>Fluconazole</option>
              <option>Insulin</option>
              <option>Lactulose</option>
              <option>Magnesium sulfate</option>
              <option>Metformin hydrochloride</option>
              <option>Omeprazole</option>
              <option>Panadeine</option>
              <option>Vermox</option>
              <option>Vitamin-A</option>
              <option>Vitamin-C</option>
              <option>Vitamin-K1</option>
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
              <option>four times a day</option>
              <option>1mg per hour</option>
              <option>10mg per hour</option>
              <option>50mg per day</option>
              <option>100mg per day</option>
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
              <option>1 week</option>
              <option>8 days</option>
              <option>9 days</option>
              <option>10 days</option>
              <option>11 days</option>
              <option>12 days</option>
              <option>2 weeks</option>
              <option>3 weeks</option>
              <option>1 month</option>
              <option>1 month and 2 weeks</option>
              <option>2 month</option>
              <option>3 month</option>
              <option>24 hours</option>
              <option>48 hours</option>
              <option>72 hours</option>
            </select>
            <div class="btns">
              <button type="submit" name="submit">Update Records</button>
              <button type="button" name="button"><a id="butt" href="consultant_patient_clinical_manage.php">View Records</a></button>
            </div>
            <?php
              require('consultant_connection.php');
              if (isset($_POST['submit'])) {
                $p_cr_id=$_POST['p_cr_id'];
                $p_id=$_POST['p_id'];
                $date=$_POST['date'];
                $drug=$_POST['drug'];
                $dose=$_POST['dose'];
                $route=$_POST['route'];
                $freq=$_POST['freq'];
                if (isset($_GET['patient_cr_id'])) {
                  if (!empty($_POST['p_id']) && !empty($_POST['date']) && !empty($_POST['drug']) && !empty($_POST['dose']) && !empty($_POST['route']) && !empty($_POST['freq'])) {
                    $p=crud::conect()->prepare("UPDATE patient_clinical_reports SET patient_cr_id='pcr', patient_id='p', date='da', drug_name='dn', dosage='do', route='r', frequency='f' WHERE patient_cr_id == '$p_cr_id'");
                    $p->bindValue(':pcr',$p_cr_id);
                    $p->bindValue(':p',$p_id);
                    $p->bindValue(':da',$date);
                    $p->bindValue(':dn',$drug);
                    $p->bindValue(':do',$dose);
                    $p->bindValue(':r',$route);
                    $p->bindValue(':f',$freq);
                    $p->execute();
                    echo "<script>alert('Record Successfullt Updateded!');</script>";
                  }
                }
              }
            ?>
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

<?php
}
?>
