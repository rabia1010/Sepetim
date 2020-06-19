<?php 
require_once 'products.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Üyeliksiz Alışveriş Sepeti</title>
  </head>
  <body>
    <div class = "container">
        
        <h1> Ürünler</h1> <small class="badge badge-success"> Sepetinizde <?php echo count($_COOKIE['sepet'])?> ürün var..</small> <a href="sepet.php">Sepete Git</a>
        <hr>
        <div class="row">
          <?php
           foreach ($kurslar as $key) {?>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $key['resim'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title"><?php echo $key['ad'] ?></h5>
                <div align="right">
                  <h5 class="card-title"><?php echo $key['fiyat'] ?>₺</h5>
                <a href="islem.php?sepetEkle=1&id=<?php echo $key['id'] ?>&adet=3" class="btn btn-primary btn-sm">Sepete ekle</a>
              </div>
              </div>
            </div>
          </div>
          
                    
                    


        </div>




</div>
       
          
          
          

    
        
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>