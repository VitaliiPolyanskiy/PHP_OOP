<?php
class Person { // определяем класс Личности
  private $first_name; // имя личности
  private $last_name; // фамилия личности

  function make_person($t,$a){
  // метод устанавливает
  // значения имени и фамилии объекта
    $this->first_name = $t;
    $this->last_name = $a;
  }
  function show_person(){
  // метод отображает информацию о личности
    echo ("<p>" . $this->first_name . " " .
      $this->last_name . "</p>");
  }
}
class Programmer extends Person{
    // определяем класс
    // Programmer, расширяющий Person
  private $langs = array ("PHP","ASP.NET","Java");
  function get_lang()
  {
  	return $this->langs;
  	}

    function set_lang($new_lang){
    // метод добавляет еще
    // один язык к списку известных
    $this->langs[] = $new_lang;
  }
}
?>

<?php
$progr = new Programmer;
$progr -> set_lang("Python");
    // методы, определенные для
    // класса Programmer
print_r ($progr->get_lang());
// методы, определенные для класса Person
$progr->make_person("Ivan","Ivanov");
$progr->show_person();
?>

<?php

class A
{
	private $aa;
	function __construct($aa)
	{
		print("<br>Конструктор A");
		$this->aa = $aa;
	}
	public function Show()
	{
		echo $this->aa;
	}
	function __destruct() 
	{
		print("<br>Деструктор A");
	}
}

class B extends A
{
	private $bb;
	function __construct($aa, $bb)
	{
		parent::__construct($aa);
		print("<br>Конструктор B");
		$this->bb = $bb;
	}
	public function Show()
	{
		parent::Show();
		echo $this->bb;
	}
	function __destruct() 
	{
		print("<br>Деструктор B");
		parent::__destruct();
	}
}

class C extends B
{
	private $cc;
	function __construct($aa, $bb, $cc)
	{
		parent::__construct($aa, $bb);
		print("<br>Конструктор C");
		$this->cc = $cc;
	}
	public function Show()
	{
		parent::Show();
		echo $this->cc;
	}
	function __destruct() 
	{
		print("<br>Деструктор C");
		parent::__destruct();
	}
}

?>
<?php
$obj1 = new A(10);
echo "<br />";
$obj1->Show();
echo "<br />";
$obj2 = new B(20,30);
echo "<br />";
$obj2->Show();
echo "<br />";
$obj3 = new C(40,50,60);
echo "<br />";
$obj3->Show();
echo "<br />";
?>