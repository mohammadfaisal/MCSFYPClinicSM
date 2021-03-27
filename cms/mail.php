
    <?php

include('include/config.php');

require "PHPMailerAutoload.php";

if(isset($_POST['send']))
{
  $dname=$_POST['doctor'];
  $uid=$_POST['userId'];
  $zid=$_POST['zid'];
  $zpass=$_POST['zpass'];
  $zlink=$_POST['zlink'];
  
  $SQL = "INSERT INTO zoom_history(Zoom_Id,Zoom_Pass,Zoom_Link,Patient_Id,Doctor,Send_Date) value('$zid','$zpass','$zlink', '$uid', '$dname',NOW())";

  $que = mysqli_query($con , $SQL);

  if($que)
  {
    $namequery = "select fullName from users where id = '$uid'";

  $name = mysqli_query($con , $namequery);
//     $_GET['id'];
// $name=$_GET['nam'];

// $_GET['mail'];
// $pass=$_GET['pass'];   
$mail=new PHPMailer;
$mail->isSMTP();                                            
$mail->Host       = 'smtp.gmail.com';                    
$mail->SMTPAuth   = true;                                   
$mail->Username   = '1069341.aptechiicc@gmail.com';                     
$mail->Password   = 'Student1069341';                               
$mail->SMTPSecure = 'tls';         
$mail->Port       = 587;                  


$mail->setFrom("1069341.aptechiicc@gmail.com");
$mail->addAddress("ayesha.aptechiic@gmail.com"); 
$mail->addReplyTo("1069341.aptechiicc@gmail.com");
$mail->isHTML(true);  
$mail->Subject = 'Information from Clinic Management System';
$mail->Body    = "<h1>Hello  its me Admin</h1><br><h3>Kindly get your zoom Id and password from below</h3><br><p>ID:     .</p><br><p>Zoom_Id:  $zid </p><br><p>Zoom_Pass:  $zpass </p> <br><p>Zoom_Link:  $zlink </p>";
$mail->AltBody = 'This is for non-html content';
if($mail->send())
{
   header("location:seller_request_page.php");
                  echo "<center><b><div  style='font-size: 20px;'>
                          Request Accepted! And mail has been sent            
                      </div></b></center><br><br>";
    }
    else
  {
    echo "<center><b><div  style='font-size: 20px;'>
                    Fail         
        </div></b></center><br><br> ";
  }
  }
  else
  {
    echo "Error";
  }
}

    ?>