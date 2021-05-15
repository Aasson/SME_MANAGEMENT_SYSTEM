<?php
    if(isset($_POST['Connection_Interface_Form_Submit'])){
        extract($_POST) ;
        if(!empty($Connection_Interface_Form_Username) && !empty($Connection_Interface_Form_Password)){
            $Administrator_Connection_Query = $SME_Management_System_Database->prepare(("SELECT * FROM super_admins_data_table WHERE Username = :Username")) ;
            $Administrator_Connection_Query->execute(['Username' => $Connection_Interface_Form_Username]) ;
            $Result = $Administrator_Connection_Query->fetch() ;
            if($Result == true){
                $Username_Hashed_Password = $Result['Password'] ;
                if(password_verify($Connection_Interface_Form_Password , $Username_Hashed_Password)){
                    $_SESSION['Administrator_Name'] = $Result['Fullname'] ;
                    $_SESSION['Administrator_Grade'] = $Result['Grade'] ;
                    $_SESSION['Administrator_Photo'] = $Result['Photo'] ;
                    $_SESSION['Administrator_Connection_Statut'] = 1 ;
                    header('Location: index.php') ;
                }
            }
        }
    }
?>