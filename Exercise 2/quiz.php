<?php
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];
    $answer4 = $_POST['answer4'];
    $answer5 = $_POST['answer5'];
    $score = 0;
    if ($answer1 == "A")
    { $score++; }
    if ($answer2 == "B")
    { $score++; }
    if ($answer3 == "C")
    { $score++; }
    if ($answer4 == "D")
    { $score++; }
    if ($answer5 == "C")
    { $score++; }
    echo "1. How many siblings does Selena Gomez have?";
    if ($answer1 == "A")
    {
      echo "Your Answer was 0. <br>";
    }
    elseif ($answer1 == "B")
    {
      echo "Your answer was 1. <br>";
    }
    elseif ($answer1 == "C")
    {
      echo "Your answer was 2. <br>";
    }
    elseif ($answer1 == "D")
    {
      echo "Your answer was 3. <br>";
    }
    echo "The correct answer is 0! <br><br>";
    echo "2. What is Selena Gomez's favorite color?<br>";
    if ($answer2 == "A")
    {
      echo "Your answer was pink. <br>";
    }
    elseif ($answer2 == "B")
    {
      echo "Your answer was green. <br>";
    }
    elseif ($answer2 == "C")
    {
      echo "Your answer was purple. <br>";
    }
    elseif ($answer2 == "D")
    {
      echo "Your answer was yellow. <br>";
    }
    echo "The correct answer is green! <br><br>";
    echo "3. When is Selena Gomez's birthday?<br>";
    if ($answer3 == "A")
    {
      echo "Your answer was October 1st. <br>";
    }
    elseif ($answer3 == "B")
    {
      echo "Your answer was April 28th. <br>";
    }
    elseif ($answer3 == "C")
    {
      echo "Your answer was July 22nd. <br>";
    }
    elseif ($answer3 == "D")
    {
      echo "Your answer was August 16th. <br>";
    }
    echo "The correct answer is July 22nd! <br><br>";
    echo "4. What is Selena Gomez's middle name?<br>";
    if ($answer4 == "A")
    {
      echo "Your answer was Susan. <br>";
    }
    elseif ($answer4 == "B")
    {
      echo "Your answer was Polly. <br>";
    }
    elseif ($answer4 == "C")
    {
      echo "Your answer was Cynthia. <br>";
    }
    elseif ($answer4 == "D")
    {
      echo "Your answer was Marie. <br>";
    }
    echo "The correct answer is Marie! <br><br>";
    echo "5. Selena Gomez's favorite part of a pizza is... <br>";
    if ($answer5 == "A")
    {
      echo "Your answer was cheese. <br>";
    }
    elseif ($answer5 == "B")
    {
      echo "Your answer was toppings. <br>";
    }
    elseif ($answer5 == "C")
    {
      echo "Your answer was crust. <br>";
    }
    elseif ($answer5 == "D")
    {
      echo "Your answer was all of the above. <br>";
    }
    echo "The correct answer is crust! <br><br>";
    if($score == 0)
    {
      echo "You got a 0%";
    }
    elseif($score == 1)
    {
      echo "You got a 20%";
    }
    elseif($score == 2)
    {
      echo "You got a 40%";
    }
    elseif($score == 3)
    {
      echo "You got a 60%";
    }
    elseif($score == 4)
    {
      echo "You got an 80%";
    }
    elseif($score == 5)
    {
      echo "You got a 100%";
    }
?>
