<?php
class usuario{
    private $usuario;
    private $password;
    public function __construct($usuario,$password,$salt){

        $this->usuario = $usuario;
        $this->password = $password;
        $this->salt = $salt;

    }

    public function validar_usuario(){
        
        $tabla[]=["usuario"=>"amedina2998","password"=>"b390df3b1ecc64f5b15552a63c5853ef5de6b372","salt"=>"ehmsCDUEB"];
        $tabla[]=["usuario"=>"medina2998","password"=>"anthony123","salt"=>"anthony123"];
        
        foreach($tabla as $t){
            $pass = sha1($this->password.$t["salt"]);
            if($this->usuario == $t["usuario"] && $pass == $t["password"])
                return $t;
        }
        return [];
        
    }
}

?>