<!DOCTYPE html>
<html>
<body>
 
<h2>Password Generator </h2>
 
<form method='POST' action='index.php'>
    Enter number of words: <input type='text' name='numWords'><br>
    Include Number?: <input type="checkbox" name="number" value="True" /><br>
    Include Symbol?: <input type="checkbox" name="symbol" value="True" /><br>
    Uppercase first ?: <input type="checkbox" name="caps" value="True" /><br>
 
    <input type='submit' value='Generate Password!'><br>
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") 
  include 'p2.php' ;
 
?>
 

 
</body>
</html>	
