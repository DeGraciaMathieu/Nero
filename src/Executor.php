<?php

namespace DeGraciaMathieu\Nero;

class Executor {

    /**
     * handle the death
     * @param  string|null $message
     * @param  string $parameter
     * @param  string $file
     * @param  integer $line
     * @return exit
     */
    public function send($message, $parameter, $file, $line)
    {
        exit(sprintf($message, $parameter, $file, $line));
    }
}
