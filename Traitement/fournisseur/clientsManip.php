<?php
    include_once(ROOT."/BD/consommateur.php");
    $link = connexion();
    function afficherClients()
    {
       $result = selectAll();
        $data = [];
        while($ligne = mysqli_fetch_row($result))
        {
            $data[] = $ligne;
        }
        include_once(ROOT."/IHM/fournisseur/clientsList.php"); 
           
    }
    function add()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET")
            {
                include_once(ROOT."/IHM/fournisseur/form-add.php");
            }
        else if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $password = bin2hex(random_bytes(8));
            echo($password);
            $passwordHashed = password_hash($password,PASSWORD_DEFAULT);
            $lastUser = insertUser($_POST["email"],$_POST["nom"],$_POST["prenom"],$passwordHashed);
            insertConsommateur($lastUser,$_SESSION["user"]["id"],$_POST["adresse"]);
            $
        }
    }
?>