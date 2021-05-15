<?php
    require_once './SERVER/Functions.php' ;
?>
<sidebar id="Sidebar">
    <div id="Sidbar_Profil_Section">
        <img src="MEDIA/IMG/<?php echo $_SESSION['Administrator_Photo'] ; ?>" alt="" id="Sidebar_Profil_Section_Profil_Picture">
        <h2 id="Sidebar_Profil_Section_Name"><?php echo $_SESSION['Administrator_Name'] ; ?></h3>
        <h3 id="Sidebar_Profil_Section_Grade"><?php echo $_SESSION['Administrator_Grade'] ; ?></h2>
        <div id="Sidebar_Profil_Section_Databases_Connection_Statut_Dot"></div>
        <p id="Sidebar_Profil_Section_Databases_Connection_Statut_Phrase">&nbsp Databases Connected</p>
    </div>
    <div id="Sidebar_Menu_Section">
        <nav id="Sidebar_Section_Navbar">
            <ul id="Sidebar_Section_Navbar_List">
                <?= sidebar_navigation('/ADMINISTRATION/index.php' , 'Dashboard' , 'Dashboard') ; ?>
                <?= sidebar_navigation('#' , 'Create Business' , 'Create_Business') ; ?>
                <?= sidebar_navigation('#' , 'Edit Business' , 'Edit_Business') ; ?>
                <?= sidebar_navigation('#' , 'Finance' , 'Finance') ; ?>
                <?= sidebar_navigation('#' , 'Plans' , 'Plans') ; ?>
                <?= sidebar_navigation('#' , 'Functionality' , 'Functionality') ; ?>
                <?= sidebar_navigation('#' , 'Documentation' , 'Documentation') ; ?>
            </ul>
        </nav>
    </div>
</sidebar>