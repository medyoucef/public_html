<?php
session_start();

// قم بإلغاء تعيين الجلسة
session_unset();
session_destroy();

// قم بحذف الكوكيز
setcookie('username', '', time() - 3600, "/");
setcookie('password', '', time() - 3600, "/");

// إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
header("Location: login.php");
exit();
?>
