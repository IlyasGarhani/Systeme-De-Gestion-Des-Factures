<?php 

function connexion()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET")
            {
                include_once(ROOT."IHM/login.php");
            }
    }
?>