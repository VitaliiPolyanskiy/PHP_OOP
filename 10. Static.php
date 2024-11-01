<?php
 class Singleton {
     static private $instance = NULL;
     private $var = 10;
     const PI = 3.14;
     private function __construct() 
	 {
     }
	public function Show()
	{
		echo "<br>".self::PI;
		echo "<br>".$this->var;
	}
     static public function getInstance() 
	 {
         if (self::$instance == NULL) {
             self::$instance = new Singleton();
         }
         return self::$instance;
     }
}

  //$instance = new Singleton(); // ошибка: конструктор приватный
   $s1 = Singleton::getInstance();  // только один экземпляр
   $s2 = Singleton::getInstance();
   if ($s1 === $s2)
      echo "Один и тот же экземляр класса!<br />";
	echo  Singleton::PI;
	echo  $s1->Show();
?>