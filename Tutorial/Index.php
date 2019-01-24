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
    require_once 'model.php';
    require_once 'controller.php';
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
  <p>The student is <?= $student->surname ?>.</p>
  <p>My name is <?= "$student->forename $student->surname" ?> and I'm a student.</p>

  <div id="top">
      <h1>Chocolate curry</h1>
      <p class="intro">This is my recipe for making curry purely with chocolate</p>
      <p class="intro">Mmm mm mmmmm</p>
  </div>
</body>
</html>
