<?php 

function connexion()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET")
            {
                include_once(ROOT."IHM/login.php");
            }
        else if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $email = $_POST["email"];
                $password = $_POST["password"];
                $user = checkcredentials($email,$password);
                if(isset($user))
                {
                    include_once(ROOT."IHM/dashboard.php");
                }
            }

    }

?>