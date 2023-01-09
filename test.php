<DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Teste de conexão! </title>
</head>
<body>
    <?php
        try {
            $obj = new PDO("sqlite:banco.db");

            //create table cores
            //$sql = "CREATE TABLE cores (nome varchar(100), hexadecimal varchar(10), id int auto_increment primary key);";

            //insert in table cores
            //$sql = "INSERT INTO cores VALUES ('primary-color', '#c7c7c7', 0);";
            $sql = "INSERT INTO cores VALUES ('secundary-color', '#f5d6d8', 1);";

            //select in table cores
            $sql = "SELECT * FROM cores WHERE 1";
            
            //delete table cores
            //$sql = "DROP TABLE cores;";
            
            //descricao table cores;
            //$sql = "DESC cores;";
            
            
            $result = $obj->query($sql);
            foreach($result as $row) {
                print_r($row);
            }
              
            
    
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
        finally {
            echo "\nSucesso!\n";
        }
    
    ?>
    
    
    
</body>
</html>



