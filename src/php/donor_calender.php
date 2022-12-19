
<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name'])))
{
    header("Location:donor_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/donor_calender.css">
    <link rel="stylesheet" href="../../public/css/donor_sidebar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,500;1,700&display=swap" rel="stylesheet">
    
    
    
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="script.js" defer></script>


<title>SLBTMS</title>
</head>
<body>
    <!-- sidebar section -->
   
    <div class="sidebar">
        <div class="logo-details">
            <img src="../../public/images/logo.png" class="logo">
        </div>
     <ul class="nav-link">
        <li>
            <a href="../../public/html/donor_clinical_history.html">
                <span class="link_name">Clinical History</span>
            </a>
        </li>
        <li>
            <a href="../../public/html/donor_session.html">
                <span class="link_name">Sessions</span>
            </a>
        </li>
        <li>
            <a href="../../public/html/donor_transplant_request.html">
                <span class="link_name">Request</span>
            </a>
        </li>
        <li>
            <a href="../../src/php/donor_calender.php">
                <span class="link_name">Calender</span>
            </a>
        </li>
            
            <li>
                <a href="../../src/php/home.php">
                    <span class="material-icons">logout</span>
                </a>
            </li>
     </ul>
    </div>
    
    



    
    <!-- header -->
<div class="main-content">
        <header>
            <h2>
                Calender
            </h2>
            <div class="search-wrapper">
                <span class='bx bx-search'></span>
                <input type="search" placeholder="search here">
            </div>
    
           
    
            <div class="box-icon">
                <div class="item">
                    <i class='bx bxs-bell'></i>
                </div>
                <div class="item">
                    <i class='bx bxs-conversation'></i>
                </div>
                
            </div>
           
            
            <div class="user-wrapper">
                <img src="../../public/images/donor_image.jpg" alt="profile_pictire" width="50px" height="50px" >
                <div> <h4>Welcome! </h4><?php echo $_SESSION['user_name'];?></div>
            </div>
        </header>
    </div>
 <div class="main-box">
 <div class="wrapper">
      <header>
        <p class="current-date">December 19 2022</p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded">chevron_left</span>
          <span id="next" class="material-symbols-rounded">chevron_right</span>
        </div>
      </header>
      <div class="calendar">
        <ul class="weeks">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
        </ul>
        <ul class="days">
        <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li>10</li>
          <li>11</li>
          <li>12</li>
          <li>13</li>
          <li>14</li>
          <li>15</li>
          <li>16</li>
          <li>17</li>
          <li>18</li>
          <li>19</li>
          <li>20</li>
          <li>21</li>
          <li>22</li>
          <li>22</li>
          <li>23</li>
          <li>24</li>
          <li>25</li>
          <li>26</li>
          <li>27</li>
          <li>28</li>
          <li>29</li>
          <li>30</li>
          <li>31</li>
        </ul>
      </div>
    </div>
 </div>
    
    
  </body>
</html>
</body>
</html>