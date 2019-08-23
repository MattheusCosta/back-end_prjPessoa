<?php
    try {
        $conecta = mysqli_connect("localhost","id10547896_matheus","minhasenha","id10547896_db_pessoa");

        $codigo = $_POST['codigo'];
        $query = "select * from tb_pessoas where cd_pessoa = $codigo";

        $resultado = mysqli_query($conecta,$query);

        while($linha = mysqli_fetch_assoc($resultado)){
          $registro = array(
            'codigo' => $linha['cd_pessoa'],
            'nome' => $linha['nm_pessoa'],
            'idade' => $linha['nr_idade'],
            'sexo' => $linha['st_sexo'],
            'cpf' => $linha['nr_cpf'],
            'cidade' => $linha['nm_cidade'],
            'imagem' => $linha['uri_imagem']
            )
          );
        }

         echo json_encode($registro);

    } catch (Exception $e ) {
        echo "Erro ao buscar: ".$e;
    }
