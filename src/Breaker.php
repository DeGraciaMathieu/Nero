<?php

namespace DeGraciaMathieu\Nero;

class Breaker {

    /**
     * Destroy your application
     * @param  string $name
     * @param  mixed $arguments
     * @return exit
     */
    public static function __callStatic($name, $arguments)
    {
        $file = isset($arguments[0]) ? $arguments[0] : self::getFilePath();

        $line = isset($arguments[1]) ? $arguments[1] : self::getLine($file);

        call_user_func_array([new Errors, $name], [$file, $line]);
    }

    /**
     * get the path of the calling page
     * @return string
     */
    protected static function getFilePath()
    {
        $backtrace = debug_backtrace();

        return $backtrace[1]['file'];
    }

    /**
     * random number
     * @param string $path
     * @return integer
     */
    protected static function getLine($path)
    {
        return rand(1, count(file($path)));
    }    
}
