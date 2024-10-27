<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Registration</title>
    <style>
        body {
            font-family: "Arial";
        }
        input {
            font-size: 1.5em;
            height: 50px;
            width: 200px;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Are you sure you want to delete this registration?</h1>
    <?php $getRegistrationById = getRegistrationByuser_id($pdo, $_GET['user_id']); ?>
    <form action="core/handleForm.php?user_id=<?php echo $_GET['user_id']; ?>" method="POST">
        <div class="registrationContainer" style="border-style: solid; font-family: 'Arial';">
            <p>Username: <?php echo htmlspecialchars($getRegistrationById['username']); ?></p>
			<p>Email: <?php echo htmlspecialchars($getRegistrationById['email']); ?></p>
            <p>First_Name: <?php echo htmlspecialchars($getRegistrationById['first_name']); ?></p>
            <p>Last_Name: <?php echo htmlspecialchars($getRegistrationById['last_name']); ?></p>
            <p>Phone Number: <?php echo htmlspecialchars($getRegistrationById['phone_number']); ?></p>
            <p>Date of Birth: <?php echo htmlspecialchars($getRegistrationById['date_of_birth']); ?></p>
            <p>Years of Experience: <?php echo htmlspecialchars($getRegistrationById['years_of_experience']); ?></p>
            <p>Certifications: <?php echo htmlspecialchars($getRegistrationById['certifications']); ?></p>
            <input type="submit" name="deleteRegistrationBtn" value="Delete">
        </div>
    </form>
</body>
</html>