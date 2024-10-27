
<?php 

require_once 'dbConfig.php';

function insertIntoRegistration($pdo, $username, $email, $first_name, $last_name, $phone_number, $date_of_birth, $years_of_experience, $certifications) {
    $sql = "INSERT INTO cloud_user_accounts (username, email, first_name, last_name, phone_number, date_of_birth, years_of_experience, certifications) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$username, $email, $first_name, $last_name, $phone_number, $date_of_birth, $years_of_experience, $certifications]);
    if ($executeQuery) {
        return true;    
    }
}

function seeAllRegistrations($pdo) {
    $sql = "SELECT * FROM cloud_user_accounts";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
}

function getRegistrationByuser_id($pdo, $user_id) {
    $sql = "SELECT * FROM cloud_user_accounts WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$user_id])) {
        return $stmt->fetch();
    }
}

function updateRegistration($pdo, $user_id, $username, $email, $first_name, $last_name, $phone_number, $date_of_birth, $years_of_experience, $certifications) {
    $sql = "UPDATE cloud_user_accounts SET username = ?, email = ?, first_name = ?, last_name = ?, phone_number = ?, date_of_birth = ?, years_of_experience = ?, certifications = ? WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$username, $email, $first_name, $last_name, $phone_number, $date_of_birth, $years_of_experience, $certifications, $user_id]);
    if ($executeQuery) {
        return true;
    }
}

function deleteRegistration($pdo, $user_id) {
    $sql = "DELETE FROM cloud_user_accounts WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$user_id]);
    if ($executeQuery) {
        return true;
    }
}

?>