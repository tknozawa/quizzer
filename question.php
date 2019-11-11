<?php include 'database.php'; ?>
<?php
  $number = (int) $_GET['n'];

  // get question
  $query = "SELECT * FROM questions WHERE question_number = $number";
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $question = $result->fetch_assoc();
  // get chice
  $query = "SELECT * FROM choices WHERE question_number = $number";
  $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

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
       <div class="current">Question 1 of 5</div>
       <p class="question">
         <?php echo $question['text']; ?>
       </p>
       <form method="post" action="process.php">
         <ul class="choices">
           <?php while($rows = $choices->fetch_assoc()) :?>
             <li><input name="choice" type="radio" value=<?php echo $rows['id']; ?> /><?php echo $rows['text']; ?></li>
           <?php endwhile; ?>
         </ul>
         <input type="submit" value="Submit" />

       </form>

    </div>
  </main>
  <footer>
    <div class="container">Copyright &copy; 2019, PHP Quizzer</div>
  </footer>
</body>
</html>
