<?php

namespace DeGraciaMathieu\Nero;

class Executor {

    /**
     * handle the death
     * @param  string $message
     * @param  string $file
     * @param  integer $line
     * @return exit
     */
    public function send($message, $file, $line)
    {
        exit(sprintf($message, $file, $line));
    }
}
