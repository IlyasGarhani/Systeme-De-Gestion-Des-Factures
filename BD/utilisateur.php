<?php
    include_once(ROOT."/BD/connexion.php");
    $link = connexion();
    function checkcredentials($email,$password)
    {
        global $link;
        $sql = "SELECT * FROM utilisateur
                WHERE email='".$email."' AND 
                pass='".$password."'";
        return mysqli_fetch_array(mysqli_query($link,$sql));
    }
?>