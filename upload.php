<?php
include 'excel_reader.php'; 
$excel = new PhpExcelReader;
require'PHPMailer-5.2.25/PHPMailerAutoload.php';


 $targetfolder = "uploads/";
 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 {
    $excel->read($targetfolder);
    $no_sheets = count($excel->sheets); 
    for($i=0; $i<$no_sheets; $i++) {
        sheetData($excel->sheets[$i]); 
    }
 }

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}

function sheetData($sheet) {
$x = 1;
 while($x < $sheet['numRows'])
{
    $password=randomPassword();
    $mysqli = new mysqli('localhost', 'root', '', 'etproject');

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }
    $email=$sheet['cells'][$x][1];
    
    $sql="INSERT INTO userdata VALUES ('".$email."','".$sheet['cells'][$x][2]."','".$sheet['cells'][$x][3]."','".$password."')";
        if ($mysqli->query($sql) === TRUE) 
        {
            $mail=new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host ='smtp.gmail.com';
            $mail->Port = '587';
            $mail->isHTML(true);
            $mail->Username ='demomailresume@gmail.com';
            $mail->Password = 'resume1234';
            $mail->SetFrom('demomailresume@gmail.com');
            $mail->Subject ='login details';
            $mail->Body = "email id : ".$email."<br>password : ".$password;
            $mail->AddAddress($email);
            /*if(!$mail->Send()) {
             echo "Mailer Error : " . $mail->ErrorInfo;
            }*/
        }
        else
        {
            echo $mysqli->error;
        }
    $x++;
 } 
}

include 'upload.html';
?>