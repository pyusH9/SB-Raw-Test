<?php
session_start();
require 'db.php';

if($_SERVER['REQUEST_METHOD']==='POST' && isset($_FILES['id_doc'], $_FILES['selfie'])){
    $user_id = $_SESSION['user_id'];
    $id_path = 'uploads/' . uniqid() . '_' . $_FILES['id_doc']['name'];
    $selfie_path = 'uploads/' . uniqid() . '_' . $_FILES['selfie']['name'];

    move_uploaded_file($_FILES['id_doc']['tmp_name'], $id_path);
    move_uploaded_file($_FILES['selfie']['tmp_name'], $selfie_path);

    $stmt = $pdo->prepare("INSERT INTO kyc_documents (user_id,id_doc_path,selfie_path) VALUES (?,?,?)");
    $stmt->execute([$user_id, $id_path, $selfie_path]);
    echo json_encode(['status'=>'success']);
}
?>
