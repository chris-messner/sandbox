<!doctype html>
<html lang="en">
<head>
	<title>Palindrome Validator</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<div class="container">
<h1>Palindrome Validator</h1>
<div>
A <b>palindrome</b> is a word, phrase, number, or other sequence of characters which
reads the same backward as forward, such as <i>madam</i> or <i>racecar</i>. Sentence-length 
palindromes may be written when allowances are made for adjustments to capital 
letters, punctuation, and word dividers, such as "A man, a plan, a canal, Panama!",
"Was it a car or a cat I saw?" or "No 'x' in Nixon".<br>
-- Wikipedia <a href="https://en.wikipedia.org/wiki/Palindrome">https://en.wikipedia.org/wiki/Palindrome</a>
</div><br><br>
<form method="POST">
Enter Palindrome:
<input type=text maxlen=500 name="palindrome">
<input type=submit><br>
<!-- Use only letters "a-z" (not case sensitive) and numbers "0-9" -->
</form><br>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$palindromeInput = strtolower(htmlspecialchars($_POST['palindrome'])); 
	$palindromeInput = preg_replace("/[^A-Za-z0-9]/","",$palindromeInput); 
	$palindromeMatch = strrev($palindromeInput);
	if (strlen($palindromeInput) < 2) {
		echo "<p>Sorry, you must enter two or more valid characters!</p>";
	} elseif ($palindromeInput == $palindromeMatch) {
		echo "<p>Excellent!  &quot;<b>".htmlspecialchars($_POST['palindrome'])."</b>&quot; is a valid palindrome!</p>";
	} else {
		echo "<p>Sorry, &quot;<b>".htmlspecialchars($_POST['palindrome'])."</b>&quot; is not a palindrome - please try again!</p>";
	}
}
?>
    <!-- Bootstrap js libraries and dependendies -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</div>
</body>
</html>
