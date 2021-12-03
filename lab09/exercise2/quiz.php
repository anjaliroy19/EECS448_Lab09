<?php
$correct = 0;
$responses = [$_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["q4"], $_POST["q5"]];
$answers = [31, "Fearless", "cat", "2017", "singer"];
$questions = ["How old is Taylor Swift?", "What is Taylor Swift's first album?", "What is Taylor Swift's favorite animal?", "What year was did Taylor Swift disappear from social ?", "Who is Taylor ?"];

for ($i=0; $i < count($responses); $i++) { 
	if ($responses[$i] == $answers[$i]) {
		$correct += 1;
	}

	echo "<p>Question " . ($i+1) . ": " . $questions[$i] . "<br>";
	echo "Your answer: " . $responses[$i] . "<br>";
	echo "Correct answer: " . $answers[$i] . "</p>";

}
echo "<p>You answered " . $correct . " questions correct. (Score: " . 100*$correct/count($responses) . "%)</p>"; 

?>
