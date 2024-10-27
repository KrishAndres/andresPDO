<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Registration</title>
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
    <?php $getRegistrationById = getRegistrationByuser_id($pdo, $_GET['user_id']); ?>
    <form action="core/handleForm.php?user_id=<?php echo $_GET['user_id']; ?>" method="POST">
        <p>
            <label for="username">Username</label> 
            <input type="text" name="username" value="<?php echo htmlspecialchars($getRegistrationById['username']); ?>">
        </p>
        <p>
            <label for="email">Email</label> 
            <input type="email" name="email" value="<?php echo htmlspecialchars($getRegistrationById['email']); ?>">
        </p>
        <p>
            <label for="first_name">First_Name</label>
            <input type="text" name="first_name" value="<?php echo htmlspecialchars($getRegistrationById['first_name']); ?>">
        </p>
        <p>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="<?php echo htmlspecialchars($getRegistrationById['last_name']); ?>">
        </p>
        <p>
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" value="<?php echo htmlspecialchars($getRegistrationById['phone_number']); ?>">
        </p>
        <p>
            <label for="date_of_birth">Date of Birth</label>
            <input type="text" name="date_of_birth" value="<?php echo htmlspecialchars($getRegistrationById['date_of_birth']); ?>">
        </p>
        <p>
            <label for="years_of_experience">Years of Experience</label>
            <input type="number" name="years_of_experience" value="<?php echo htmlspecialchars($getRegistrationById['years_of_experience']); ?>">
        </p>
        <p>
            <label for="certifications">Certifications</label>
            <input type="text" name="certifications" value="<?php echo htmlspecialchars($getRegistrationById['certifications']); ?>">
        </p>
        <p>
            <input type="submit" name="editRegistrationBtn" value="Update">
        </p>
    </form>
</body>
</html>