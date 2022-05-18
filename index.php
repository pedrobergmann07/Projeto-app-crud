<!DOCTYPE html>
<html lang="PTBR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - Udemy</title>

    <!-- Ícone na janela do navegador-->
    <link rel="shortcut icon" href="resources/favicon.png" type="image/x-icon">

     <!-- Bootstrap 5-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <!-- Ícones do Bootstrap 5-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

     <!--  GoogleFonts - OpenSans-->
     <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>

     <!--  Folha de Estilo(CSS)-->
     <style type="text/css">
       body {
        margin: 20px;
        background-color: #ffffff;
       }

       *{
           font-family: "Open Sans", sans-serif;
       }

       h2{
        font-family: "Open Sans", sans-serif;
       }

       .thead{
           background-color: #f7f7f7;
       }
    </style>
</head>

<body>
    
    <!-- Dentro do container será criado toda a página-->
    <div class="container">
        <h2 class="text-center"> Lista de Usuários <i class="bi bi-people-fill"></i> </h2>

        <h5 class="text-end">
          <a href="view/page_register.php" class="btn btn-primary btn-xs">
            <i class="bi bi-person-plus-fill"></i>
          </a>
        </h5>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead">
                    <tr>
                       <th>ID</th>
                       <th>NOME</th>
                       <th>E-MAIL</th>
                       <th>CPF</th>
                       <th>DT. DE NASCIMENTO</th>
                       <th>ENDEREÇO</th>
                       <th>TELEFONE</th>
                       <th colspan="3">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Maria Fernanda</td>
                        <td>mariafernanda@gmail.com</td>
                        <td>333.444.555-33</td>
                        <td>11/10/2003</td>
                        <td>Av.Santos da Silva, 101</td>
                        <td>(31) 2232-33232</td>
                        <td>
                            <form method="POST">
                                <button class="btn btn-warning btn-xs">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form method="POST" onclick="return confirm('Tem Certeza que deseja exlcuir?')";>
                               <button class="btn btn-danger btn-xs">
                                   <i class="bi bi-trash"></i>
                               </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<!--  JQuery e JqueryMask-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>

</html>