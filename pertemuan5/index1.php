<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssform.css">

    <title>form submission</title>

</head>
<body>
    <div class="continer">
    <h2>selamat datang di perpustakaan STT-NF</h2>
    <p>silahkan isi buku tamu dibawah ini</p>
    <hr>
  

    <form method='post' action ='kunjungan.php'>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">NAMA</label> 
        <div class="col-8">
        <input id="nama" name="nama" placeholder="masukan nama anda" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">EMAIL</label> 
        <div class="col-8">
        <input id="email" name="email" placeholder="masukan email anda" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="keperluan" class="col-4 col-form-label">KEPERLUAN</label> 
        <div class="col-8">
        <textarea id="keperluan" name="keperluan" cols="40" rows="5" class="form-control" required="required"></textarea>
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>

    </div>
</body>
</html>