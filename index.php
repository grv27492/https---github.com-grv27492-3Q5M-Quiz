<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>3Q5M Quiz</title>
</head>
<body>
    <h2>Welcome to 3Q5M Quiz</h2>
    <p>A weekly quiz to promote continuous learning and team alignment</p>
    <form action="submit.php" method="post">
        <p>1. What is the purpose of 3Q5M?</p>
        <input type="radio" name="q1" value="Learning"> Learning<br>
        <input type="radio" name="q1" value="Entertainment"> Entertainment<br>
        <input type="radio" name="q1" value="Survey"> Survey<br>

        <p>2. Which tool is commonly used in technical operations?</p>
        <input type="radio" name="q2" value="Tool A"> Tool A<br>
        <input type="radio" name="q2" value="Tool B"> Tool B<br>
        <input type="radio" name="q2" value="Tool C"> Tool C<br>

        <p>3. What is a typical ticket resolution scenario?</p>
        <input type="radio" name="q3" value="Scenario A"> Scenario A<br>
        <input type="radio" name="q3" value="Scenario B"> Scenario B<br>
        <input type="radio" name="q3" value="Scenario C"> Scenario C<br>

        <br><input type="submit" value="Submit">
    </form>
</body>
</html>
