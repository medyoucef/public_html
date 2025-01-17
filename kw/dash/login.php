<?php
session_start();

if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    // إذا كانت بيانات تسجيل الدخول موجودة في الكوكيز، قم بتسجيل الدخول تلقائيًا
    $_SESSION['username'] = $_COOKIE['username'];
    header("Location: /dash/index.php");
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // تحقق من بيانات تسجيل الدخول (يمكنك تغيير القيم لتناسب متطلباتك)
    if ($username === 'admin' && $password === 'password') {
        // قم بتخزين بيانات تسجيل الدخول في الكوكيز
        setcookie('username', $username, time() + (86400 * 30), "/"); // 30 يوم
        setcookie('password', $password, time() + (86400 * 30), "/"); // 30 يوم
        
        // قم بتخزين البيانات في الجلسة
        $_SESSION['username'] = $username;
        header("Location: /dash/index.php");
        exit();
    } else {
        $error = "اسم المستخدم أو كلمة المرور غير صحيحة";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>تسجيل الدخول</h2>
    <form method="post" action="">
        <input type="text" name="username" placeholder="اسم المستخدم" required>
        <input type="password" name="password" placeholder="كلمة المرور" required>
        <button type="submit" name="login">تسجيل الدخول</button>
    </form>
    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
