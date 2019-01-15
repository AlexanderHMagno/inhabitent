<?php class Person {
   public $name;
   public $age;
   public $height;
   public function bark() {
     return 'Hi!';
   }
   public function walk() {
      return 'Happy Person :)';
   }
}?>


<?php 

$person_1 = new person();
$person_1->name = 'Rex';
$person_1->age = 30;
$person_1->height = 1.70;
echo $person_1->bark();

?>