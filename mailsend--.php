<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>未命名 2</title>
</head>

<body>


<?php
    require_once('./PHPMailerAutoload.php');  //記得引入檔案
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $C_email=$_POST['C_email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
   
    $mail= new phpmailer;                          //建立新物件
    $mail->IsSMTP();                                    //設定使用SMTP方式寄信
    $mail->SMTPAuth = true;                        //設定SMTP需要驗證
    $mail->SMTPSecure = "ssl";                    // Gmail的SMTP主機需要使用SSL連線
    $mail->Host = "smtp.gmail.com";             //Gamil的SMTP主機
    $mail->Port = 465;                                 //Gamil的SMTP主機的埠號(Gmail為465)。
    $mail->CharSet = "utf-8";                       //郵件編碼
    $mail->Username = "connexteck@gmail.com"; //Gamil帳號
    $mail->Password = "520NYUSTnyust";                 //Gmail密碼
    $mail->From = "connexteck@gmail.com ";        //寄件者信箱
    $mail->FromName = "connexwebsite";                  //寄件者姓名
    $mail->Subject ="來自".$fname."留言"; //郵件標題
    $mail->Body = "名字:".$fname."<br />姓氏:".$lname." <br />信箱:".$C_email."<br />電話:".$phone."<br />回應內容:".$subject; //郵件內容
    $mail->IsHTML(true);                             //郵件內容為html
    $mail->AddAddress("e007lin@gmail.com");            //收件者郵件及名稱
    $mail->AddAddress("max80684@mail2000.com.tw");
    if(!$mail->Send()){
        echo "Error: " . $mail->ErrorInfo;
    }else{
        echo "<b>Thank for your message</b>";
    }
    

    
?>





 
</body>

</html>
