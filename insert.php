<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/button.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prototipo</title>
</head>
<body> 
    
<?php 
    include "conexao.php";
    
    $id = $_GET["id"];
    $data = $_GET["data"];
    $tempo = $_GET["tempo"];

    $insert = "INSERT INTO sensor(id,dataehora,tempo) VALUES ('$id','$data','$tempo');";

    if($conexao -> query($insert) === true){
        echo "insert OK<br>";
    } else {
        echo "falha no insert<br>";
    }

    

?>   
</body>
</html>