<?php

namespace App;
class Connection {
    public static function getDb(){
        try {
            $conn = new \PDO(
                'mysql:host=******;dbname=*****','******','********'
            );
            return $conn;
        } catch (\PDOException $e) {
            //throw $th;
        }
    }
}

?>