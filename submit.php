<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['username'];
$q1 = $_POST['q1'] ?? 'No answer';
$q2 = $_POST['q2'] ?? 'No answer';
$q3 = $_POST['q3'] ?? 'No answer';
?>

<!DOCTYPE html>
<html>
<head>
    <title>3Q5M Submission</title>
</head>
<body>
    <h2>Thank you for your submission, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>Your answers:</p>
    <ul>
        <li>Q1: <?php echo htmlspecialchars($q1); ?></li>
        <li>Q2: <?php echo htmlspecialchars($q2); ?></li>
        <li>Q3: <?php echo htmlspecialchars($q3); ?></li>
    </ul>
</body>
</html>
