<?php
    function connection_verification(){
        if($_SESSION['Administrator_Connection_Statut'] != 1){
            header('Location: Connection_Interface.php') ;
            exit() ;
        }
    }
    function sidebar_navigation(string $Link , string $Title , string $ID) : string{
        $Lists_Default_Class = 'Sidebar_Menu_Section_Navbar_List_Item' ;
        $Links_Default_Class = 'Sidebar_Menu_Section_Navbar_List_Item_Link' ;
        if($_SERVER['SCRIPT_NAME'] === $Link){
            $Links_Default_Class = $Links_Default_Class . ' Active' ;
        }
        return '<li class="' . $Lists_Default_Class . '"><a href="' . $Link . '" class="' . $Links_Default_Class . '" id="' . $ID . '">' . $Title . '</a></li>' ;
    }
?>