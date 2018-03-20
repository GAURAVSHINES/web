<html>
<title>
ANNADAATA
<meta name="viewport" content="width=device-width, initial-scale=1">
</title>
<head>
<style>

.head{
      color: #000080;
	  position:absolute;
	  top:80px;
	  left:100px;
	  font-size:80px;
   }
   
   .jobs{
          position:absolute;
		  top:850px;
		  left:300px;
		  width:200px;
		  height:200px;
        }
		.rent{
        position:absolute;
		  top:850px;
		  left:700px;
		  width:200px;
		  height:200px;
        }
		.books{
        position:absolute;
		  top:850px;
		  left:1100px;
		  width:200px;
		  height:200px;
        }
		.animal{
        position:absolute;
		  top:1150px;
		  left:300px;
		  width:200px;
		  height:200px;
        }
		.weather{
             position:absolute;
		  top:1150px;
		  left:700px;
		  width:200px;
		  height:200px;
        }
		.talk{
        position:absolute;
		  top:1150px;
		  left:1100px;
		  width:200px;
		  height:200px;
        }
		
		.buy{
		    position:absolute;
		  top:1050px;
		  left:1400px;
		  width:200px;
		  height:200px;
		    }
			.jobs:hover{
			             opacity:0.7; 
			           }
		    .rent:hover{
			             opacity:0.7;
					   }
	        .weather:hover{
			                 opacity:0.7;
			              }
		    .books:hover{
			                opacity:0.7;
			             }	

             .animal:hover{
			          opacity:0.7;
			        }	
              .buy:hover{
			             opacity:0.7;
			            }
              .talk:hover{
			           opacity:0.7;
			       }	
              .login{
			          position:absolute;
					  right:0px;
					  top:50px;
					  
			        }		
.login{
         position:absolute;
		 top:100px;
		 left:0px;
      }					
		.mySlides 
		{display:none;
		 position:absolute;
		 top:300px;
		 left:0px;
		 width:400px;
		 height:500px;
		
		} 
		
		body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 30%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
	 position:absolute;
					  right:200px;
					  top:50px;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 10%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 20%;
    }
}
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 20px 5px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 32px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 90%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 30px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
<h2 class="head">ANNADATTA</h2>


<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="1.jpg" style="width:100%">
  <img class="mySlides" src="2.jpg" style="width:100%">
  <img class="mySlides" src="3.jpg" style="width:100%">
  
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<img src="jobs.png" class="jobs"></img>
<img src="rent.jpg" class="rent"></img>
<a href="agrilib.html"><img src="books.png" class="books"></img></a>
<a href="animal.html"><img src="animals.jpeg" class="animal"></img></a>

<img src="weather.png" class="weather"></img>
<a href="<?php   include'index.php'; ?>"><img src="talk.png" class="talk"></img></a>

<a href="buy.html"><img src="buy.png" class="buy"></img></a>
<div class="login"><button onclick="document.getElementById('id01').style.display='block'" style="width":auto;>Login</button></div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
       <br> 
      
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <br><br>
      <button type="submit">Login</button>
      <label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</body>
</html>