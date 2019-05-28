<?php
          
            try{
                $conexao = mysqli_connect("localhost","deniseasc","","bd_mobile");
                
                $query="SELECT * FROM `pessoa` order by cd_pessoa asc;";
                
                $resultado = mysqli_query($conexao,$query);
                
                $registro = array(
                    'pessoas' => array()
                );
                
                $i = 0;
                
                while($linha = mysqli_fetch_assoc($resultado)){
                    $registro['pessoas'][$i] = array(
                        'codigo' => $linha['cd_pessoa'],
                        'nome' => $linha['nm_pessoa'],
                        'email' => $linha['ds_email']
                    );
                    $i++;
                }
                
                echo json_encode($registro);
                
                
            }catch(Exception $e){
                echo "Erro ao conectar: ".$e;
            }
?>