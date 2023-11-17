<?php

// function divide($dividend, $divisor) {
//   if($divisor == 0) {
//     throw new Exception(message: "Division by zero");
//   }
//   return $dividend / $divisor;
// }

// try {
//   echo divide( dividend:5, divisor:0);
// } catch (Exception $ex) {
//   $code = $ex->getCode();
//   $message = $ex->getMessage();
//   $file = $ex->getFile();
//   $line = $ex->getLine();
//   echo "Exception thrown in $file on line $line: [Code $code] $message";
// } finally {
//   echo "프로그램을 종료합니다.";
// }

// class Fruit {
//   public $name;
//   public $color;
//   public $weight;

//   function set_name($name) {
//     $this->name = $name;
//   }

//   protected function set_color($color) {
//     $this->color = $color;
//   }

//   private function set_weight($weight) {
//     $this->weight = $weight;
//   }
// }


// 상속

// $mango = new Fruit();
// $mango->set_name(name:"망고");
// // $mango->set_color(color:"노랑");
// // $mango->set_weight(weight:"300");

// class fruit {
//   public $color;
//   public $name;

//   public function __construct($name,$color) {
//     $this->name = $name;
//     $this->color = $color;

//   }

//   public function intro(){
//     echo "이 과일 이름은 {$this->name} 이고 색깔은 {$this->color} 입니다.";
//   }

// }

// class Mango extends Fruit {
//   public function message(){
//     echo "나는 망고입니다.";
//   }
// }


// $mango = new Mango("망고", "노랑색");
// // $mango->message();
// // $mango->intro();

// $f = new Fruit("토마토", "붉은색");
// $f->intro();


// 정적 프로퍼티 static

// class Car {
//   private static $count = 0;
//   private static $carList = [];
//   private $name;

//   public function __construct($name)
//   {
//     $this->name = $name;
//     self::$count = self::$count + 1;
//     array_push(self::$carList, $name);
//   }
//   public function message() {
//     echo "<p>" .$this->name. "가 생성되었습니다.</p>";
//     echo "<p>[생산번호: " .self::$count. "]</p>";
//   }

//   public static function getCarList(){
//     return self::$carList;
//   }
// }

// // 퍼블릭스태틱의경우 바로사용가능 인스턴트생성없이
// // echo Car::$count;

// $p1 = new Car(name: '볼보');
// $p1->message();

// $p2 = new Car(name: '아우디');
// $p2->message();

// $p3 = new Car(name: '페라리');
// $p3->message();

// $a = implode(',', Car::getCarList());

// echo "<p>". $a ."</p>";
// 
// PHP OPP 클래스 상수

class Base {
  const AGE = 22;
  public $mustOlderThan = 21;

  public static function display(){
    // echo $this->mustOlderThan;
    echo self::AGE;
  }
  
}



// Base::display();

//클래스상수는 인스턴트 생성없이 바로접근가능.
// echo Base::AGE;

// $base = new Base();
// echo $base->mustOlderThan;
?>

