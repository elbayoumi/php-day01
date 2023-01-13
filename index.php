<?php 
echo "test";
$name=$email=$message='';
$n=$e=$m='';
$nameerr=$emailerr=$messageerr=$validation='';
if(count($_POST)){
    
if(empty($_POST["name"]) || strlen($_POST["name"])>100  || strlen($_POST["name"])<5 ){ $name='name is required and less than 100 of char and more than 5 char';
}else{
    $name = 'valid';$n=$_POST['name'];}

if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)|| empty($_POST["email"])) $email= 'email format error';  
else $email= 'valid';$e=$_POST['email'];
    

if (empty($_POST["message"]) || strlen($_POST["message"])>255 || strlen($_POST["message"])<5)
    {
    $message= "error blz put less than 255 and char more than 5 char";
}else{
    $message= "valid";

    $m=$_POST['message'];
}
$validation =$n&&$e&&$m? "<p>Thank you for contacting Us</p><p>mr : $n</p> <p>your email is : $e </p><p>your message : $m</p>": 'blz reright the requird input';
}
if(isset($_POST['clear'])) {
        $name=$email=$message='';
    $n=$e=$m='';
    $nameerr=$emailerr=$messageerr=$validation='';
}

?>