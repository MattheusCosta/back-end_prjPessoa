<?php
    try {
        $conecta = mysqli_connect("localhost","id10547896_matheus","minhasenha","id10547896_db_pessoa");

        $pessoa = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $cpf = $_POST['cpf'];
        $cidade = $_POST['endereco'];

        if($_FILES['foto']['name'] != ''){
            $test = explode('.', $_FILES['foto']['name']);
            $extensao = end($test);
            if($extensao == "jpg" || $extensao == "png"){
                $nome = rand(100,9999).'.'.$extensao;
                $local = 'foto/'.$nome;
                move_uploaded_file($_FILES['foto']['tmp_name'], $local);
            }
        }

        $query = "insert into tb_pessoas values (null, '$pessoa', '$idade','$cidade', '$sexo', '$cpf', '$local');";
        mysqli_query($conecta,$query);

        echo "Cadastro realizado com sucesso";

    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }
