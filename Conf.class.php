<?php

class Conf
{

    static private $databases = array(
        'hostname' => '127.0.0.1',
        'database' => 'employees',
        'login' => 'root',
        'password' => 'root'
    );
    static private $debug = true; 
    static public function getDebug() {
    	return self::$debug;
    }

    static public function getLogin()
    {

        return self::$databases['login'];
    }
    static public function getHostname()
    {
        return self::$databases['hostname'];
    }
    static public function getDatabase()
    {
        return self::$databases['database'];
    }

    static public function getPassword()
    {
        return self::$databases['password'];
    }
}
