<?php 
  try {
    $pdo = new PDO("pgsql:host=db;port=5432;dbname=database;user=postgres;password=postgres");
  } catch(PDOExeption $e) {
    var_dump($e->getMessage);
  }