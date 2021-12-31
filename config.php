<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Configuração</title>
  </head>
  <body>
    



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Configuração</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="home.php">Voltar <span class="sr-only">(current)</span></a>
        </div>
        </div>
      </nav>



<style>

    form{
       font-size: 16px;
    }
   #codicao1{
       position: absolute;
       left: 90%;
       top: -20%;
            }
            #codicao4{
       position: absolute;
       left: 85%;
       top: -15%;
            }
    #a1{
        position: absolute;
        top: 6.5%;
        left: 16%;
    }
    #a4{
        position: absolute;
        top:23.5%;
        left: 15%;
    }
#aplicacao1{
position: absolute;
top: -20%;
left: 65%;
}
#c2{padding-top: 10px;}
#codicao2{
    position: absolute;
    left: 50%;
    top: -15%;   
}
#codicao3{
    position: absolute;
    left: 50%;
    top: 0%;   
}
#codicao3a{
    position: absolute;
    left: 175%;
    top: 0%;   
}
#codicao2a{
    position: absolute;
    left: 175%;
    top: -15%;   
}
#h1c2{
    position: absolute;
    top: 0%;
    left: 160%;

font-size: 18px;
text-decoration: none;
text-justify: auto;
font-weight: unset;
}
#a2{
    position: absolute;
    top: 12%;
    left: 22.5%;
}
#a3{
    position: absolute;
    top: 17%;
    left: 22.5%;
}

#aplicacao2{
    position: absolute;
    top: -15%;
    left: 63.5%;
}
#aplicacao4{
    position: absolute;
    top: -15%;
    left: 63.5%;
}
</style>
<?php
session_start();
$id = $_SESSION['id'];
$conexao = mysqli_connect("localhost","root","","PurchasesDB");
$query01 = "SELECT * FROM customers WHERE id =$id";
$executar=mysqli_query($conexao, $query01);

$linha=mysqli_fetch_array($executar);
?>

      <form action="salvarconfig.php" method="post">
        <div class="form-group">
          <div class="col-md-1 mb-2">
         Menor que:
            <input type="text"value="<?php echo $linha['condicao1']?>" class="form-control" style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" id="codicao1" name="codicao1" required>
          </div>
        </div>
      
        <div class="form-group">
          <div id="a1" class="col-md-1 mb-2">
         Aplicar:
            <input type="text" class="form-control"value="<?php echo $linha['aplicacao1']?>" style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" id="aplicacao1" name="aplicacao1" required>
      
        </div>
        </div>
        <div id="c2" class="form-group">
          <div class="col-md-1 mb-2">
         Entre
<input type="text" value="<?php echo $linha['codicao2a']?>" class="form-control" style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" id="codicao2" name="codicao2a" required>
       <h1 id="h1c2">e</h1> 
<input type="text" class="form-control"value="<?php echo $linha['codicao2b']?>"style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" id="codicao2a" name="codicao2b" required>

        </div>
        </div>
        
        
        <div class="form-group">
          <div id="a2" class="col-md-1 mb-2">
         Aplicar:
            <input type="text" class="form-control" value="<?php echo $linha['aplicacao2']?>"style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" id="aplicacao2" name="aplicacao2" required>
      
        </div>
        </div>
        <div id="c3" class="form-group">
          <div class="col-md-1 mb-2">
         Entre
<input type="text" class="form-control"value="<?php echo $linha['codicao3a']?>" style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" id="codicao3" name="codicao3a" required>
       <h1 id="h1c2">e</h1> 
<input type="text" class="form-control"value="<?php echo $linha['codicao3b']?>" style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" id="codicao3a" name="codicao3b" required>

        </div>
        </div>
        
        
        <div class="form-group">
          <div id="a3" class="col-md-1 mb-2">
         Aplicar:
            <input type="text" class="form-control" value="<?php echo $linha['aplicacao3']?>" style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" id="aplicacao2" name="aplicacao3" required>
      
        </div>
        </div>
        <br>
        <div class="form-group">
          <div class="col-md-1 mb-2">
         Maior que:
            <input type="text" class="form-control" value="<?php echo $linha['codicao4']?>"style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" id="codicao4" name="codicao4" required>
          </div>
        </div>
       
        <div class="form-group">
          <div id="a4" class="col-md-1 mb-2">
         Aplicar:
            <input type="text" class="form-control"value="<?php echo $linha['aplicacao4']?>" style="box-shadow: 2px 2px 2px rgba(0,0,0, 0.2);" id="aplicacao4" name="aplicacao4" required>
      
        </div>
        </div>
       <br>
      
        <button style="margin-left: 15px;padding: 15;" type="submit" class="btn btn-primary" name="submit">Salvar</button>
      </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>