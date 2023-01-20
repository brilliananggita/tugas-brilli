<!DOCTYPE html>
<html>
    <body>
        <h2>Selamat Datang <br>
    Semoga Harimu Menyenangkan</h2>
    <b>Ini adalah Gabungan PHP dan Javascript</b>
    <br>
    <p id="demo"> PHP Dasar</p>

    <button type="button" onclick="myFunction"()>Coba Klik</button>

    <script type="text/Javascript">
    function myFunction () {
        <?php
        $str= "Ini Hanya Contoh";
        echo "decument.getElementById ('demo').innerHTML = '$str'";
        ?>
    }
    </script>
    </body>
</html>