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

    <script src="https://kit.fontawesome.com/2d01a3f02f.js" crossorigin="anonymous"></script>

    <title>Üyeliksiz Alışveriş Sepeti</title>
  </head>
  <body>
    <div class = "container">
        
        <h1> Sepet <a href="index.php"> <button class="btn btn-warning btn-sm">Geri dön</button></a></h1>

       

        
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Resim</th>
      <th scope="col">Ad</th>
      <th scope="col">Birim Fiyat</th>
      <th scope="col">Adet</th>
      <th scope="col">Toplam</th>
      <th></th>

  



   </tr>
  </thead>
  <tbody>
      
   <form action="islem.php" method="GET">
    <?php 
      
    
    $say=1;

      if (count($_COOKIE['sepet'])>0){
    

       foreach ($_COOKIE['sepet'] as $key => $value) {
        $total +=$kurslar[$key]['fiyat']*$value;

      ?> 
    
      <tr>
      <th scope="row"><?php echo $say++ ?></th>
      <td><img width="100" src="<?php echo $kurslar[$key]['resim'];?>"</td>
      <td><?php echo $kurslar[$key]['ad'];  ?> </td>
      <td><?php echo $kurslar[$key]['fiyat'];  ?>₺</td>
      <td><input style="width: 40px" type="number" min="1"name="urun[<?php echo $key?>][]" value="<?php echo $value  ?>"></td>
      <td><?php echo $kurslar[$key]['fiyat']*$value  ?>₺</td>
      <td><a href="islem.php?sepetSil=1&id=<?php echo $key?>"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
      

    <?php } }?>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><b>Toplam Fiyat</b></td>
      <td><?php echo $total ?>₺</td>

    </tr>
    </tbody>
</table>
<div align="right" class="col-md-12">
  <button type="submit" name="sepetGuncelle" class="btn btn-warning">Sepeti Güncelle</button>
   </form>
  <button class="btn btn-success">Ödeme İşlemine Devam Et</button>
</div>
</div>
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>