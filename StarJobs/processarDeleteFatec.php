<?php 
    include ("conexao.php");

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM vagas where Id_vaga = $id") or die($mysqli->error());

        die("<script> alert('Deletado com sucesso!');
        location.href='fatecPerfil.php'; </script>");
    }


?>