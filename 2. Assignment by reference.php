<?php
class A {
  private $x;

  function setX($x) {
    $this->x = $x;
  }

  function getX() {
    return $this->x;
  }
}

$o1 = new A();
$o1->setX(4);
$o2 = $o1;
if($o1 === $o2)
print("Обе переменные ссылаются на один и тот же объект!");
echo "<br / >";
$o2 = clone $o1;
if($o1 !== $o2)
print("Переменные ссылаются на разные объекты!");
echo "<br / >";
if($o1 == $o2)
print("Две идентичные копии!");
echo "<br / >";
$o1->setX(5);
if($o1 != $o2)
print("Копии отличаются!");
?>
