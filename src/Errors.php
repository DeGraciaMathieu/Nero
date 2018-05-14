<?php

namespace DeGraciaMathieu\Nero;

class Errors {

    protected $executor;

    public function __construct()
    {
        $this->executor = new Executor;
    }

    /**
     * get a syntax error
     * @param  string $file
     * @param  integer $line
     * @param  string|null $parameter
     * @return exit
     */
    public function syntaxError($file, $line, $parameter = null)
    {
        $message = "<b>Parse error</b>: syntax error, unexpected '%s' (T_STRING) in <b>%s</b> on line <b>%d</b>";

        $this->executor->send($message, $parameter, $file, $line);
    }

    /** 
     * get a class not found error
     * @param  string $file
     * @param  integer $line
     * @param  string|null $parameter
     * @return exit
     */
    public function classNotFound($file, $line, $parameter = 'Exception')
    {
        $message = "<b>Fatal error</b>: Uncaught Error: Class '%s' not found in <b>%s</b>:<b>%d</b>";

        $this->executor->send($message, $parameter, $file, $line);
    }
}
