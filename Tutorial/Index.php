<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Learning PHP</title>
  <script type="text/javascript">
    // This code should be extracted in a different file.
    // It was added here just to keep things simple,
    // but it's not the recommended way of doing it.

    // The basic idea is that each language file should
    // contain ONLY that language:
    //   html files should contain ONLY html
    //   javascript files should contain ONLY javascript
    //   css files should contain ONLY css
    //   php files should contain ONLY php
    function askUser() {
      alert("Are you ready to learn PHP?");
    }
  </script>
</head>
<body onLoad="askUser()">
  <h1>Learning PHP</h1>
  <?php
    // This code should be extracted in a different file
    // and it should use some MVC framework like Laravel.
    // This is the best attempt to keep the code well
    // organized and simple to learn and follow.
    $student = 'Florin';
    $surname = 'Anghel';
    $forename = 'Florin';
  ?>
  <!--
    Notice how we use VERY SHORT php code to display just
    some php variables. You should never write more code
    in these areas.

    There are various tutorials that just echo the html code:
    that's EXTREMELY DUMB and you should avoid doing it.
    Normally, you should keep the html code clean. When you
    need access to some data from php you should use these
    short tags to get it.
    The standard way to do these things is to use an MVC
    framework, BUT in order to keep things as simple as
    possible during learning we'll use this approach.
  -->
  <p>The student is <?= $student ?>.</p>
  <p>My name is <?= "$forename $surname" ?> and I'm a student.</p>

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
?>

  <p>The name of my friend is <?= $nume ?></p>

<?php
  $x = 1;
  echo ($x ? 'Does not get printed.' : 'Does.') ;
  echo '<br><br>';
  $a = null;
  $b = 'Scrie ce vrei tu';
  echo $a ?? '  A is not set'; // prints 'a is not set'
  echo '<br>';
  echo $b ?? '  b is not set'; // prints 'Does print'
  ?>

<?php if ($x): ?>
<p>This is displayed if the test is truthy.<p>
<?php else: ?>
<p>This is displayed otherwise.<p>
<?php endif; ?>

<?php
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
  <div id="top">

  <h1>Chocolate curry</h1>
  
  <p class="intro">This is my recipe for making curry purely with chocolate</p>
  
  <p class="intro">Mmm mm mmmmm</p>
  
  </div>



  

</body>
</html>
