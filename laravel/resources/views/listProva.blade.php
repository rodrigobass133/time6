<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listar provas</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/inicial.css" rel="stylesheet">
  </head>

  <body>

		<div id="menu">
		<div class="barra">
    <b class="iesbname"><font color="white", size="+2">IESB<font color="red", size="+1">online</font></font></b>
      </div><br>

      <div class="row">
      <div class="col-md-3">

                                                                <!-- menus -->

      <div class="primary-menu">

                                                                <!-- home -->

      <ul id="barmenu" class="nav nav-pills nav-stacked labels-info inbox-divider">
        <li>
          <a href="#" style="background-color: rgba(0,0,0,0.0); color: white"><img id="icon-home" src="icon-images/icon-home.png">  Home</a>
        </li>
      </ul>

                                                                <!-- questão -->

<ul id="barmenu" class="nav nav-pills nav-stacked labels-info inbox-divider">
  <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="background-color: rgba(0,0,0,0.0); color: white"><img id="icon-questao" src="icon-images/icon-questao.png">  Questão</a>
           <ul class="dropdown-menu navmenu-nav" role="menu">
             <li>
                <a href="#"><i class="fa fa-plus"></i><img id="icon-plus" src="icon-images/icon-plus.png"> Criar Questão</a>
             </li>
             <li>
                <a href="#"><i class="fa fa-list-alt"></i> <img id="icon-list" src="icon-images/icon-list.png"> Lista de Questões</a>
             </li>
           </ul>
  </li>
</ul>

                                                                    <!-- prova -->

<ul id="barmenu" class="nav nav-pills nav-stacked labels-info inbox-divider">
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="background-color: rgba(0,0,0,0.0); color: white"><img id="icon-prova" src="icon-images/icon-prova.png"> Prova</a>
      <ul class="dropdown-menu navmenu-nav" role="menu">
        <li>
            <a href="#"><i class="fa fa-plus"></i><img id="icon-plus" src="icon-images/icon-plus.png"> Criar Prova</a>
        </li>
            <li>
              <a href="#"><i class="fa fa-list-alt"></i> <img id="icon-list" src="icon-images/icon-list.png"> Lista de Provas</a>
            </li>
      </ul>
  </li>
</ul>

                                                                    <!-- correção -->

<ul id="barmenu" class="nav nav-pills nav-stacked labels-info inbox-divider">
  <li class="dropdown">
    <a href="#" style="background-color: rgba(0,0,0,0.0); color: white"> <img id="icon-correcao" src="icon-images/icon-correcao.png"> Correção</a>
</ul>
              </div><br>
                                                              <!-- fim dos menus -->


  </div>

                                                                    <!-- conteúdo -->

                                                                <!-- criar prova -->

<div class="col-md-9">
  <div class="panel-group" id="conteudo">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 align="center"><span class="label label-primary" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));">LISTA DE PROVAS</span></h3></div><br>

        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
          <label for="exampleInputEmail1"><font color="#000000">Curso:</font></label>
        </div>

        <div class="col-md-2">
          <label for="exampleInputEmail1"><font color="#000000">Disciplina:</font></label>
        </div>

        <div class="col-md-1"></div>
        <div class="col-md-2">
          <label for="exampleInputEmail1"><font color="#000000">Tipo de Prova:</font></label>
        </div>

        <div class="col-md-2">
          <label for="exampleInputEmail1"><font color="#000000">Turma:</font></label>
        </div>
      </div>

      <div class="row">

      <div class="col-md-1"></div>
      <div class="col-md-2">
          <select class="form-control">
          <option>---</option>
          <option>ADS</option>
          <option>Engenharia</option>
          <option>Jogos Digitais</option>
          </select>
        </div>


        <div class="col-md-3">
          <select class="form-control">
          <option>---</option>
          <option>Matemática</option>
          <option>Lógica de Programação</option>
          <option>Programação Orientada a Objetos</option>
          <option>Redes</option>
          </select>
        </div>

        <div class="col-md-2">
          <select class="form-control">
          <option>---</option>
          <option>P1</option>
          <option>P2</option>
          <option>P3</option>
          </select>
        </div>

        <div class="col-md-2">
          <select class="form-control">
          <option>---</option>
          <option>ADS1</option>
          <option>ADS2</option>
          <option>ADS3</option>
          </select>
        </div>
        <div class="col-md-1">
          <a href="#"><button type="button" class="btn btn-default" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"><font color="white"> Filtrar  </button></a>
        </div>
      </div><br>

      <br><div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <!-- Table -->
        <table class="table">
          <tr>
            <td colspan="8" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"><label for="exampleInputEmail1"><font color="#FFFFFF">Provas</font></label></td>

          </tr>

          <tr>
            <td><label for="exampleInputEmail1"><font color="#000000">Redes</font></label></td>
            <td><label for="exampleInputEmail1"><font color="#000000">P2</font></label></td>
            <td style="width: 50px"><font color="black"><a href="">Editar</a></td>
            <td style="width: 100px"><font color="black"><a href="">Excluir</a></td>
          </tr>

          <tr>
            <td><label for="exampleInputEmail1"><font color="#000000">Matemática</font></label></td>
            <td><label for="exampleInputEmail1"><font color="#000000">P1</font></label></td>
            <td style="width: 50px"><font color="black"><a href="">Editar</a></td>
            <td style="width: 100px"><font color="black"><a href="">Excluir</a></td>
          </tr>

          <tr>
            <td><label for="exampleInputEmail1"><font color="#000000">Programação Orientada a Objetos I</font></label></td>
            <td><label for="exampleInputEmail1"><font color="#000000">P1</font></label></td>
            <td style="width: 50px"><font color="black"><a href="">Editar</a></td>
            <td style="width: 100px"><font color="black"><a href="">Excluir</a></td>
          </tr>

          <tr>
            <td><label for="exampleInputEmail1"><font color="#000000">Lógica de programação</font></label></td>
            <td><label for="exampleInputEmail1"><font color="#000000">P3</font></label></td>
            <td style="width: 50px"><font color="black"><a href="">Editar</a></td>
            <td style="width: 100px"><font color="black"><a href="">Excluir</a></td>
          </tr>

          <tr>
            <td><label for="exampleInputEmail1"><font color="#000000">Engenharia de Software</font></label></td>
            <td><label for="exampleInputEmail1"><font color="#000000">P2</font></label></td>
            <td style="width: 50px"><font color="black"><a href="">Editar</a></td>
            <td style="width: 100px"><font color="black"><a href="">Excluir</a></td>
          </tr>

          <tr>
            <td><label for="exampleInputEmail1"><font color="#000000">Linguagem de Programação para WEB II</font></label></td>
            <td><label for="exampleInputEmail1"><font color="#000000">P2</font></label></td>
            <td style="width: 50px"><font color="black"><a href="">Editar</a></td>
            <td style="width: 100px"><font color="black"><a href="">Excluir</a></td>
          </tr>

        </table>

      </div>

      <nav aria-label="Page navigation" align="center">
        <ul class="pagination">
          <li>
            <a href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li>
            <a href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>


    </div>
      <br>
      </div>

      </div>
      </div>
      </aside>
      </div>
            </div>
          </div>
        </div>
      </div>

                  </div>
                    </div>

          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <!-- Include all compiled plugins (below), or include individual files as needed -->
          <script src="js/bootstrap.min.js"></script>
        </body>
      </html>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
