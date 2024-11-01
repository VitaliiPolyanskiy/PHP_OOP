<?php
interface IDisplayable
{
  function display();
}
class Person implements IDisplayable{
   private $name;
   private $surname;
   private $age;

   function __construct($name, $surname, $age)
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

  function display(){
    $str = "<br>Имя: ".$this->name."<br>"."Фамилия: ".$this->surname.
      "<br>Возраст: " . $this->age;
    echo $str;
  }

  function __destruct() {
    print("<br>Деструктор Person");
  }
}

class Student extends Person
{
	public $gpa;
	function __construct($name, $surname, $age, $gpa){
	   parent::__construct($name, $surname, $age);
		$this->gpa = $gpa;
   }

  function make_student($name, $surname, $age, $gpa){
	$this->make_person($name, $surname, $age);
	$this->gpa = $gpa;
  }

  function display(){
    parent::display();
    $str = "<br>Средний балл: ".$this->gpa;
    echo $str;
  }

  function __destruct() {
	  parent::__destruct();
    print("<br>Деструктор Student");
  }
}
?>
<?php

$p = new Person("Петр","Петров",40);
$p->display();
print "<br />";

if (get_class($p) == 'Person')
	echo '$p - объект класса Person';

$st = new Student("Иван","Иванов",30, 11.4);
echo $st->display();

print "<br />";
if ($st instanceof Person)
	echo '$st - объект класса Person либо его наследника';
print "<br />";
if ($st instanceof Student)
	echo '$st - объект класса Student либо его наследника';

print "<br />";
foreach (get_class_methods('Student') as $key=>$value) {
	echo "<b>$key</b> => $value()<br>";
}

print "<br />";
$vars = get_class_vars('Student');
print_r($vars);
print "<br />";
echo "Parent class: ".get_parent_class('Student');

print "<br />";
if (is_subclass_of($st, 'Person'))
	echo 'Student является производным от класса Person';

print "<br />";
if (in_array('IDisplayable', class_implements($p)))
	echo 'Person реализует интерфейс IDisplayable';
?>