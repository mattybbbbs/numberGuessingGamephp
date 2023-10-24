<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm thinking of a number between 1 and 10. Try and guess. \n";

function guessNumber() {
  global $play_count;
  global $correct_guesses;
  global $guess_high;
  global $guess_low;

  $play_count++;

  $target_number = rand(1,10);

  echo "\n Take a guess.\n";

  $player_guess = readline(">> ");

 $player_guess = intval($player_guess);

  echo "\n Current game: $play_count\n";
  echo "\n The correct number: $target_number\n";
  echo "\n Your guess was: $player_guess\n";

  if($target_number===$player_guess){
    $correct_guesses++;
  } elseif($player_guess > $target_number){
    $guess_high++;
  } else {
    $guess_low++;
  }

}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();


$percentage_correct = ($correct_guesses / $play_count) * 100;
round($percentage_correct);

echo "You guessed correct $percentage_correct % of the time\n";

if($guess_high > $guess_low) {
  echo "\n When you guessed wrong, you tended to guess high.";
}
else if($guess_low > $guess_low) {
  echo "\n When you guessed wrong, you tended to guess low.";
}