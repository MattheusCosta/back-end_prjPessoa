<?php
    try {
        $conecta = mysqli_connect("localhost","id10547896_matheus","minhasenha","id10547896_db_pessoa");
                                //servidor , usuario banco, senha, nome do banco
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $cpf = $_POST['cpf'];
        $cidade = $_POST['endereco'];

        $query = "update tb_livro set cd_pessoa = '$nome', nr_idade = '$idade', st_sexo = '$sexo', nr_cpf = '$cpf', nm_cidade = '$cidade'  where cd_livro = $codigo";
        mysqli_query($conecta,$query);
        echo "Registro realizado com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }
