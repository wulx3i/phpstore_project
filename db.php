<?php

//  
// الاتصال بقاعده البيانات
$host = 'localhost';
$dbname= 'phpmysql_project';
$username= 'root';
$password = '';

// نطلب منه يجرب يتصل بقاعدة البيانات
try{
    $pdo = new PDO ("mysql:host=$host;dbname=$dbname",  $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // رسالة الخطأ (لو فيه اي خطأ في الاتصال في قاعده البيانات هي بتنبهنا)
} catch (PDOException $e){
    die ("Connection failed: " . $e->getMessage());
}
?>