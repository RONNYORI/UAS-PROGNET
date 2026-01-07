<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include('../functions/adminFunctions.php');  // ← include ini wajib untuk akses redirectAdmin()
require_once '../config/class-category.php';

$category = new Category();

if (isset($_POST['add_category_btn'])) {
    $result = $category->create($_POST, $_FILES);

    if ($result['status']) {
        redirectAdmin("../category.php", $result['message']);
    } else {
        redirectAdmin("../add-category.php", $result['message']);
    }
}

else if (isset($_POST['update_category_btn'])) {
    $id = (int)($_POST['category_id'] ?? 0);
    $result = $category->update($id, $_POST, $_FILES);

    if ($result['status']) {
        redirectAdmin("../category.php", $result['message']);
    } else {
        redirectAdmin("../edit-category.php?id=$id", $result['message']);
    }
}

else if (isset($_POST['delete_category_btn'])) {
    $id = (int)($_POST['category_id'] ?? 0);
    $result = $category->delete($id);

    redirectAdmin("../category.php", $result['message']);
}

else {
    redirectAdmin("../add-category.php", "Akses tidak valid!");
}