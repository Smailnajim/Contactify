
<?php
$dt = (new database())->connect();
        $sql = "INSERT INTO userfone (nom,prenom,email,numero_t) VALUES (`$name`,`$lastname`,`$email`,`$phone`)";
        