<?php
class A
{
	// Выводит, функция какого класса была вызвана
	function Test() { echo "Test from A<br>"; }
	// Тестовая функция — просто переадресует на Test()
	function Call()
	{
		$this->Test();
	}
}

class B extends A
{
// Функция Test() для класса B
function Test() { echo "Test from B<br>"; }
}

function Show(A $a)
{
    $a->Test();
    $a->Call();
}

$a=new A();
$b=new B();
$a->Test(); // выводит "Test from A"
$a->Call(); // выводит "Test from A"
$b->Test(); // выводит "Test from B"
$b->Call(); // выводит "Test from B"
Show($a);
Show($b);
?>