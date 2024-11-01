<?php
class A {
  private $x;

  public function public_A() {
    print("Это открытый метод<br>");
  }

  protected function protected_A() {
    $this->private_A(); //Всё правильно, мы можем вызывать закрытые методы, потому что мы находимся в том же классе
    print("Это защищённый метод<br>");
  }

  private function private_A() {
    $this->x = 3;
    print("Это закрытый метод<br>");
  }
}

class B extends A {
  public function display() {
    $this->protected_A();
    $this->public_A();
    // $this->private_A();  // Неправильно! В базовом классе метод закрыт
  }
}

$x = new A();
$x->public_A();
//$x->protected_A();  //Неправильно, защищённые методы могут вызываться только из того же класса или его производных классов
//$x->private_A();    //Неправильно, закрытые методы могут быть вызваны только в классе, где они были объявлены

$x2 = new B();
$x2->display();
?>
