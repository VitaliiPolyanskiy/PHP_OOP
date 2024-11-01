<?php

abstract class AbstractClass {

    /* Данный метод должен быть определён в производном классе */
    abstract public function getValue();

    /* Общий метод */
    public function show() {
      print $this->getValue();
    }

}

class ConcreteClass1 extends AbstractClass {

    public function getValue() {
      return "ConcreteClass1";
    }

}

class ConcreteClass2 extends AbstractClass {

    public function getValue() {
      return "ConcreteClass2";
    }

}
function Show(AbstractClass $a)
{
    echo "<br>".$a->getValue()."<br>";
}

$class1 = new ConcreteClass1();
$class1->show();
print "<br>";
$class2 = new ConcreteClass2();
$class2->show();

Show($class1);
Show($class2);
//$class3 = new AbstractClass();

?>