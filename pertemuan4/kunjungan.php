<?php 
    require_once ('bukutamu.php');
    session_start();

    if (!isset($_SESSION['bukutamu'])){
        $_SESSION ['bukutamu'] =[];}

    if (isset($_POST ['submit'])){
        $bukutamu = new bukutamu ();
        $bukutamu->timestamp = date('Y-m-d H:i:s');
        $bukutamu->fullname = $_POST ['nama'];
        $bukutamu->email = $_POST['email'];
        $bukutamu->massage = $_POST['keperluan'];

        array_push ($_SESSION ['bukutamu'], $bukutamu);
       }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$bukutamu</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">

    <h4>Daftar Kunjungan</h4>
    <table border= "1px" class="tabel">
        <thead>
            <tr>
                <th>timestamp</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Massage</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION ['bukutamu'] as $buku): ?>
            <tr>
            <td><?=htmlspecialchars($buku ->timestamp) ?></td>
            <td><?=htmlspecialchars($buku ->fullname) ?></td>
            <td><?=htmlspecialchars($buku ->email) ?></td>
            <td><?=htmlspecialchars($buku ->massage) ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>
</body>
</html>