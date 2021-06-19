<?php 

class Preprocess_model {

    protected $virtual_path, $server_path, $dir_root;

    public function __construct()
    {
        $this->virtual_path   = substr($_SERVER['SCRIPT_NAME'], 0, strrpos($_SERVER['SCRIPT_NAME'], '/install/')+1);
        if (empty($server_path)) $server_path = $_SERVER['PATH_TRANSLATED'];
        if(empty($this->server_path)){
            $this->server_path    = $_SERVER['SCRIPT_FILENAME'];
            return $server_path    = str_replace(array('\\','//'), '/', $server_path);
        }
        $this->dir_root       = substr($server_path, 0, strrpos($server_path, '/install/')+1);
    }

}