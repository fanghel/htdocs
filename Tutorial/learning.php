<?php 
  $alfa = 12.5;
  $n = 2;
  echo $n++ ."\n";
  echo $n."\n";
  echo ++$n ;
  $sgl_quotes = 'String';
  $dbl_quotes = "This is a $sgl_quotes.";
  echo $dbl_quotes;
  $apples = "I have {$n} apples";
  echo $apples;
  $oranges = "I have ${n} oranges to eat.";
  echo $oranges;
  $money = "I have $${n} in the bank.";
  echo $money;
  echo 'This string ' . 'is concatenated.'. "\n";

  define ("pi" , "3.14");
  echo 'Valoarea lui Pi este ' . pi ."\n";

  $array = ['One' => 1, 'Two' => 2];
  echo $array['One'] ."\n";
  $array1 = ['alfa' , 'beta' , 'gama'];
  echo $array1[1];

  $x = 1;
  $y = 2;
  $x = $y;
  $z = &$y;
  echo $x; // => 2
  echo $z; // => 2
  $z = 7;
  echo $x; // => 2
  echo $y; // => 0

  var_dump($z);
  print_r($array);
  print_r($array1);

  echo 'Hello';
  echo 1010 ."\n";

  $a = 100;
  $b = 1000;
  echo $a <=> $a; // 0 since they are equal
  echo $a <=> $b; // -1 since $a < $b
  echo $b <=> $a ."\n"; // 1 since $b > $a 

  $integer = 58;
  $string = strval($integer);
  echo $string;
  var_dump($string);

  $nume = 'Jane';

  $x = 1;
  echo ($x ? 'Does not get printed.' : 'Does.') ;
  echo '<br><br>';
  $a = null;
  $b = 'Scrie ce vrei tu';
  echo $a ?? '  A is not set'; // prints 'a is not set'
  echo '<br>';
  echo $b ?? '  b is not set'; // prints 'Does print'


  $wheels = ['bicycle' => 2, 'car' => 4];

  // Foreach loops can iterate over arrays
  foreach ($wheels as $vehicle => $wheel_count) {
    echo "A $vehicle has $wheel_count wheels.";
    echo "\n";
  }
  class Aritmetica {
     var $x = 7;
     var $y = 3;
     function Suma() {
        return $this -> x + $this -> y;
     }
     function Produs() { 
        return $this -> x * $this -> y;
     } 
  }   
  $rez = new Aritmetica;
  $rez -> x = 12;
  $rez -> y = 10;
  echo "<br>";
  echo $rez -> Suma();
  echo "<br>";
  echo $rez -> Produs();
  $rez1 = new Aritmetica;
  echo "<br>";
  echo $rez1 -> Suma();
  echo "<br>";
  echo $rez1 -> Produs();
?>
