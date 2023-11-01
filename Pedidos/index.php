<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEDIDOS ONLINE</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    .middle {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 60vh; /* Adjust this value to move the buttons and title up or down */
      }
      .middle h1 {
        margin-bottom: 20px; /* Adjust this value to increase or decrease the space between the title and the buttons */
        background-color: rgba(0, 0, 0, 0.5); /* Add a semi-transparent black background to the text */
        color: white; /* Change the text color to white */
        border-radius: 10px;
        padding: 10px; /* Add some padding around the text */
      }
      body {
        background: url('lanche.jpg') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      .middle {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 60vh; /* Adjust this value to move the buttons and title up or down */
      }
      .middle h1 {
        margin-bottom: 20px; /* Adjust this value to increase or decrease the space between the title and the buttons */
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">    
      <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Pedidos Online</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
              <a class="nav-link" href="?page=novo">Novo Pedido</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="?page=listar">Meus pedidos</a>
              </li>
          </ul>
          </div>
      </div>
    </nav>

    <!-- New section for the buttons -->
    <?php if (!isset($_GET['page']) || $_GET['page'] == 'index') { ?>
      <div class="middle">
        <h1>A CASA DO COMBO</h1> <!-- Title added -->
        <div class="btn-group" role="group" aria-label="Basic example">
          <a href="?page=novo" class="btn btn-dark">Novo Pedido</a>
          <a href="?page=listar" class="btn btn-dark">Meus pedidos</a>
        </div>
      </div>
    <?php } ?>

    <!-- Your original PHP code -->
    <div class="container">
      <div class="row">
          <div class="col mt-5">
              <?php
              //Redirecionando o usuário para as páginas
              include("config.php");
              switch(@$_REQUEST["page"]){
                  case "novo":
                      include ("novo-pedido.php");
                  break;
                  case "listar":
                      include("listar-pedido.php");
                  break;
                  case "salvar":
                      include("salvar-pedido.php");
                  break;
                  case "editar":
                      include ("editar-pedido.php");
                  break;  
                  default:
                  
              }
              ?>
  
          </div>
      </div>    
  </div>

  <!-- Rest of your code... -->
  </body>
</html>
