  <?php $durum = session()->getFlashdata("durum"); ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Kategoriler</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>


    <?php if(@$durum['type']=="yes") { ?>
      <div class="col-md-12 alert alert-success col-md-12">
        <?php echo $durum['message']; ?>
      </div>
    <?php } ?>


    <?php if(@$durum['type']=="no") { ?>
      <div class="col-md-12 alert alert-success col-md-12">
        <?php echo $durum['message']; ?>
      </div>
    <?php } ?>


    <div class="container">
      <h2>Kategori Listesi  <a href="<?php echo base_url('kategoriler-ekleform'); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a></h2>
      <br><br>
      <table class="table text-center">
        <thead class="text-center">
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Kategori Adı</th>
            <th class="text-center">İşlemler</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($kategoriler as $kategori) { ?>
            <tr>
              <td><?php echo $kategori['id']; ?></td>
              <td><?php echo $kategori['title']; ?></td>

              <td>
                <a href='<?php echo base_url("kategoriler-guncelleform/{$kategori['id']}"); ?>' class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Güncelle</a>


                <button type="button" class="btn btn-danger btn-sm isDelete" data-url='<?php echo base_url("kategoriler-sil/{$kategori['id']}"); ?>'><i class="fa fa-times"></i> Sil</button>

              </td>
            </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>

    <script>
      $(".isDelete").click(function(){

        var data_url = $(this).data("url");
        var result = confirm("Kayıt Silinecektir. Onaylıyor Musunuz?");

        if (result==true) {

          window.location.href=data_url;

        }

      });

    </script>

  </body>
  </html>
