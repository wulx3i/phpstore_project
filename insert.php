<?php
include 'db.php';
// <!-- يعني ملف انسرت راح يكون مسؤول عن معالجه اضافه البيانات اللا القاعده -->

// اذا تم الضغط على زر 
if(isset($_POST['upload'])){
    // اول حقل في ملف الادمن
    $NAME = $_POST['name'];

    // ثاني حقل في ملف الادمن
    $PRICE = $_POST['price'];
// اسمه في الملف الادمن فايل واستعملنا معه فايل$
    $IMAGE = $_FILES['image'];
// تحديد مكان الصوره
    $image_location= $_FILES['image']['tmp_name'];
// اسم الصوره
    $image_name  = $_FILES ['image']['name'];

    // رفع الصوره
    // داخل هذا المجلد احفظ لي اسم الصوره 
    $image_up = "uploads/" . $image_name;

    // يعني دخلي الى الجدور برودكتس القيم التاليه 
    $insert = "INSERT INTO products(name, price, image) VALUES(:name, :price, :image)";
    $stmt = $pdo->prepare($insert);
    $stmt->execute([
    ':name' => $NAME,
    ':price' => $PRICE,
    ':image' => $image_up
]);
    // اذا رفعت الصوره الى المجلد اب لود 
    if(move_uploaded_file($image_location, "uploads/" . $image_name)){
        echo "<script>alert('Image uploaded successfully!')</script>";
    }else{
        echo "<script>alert('There's somthing wrong!')</script>";
    }
    // وديني لصفحه الهوم
    header('location: homepage.php');
    exit; 
}

?>