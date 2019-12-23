<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body {font-family: Arial, Helvetica, sans-serif;}



/* Full-width input fields */

input[type=text], input[type=password] {

  width: 100%;

  padding: 12px 20px;

  margin: 8px 0;

  display: inline-block;

  border: 1px solid #ccc;

  box-sizing: border-box;

}



/* Set a style for all buttons */

button {

  background-color: blue;

  color: white;

  padding: 14px 20px;

  margin: 8px 0;

  border: none;

  cursor: pointer;

  width: 100%;

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

  padding-top: 16px;

}



/* The Modal (background) */

.modal {

  display: none; /* Hidden by default */

  position: fixed; /* Stay in place */

  z-index: 1; /* Sit on top */

  left: 0;

  top: 0;

  width: 100%; /* Full width */
  height: 100%; /* Full height */

  overflow: auto; /* Enable scroll if needed */

  background-color: rgb(0,0,0); /* Fallback color */

  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

  padding-top: 60px;

}



/* Modal Content/Box */

.modal-content {

  background-color: #fefefe;

  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */

  border: 1px solid #888;

  width: 30%; /* Could be more or less, depending on screen size */

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

<body background="6--34452-NEWSPAPER PRINTING PRESS.jpg "><CENTER>

<br>

<br>

<h1><font color=YELLOW size=12><B><I>SR PRINTING PRESS SYSTEM</B></I></font></H1><br>

<br>

<br>



<h2><b><font color=red size=7><i> LOGIN HERE!!!</i></font></b></h2><BR><BR>



<button onclick="document.getElementById('id01').style.display='block'" style="width:300;"><b><i>OPERATOR LOGIN</i></b></button>



<div id="id01" class="modal">

  

  <form class="modal-content animate" name="form1" method="POST" action="loginop1.php">

    <div class="imgcontainer" >

      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

      <img src="LoginRed.jpg" alt="Avatar" class="avatar"  style="width:100pt;" style="height:100pt;">

    </div>



    <div class="container">

      <label for="user"><b>Username</b></label>

      <input type="text" placeholder="Enter Username" name="usero" >



      <label for="pass"><b>Password</b></label>

   <input type="password" placeholder="Enter Password" name="passo" >

        

<input type="submit" value="LOGIN" name="login">

      <label>

        <input type="checkbox" checked="checked" name="remember"> Remember me

      </label>

    </div>



    <div class="container" style="background-color:#f1f1f1">

      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

      <span class="psw">Forgot <a href="#">password?</a></span>

    </div>

  </form>

</div>

<!--admin login-->
<br>
<br>

<button onclick="document.getElementById('id02').style.display='block'" style="width:300;"><b><i>ADMIN LOGIN</i></b></button>



<div id="id02" class="modal">

  

  <form class="modal-content animate" name="form1" action="upoperator.php">

    <div class="imgcontainer" >

      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

      <img src="LoginRed.jpg" alt="Avatar" class="avatar"  style="width:100pt;" style="height:100pt;">

    </div>



    <div class="container">

      <label for="user"><b>Username</b></label>

      <input type="text" placeholder="Enter Username" name="user" required="">



      <label for="pass"><b>Password</b></label>

   <input type="password" placeholder="Enter Password" name="pass" required="">

        

 <a href="upoperator.php"><input type="submit" value="LOGIN"></a>

      <label>

        <input type="checkbox" checked="checked" name="remember"> Remember me

      </label>

    </div>



    <div class="container" style="background-color:#f1f1f1">

      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>

      <span class="psw">Forgot <a href="#">password?</a></span>

    </div>

  </form>

</div>

<!--admin login-->
<script>

// Get the modal

var modal = document.getElementById('id01');
var modal = document.getElementById('id02');



// When the user clicks anywhere outside of the modal, close it

window.onclick = function(event) {

    if (event.target == modal) {

        modal.style.display = "none";

    }

}

</script>



</body>

</html>
