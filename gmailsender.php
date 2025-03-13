<?php
echo "
<html>
<head>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<meta name=\"viewport\" content=\"width=device-width\">
<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap\" rel=\"stylesheet\">
<title>/Spoof mail</title>
<style>
body{
    text-align:center;
    font-family: 'Poppins', sans-serif;
}
.text{
    padding:5px;
    text-align:center;
}
.btn{
    padding:5px;
    background:#00FAFF;
    border-radius:10px;
    font-size:15px;
    cursor:pointer;
}
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid black;
  border-bottom: 16px solid green;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 3s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<h1>GMAIL SENDER</h1>
<b>Script By : memes wala hacker</b><br><br>

<b><font color='green'>Use For Fun , Don,t Misuse</font></b><br><br>

<form action='gmail.php' method='GET'>
    <input type='to' name='to' class='text' placeholder='To'><br>
    <input type='from' name='from' class='text' placeholder='From'><br>
    <input type='subject' name='subject' class='text' placeholder='Enter subject'><br>
    <input type='message' name='message' class='text' placeholder='Enter message'><br>
    <br><br>
    <button class='btn'><i class='fa fa-bomb'></i> SEND NOW <i class='fa fa-bomb'></i></button>
</form>

<div class=\"footer\">
  <h4>Created By : memeswalahacker</h4>
</div></body>
";
?>