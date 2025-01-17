<?
$sql ="SELECT a_views FROM a_data";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$a_views = $row['a_views']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/icon/ico.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo-1">
           <h1><a href="index.php">food<span>Recipes</span></a></h1>
            <li class="nav">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="Recipes.php">Recipes</a>
                <a href="contact.php" class="Active">Contact</a>
                <a href="LoginPAGE/login.php">Login</a>
                <a href="Regis.php" class="Runaway">Register</a>
            </li>
        </div>
    </header>
    <main>
        <div class="TextCon1">
            <h1>CONTACT US</h1>
            <pre>ขอบคุณที่สนใจใน FoodRecipes! เรายินดีที่จะตอบคำถาม และรับข้อเสนอแนะ 
หากคุณมีคำถามเกี่ยวกับสูตรอาหารหรือคุณต้องการติดต่อเราในเรื่องอื่น ๆ เราพร้อมให้บริการคุณ</pre>
        </div>
        <div class="from-contact">
            <h2>ลองบอกมาสี๊</h2>
            <form action="contact-pc.php" method="post">
                <input type="text" name="name" id="name-contact" placeholder="ชื่อ" class="name-contact" required>
                <input type="text" name="lastname" id="lastname-contact" placeholder="นามสกุล" class="lastname-contact" required>
                <br>
                <input type="email" name="email" id="email-contact" placeholder="อีเมลล์" class="email-contact" required>
                <br>
                <textarea name="message" id="message" placeholder="ข้อความ" class="message-contact"></textarea required>
                <br>
                <input type="submit" value="ส่ง" class="submit-contact">
            </form>
        </div>
        <div class="img-contact">
            <img src="img/.old/sdaf.png" alt="">
        </div>
    </main>

    <footer>

</footer>
</body>
</html>