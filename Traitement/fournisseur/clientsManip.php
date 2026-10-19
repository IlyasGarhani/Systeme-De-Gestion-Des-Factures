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
            include_once(ROOT."/IHM/fournisseur/clientsList.php");
        }
           
    }
    function add()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET")
            {
                include_once(ROOT."/IHM/fournisseur/form-add.php");
            }
        else if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            header("Location:".link."/consommateur/all");
        }
    }
?>