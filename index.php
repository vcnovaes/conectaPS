<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conecta-PS</title>
    <link rel = "stylesheet" href ="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
 </div> 
<header>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light   navbar transparent navbar-inverse ">
        <a class="navbar-brand" href="main-page.html"><img src = "logo.jpg" height="40px" length = "40px">ConectaPS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  navbar-inner" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="./Feed/feed.html">Acessar <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.html">Objetivos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ods.html">Conheça as ods</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastro.html">Faça seu cadastro</a>
              </li>
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Instruções
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="investidores.html">Sou investidor</a>
                  <a class="dropdown-item" href="mentor.html">Sou mentor</a>
                  <a class="dropdown-item" href="projetos.html">Tenho um projeto incubado</a>
                </div>
              </li>
          </ul>
          <div id = "searcher">
            <form class="form-inline" style="margin-left: 100px ;">
                <input class="form-control mr-sm-2" type="search" placeholder="Procure" aria-label="Search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" >Buscar</button>
              </form>
          </div>
        </div>
       
      </nav>
    </div>
    <div class="jumbotron bg-img" >
     <div align="center" style="color: rgb(190, 148, 4);">
        <h1 class="display-4"><b>ConectaPS</b></h1>
        <p class="lead"><b>Todo mundo junto</b></p>
        <hr class="my-4">
        <p><b>Tentando aproximar as pessoas</b></p>
        <a class="btn btn-dark btn-lg" href="cadastro.html" role="button">Faça seu cadastro</a>
        <a class="btn btn-warning btn-lg" href="login/login3.html" role="button" style=  "margin-left: 50px;">Login</a>
      </div>
  </div>

</header>
<div class = "container">
    <div class = "row row-content align-items-center">
        <div class = "cal-12 col-sm-4  order-sm-last  col-md-3">
            <p>
                <h3>O que é o <b>ConectaPS?</b></h3>
                addadsadsadasdasdsadasdas
                adaskldjaskdsajkdlasdjasdlksa

                daskldjaskldasjdksajdaslddas
                daskdjasldaskdjsalkdjaskdjsal
            </p>
        </div>
        <div class = "col col-sm col-md order-sm-first">
   <form method="POST col-3">
  <div class="form-group ">
    <h5>Login</h5>
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-warning">Entrar</button>
</form>
        </div>
    </div>
    <div class = "row row-content align-items-center">
        <div class = "cal-12 col-sm-4 col-md-3">
            <h3>Ainda não tem conta?</h3>
        </div>
        <div class = "col col-sm col-md" >
            <h2>Cadastro</h2>
        <form name="formCadastro" method="post" action="pagina_de_login" onsubmit="return confirmacao()">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control" required />
            </div>
            <div class="form-group">
                <label>Ano de Nascimento</label>
                <input type="text" name="ano" id="ano" placeholder="0000" class="form-control" required/>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" required/>
            </div>
            <div class="form-group">
                <label>CEP</label>
                <input type="text" name="cep" id="cep" placeholder="CEP" class="form-control" required/>
                <button  onClick="return consultaCEP()" class ="btn btn-info" >Buscar Cep</button>
            </div>
            <ul style = "list-style-type: none;">
                <li id = "cidade"></li>
                <li id = "logradouro"></li>
                <li id = "bairro"></li>
                <li  id = "uf" ></li>
            </ul>            
                <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" class="form-control" required/>
            </div>
            <div class="form-group">
                <label>Corfime sua senha</label>
                <input type="password" name="senha2" id="senha2" placeholder="Digite novamente sua senha" class="form-control" required/>
            </div>
         
            <input class="btn btn-warning" type="submit" onClick="return verifica()">
        </form>
        </div>
        
    </div>
    <div class = "row row-content align-items-center">
        <div class = "cal-12 col-sm-4 col-md-3 order-sm-last ">
         <a href="conect/index.html" class="main-links"><h4>Visite Aqui</h4></a>
        </div>
        <div class = "col col-sm order-sm-first col-md  ">
            <h2>Sobre o Porto Social</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
    </div>
      
</div>
 <!-- <div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" heigth = "100px">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://thumbs.dreamstime.com/b/paisagem-gen%C3%A9rica-59679375.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://img.elo7.com.br/product/zoom/29926C6/fundo-fotografico-em-tecido-paisagem-2-60x1-50m-newborn.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://www.infoescola.com/wp-content/uploads/2019/10/paisagem-ouro-preto-1008049370.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
</div>
<div>
  <img src = "./ods.png"  align = "center">
</div> -->
</body>
<footer class="footer" style="background-color: rgb(101, 29, 2); color: white;">
    <div class="container">
        <div class="row">             
            <div class="col-4 offset-1 col-sm-2">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="main-page.html">Home</a></li>
                    <li><a href="#">Saiba mais</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Apoie a causa</a></li>
                </ul>
            </div>
            <div class="col-7 col-sm-5">
                <h5>Mais informações</h5>
                <address>
                  <h6> Entre em contato com:</h6>
                  <i class = "fa fa-phone fa-lg"></i>Tel.: +852 1234 5678<br>
                  <i class = "fa fa-fax fa-lg"></i>Tel.: +852 8765 4321<br>
                  <i class = "fa fa-envelope fa-lg"></i> <a href="mailto:conect@me.com">conect@me.com</a>
               </address>
            </div>
            <div class="col-12 col-sm-4 align-self-center">
                <div class="text-center">
                    <a  class = "btn btn-social-icon btn-google" href="http://google.com/+"><i class = "fa fa-google-plus fa-lg"></i></a>
                    <a class = "btn btn-social-icon btn-facebook"
                    href="http://www.facebook.com/profile.php?id="><i class = "fa fa-facebook fa-lg"></i></a>
                    <a class = "btn btn-social-icon btn-linkedin" 
                    href="http://www.linkedin.com/in/"><i class = "fa fa-linkedin fa-lg" style="color:chocolate"></i></a>
                    <a class = "btn btn-social-icon btn-twitter"
                     href="http://twitter.com/"><i class = "fa fa-twitter fa-lg"></i></a>
                    <a class = "btn btn-social-icon btn-youtube" 
                    href="http://youtube.com/"><i class = "fa fa-youtube fa-lg"></i></a>
                    <a class = "btn btn-social-icon " 
                    href="mailto:"><i class = "fa fa-envelope-o fa-lg"></i></a>
                </div>
            </div>
       </div>
       <div class="row justify-content-center">             
            <div class="col-auto">
                <p>© Copyright Hackathon-PS 2020</p>
            </div>
       </div>
    </div>
</footer>

</html>  