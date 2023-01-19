<form action="" method="POST"> 
    PROGRAM CEK KELULUSAN <br>
    Nilai Ujian : <input type="text" name="nilai"> 
    <input type="submit" value="Hasil">
</form>
<?php ///php if elseif 
 if ($_POST)
 {
    $nilai = $_POST['nilai'];
    if ($nilai >=90)
    {
        $grade = "A+";
        $keterangan = "LULUS";
    }
    elseif ($nilai >= 80)
     {
        $grade = "A";
        $keterangan = "Lulus";
    }
    elseif ($nilai >= 70)
     {
        $grade = "B";
        $keterangan = "Lulus";
    }
    elseif ($nilai >= 60)
     {
        $grade = "C";
        $keterangan = "Lulus";
    }
    else
    {
        $grade = "D";
        $keterangan = "TIDAK LULUS";
    }
//hasil output an
    echo "Hasil Kelulusan";
    echo "br";
    echo " Niali : " . $nilai;
    echo "<br>" ;
    echo "Keterangan : " . $keterangan;
    echo "<br>";
    echo "Indeks Prestasi : " . $grade;

}
//Brillian Anggita/07
?>

