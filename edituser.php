<?php 
session_start();

$conexao = mysqli_connect("localhost","root","","PurchasesDB");
$name= $_SESSION['name'];
$sangue = $_SESSION['sangue'];
$genero = $_SESSION['genero'];
$nasc = $_SESSION['nasc'];
$email = $_SESSION['email'];
$senha = $_SESSION['senha'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Edição usuario</title>
  </head>
  <body>
    
      <style>
        body{
          display: flexbox;
        }
      </style>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Edição</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="home.php">Voltar <span class="sr-only">(current)</span></a>
        </div>
        </div>
      </nav>






      <form action="update_user.php" method="post">
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="nameInputLabel">Nome:</label>
            <input type="text" value="<?php echo $name; ?>" class="form-control" style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" id="nameInputLabel" name="name">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="emailInputLabel">E-mail:</label>
            <input type="text" class="form-control" value="<?php echo $email;?>" style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);"id="emailInputLabel" name = "email">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="passwdInputLabel">Senha:</label>
            <input type="password" value="<?php echo $senha; ?>" class="form-control" style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);"id="passwdInputLabel" name="passwd">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="tiposangue">Tipo Sanguineo:</label>
            <select style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" class="form-control" id="tiposangue" name="tiposangue">
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="nasc">Data de nascimento:</label>
            <input type="date" value="<?php echo $nasc; ?>" class="form-control"style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" id="nasc" name="nasc">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="genero">Gênero:</label>
            <select style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" class="form-control" id="genero" name="genero">
              <option value="Masculino">Masculino</option>
              <option value="Feminino">Feminino</option>
              <option value="Prefiro não informar">Prefiro não informar</option>
              
            </select>
          </div>
        </div>
        <button style="margin-left: 15px;padding: 15;" type="submit" class="btn btn-primary" name="submit">Salvar</button>
      </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>