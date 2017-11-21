<!--
# A palindrome is a word, phrase, number, or other sequence of characters which
# reads the same backward as forward, such as madam or racecar. Sentence-length 
# palindromes may be written when allowances are made for adjustments to capital 
# letters, punctuation, and word dividers, such as "A man, a plan, a canal, Panama!",
# "Was it a car or a cat I saw?" or "No 'x' in Nixon".
-->
<html>
<head><title>Palindrome Validator</title></head>
<body>
<h1>Palindrome Validator</h1>
<form method="POST">
Enter Palindrome:
<input type=text maxlen=500 name="palindrome">
<input type=submit><br>
Use only letters "a-z" (not case sensitive) and numbers "0-9"
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$palindromeInput = htmlspecialchars($_POST['palindrome']); 
	$palindromeInput = preg_replace("/[^A-Za-z0-9]/","",$palindromeInput); 
	$palindromeMatch = strrev($palindromeInput);
	if (strlen($palindromeInput) < 2) {
		echo "<p>You must enter two or more valid characters!</p>";
	} elseif ($palindromeInput == $palindromeMatch) {
		echo "<p>Excellent!  This is a palindrome: ".htmlspecialchars($_POST['palindrome'])."</p>";
	} else {
		echo "<p>Sorry, try again!</p>";
	}
}
?>
</body>
</html>
