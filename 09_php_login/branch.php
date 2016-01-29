<?php

session_start();
session_regenerate_id();
if($_SESSION['kanri']==1)
{
    header('Location:select.php');
    
}
else
{
    header('Location:select_watch.php');
    
}

?>