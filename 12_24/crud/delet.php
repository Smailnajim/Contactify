
<?php
        $sql = "DELETE FROM  userfone WHERE id  = ".$id;
        $stmt = PDO(prepare($sql));
        $stmt->execute();