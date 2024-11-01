 <?php

 $servername = "localhost"; // ou o endereço do seu servidor 
 $username = "root"; // substitua pelo seu usuário
 $password = "Root123"; // Substitua pela senha
 $dbname = "sistema"; // Substitua pelo nome do seu banco de dados

 // Cria a conexão
 $conn = new mysqli($servername, $username, $password, $dbname);

 //verifica a conexão
 if ($conn->connect_error){
    die("conexão falhou: " .  $conn->connect_error);
 }
 ?>