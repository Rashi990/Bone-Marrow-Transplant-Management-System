<?php include('../../public/html/clinician_nav.html'); 
require_once('clinician_footer.php');?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Donor HLA Details</title>
    <link rel="stylesheet" href="../../public/css/clinician_donor_hla_form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <body>
        <!--Container-->
        <div class ="container">
          
            <div class="left">
    
              <!--heading-->
              
            <div class="head">
                <h2>Donor HLA Details Form</h2>
                
                
            </div>
          
            <br>
            <br>
            <br>
            
                <!-- Form Section-->
                <div class="frms">
    
                  <!--Login In form-->
           <form action="../../src/php/clinician_donor_hla_form.php" class="logfrm" method="post">
           <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo ($_GET['error']); ?></p>
            <?php } ?>
            <br>
            <br>
            <br>
           
  
              <div class="inpt">
                <br>
  
                  <label class ="flp" >
                      Donor ID
                  </label>
                      
  
                          <input type="text" placeholder="Enter Donor ID " name="donor_id" class="np"required>
                      <br>
                      <br>

                  <label class ="flp" >
                          HLA Antigen
                  </label>
                      
      
                          <input type="text" placeholder="Enter HLA Antigen" name="hla_antigen" class="np"required>
                        
                      <br>
                      <br>
                     

                  <label class ="flp" >
                          HLA Allele Family
                  </label>
                      
      
                          <input type="text" placeholder="Enter HLA Allele family" name="hla_allele_family" class="np"required>
                        
                      <br>
                      <br>
                      
  
                  <label class="flp">
                          HLA 2nd Type
                  </label>
                      
  
                       
                         <input type="text" placeholder="Enter HLA 2nd Type" name="hla_2nd" class="np" required>
                        
                      <br>
                      <br>
                   


      
  
                  <label class="flp">
                    HLA 3rd Type 
                  </label>
                      
    
                         
                            <input type="text" placeholder="Enter HLA 3rd Type" name="hla_3rd" class="np" required>
                            
              </div>
              <br>
  
                        <br> 
                       
                        <label class="flp">
                          HLA 4th Type
                  </label>
                    
                       
                         <input type="text" placeholder="Enter HLA 4th Type" name="hla_4th" class="np" required>
                        
                      <br>
                      <br>
                      <label class="flp">
                        HLA 5th Type
                </label>
                    

                     
                       <input type="text" placeholder="Enter HLA 5th Type" name="hla_5th" class="np" required>
                      
                    <br>
                    <br>
                    <br>
                    


  
                        
                    <button class="create" name="create-btn" id="create-btn">
                            <span class="ct">Add HLA Details</span>
                      </button>
                      </a>
                      </div>
                      
          </form>
                  <br>
                  <br>
                  <br>
      <br>
                 
              
  
                <!--  <footer>
                    <div class="bttm">
                      <p>&copy;2022 SLBMTMS.All rights reserved.</p>                                         
                </div>
    
                  </footer>
           -->
  
               
          </div>
          </div>
          </div>
          
          
  
       
      
      
  
      </div>
    
  </body>
  
  </html>
  
           
    