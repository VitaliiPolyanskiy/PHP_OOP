<?php
  class BaseClass {
    public function test() {
        echo "Вызван метод BaseClass::test()<br>";
    }
    /*final*/ public function moreTesting() {
        echo "Вызван метод BaseClass::moreTesting()<br>";
    }
}

class ChildClass extends BaseClass {
    public function moreTesting() {
        echo "Вызван метод ChildClass::moreTesting()<br>";
    }
}
// Выполнение заканчивается фатальной ошибкой:
// Cannot override final method BaseClass::moreTesting()
// (Метод BaseClass::moretesting() не может быть переопределён)

// После объявления класса final он не может быть унаследован.
// Следующий пример вызовет ошибку:
final class FinalClass {
}

/*
class DerivedClass extends FinalClass {
}
*/

$obj = new ChildClass();
$obj->moreTesting();

?>