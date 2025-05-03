<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>admin | W.phonecases</title>
    <style>
        *{font-family: 'poppins', sans-serif; }

        body{
         margin: 0;
         padding-top: 0;
         background-image: linear-gradient(0deg, #f3ece3 0%, #af8e8a 100%);
         background-repeat: no-repeat;
         background-size: cover;
         background-attachment: fixed;
         color:#f3ece3;
         color:#6b5a54;
     }

     .logo{
        margin-top:-100px;
        margin-bottom:-100px;
        padding:0;
        width: 400px;
        height: 400px;
     }

     .main{
        background-color:#91766e;
        width: 40%;
        border-radius:20px;
        box-shadow: 0 0 60px rgba(53, 43, 34,.4);
        padding-top:5px;
        padding-bottom:5px;
        margin-top:45px;
     }

     input{
        margin-bottom:10px;
        width: 60%;
        padding:5px;
        font-weight:bold;
        font-size:15px;
     }

     button{
        border:none;
        padding:10px;
        width: 40%;
        font-weight:bold;
        font-size:15px;
        cursor:pointer;
        background-color:#f3ece3;
        color:#6d5639;
        border-radius:20px;
     }

     .imageup{
        padding:10px;
        cursor:pointer;
        font-weight:bold;
        font-size:15px;
        background-color:#f3ece3;
        border-radius:20px;
     }

     a{
        text-decoration:none;
        font-size:20px;
        color:#fff;
        font-weight:500;
     }
     
     .labels{
        /* margin-bottom:20px; */
     }

     .labels label{
        display:block;
        margin-bottom:5px;
     }

     .labels input{
        padding:8px;
        text-align:left;
     }


    </style>
</head>
<body>
<?php

?>

   <center>
       <div class="main">
        <!-- البوست تذهب البيانات بشكل مخفي  -->
         <!-- ،ملف انسرت لادخال البيانات الى القاعده -->
          <!-- يعني ملف انسرت راح يكون مسؤول عن معالجه اضافه البيانات اللا القاعده -->
         <!-- enctype لازم ينكتب عشان تنرفع الصوره  -->
           <form action="insert.php" method="POST" enctype="multipart/form-data">
              <h2 style="color:#fff;">Admin page</h2>
              <img src="White Brown Minimalist Signature Photography Logo 1.png" alt="logo" class="logo">
              <!-- اسم المنتج -->
             <div class="labels">
             <label for="product_name" style="color:#fff; font-weight:500;">Product Name:</label>
              <input type="text" name="name">
              
              <!-- سطر جديد -->
              <br>
              <!-- سعر المنتج -->
              <label for="product_name" style="color:#fff ; font-weight:500;">Price:</label>
              <input type="text" name="price">
              
             </div>


              <input type="file" id="file" name="image" style=" display:none;"><br><br>
              <label for="file" class="imageup" style="color:#6d5639;">upload image</label><br><br>
              <!-- ارسال -->
              <button name='upload'>send</button>

              <br><br>
              <!-- عرض المنتجات -->
              <a href="homepage.php">homepage</a>
           </form>
       </div>
       <p style="color:#6d5639;">Edited by Walaa Alenzi</p>
   </center>
</body>
</html>