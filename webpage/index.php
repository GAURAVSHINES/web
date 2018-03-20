<?php

session_start();

if(isset($_GET['logout'])){	

	
	$fp = fopen("chat.html", 'a');
	fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
	fclose($fp);
	$file = file_get_contents('users.html', FILE_USE_INCLUDE_PATH);
	$replace = preg_replace("/".$_SESSION['name']."<br>/" ,"",$file);
	file_put_contents("users.html",$replace);
	
	session_destroy();
	header("Location: index.php"); 
}
?>

   <h1><strong> Friend's Talk</strong> </h1>
   
<?php
function loginForm()
{
	echo
	'
	<div id="loginform">
	<form action="index.php" method="post">
		<p>Enter Your Nick :&nbsp;&nbsp;</p><br>
		<label for="name">Nick:</label>
		<input type="text" name="name" id="name" placeholder="Name" /> <br><br>
		<input type="submit" name="enter" id="enter" value="Enter" />
	</form>
	</div>

	';
}


if(isset($_POST['enter']))
{
	if($_POST['name'] != "")
	{
		$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
			$fu = fopen("users.html", 'a');
			fwrite($fu, $_SESSION['name']."<br>");
			fclose($fu);
	}
	else
	{
		echo '<font color="black">Please type in your name</font>';
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chat</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<?php
if(!isset($_SESSION['name']))
{
	loginForm();
}
else
{
?>


<div id="wrapper_chat">
	<div id="menu">
		<p class="welcome">Welcome, <b>
		
		<?php echo $_SESSION['name']; ?>
		</b></p>
		<p class="logout"><a id="exit" href="#">Logout</a></p>
		<p class ="current_users">Online</p>
	</div>	
	<br>
	<div id="chatbox">
	<?php
	if(file_exists("chat.html") && filesize("chat.html") > 0){
		$handle = fopen("chat.html", "r");
		$contents = fread($handle, filesize("chat.html"));
		fclose($handle);
		echo $contents;
	}
	?></div>
	
	<div id = "users">
	</div>
	
	<form name="message" action="">
		<input name="usermsg" type="text" id="usermsg" />
		<input name="submitmsg" type="submit" id="submitmsg" value="Send" />
		
	</form>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function()
{
	
	$("#submitmsg").click(function()
	{	
		var user_msg = $("#usermsg").val();
		$.post("post.php", {text: user_msg});				
		$("#usermsg").attr("value", "");
		return false;
	});
	
	
    // Automatic Text Scroll 

	function loadLog()
	{		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.ajax(
		{
			url: "chat.html",
			cache: false,
			success: function(html)
			{		
				$("#chatbox").html(html); 				
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight)
				{
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); 
				}				
		  	},
		});
	}
	setInterval (loadLog, 2000); 
	

	function loadusers()
	{		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.ajax({
			url: "users.html",
			cache: false,
			success: function(html)
			{		
				$("#users").html(html); 			
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight)
				{
					$("#users").animate({ scrollTop: newscrollHeight }, 'normal'); 
				}				
		  	},
		});
	}
	setInterval (loadusers, 2000); 
	$("#exit").click(function()
	{
		var exit = confirm(" Are you sure? ");
		if(exit==true){window.location = 'index.php?logout=true';}		
	});
});
</script>

<?php
}
?>
</body>
</html>