<?php

class Person {
   private $name;
   private $surname;
   private $age;


   function __construct($name="Дмитрий", $surname="Сидоров", $age=10)
   {
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
  }

  function make_person($name, $surname, $age){
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
  }

  function show_person(){
    $str = "<br>Имя: ".$this->name."<br>"."Фамилия: ".$this->surname.
      "<br>Возраст: " . $this->age;
    echo $str;
  }

  function __destruct() {
    print("<br>Деструктор");
  }
}

function Test()
{
	$p = new Person("Иван", "Иванов", 40);
	$p->show_person();
	print "<br />";
	var_dump($p);
	return $p;
}

?>
<?php
$p = new Person();
$p->show_person();
Test()->show_person();
$p3 = Test();
$p3->show_person();
print "<br />";
print_r($p3);

$p2 = new Person("Петр","Петров",40);
$p2->show_person();
print "<br />";
var_dump($p2);

?>