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
        $message = "<b>Fatal error</b>: Uncaught Error: Class 'Exception' not found in <b>%s</b>:<b>%d</b>";

        $this->executor->send($message, $file, $line);
    }
}
