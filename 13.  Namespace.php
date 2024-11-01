<?php 
		namespace mynamespace;
        class Person 
		{
		   private $name;
		   private $surname;
		   private $age;

		  function make_person($t, $a, $d)
		  {
			$this->name = $t;
			$this->surname = $a;
			$this->age = $d;
		  }

		  function show_person(){
			$str = "<br>Имя: ".$this->name."<br>"."Фамилия: ".$this->surname.
			  "<br>Возраст: " . $this->age;
			echo "mynamespace".$str."<br>";
		  }
		}
		
		$p = new Person();
		$p->make_person("Иван", "Иванов", 25);
		$p->show_person();

		namespace mynsp;
        class Person 
		{
		   private $name;
		   private $surname;
		   private $age;

		  function make_person($t, $a, $d)
		  {
			$this->name = $t;
			$this->surname = $a;
			$this->age = $d;
		  }

		  function show_person()
		  {
			$str = "<br>Имя: ".$this->name."<br>"."Фамилия: ".$this->surname.
			  "<br>Возраст: " . $this->age;
			echo "mynsp".$str."<br>";
		  }
		}
		
		$p = new Person();
		$p->make_person("Иван", "Иванов", 25);
		$p->show_person();
		
		$p = new \mynamespace\Person();
		$p->make_person("Иван", "Иванов", 25);
		$p->show_person();
		
		
		use mynamespace\Person as anotherPerson;
		$p = new anotherPerson();
		$p->make_person("Иван", "Иванов", 25);
		$p->show_person();

        ?>