<?php
//Regular
//if (preg_match("/\bweb\b/i", "PHP is a web scripting language")) {
//    echo "Success";
//}else {
//    echo "Not value";
//}

//preg_match('@^(?:http://)?([^/]+)@i',
//            "http://www.php.net/index.php",
//                    $matches);
//$host = $matches[1];
//preg_match('/[^.]+\.[^.]+$/', $host, $matches);
//echo "Domen: ". $matches[0] ."<br>";
//phpinfo();
$file_path = ROOT . "/log/test.php";
$file = fopen( $file_path, "r") or die("Не удалось");
echo fread($file, filesize($file_path));
fclose($file);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>

    <div class="content" style="text-align: center;">
        <?php foreach ($newsList as $value) : ?>
        <div class="post">
            <h2 class="title"><a href="#"></a><?php  echo $value['title']; ?></a></h2>
            <p class="byline">28-08-2018</p>
            <div class="entry">
                <p>Some body text from N<?php echo $value['id']; ?></p>
            </div>
            <div class="date"><?php echo $value['date']; ?></div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="footer">&copy; 2018 year.</div>
</body>
</html>
