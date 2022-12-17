<html>
<head>
    <title>elseif</title>
</head>
<body>
    <h2>Penggunaan Kontrol Else If</h2>
    <form>
        <?php
        $nilai=55;
        echo("Nilai $nilai");
        if($nilai>=85)
        {
            echo("Grade A");
        }elseif(($nilai>=75)&&($nilai<85))
        {
            echo("Grade B");
        }elseif(($nilai>=65)&&($nilai<75))
        {
            echo("Grade C");
        }elseif(($nilai>=50)&&($nilai<65))
        {
            echo("Grade D");
        }elseif($nilai>=50)
        {
            echo("Grade E");
        }
        ?>
    </form>
</body>
</html>