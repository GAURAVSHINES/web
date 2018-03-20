<?  

/* 

    Indian Institute of Information Technology, Sricity

                   Krit Karan Singh



*/

session_start();
date_default_timezone_set('Asia/Kolkata');

if(isset($_SESSION['name']))
{  
    $text = $_POST['text'];  

    $fp = fopen("chat.html", 'a');

    fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");  

    fclose($fp);  
}

?>