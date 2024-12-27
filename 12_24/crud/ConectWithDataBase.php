<?php 

    $servename = "localhost";
    $user = "root";
    $password = "";
    $dbname = "contactify" ;
    
      
      $conn = NULL;
      try {
        $conn = new PDO("mysql:host={$this->servename};dbname={$this->dbname}", $this->user, $this->password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Ascasc";
        }
        catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }

?>
    