<?php
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap' rel='stylesheet'>
    <title>Email Spoof</title>
    <style>
        body {
            text-align: center;
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .text {
            padding: 10px;
            margin: 10px 0;
            width: 80%;
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
        }
        .btn {
            padding: 10px 20px;
            background: #36D6DE;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background: #2ab7c0;
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
        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #555;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>GMAIL SENDER</h1>
    <b>Script By: Ajay Soni</b><br><br>";

$to = $_GET['to'];
$from = $_GET['from'];
$mail_subject = $_GET['subject'];
$mail_content = $_GET['message'];
$header = "From: $from\r\n";
$result = mail($to, $mail_subject, $mail_content, $header);

if ($result) {
    echo "<center>Mail Sent.</center>";
} else {
    echo "<center>Mail Not Sent.</center>";
}

echo "
    <div class='footer'>
        <h4>Created By: @memeswalahacker</h4>
    </div>
</body>
</html>
";
?>