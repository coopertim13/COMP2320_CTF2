<?php
class CurlController
{
    public function index($router)
    {
        return $router->view('index');
    }

    public function execute($router)
    {
        $host = (isset($_POST['host'])) ? $_POST['host'] : 'http://localhost/';

        if (substr($host, 0, 4) === 'http') { 
            $safeHost = escapeshellcmd($host);
        } else {
            $safeHost = 'http://localhost/';
        }

        $curl = new CommandModel($safeHost);
        return json_encode([ 'message' => $curl->exec() ]);
    }
}