<?php 
if (!isset($_POST['nama'])){
 echo '<script>alert ("isi formnya dulu ngab")</script>
<meta http-equiv="refresh" content="0; url=form_nilai.php">';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="style.css">
</head>
<body>
    
    <table class= "tabel" border= 1>
        <tr>
            <td>Nama</td>
            <td><?= $_POST['nama']?> </td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?= $_POST['nim']?> </td>
        <tr>
            <td>MATKUL</td>
            <td><?= $_POST['matkul']?> </td>
        </tr>
        <tr>
            <td>ROMBEL</td>
            <td><?= $_POST['rombel']?> </td>
        </tr>
        <tr>
            <td>NILAI</td>
            <td><?= $_POST['tugas']?> </td>
        </tr>
        <tr>
            <td>NILAI UTS</td>
            <td><?= $_POST['uts']?> </td>
        </tr>
        <tr>
            <td>NILAI UAS</td>
            <td><?= $_POST['uas']?> </td>
        </tr>
        <tr>
            <td>PREDIKAT</td>
            <td>
            <?php 
            $tugas= $_POST['tugas'] * (35/100);
            $uts= $_POST['uts'] * (30/100);
            $uas= $_POST['uas'] * (35/100);
            $total = $tugas + $uts + $uas;

            if ($total <= 35) {
                $pred = "E";
             }elseif ($total <= 55){ 
                $pred = "D";
            }elseif ($total <= 69) {
                $pred = "C";
            }elseif ($total <= 84){ 
                $pred = "B";
            }elseif ($total <= 100) {
                $pred = "A";
            }
            else {
                $pred ="tidak diketahui";
            }
            echo $pred;
            ?>        
        </td>
        </tr>
        <td>KETERANGAN</td>
            <td>
                <?php
                switch ($pred){
                    case 'A':
                        echo "Sangat Baik";
                        break;
                    case 'B':
                        echo "Biasa Aja";
                        break;
                    case 'C':
                        echo "Cukup";
                        break;
                    case 'D':
                        echo "Kurang";
                        break;
                    case 'E':
                        echo "Buruk";
                        break;
                    default : 
                    echo "Tidak diketahui";
                        break;
                }
                ?>
            </td>

    </table>
</body>
</html>