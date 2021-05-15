<?php
    session_start() ;
    require_once 'SERVER/Database_Connection.php' ;
    require_once 'SERVER/Administrators_Login.php' ;
    $Title = "SME Management System Connection Interface" ;
?>
<!DOCTYPE html>
<html lang="en-US">
    <?php require_once("./SEGMENTS/Head.php") ; ?>
    <body id="Connection_Interface_Body">
        <?php require_once("./SEGMENTS/Header.php") ; ?>
        <main id="Connection_Interface_Main_Body">
            <form action="#" id="Connection_Interface_Form" method="post" autocomplete="off">
                <img src="MEDIA/IMG/Connection_Avatar.png" alt="Connection Avatar" id="Connection_Interface_Form_Avatar">
                <h2 id="Connection_Interface_Form_Title">Administration</h2>
                <input type="text" name="Connection_Interface_Form_Username" id="Connection_Interface_Form_Username" class="Connection_Interface_Form_Input" placeholder="USERNAME" required><br>
                <input type="password" name="Connection_Interface_Form_Password" id="Connection_Interface_Form_Password" class="Connection_Interface_Form_Input" placeholder="PASSWORD" required><br>
                <input type="submit" name="Connection_Interface_Form_Submit" id="Connection_Interface_Form_Submit" value="LOGIN">
            </form>
        </main>
        <?php require_once("./SEGMENTS/Footer.php") ; ?>
    </body>
</html>