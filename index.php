<?php 
define('ROOT',str_replace('index.php','',$_SERVER["SCRIPT_FILENAME"]));
define('URL',"/Fatourti/");
include_once(ROOT."/Traitement/loginForm.php");
$URL = explode('/',$_GET["url"]);

if($URL[0] == "utilisateur" )
    {
        if($URL[1] == "connexion" )
            {
                connexion();
            }
    }
?>