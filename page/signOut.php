<?php
    include "../include/session.php";
    echo $_SESSION['ses_userid'].'Logout.';

    unset($_SESSION['ses_userid']);

    if($_SESSION['ses_userid'] == null){
        echo '<br /><br />Success to Log out ';
    }
?>
