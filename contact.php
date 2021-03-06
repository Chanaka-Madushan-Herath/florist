<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:white; width: 80%; margin: auto;">
	<br>
	<hr>
<div class="logo">
	<img src="images/euroflora-logo.png">
</div>
<div>
	We are Online! Welcome to Instant Answer Messaging. During the opening hours of the shop, your request will be read and managed in real time. If you have already placed an order you can call the phone number dedicated to the customers, you received in the summary email.
</div>
<br><br>
<div class="container">
  <form name="myForm" action="#" onsubmit="return validateForm()" method="post">
<div class="get">
	<div id="label" class="req" class="met">
    <label for="name">Name</label></div>
    <div id="input" class="met">
    <input class="in" type="text" id="name" name="name"required></div>
</div>

<div class="get">
	<div id="label" class="req"  class="met">
    <label for="mail">E-mail</label></div>
    <div id="input" class="met">
    <input class="in" type="email" id="mail" name="mail"required></div>
</div>

<div class="get">
	<div id="label"class="req"  class="met">
    
    	<label for="phone">Phone</label></div>
    <div id="input" class="met">

    <select class="country" id="phone" name="phone">
      <option value="Srilanka">Srilanka +94</option>
    </select>
    <input class="num" type="tel" name="phonenum" placeholder="Mobile number" pattern="[0-9]{9}" required>
    </div>
</div>


    <div class="get">
	<div id="label" class="met">
      <label for="order">Order code</label></div>
    <div id="input" class="met">
    <input class="in" type="text" id="order" name="order" placeholder="Enter the code recived by email if available"></div>
</div>


<div class="get">
	<div id="label" class="met">
<p class="formfield">
    <label for="message">Message</label></div>
    <div id="input" class="met">
    <textarea id="message" name="message" placeholder="Dscribe your request accurately to recive better info." style="height:200px"required></textarea>
    </p></div>
</div>


<div class="get">
	<div id="label" class="met">
	<label>Attachment</label></div>
    <div id="input" class="met">
	<input class="in" type="file" name="fileToUpload" id="fileToUpload"></div>
</div>
    <input id="btn" type="submit" value="Start">
  </form>
</div>
<!-- <script src="main.js"></script> -->
</body>
</html>
