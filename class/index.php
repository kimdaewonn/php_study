<?php

// class Fruit {
//   // Properties
//   public $name;
//   public $color;

//   // Methods
//   public function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
//   function set_color($color) {
//     $this->color = $color;
//   }
//   function get_color() {
//     return $this->color;
//   }
// }


// $apple = new Fruit();
// $banana = new Fruit();
// $apple->set_name(name:'Apple');
// $banana->set_name(name:'Banana');

// // echo $apple->get_name();
// // echo "<br>";
// // echo $banana->get_name();

// echo $banana->name;

// class Fruit {
//   public $name;
//   public $color;

//   // 생성자 constructor
//   function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }

//   function get_name() {
//     return $this->name;
//   }

//   function get_color() {
//     return $this->color;
//   }
// }

// $apple = new Fruit( name:"사과",color:"빨강");
// $banana = new Fruit( name:"바나나",color:"노랑");

// echo "이 과일의 이름은 ". $apple->get_name();
// echo "이고 색깔은 ". $apple->get_color();
// echo "입니다.<br>";

// echo "이 과일의 이름은 ". $banana->get_name();
// echo "이고 색깔은 ". $banana->get_color();
// echo "입니다.<br>";

// 소멸자
// class Car {
//   public $name; // 자동차 이름
//   public $color; // 자동차 색상

//   function __construct($name,$color)
//   {
//     $this->name = $name;
//     $this->color = $color;

//     echo "<p>자동차가 생산되었습니다.</p>";
//     echo "<p>이름 : $this->name ";
//     echo "색상 : $this->color </p>";
//   }

//   function __destruct()
//   {
//     echo "<p> 자동차가 폐차가 되었씁니다.</p>";
//     echo "<p>자동차등록말소사실증명서가 발급되었습니다.</p>";
//   }
// }

// $volvo = new Car(name: "볼보", color:"빨강");

// unset($volvo);

// echo "<p>프로그램 실행중</p>";


?>