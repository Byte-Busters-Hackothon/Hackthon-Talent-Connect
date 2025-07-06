<?php include('includes/db.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_name = $_POST['name'];
    $student_email = $_POST['email'];
    $opportunity_id = $_POST['opportunity_id'];

    $sql = "INSERT INTO applications (name, email, opportunity_id)
          VALUES ('$student_name', '$student_email', '$opportunity_id')";

    if ($conn->query($sql)) {
        echo "Application Submitted Successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
$opportunity_id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Apply for Opportunity</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Apply Now</h1>
    <form method="post" action="apply.php">
        <input type="hidden" name="opportunity_id" value="<?php echo $opportunity_id; ?>">
        <label>Name</label><input type="text" name="name" required><br>
        <label>Email</label><input type="email" name="email" required><br>
        <button type="submit">Submit Application</button>
    </form>
</body>

</html>