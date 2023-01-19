<?php
// echo "test";
require_once("conf.php");
$name = $email = $message = '';
$n = $e = $m = '';
$nameerr = $emailerr = $messageerr = $validation = '';
if (
    isset($_POST['submit']) && !empty($_POST['submit'])
) {

    if (empty($_POST["name"]) || strlen($_POST["name"]) > $max_lenth_name  || strlen($_POST["name"]) < $min_lenth_name) {
        $name = 'name is required and less than 100 of char and more than 5 char';
    } else {
        $name = 'valid';
        $n = $_POST['name'];
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])) {
        $email = 'email format error';
    } else {
        $email = 'valid';
        $e = $_POST['email'];
    }


    if (empty($_POST["message"]) || strlen($_POST["message"]) > $max_lenth_message || strlen($_POST["message"]) < $min_lenth_message) {
        $message = "error blz put less than 255 and char more than 5 char";
    } else {
        $message = "valid";

        $m = $_POST['message'];
    }
    $validation = $n && $e && $m ? "<p>Thank you for contacting Us</p><p>mr : $n</p> <p>your email is : $e </p><p>your message : $m</p>" : 'blz reright the requird input';
    if ($n && $e && $m) {
        $fp = fopen("data", 'a+');
        $array_data = file("data");
        $data_w = "Visit Date : " . date("l jS \of F Y h:i:s A") . "<br>" . "Id Address :" . getenv("REMOTE_ADDR") . "," . "<br>" . "Email :" . $e . ",<br>" . "Name : " . $n . ", <br> num : " . (count($array_data) + 1) . PHP_EOL;
        fwrite($fp, $data_w);

        fclose($fp);
    }
}
// var_dump($_POST);
// if(isset($_POST['clear'])) {
//         $name=$email=$message='';
//     $n=$e=$m='';
//     $nameerr=$emailerr=$messageerr=$validation='';
// }
