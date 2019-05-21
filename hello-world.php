<?php
          
            try{
                $conexao = mysqli_connect("localhost","deniseasc","","bd_mobile");
                
                $nome= $_POST['nome'];
                $email= $_POST['email'];
                $query="INSERT INTO pessoa VALUES (null,  '$nome',  '$email')";
                
                mysqli_query($conexao,$query);
                
                echo "Cadastro realizado com sucesso!";
            }catch(Exception $e){
                echo "Erro ao conectar: ".$e;
            }
?>
  