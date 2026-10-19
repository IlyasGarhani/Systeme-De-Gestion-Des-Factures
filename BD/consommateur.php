<?php
    include_once(ROOT."BD/connexion.php");
    $link = connexion();
    function checkConsommateur($ID)
    {
        global $link;
        $sql = "SELECT * FROM consommateur
                WHERE id='".$ID."'";
        return mysqli_fetch_array(mysqli_query($link,$sql));
    }
    function selectAll()
    {
        global $link;
        $sql = "SELECT id,nom,prenom FROM consommateur NATURAL JOIN utilisateur";
        return mysqli_query($link,$sql);
    }
    function insertConsommateur($lastUser,$idFournisseur,$adresse)
    {
        global $link;
        $sql = "INSERT INTO consommateur(id,idFournisseur,adresse)
                VALUES ('".$lastUser."','".$idFournisseur."','".$adresse."')";
        return mysqli_query($link,$sql);
    }
?>