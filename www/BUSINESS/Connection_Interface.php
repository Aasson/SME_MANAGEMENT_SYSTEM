<?php

?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>BUSINESS LOGIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0 , user-scalable=no">
        <link rel="stylesheet" href="CSS/Style.css">
    </head>
    <body id="Business_Connection_Interface_Body">
        <?php require_once("SEGMENTS/Header.php") ; ?>
        <form action="#" id="Business_Connection_Interface_Form" method="post">
            <img src="MEDIA/IMG/Business_Avatar.png" alt="Business Avatar" id="Business_Connection_Interface_Form_Avatar">
            <h2 id="Business_Connection_Interface_Form_Title">Connection</h2>
            <input type="text" id="Business_Connection_Interface_Form_Username" name="Business_Connection_Interface_Form_Username" class="Business_Connection_Interface_Form_Input" placeholder="USERNAME" required><br>
            <input type="password" id="Business_Connection_Interface_Form_Password" name="Business_Connection_Interface_Form_Password" class="Business_Connection_Interface_Form_Input" placeholder="PASSWORD" required><br>
            <input type="submit" id="Business_Connection_Interface_Form_Submit" name="Business_Connection_Interface_Form_Submit" value="LOGIN">
        </form>
        <?php require_once("SEGMENTS/Footer.php") ; ?>
    </body>
</html>