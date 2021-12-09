<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Main page - Home</title>
  </head>
  <body>

  
  <?php session_start(); ?> 



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Edição de Dados</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Voltar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Sair</a>
      </li>
       
    </ul>

  </div>

  <div class="collapse navbar-collapse" id="navbarNav">  
 
  
</div>

</nav>



<?php


if(!empty($_POST["codeUpdating"])){
    $description = $_POST['description'];
    $amount = $_POST['amount'];
    $order_id = $_POST['codeUpdating'];
    if ($amount >=70 && $amount<=150) {
      $glicimia = 8;
        }
        elseif($amount >=151 && $amount<=200){
          $glicimia = 10;
        }

        elseif($amount >=201 && $amount<=250){
          $glicimia = 12;
        }

    $conexao = mysqli_connect("localhost","root","","PurchasesDB") ;
    
    $query = "UPDATE orders SET description='$description', amount='$amount', insulina='$glicimia'  WHERE id=$order_id";
     if (mysqli_query($conexao, $query)) {
    ?> 
    <div class="alert alert-info" role="alert">
      <?php echo "<strong>Order has been updated.</strong>"; ?>
    </div>
     
    <?php
    } else {
    ?>
      <div class="alert alert-danger" role="alert">
        <?php echo "<strong> Erro: <strong>" . $query . "<br>" . mysqli_error($conexao);?>
      </div>
    <?php
    }
  
}
  

if (!empty($_POST["dataForUpdating"])){
    $order_id = $_POST['dataForUpdating'];
    $conexao = mysqli_connect("localhost","root","","PurchasesDB") or print (mysqli_error());

    $query = "SELECT id,description,amount FROM orders WHERE id=$order_id";
    $resultado = mysqli_query($conexao,$query);  

    $linha = mysqli_fetch_array($resultado);
?>
    <form action="update_order.php" method="post">
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="nameInputLabel">Periodo:</label>
            <input type="text" class="form-control" id="nameInputLabel" name="description" value="<?php echo $linha['description'];?>">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="emailInputLabel">Glicemia:</label>
            <input type="text" class="form-control" id="emailInputLabel" name = "amount" value="<?php echo $linha['amount'];?>">
          </div>
        </div>   

        <input type = "hidden" id="inputHidden" name="codeUpdating" value="<?php echo $linha['id']; ?> ">
      
        <button type="submit" style="margin: 15px;" class="btn btn-primary" name="submit">Salvar</button>
</form>



<?php
}
?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>