<?php
interface IDisplayable
{
  function display();
}

interface IPrintable
{
  function doprint();
}

class A
{

}

class test extends A implements IDisplayable, IPrintable
{
	private $a;
	function  __construct($a)
	{
	    $this->a = $a;
	}

	function display()
	{
	    echo $this->a."<br />";
	}

	function doprint()
	{
	    echo $this->a."<br />";
	}
}

function f1(IDisplayable $ob)
{
	$ob->display();
}

function f2(IPrintable $ob)
{
	$ob->doprint();
}

$obj = new test("PHP");
f1($obj);
f2($obj);

?>
