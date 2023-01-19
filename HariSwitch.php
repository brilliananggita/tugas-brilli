<form action="" method="POST">
    PROGRAM MENENTUKAN HARI MENGGUNAKAN PHP (SWITCH CASE) <br>
    <br>
    MASUKKAN ANGKA 0-6<br>
    ANGKA : <input type="text" name="nilai">
    <input type="submit" value="hasil">
  </form>
  
<?php ///syntaks switch & case 
  $day_number = $_POST["nilai"];
  switch ($day_number) {
      case 0:
          echo "Senin";
          break;
      case 1:
          echo "Selasa";
          break;
      case 2:
          echo "Rabu";
          break;
      case 3:
          echo "Kamis";
          break;
      case 4:
          echo "Jumat";
          break;
      case 5:
          echo "Sabtu";
          break;
      case 6:
            echo "Minggu";
            break;
      default:
          echo "Eror";
          break;
  }
///Brillian Anggita/07
?>