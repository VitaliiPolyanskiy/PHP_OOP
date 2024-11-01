<?php
class A
{
  private $x;

  function setX($x) {
    $this->x = $x;
  }

  function getX() {
    return $this->x;
  }
}

class B
{
	  private $y;

	  function setY(A $y) {
	    $this->y = $y;
	  }

	  function getY() {
	    return $this->y;
	  }

	  function __clone()
	  {
	  	$this->y = clone $this->y;
	  }
}

$a1 = new A();
$a1->setX(7);

$b1 = new B();
$b1->setY($a1);

$b2 = clone $b1;
$b1->getY()->setX(10);

if($b1->getY() === $b2->getY())
print("Две ссылки на один и тот же объект");
else
print("Различные ссылки");
echo "<br / >";
if($b1->getY()->getX() == $b2->getY()->getX())
	print("Идентичные копии");
else
	print("Различные копии");
?>
