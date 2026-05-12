<?php
$host = 'db:/firebird/data/agenda.fdb';
$user = 'SYSDBA';
$password = 'masterkey';

echo "<h1>Teste de Conexão</h1>";

try {
  $pdo = new PDO("firebird:dbname=$host", $user, $password);
  echo "Conectado com sucesso!";
} catch (PDOException $e) {
  echo "Erro: " . $e->getMessage();
}