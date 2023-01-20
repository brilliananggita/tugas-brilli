<!DOCTYPE html>
<html>
<body>
<head>
    <style>
        h2{
            color:white;
            background-color:red;
            padding:5px;
        }
        p{
            color:blue;
        }
    </style>
</head>
<h2>Ini merupakan contoh <br>
Penggabungan CSS, HTML, dan Javascript</h2>
<br>

<p id="demo">Contoh</p>

<button type="button" onclick="myFunction()">Coba Klik</button>
<script tipe="text/Javascript">
    function myFunction () {
        <?php 
        $str= "Ini Paragraf dengan variabel PHP di dalam Javascript";
        echo "document.getElementById('demo').innerHTML = '$str';";
        ?>
    }
</script>
</body>
</html>