<?php
    session_start() ;
    require_once 'SERVER/Functions.php' ;
    connection_verification() ;
    require_once 'SERVER/Database_Connection.php' ;
    $Title = 'Dashboard | SME Management System' ;
?>
<!DOCTYPE html>
<html lang="en-US">
    <?php require_once 'SEGMENTS/Head.php' ; ?>
    <body id="Dashboard_Body">
        <?php require_once 'SEGMENTS/Header.php' ; ?>
        <main id="Dashboard_Main_Body">
            <?php require_once 'SEGMENTS/Sidebar.php' ; ?>
            <section id="Dashboard_Section">
                <div id="Dashboard_Section_Container">
                    
                </div>
            </section>
        </main>
        <?php require_once 'SEGMENTS/Footer.php' ; ?>
    </body>
</html>