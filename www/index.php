<?php

?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>SME Management System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0 , user-scalable=no">
        <link rel="stylesheet" href="CSS/Style.css">
    </head>
    <body id="SME_Management_System_Body">
        <header id="SME_Management_System_Header" onmouseover="sme_management_system_on_mouse_over_header_and_footer()" onmouseout="sme_management_system_on_mouse_down_header_and_footer()">
            <h1 id="SME_Management_System_Header_Title">SME MANAGEMENT SYSTEM</h1>
        </header>
        <main id="SME_Management_System_Main_Body">
            <p id="SME_Management_System_Main_Body_Welcome_Speech">LOGIN AS<br>|</p>
            <button id="SME_Management_System_Main_Body_Business_Button" class="SME_Management_System_Home_Button"><a href="BUSINESS/index.php" id="Business" class="SME_Management_System_Main_Body_Button_Link">Business</a></button>
            <button id="SME_Management_System_Main_Body_Admin_Button" class="SME_Management_System_Home_Button"><a href="ADMINISTRATION/index.php" id="Administrator" class="SME_Management_System_Main_Body_Button_Link">Administrator</a></button>
        </main>
        <footer id="SME_Management_System_Footer" onmouseover="sme_management_system_on_mouse_over_header_and_footer()" onmouseout="sme_management_system_on_mouse_down_header_and_footer()">
            <p id="SME_Management_System_Footer_Copyright">&#169; 2021 SME Management System. All right reserved.</p>
        </footer>
        <script src="JS/Main.js"></script>
    </body>
</html>