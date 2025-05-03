<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login | W.phonecases</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", "sans-serif";
        }

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('page.jpg') no-repeat;
            background-size: cover;
            /* backdrop-filter: opacity (50%%); */
            background-position: center;
            
        }

        .home{
            width: 420px;
            background: transparent;
            border: 2px solid rgba(255,  255, 255,0.2);
            backdrop-filter: blur(20px) ;
            box-shadow: 0 0 10px rgba(0,0,0,.2);
            color: #fff;
            border-radius: 10px;
            padding: 30px 40px;
        }

        .home h1{
            font-size: 36px;
            text-align: center;
        }

        .home .input-box{
            position: relative;
            width: 100%;
            height: 50px;
            background: transparent;
            margin: 30px 0;
        }

        .input-box input{
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255,  255, 255,0.2);
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
            padding:20px 45px 20px 20px ;
        }

        .input-box input::placeholder{
            color: #fff;
        }

        .input-box i{
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }

        .home .remember-forget{
            display: flex;
            justify-content: space-between;
            font-size: 14.5px;
            margin: -15px 0 15px;
        }

        .remember-forget label input{
            accent-color: #fff;
            margin-right: 3px;
        }

        .remember-forget a{
            color: #fff;
            text-decoration: none;
        }

        .remember-forget a:hover{
            text-decoration: underline;

        }

        .home .btn {
            width: 100%;
            height: 45px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
            cursor: pointer;
            font-weight: 600;
            color: #91766e;
            transition: .7s;
        }

        .btn:hover{
            color:#91766e;
            background:#f3ece3;
            box-shadow: 0 0 30px rgba(255, 255, 255, 0.5);
            height: 48px;
        }

        .home .register{
            font-size: 14.5px;
            text-align: center;
            margin: 20px 0px 15px;
        }

        .register p a{
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }

        .register p a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
// نبدأ الجلسه لتخزين معلومات المستخدم
session_start();
// نتصل بالملف الاساس اللي فيه الاتصال بقاعده البيانات
include 'db.php';

// للتأكد من ان الصفحه استقبلت بيانات من نموذج تسجيل الدخول
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];


    // هنا نستعمل اسم المستخدم للبحث في القاعده
    $click = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $click->execute(['username' => $username]);
    $user = $click->fetch(PDO::FETCH_ASSOC);
    


    // اذا كلمه المرور صحيحه
    // بدوووون تشفير
    if ($user && $password ===  $user['password']) {

    
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        

        // هنا التوجه للصفحه حسب المُسجل 
        if ($user['role'] === 'admin') {
            header('Location: admin.php');
            exit;
        } else {
            header('Location: homepage.php');
            exit;
        }
    }
}

?>
<div class="home">
    <!-- هنا الاكشن يعني راح نرسل البيانات لنفس الصفحه اللي فيها php عشان يعالج البيانات "Email or password is incorrect! -->
        <form action="loginpage.php" method="POST">
            <h1>Login</h1>

            <!--  -->
            <div class="input-box">
                <!-- name ->مهم هو اللي ناخذه ونربط فيه بالphp -->
                <input type="text" name="username" placeholder="username" required>
                <i class='bx bxs-user'></i>
            </div>


            <!--  -->
            <div class="input-box">
                <!-- name ->مهم هو اللي ناخذه ونربط فيه بالphp -->
                <input type="password" name="password" placeholder="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>


            <button type="submit" class="btn" >Login</button>
            
            <!-- صفحه اخرى للتسجيل الجديد -->
            <div class="register">
                <p>Don't have an account? <a href="Registerpage.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>