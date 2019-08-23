<?php
    try {
        $conecta = mysqli_connect("localhost","id10547896_matheus","minhasenha","id10547896_db_pessoa");

        $codigo= $_POST['codigo'];

        $query = "delete from tb_pessoas where cd_pessoa = $codigo;";
        mysqli_query($conecta,$query);

        echo "registro removido com sucesso";

    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }
