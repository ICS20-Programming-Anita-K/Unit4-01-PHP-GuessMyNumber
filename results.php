<?php
// This function displays a message when the user guesses a number
	// get user input from textfields
	$number = $_POST['number'];

  // declare constants
  define (MIN, 1);
  define (MAX, 6);

  $correct = rand(MIN,MAX);

		// if the user guesses the right number, display "You are correct!"
	if ($number == $correct) {
		echo "You are correct!";
	} 
	// otherwise, if the user guesses the wrong number, display "That is incorrect! The correct answer is  "	
  else if ($num != $correct) {
	  echo "You are incorrect! The correct answer is " . $correct . ".";
  }
?>