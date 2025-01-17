<?php
// الإتصال بقاعدة البيانات
$conn = new mysqli("localhost", "u290663640_kw", "0~X7iuSJu#vt", "u290663640_kw");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



session_start();

// تحقق مما إذا كانت الجلسة موجودة أو إذا كانت الكوكيز تحتوي على بيانات تسجيل الدخول
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header("Location: login.php");
    exit();
}

// قم بتعيين الجلسة بناءً على الكوكيز إذا كانت الجلسة غير موجودة
if (isset($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKIE['username'];
}




// إضافة حدث جديد
if (isset($_POST['add'])) {
    $item = $_POST['item'];
    $url = $_POST['url'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $VIP = $_POST['VIP'];
    $Platinum = $_POST['Platinum'];
    $Gold = $_POST['Gold'];
    $Silver = $_POST['Silver'];
    $Bronze = $_POST['Bronze'];
    $description = $_POST['description'];
    $start_datetime = $_POST['start_datetime'];
    $end_datetime = $_POST['end_datetime'];

    // معالجة تحميل الصورة
    $image = $_FILES['image']['name'];
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

    $sql = "INSERT INTO events (item, url, name, location, image, VIP, Platinum, Gold, Silver, Bronze, description, start_datetime, end_datetime) VALUES ('$item', '$url', '$name', '$location', '$target_file', '$VIP', '$Platinum', '$Gold', '$Silver', '$Bronze', '$description', '$start_datetime', '$end_datetime')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// حذف حدث
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM events WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// تعديل حدث
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $item = $_POST['item'];
    $url = $_POST['url'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $VIP = $_POST['VIP'];
    $Platinum = $_POST['Platinum'];
    $Gold = $_POST['Gold'];
    $Silver = $_POST['Silver'];
    $Bronze = $_POST['Bronze'];
    $description = $_POST['description'];
    $start_datetime = $_POST['start_datetime'];
    $end_datetime = $_POST['end_datetime'];

    // معالجة تحميل الصورة إذا تم تقديم ملف جديد
    if ($_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    } else {
        $target_file = $_POST['current_image'];
    }

    $sql = "UPDATE events SET item='$item', url='$url', name='$name', location='$location', image='$target_file', VIP='$VIP', Platinum='$Platinum', Gold='$Gold', Silver='$Silver', Bronze='$Bronze', description='$description', start_datetime='$start_datetime', end_datetime='$end_datetime' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// جلب جميع الأحداث
$result = $conn->query("SELECT * FROM events");
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم في الأحداث</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>مرحبًا، <?php echo $_SESSION['username']; ?></h2>
    <a href="cont.php">تسجيل الخروج</a>
     <h2>لوحة اتوصل </h2>
    <form method="post" action="cont.php" enctype="multipart/form-data">
        <h4>تلفون</h4>
        <input type="text" name="te" value="<?php if (isset($_COOKIE['te'])) {echo $_COOKIE['te'];} ?>"placeholder="تلفون" required>
        <h4>انستجرام</h4>
        <input type="text" name="is" value="<?php if (isset($_COOKIE['is'])) {echo $_COOKIE['is'];} ?>"placeholder="انستجرام">
        <h4>اسم صفحت توصل</h4>
        <input type="text" name="ne" value="<?php if (isset($_COOKIE['ne'])) {echo $_COOKIE['ne'];} ?>"placeholder="اسم صفحت توصل">
        <h4>لوجو</h4>
        <input type="file" name="image" placeholder="لوجو">
        <h4>لوجو موقع</h4>
        <input type="file" name="ico" placeholder="لوجو موقع">
        <button type="submit" name="add">إضافة</button>
    </form>
   <h2>تغير العمله</h2>
    <form method="post" action="eg.php" enctype="multipart/form-data">
         <h4>توصل معنا</h4>
        <textarea type="text" name="de" value=""placeholder="توصل معنا"><?php if (isset($_COOKIE['de'])) {echo $_COOKIE['de'];} ?></textarea>
        <h4>عربي</h4>
        <input type="text" name="ar" value="<?php if (isset($_COOKIE['ar'])) {echo $_COOKIE['ar'];} ?>"placeholder="عربي" required>
        <h4>انجليزي</h4>
        <input type="text" name="en" value="<?php if (isset($_COOKIE['en'])) {echo $_COOKIE['en'];} ?>"placeholder="انجليزي">
        <button type="submit" name="add">إضافة</button>
    </form>
    <h2>إضافة حدث جديد</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="text" name="item" placeholder="العنصر" required>
        <input type="text" name="url" placeholder="الرابط">
        <input type="text" name="name" placeholder="الاسم">
        <input type="text" name="location" placeholder="الموقع">
        <input type="file" name="image" placeholder="الصورة">
        <input type="number" name="VIP" placeholder="VIP">
        <input type="number" name="Platinum" placeholder="Platinum">
        <input type="number" name="Gold" placeholder="Gold">
        <input type="number" name="Silver" placeholder="Silver">
        <input type="number" name="Bronze" placeholder="Bronze">
        <textarea name="description" placeholder="الوصف"></textarea>
        <input type="datetime-local" name="start_datetime" placeholder="تاريخ ووقت البدء">
        <input type="datetime-local" name="end_datetime" placeholder="تاريخ ووقت النهاية">
        <button type="submit" name="add">إضافة</button>
    </form>

    <h2>الأحداث الحالية</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>العنصر</th>
            <th>الرابط</th>
            <th>الاسم</th>
            <th>الموقع</th>
            <th>الصورة</th>
            <th>VIP</th>
            <th>Platinum</th>
            <th>Gold</th>
            <th>Silver</th>
            <th>Bronze</th>
            <th>الوصف</th>
            <th>تاريخ ووقت البدء</th>
            <th>تاريخ ووقت النهاية</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <form method="post" action="" enctype="multipart/form-data" style="display:inline;">
                <td><input type="text" name="item" value="<?php echo $row['item']; ?>" required></td>
                <td><input type="text" name="url" value="<?php echo $row['url']; ?>"></td>
                <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                <td><input type="text" name="location" value="<?php echo $row['location']; ?>"></td>
                <td>
                    <img src="<?php echo $row['image']; ?>" alt="image">
                    <input type="file" name="image">
                    <input type="hidden" name="current_image" value="<?php echo $row['image']; ?>">
                </td>
                <td><input type="number" name="VIP" value="<?php echo $row['VIP']; ?>"></td>
                <td><input type="number" name="Platinum" value="<?php echo $row['Platinum']; ?>"></td>
                <td><input type="number" name="Gold" value="<?php echo $row['Gold']; ?>"></td>
                <td><input type="number" name="Silver" value="<?php echo $row['Silver']; ?>"></td>
                <td><input type="number" name="Bronze" value="<?php echo $row['Bronze']; ?>"></td>
                <td><textarea name="description"><?php echo $row['description']; ?></textarea></td>
                <td><input type="datetime-local" name="start_datetime" value="<?php echo $row['start_datetime']; ?>"></td>
                <td><input type="datetime-local" name="end_datetime" value="<?php echo $row['end_datetime']; ?>"></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="update">تعديل</button>
                    <a href="?delete=<?php echo $row['id']; ?>">حذف</a>
                </td>
            </form>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
