<?php

namespace DeGraciaMathieu\Nero;

class Errors {

    protected $executor;

    public function __construct()
    {
        $this->executor = new Executor;
    }

    /**
     * get a parse error
     * @param  string $file
     * @param  integer $line
     * @return exit
     */
    public function syntax($file, $line)
    {
        $message = "<b>Parse error</b>: syntax error, unexpected '' (T_STRING) in <b>%s</b> on line <b>%d</b>";

        $this->executor->send($message, $file, $line);
    }

    /** 
     * get a FatalErrorException
     * @param  string $file
     * @param  integer $line
     * @return exit
     */
    public function exception($file, $line)
    {
        $message = "<b>exception</b> 'FatalErrorException' with message 'syntax error, unexpected '' (T_STRING)' in %s:%d";

        $this->executor->send($message, $file, $line);
    }
}