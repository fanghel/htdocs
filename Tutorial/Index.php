<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Learning PHP</title>
  <script type="text/javascript">
    function askUser() {
      alert("Are you ready to learn PHP?");
    }
  </script>
</head>
<body onLoad="askUser()">
  <h1>Learning PHP</h1>
  <?php
    $student = 'Florin';
    $surname = 'Anghel';
    $forename = 'Florin';
  ?>
  <p>The student is <?= $student ?>.</p>
  <p>My name is <?= "$forename $surname" ?> and I'm a student.</p>
</body>
</html>
