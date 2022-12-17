<html>
<head>
    <title>Fungsi : String</title>
</head>
<body>
    <h2>Fungsi : String substr()</h2>
    <?php
    $string="Penggunaan Web PHP";
    $word=substr($string, 16,3);
    echo("\"$string\"<br>");
    echo("Hasil substr (15,3) adalah $word");
    ?>
</body>
</html>