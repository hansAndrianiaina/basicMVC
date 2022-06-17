<?php

    require("config.php");

    class Connection 
    {
        public static function getConnection()
        {
            $dsn = "mysql:dbname=".DB_NAME.";host=".DB_HOST;
            $conn = null;
            try
            {
                $conn = new PDO($dsn, DB_USER, DB_PASSWD);
            }
            catch(PDOException $e)
            {
                printf("Connection failure : %s\n", $e->getMessage());
                exit();
            }
        
            echo "Connection established";
            return $conn;
        }
    }

?>