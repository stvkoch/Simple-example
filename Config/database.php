<?php
return array(
    'dsn' => 'mysql:dbname=lellolProcess;host=localhost',
    'username' => 'root',
    'password' => '',

    'handler' => function(){
        static $_handler = null;

        if(is_null($_handler)){
            try {
                $_handler = new \PDO(
                    \Simple\Config\PHP::get('database', 'dsn'),
                    \Simple\Config\PHP::get('database', 'username'),
                    \Simple\Config\PHP::get('database', 'password')
                );
            } catch (\PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }
        return $_handler;
    }
);