<?php 
require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewRegistrationBtn'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $phone_number = trim($_POST['phone_number']);
    $date_of_birth = trim($_POST['date_of_birth']);
    $years_of_experience = trim($_POST['years_of_experience']);
    $certifications = trim($_POST['certifications']);

    if (!empty($username) && !empty($email)) {
        $query = insertIntoRegistration($pdo, $username, $email, $first_name, $last_name, $phone_number, $date_of_birth, $years_of_experience, $certifications);
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Insertion failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['editRegistrationBtn'])) {
    $user_id = $_GET['user_id'];
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $phone_number = trim($_POST['phone_number']);
    $date_of_birth = trim($_POST['date_of_birth']);
    $years_of_experience = trim($_POST['years_of_experience']);
    $certifications = trim($_POST['certifications']);

    if (!empty($user_id) && !empty($username) && !empty($email)) {
        $query = updateRegistration($pdo, $user_id, $username, $email, $first_name, $last_name, $phone_number, $date_of_birth, $years_of_experience, $certifications);
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['deleteRegistrationBtn'])) {
    $query = deleteRegistration($pdo, $_GET['user_id']);
    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Deletion failed";
    }
}
?>