<!DOCTYPE html>
<!-- A11.2019.12289 - Virgo Fajar Pamungkas -->
<html lang="en">
<!-- untuk form2 pemanggilan tag php berada di luar file main -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form dan proses beda file(proses_input02.php)</title>
</head>

<body>
<!--
        proses yang terjadi akan diletakkan
        di file yang beda yaitu proses_input02.php .
-->
    <form action="proses_input02.php" method="post" name="formulir">
        Nama anda : <input type="text" name="nama" id=""><br>

        <!-- element value="" akan memunculkan tulisan ketika file dijalankan -->
        <input type="submit" value="submit" name="nama_submit">
    
    </form>
</body>

</html>