<?php include 'database.php'; ?>
<?php
  $query = "SELECT * from questions";
  $results = $mysqli->query($query) or die($mysqli->error/__LINE__);
  $total = $results->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Quzzer</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
  <header>
    <div class="container">
      <h1>PHP Quizzer</h1>
    </div>
  </header>
  <main>
    <div class="container">
      <h2>Test Your PHP Knowledge</h2>
      <p>This is a multiple choice quiz to test your knowledge of PHP</p>
      <ul>
        <li><strong>Number of Questions: </strong><?php echo $total; ?></li>
        <li><strong>Type: </strong>Multiple Choice</li>
        <li><strong>Estimated Time: </strong><?php echo $total * .5 ;?> Minutes</li>
      </ul>
      <a href="question.php?n=1" class="start">Start Quiz</a>
    </div>
  </main>
  <footer>
    <div class="container">Copyright &copy; 2019, PHP Quizzer</div>
  </footer>
</body>
</html>
