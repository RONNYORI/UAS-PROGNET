<?php
session_start();
include('../functions/adminFunctions.php');  // ← pastikan include ini ada
require_once '../config/class-product.php';

$product = new Product();

if (isset($_POST['add_product_btn'])) {
    $result = $product->create($_POST, $_FILES);

    if ($result['status']) {
        redirectAdmin("../products.php", $result['message']);  // success
    } else {
        redirectAdmin("../add-product.php", $result['message']);  // error
    }
}

else if (isset($_POST['update_product_btn'])) {
    $id = (int)($_POST['product_id'] ?? 0);
    $result = $product->update($id, $_POST, $_FILES);

    if ($result['status']) {
        redirectAdmin("../products.php", $result['message']);
    } else {
        redirectAdmin("../edit-product.php?id=$id", $result['message']);
    }
}

else if (isset($_POST['delete_product_btn'])) {
    $id = (int)($_POST['product_id'] ?? 0);
    $result = $product->delete($id);

    redirectAdmin("../products.php", $result['message']);
}

else {
    redirectAdmin("../add-product.php", "Akses tidak valid");
}