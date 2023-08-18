<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

    <div class="container mt-4">
      <?php
      if(isset($_GET['durum'])){

      if($_GET['durum'] == 'false'){
        ?>
          <div class="alert alert-danger">Giris ugursuzdur!</div>

        <?php
      } else if($_GET['durum'] == 'cixis') { ?>
        <div class="alert alert-success">Cixis edildi!</div>

      <?php }
    }
    
      ?>

      <?php
      if(isset($_SESSION['user'])){ ?>
      <p>Xosgeldin <?php echo $_SESSION['user'] ?></p>
      <a href="cixis.php"><button class="btn btn-danger">Cixis</button></a>
      <?php
      }else{?>
       <div class="row">
            

            <form action="proses.php" method="POST">
      <div class="mb-3">
        <label class="form-label">Istifadeci adi</label>
        <input name="user" type="text" class="form-control"
        <?php
        if(isset($_COOKIE['user'])){?>
        value="<?php echo $_COOKIE['user']?>"
        <?php } else{?>
          placeholder="Istifadeci adinizi girin">
        <?php }
        ?>
      </div>
      <div class="mb-3">
        <label class="form-label">Sifre</label>
        <input name="pass" type="password" class="form-control"
        <?php
        if(isset($_COOKIE['pass'])){?>
        value="<?php echo $_COOKIE['pass']?>"
        <?php } else{?>
          placeholder="Sifrenizi girin">
        <?php }
        ?>

      </div>
      <div class="mb-3 form-check">
        <input name="rememberme" type="checkbox" <?php echo isset($_COOKIE['user']) ? "checked" : ""?> class="form-check-input">
        <label class="form-check-label">Meni xatirla</label>
      </div>
      <button type="submit" class="btn btn-primary" name="istifadeci_girisi">Giris</button>
    </form>
            </div>
<?php }
      ?>
 
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>