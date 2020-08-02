<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kategori Ekle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <h2>Yeni Kategori Ekle</h2>

    <?php

    if ($_POST) {

      echo \Config\Services::validation()->listErrors(); 

    }

    ?>

    <form method="POST" action="<?php echo base_url('kategoriler-ekle'); ?>">
      <div class="form-group">
        <label for="usr">Kategori Adı:</label>
        <input type="text" name="title" class="form-control" id="usr" placeholder="Kategori Adını Giriniz">
      </div>

      <div class="form-group">
       <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Ekle</button>
       <a href="<?php echo base_url('kategoriler'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Vazgeç</a>
     </div>
   </form>
 </div>

</body>
</html>
