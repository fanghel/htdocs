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
</body>
</html>
