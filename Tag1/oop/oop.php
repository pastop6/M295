<?php
declare(strict_types=1);

/**
 * ClassName
 */
class ClassName{

    private $var1;
    private $test1;
    
    /**
     * __construct
     *
     * @param  string $var1
     * @return void
     */
    public function __construct($var1){
        $this->var1 = $var1;
        echo "Classname->__construct() <br>";
        echo $this->var1."<br>";
    }
    
    /**
     * set_var1
     *
     * @param  string $var1
     * @return void
     */
    public function set_var1($var1){
        $this->var1 = $var1;
    }
    
    /**
     * get_var1
     *
     * @return void
     */
    public function get_var1(){
        return $this->var1;
    }

    public function __destruct(){
        echo "Classname->__destruct() <br>";
    }

	/**
	 * @return mixed
	 */
	public function getTest1() {
		return $this->test1;
	}
	
	/**
	 * @param mixed $test1 
	 * @return self
	 */
	public function setTest1($test1): self {
		$this->test1 = $test1;
		return $this;
	}
}

$app = new ClassName("test");
$app->set_var1("test2");
echo $app->get_var1()." <br>";




class Fahrzeug{
    public $raeder = 4;
    public $farbe = "rot";
    public $ps = 250;
    public $geschwindigkeit = 0;

    public function __construct(){
        echo "Fahrzeug->__construct() <br>";
    }

}

class Lastwagen extends Fahrzeug{
    public function __construct(){
        parent::__construct();
    }
}

abstract class DB{
    public static function getData(){
        echo "DB-> connect <br>";
    }
}

DB::getData();

interface iDB{
    public static function getData(){
        echo "iDB -> connect <br>";
    }
}

class DB2 implements iDB{
    public static function getData(){
        echo "DB2 -> connect <br>";
    }
}

?>