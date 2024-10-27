<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Developer Registration</title>
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
    <h3>Welcome to the Cloud Developer Registration System. Input your details here to register</h3>
    <form action="core/handleForm.php" method="POST">
        <p><label for="username">Username</label> <input type="text" name="username" required></p>
        <p><label for="email">Email</label> <input type="email" name="email" required></p>
        <p><label for="first_name">First Name</label> <input type="text" name="first_name"></p>
        <p><label for="last_name">Last Name</label> <input type="text" name="last_name"></p>
        <p><label for="phone_number">Phone Number</label> <input type="text" name="phone_number"></p>
        <p><label for="date_of_birth">Date of Birth</label> <input type="text" name="date_of_birth"></p>
        <p><label for="years_of_experience">Years of Experience</label> <input type="number" name="years_of_experience"></p>
        <p><label for="certifications">Certifications</label> <input type="text" name="certifications"></p>
        <p><input type="submit" name="insertNewRegistrationBtn" value="Submit"></p>
    </form>

    <table style="width:100%; margin-top: 50px;">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Date of Birth</th>
            <th>Years of Experience</th>
            <th>Certifications</th>
            <th>Action</th>
        </tr>

        <?php $seeAllRegistrations = seeAllRegistrations($pdo); ?>
        <?php foreach ($seeAllRegistrations as $row) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['user_id']); ?></td>
            <td><?php echo htmlspecialchars($row['username']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['first_name']); ?></td>
            <td><?php echo htmlspecialchars($row['last_name']); ?></td>
            <td><?php echo htmlspecialchars($row['phone_number']); ?></td>
            <td><?php echo htmlspecialchars($row['date_of_birth']); ?></td>
            <td><?php echo htmlspecialchars($row['years_of_experience']); ?></td>
            <td><?php echo htmlspecialchars($row['certifications']); ?></td>
            <td>
                <a href="edit.php?user_id=<?php echo $row['user_id']; ?>">Edit</a>
                <a href="delete.php?user_id=<?php echo $row['user_id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>