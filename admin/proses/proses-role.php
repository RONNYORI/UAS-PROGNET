<?php
session_start();
include('../functions/adminFunctions.php');  // ← wajib untuk redirectAdmin()
require_once '../config/class-useradmin.php';

$adminObj = new UserAdmin();

if (isset($_POST['update_role'])) {
    $id_user = (int)($_POST['id_user'] ?? 0);
    $new_role = (int)($_POST['new_role'] ?? -1);

    if ($id_user <= 0 || $new_role < 0) {
        redirectAdmin("../role.php", "Data tidak valid");
    } else {
        $result = $adminObj->updateUserRole($id_user, $new_role);
        redirectAdmin("../role.php", $result['message']);
    }
}

// Jika akses langsung (tidak ada POST)
redirectAdmin("../role.php", "Akses tidak valid");