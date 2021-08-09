<?php

namespace App;
class Connection {
    public static function getDb(){
        try {
            $conn = new \PDO(
                'mysql:host=localhost;dbname=mvc','carloslima','admcarlos'
            );
            return $conn;
        } catch (\PDOException $e) {
            //throw $th;
        }
    }
}

?>