<?php

    if(!isset($_SESSION['role']) == 1){
        header("Location: ../view/index.php?error=notadmin");
    }

?>