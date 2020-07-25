<?php
    error_reporting(1);
$con= mysqli_connect("localhost", "root", "", "elearning");
    
    /*if($con){
        echo"database connected.";
    }else{
        echo"database not conected.";
    }*/


         
           if(isset($_POST['submit'])){
            $check= "SELECT * FROM learners";
            $query= mysqli_query($con, $check);
            if($query) {
              header("location:index.php");
              }else{
                echo "The username or password does not Exist in the database, Check your spellings if you are sure you've registered otherwise click sign up to register";
              }
            }
               
         
         
           if(isset($_POST['sign_up'])){
               $lfname=$_POST['luser_fname'];
               $llname=$_POST['luser_lname'];
               $lpassword=$_POST['luser_password'];
               $lphone=$_POST['luser_phone'];
               $lgender=$_POST['luser_gender'];
               $lname=$_POST['luser_name'];
               $lemail=$_POST['luser_email'];
              $sign="INSERT INTO learners(luser_fname, luser_lname, luser_password, luser_phone, luser_gender, luser_name, luser_email) VALUES('{$lfname}', '{$llname}', '{$lpassword}', '{$lphone}', '{$lgender}', '{$lname}', '{$lemail}')";
               $up= mysqli_query($con, $sign);
             
                if($up){
                    echo "Inserted Successfully";
          header("location:../edusmart/index.php?success=1");
          exit;
          }else{
          echo mysqli_error($con);
          header("location:../index.php?error=1");
          exit;
          }
        }
               


         /* $connect = mysqli_connect("localhost","root","","login");
          if (isset($_POST['register'])) {
          $email = $_POST['email'];
          $password = md5($_POST['password']);
          $gender = $_POST['gender'];
          $sql = "INSERT INTO users(email, pw, gender) Values('{$email}', '{$password}', '{$gender}')";
          $sql_fld = mysqli_query($connect, $sql);
          if($sql_fld)
          {
          echo "Inserted Successfully";
          header("location:../index.php?success=1");
          exit;
          }else{
          echo mysqli_error($connect);
          header("location:../index.php?error=1");
          exit;
          }
          }*/






//$to = 'oluwaseyifunmmyjoy1@gmail.com';
//$firstname = $_POST["fname"];
//$email= $_POST["email"];
//$headers = 'MIME-Version: 1.0' . "\r\n";
//$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$message ='<table style="width:100%">
 //       <tbody><tr>
  //              <td>'.$firstname.'  '.$laststname.'</td>
  //      </tr>
//        <tr><td>Email: '.$email.'</td></tr>
//</tbody></table>';
//if (@mail($to, $email, $message, $headers))
//{
 //   echo 'The message has been sent.';
//}else{
//    echo 'failed';
//}


?>