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

        $line = isset($arguments[1]) ? $arguments[1] : self::getRandomLine($file);

        $parameter = isset($arguments[2]) ? $arguments[2] : null;

        call_user_func_array([new Errors, $name], [$file, $line, $parameter]);
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
    protected static function getRandomLine($path)
    {
        $numberMax = 200;

        if (file_exists($path)) {
            $numberMax = count(file($path));
        }

        return rand(1, $numberMax);
    }   
}
