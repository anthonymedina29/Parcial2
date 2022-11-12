<?php
class articulos_models{
    private $id;
    private $articulos;
    private $descripcion;
    private $precio;
    private $precioventa;
    private $cantidad;

    public function __construct($id){

        $this->id = $id;


    }
    public function getId(){
        return $this->id;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getprecio(){
        return $this->precio;
    }
    public function getprecio_venta(){
        return $this->precio_venta;
    }
    public function getcantidad(){
        return $this->cantidad;
    }


    public static function Mostrar(){
        
        $articulos[]=["id"=>"1","articulos"=>"RINES 17","descripcion"=>"Rines 17 Offset 5 huecos","precio"=> 560,"precioventa"=>seg::itbmss(560),"cantidad"=>rand(1,12)];
        $articulos[]=["id"=>"2","articulos"=>"LUCES LED","descripcion"=>"Luces led h2, h3, h4, h7","precio"=> 27,"precioventa"=>seg::itbmss(27),"cantidad"=>rand(1,25)];
        $articulos[]=["id"=>"3","articulos"=>"GATO HIDRAULICO","descripcion"=>"Gato hidraulico de 4 TON ","precio"=> 40,"precioventa"=>seg::itbmss(40),"cantidad"=>rand(1,17)];
        $articulos[]=["id"=>"4","articulos"=>"POMO PALANCA DE CAMBIOS","descripcion"=>"Palanca de cambios tipo KATANA","precio"=> 123,"precioventa"=>seg::itbmss(123),"cantidad"=>rand(1,33)];
        $articulos[]=["id"=>"5","articulos"=>"ALFOMBRAS","descripcion"=>"Alfombras para carro","precio"=> 22,"precioventa"=>seg::itbmss(22),"cantidad"=>rand(1,10)];
       
        return $articulos;
        
    }
    public function Buscar(){

        $articulos[]=["id"=>"1","articulos"=>"RINES 17","descripcion"=>"Rines 17 Offset 5 huecos","precio"=> 560,"precioventa"=>seg::itbmss(560),"cantidad"=>rand(1,12)];
        $articulos[]=["id"=>"2","articulos"=>"LUCES LED","descripcion"=>"Luces led h2, h3, h4, h7","precio"=> 27,"precioventa"=>seg::itbmss(27),"cantidad"=>rand(1,25)];
        $articulos[]=["id"=>"3","articulos"=>"GATO HIDRAULICO","descripcion"=>"Gato hidraulico de 4 TON ","precio"=> 40,"precioventa"=>seg::itbmss(40),"cantidad"=>rand(1,17)];
        $articulos[]=["id"=>"4","articulos"=>"POMO PALANCA DE CAMBIOS","descripcion"=>"Palanca de cambios tipo KATANA","precio"=> 123,"precioventa"=>seg::itbmss(123),"cantidad"=>rand(1,33)];
        $articulos[]=["id"=>"5","articulos"=>"ALFOMBRAS","descripcion"=>"Alfombras para carro","precio"=> 22,"precioventa"=>seg::itbmss(22),"cantidad"=>rand(1,10)];
       foreach($articulos as $t){
            
            if($this->id == $t["id"])
                return $t;
        }
        return [];
        
    }
}

?>