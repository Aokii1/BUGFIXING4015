<!DOCTYPE html>
<html>
    <title> PHP-Timbangan </title>

    <body>
        <form action="" method="POST"> <!-- KESALAHAN PANGGIL FAIL -->
        Masukkan berat anda <input type="text" name="nilai" value="0" /> <!-- KESALAHAN PADA "NILAI" --> 
        <input type="submit" value="Hasil"/>
        </form>

        <?php 
        if ($_POST['nilai'] >= 80) //RALAT SEMI COLON
        {
            $result = "Anda Berat"; 
        }
        else
        {
            $result = "Berat Anda Adalah Normal";
        }
        ?> <!-- RALAT KESALAHAN PENUTUP -->      
        Mesej Untuk Anda : 
        <?php
        echo "$result";
        ?>
    </body>
</html>