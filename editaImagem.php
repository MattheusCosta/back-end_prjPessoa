<?php
    try {
        $conecta = mysqli_connect("localhost","id10547896_matheus","minhasenha","id10547896_db_pessoa");

        $codigo = $_POST['codigo'];
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

        $query = "update tb_livro set cd_pessoa = '$pessoa', nr_idade = '$idade', st_sexo = '$sexo', nr_cpf = '$cpf', nm_cidade = '$cidade', uri_imagem = '$local'  where cd_livro = $codigo";
        mysqli_query($conecta,$query);

        echo "Registro realizado com sucesso";

    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }
