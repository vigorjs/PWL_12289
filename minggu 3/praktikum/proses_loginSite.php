<!DOCTYPE html>
<html lang="en">
<!-- A11.2019.12289 - Virgo Fajar Pamungkas -->


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menampilkan login</title>
</head>

<body>
    <?php
        if (isset($_POST['login'])) {
            $nama=$_POST['username'];
            $passwordnya=$_POST['password'];

            if ($nama=="virgo" and $passwordnya=="virgo") {
                echo "Welcome back, Mr. ".$nama; echo "<br>";
            }
            else{
                echo "Hello, guest! <br>";
                echo "Welcome to this site, Mr./Mrs. ".$nama."~";
            }
        }
    
    ?>
</body>

</html>