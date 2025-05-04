<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | W.phonecases</title>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="homepage.css">
</head>
<body>


<!-- navbar -->
<div class="mother">
 <div class="navbar">
    
    <h4>W.phonecases</h4>
    <ul>
        <!-- a هنا زي الازرار تودينا للاقسام ونربطها ب id مع السيكشن -->
         <!-- مه الهاشتاق جدا مهم -->
          <!-- مالها داعي الصفحه الاولى هي الهوم  -->
        <li ><a href="#home" style="color: #fff; text-decoration: none;">Home</a></li>
        <li ><a href="#producets" style="color: #fff; text-decoration: none;">Producets</a></li>
        <li ><a href="#contact" style="color: #fff; text-decoration: none;">Contact</a></li>
    </ul>


    
 </div>
</div>


<h1 style="color:  #6d5639;">Welcome! <br><span style="color: #fff;">to my store</span> </h1>
<p style="text-shadow: 0 0 20px #6d5639; padding-top:2px; "> where style meets protection! Explore our premium collection of trendy, durable, and unique phone cases designed to keep your device safe while making a statement. </p>

<img src="White Brown Minimalist Signature Photography Logo 1.png" alt="logo" class="logo">


<section class="producets" id="producets">
  
    <h2 class="producetsh2" style="color: #fff; font-size: 87px;">Our  Producets</h2>
    <div class="cards">
            <div class="producets-cards">
            
                <img src="dior.jpg" alt="DIOR CASE">
                <h3>DIOR Phonecase</h3>
                <p>
                    <img src="Saudi_Riyal_Symbol.svg.png" alt="SA">
                    75 
                </p>
            </div>
            <div class="producets-cards">
                <img src="muimui-black.jpg" alt="muimui Phonecase">
                <h3>muimui Phonecase</h3>
                <p>
                    <img src="Saudi_Riyal_Symbol.svg.png" alt="SA">
                    75 
                </p>
            </div>
            <div class="producets-cards">
                <img src="tiger.jpg" alt="TIGER Phonecase">
                <h3>TIGER Phonecase</h3>
                <p>
                    <img src="Saudi_Riyal_Symbol.svg.png" alt="SA">
                    75 
                </p>
            
             </div>
          
  

      <?php
// الاتصال بقاعده البيانات
include 'db.php';

// استعلام sql لجلب المنتجات من جدول products باستخدام داله query لتنفيذ  الاستعلام 
$stmt = $pdo->query("SELECT * FROM products");
// استعملت while loop 
// وهي تكرر كل منتج يتم استرجاعه من قاعده البيانات 
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $name = $row['name'];
    $price = $row['price'];
    $image = $row['image'];
?>
    <!-- عرض المنتجات الجديده المُضافه من الادمن في الصفحه الرئيسيه -->
    
      <div class="producets-cards">
        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
        <h3><?php echo $name; ?></h3>
        <p >
             <img src="Saudi_Riyal_Symbol.svg.png" alt="SA">
             <?php echo $price; ?>
        </p>
      </div>
    
<?php
} 
?>




    </div>
</section>
  


<footer class="footer" id="contact">
    <div class="footer-pages">
        <h3>pages</h3>
        <ul>
            <li ><a href="#home" style="color: #fff; text-decoration: none;">Home</a></li>
            <li ><a href="#producets" style="color: #fff; text-decoration: none;">Producets</a></li>
            <li ><a href="#contact" style="color: #fff; text-decoration: none;">Contact</a></li>
        </ul>
    </div>
    <div class="contactus">
        <h3>Contact Us</h3>
        <p>Whatsapp:05xxxxxxxx</p>
        <p>Email:admin@gmail.com</p>
    </div>
    <div class="edited">
        <p>Edited By Walaa Alenzi</p>
    </div>
</footer>

</body>
</html>