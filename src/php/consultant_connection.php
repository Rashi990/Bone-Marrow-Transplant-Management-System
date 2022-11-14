<?php

class crud
{
  public static function conect()
  {
    try
    {
      $con=new PDO('mysql:localhost=localhost; dbname=bone_marrow_transplant_management_system','root','');
      return $con;
    }
    catch (PDOException $error1)
    {
      echo 'Something went wrong, it was not possible to connect you to database!'.$error1->getMessage();
    }
    catch (PDOException $error2)
    {
      echo 'Generic error!'.$error2->getMessage();
    }
  }
}

?>
