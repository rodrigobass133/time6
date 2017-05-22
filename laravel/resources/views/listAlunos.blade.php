<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Lista de Alunos</title>

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
              <a href="#"><i class="fa fa-list-alt"></i> <img id="icon-list" src="icon-images/icon-list.png">Lista de Provas</a>
            </li>
      </ul>
  </li>
</ul> 

                                                                    <!-- correção -->

<ul id="barmenu" class="nav nav-pills nav-stacked labels-info inbox-divider">
  <li class="dropdown">
    <a href="#" style="background-color: rgba(0,0,0,0.0); color: white"> <img id="icon-correcao" src="icon-images/icon-correcao.png"> Correção</a>
</ul>
</div>
</div>
                                                              <!-- fim dos menus -->

                                                                    <!-- conteúdo -->

<div class="col-md-9">
  <div class="panel-group" id="conteudo">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 align="center"><span class="label label-primary" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));">LISTA DE ALUNOS</span></h3></div><br> 

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
          <label for="exampleInputEmail1"><font color="#000000">Turma:</font></label>
        </div>
      </div>

      <div class="row">

      <div class="col-md-1"></div>
      <div class="col-md-2">
          <select class="form-control">
          <option>ADS</option>
          <option>Engenharia</option>
          <option>Jogos Digitais</option>
          </select>
        </div>
        
        
        <div class="col-md-3">
          <select class="form-control">
          <option>Redes</option>
          <option>Lógica de Programação</option>
          <optio>Programação Orientada a Objeto</option>
          </select>
        </div>

        <div class="col-md-2">
          <select class="form-control">
          <option>ADS1</option>
          <option>ADS2</option>
          <option>ADS3</option>
          </select>
        </div>        
        <div class="col-md-1">
          <a href="#"><button type="button" class="btn btn-default" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"><font color="white"> Buscar  </button></a>
        </div>
      </div><br><br>

      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <label for="exampleInputEmail1"><font color="#000000" style="font-size: 17px;">Aluno: Francisco Milton</font></label>
        </div>

        <div class="col-md-3"></div>
        <div class="col-md-2">
          <label for="exampleInputEmail1"><font color="#000000" style="font-size: 17px;">Nota: </font></label>
          <input style="color: black;" type="textfield" align="center" name="valor" size="1" maxlength="3" disabled />
        </div>
      </div>
        
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
          <div class="panel-group" style="text-align: center;">
            <div class="panel panel-default">
              <div class="panel-heading" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.1),  rgba(255,0,0, 0.5), rgba(0,0,0, 0.1));">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color: white">Visualizar</a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse">
                          <div class="panel-body">

                          <div class="col-md-1"></div>
                          <label for="exampleInputEmail1"><font color="#000000"><u>Gabarito Aluno:</u></font></label><br>

                          <br>
                          
                          <img src="gaba.png" width="550"><br>


                          
                          </div>
                      </div>
                  </div>
    </div></div>

    <div class="col-md-1">
      <button type="button" class="btn btn-primary" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));">Corrigir</button>
    </div>
      </div><br>

      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <label for="exampleInputEmail1"><font color="#000000" style="font-size: 17px;">Aluno: Robsu Clayto</font></label>
        </div>

        <div class="col-md-3"></div>
        <div class="col-md-3">
          <label for="exampleInputEmail1"><font color="#000000" style="font-size: 17px;">Nota:</font></label>
          <input style="color: black;" type="textfield" align="center" name="valor" size="1" maxlength="3" disabled />
        </div>
      </div>

       <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
          <div class="panel-group" style="text-align: center;">
            <div class="panel panel-default">
              <div class="panel-heading" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.5), rgba(0,0,0, 0.3));">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color: white;">Visualizar</a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">

                          <div class="col-md-1"></div>
                          <label for="exampleInputEmail1"><font color="#000000"><u>Gabarito Aluno:</u></font></label><br>

                          <br>
                          
                          <img src="gaba.png" width="550"><br>

                          </div>
                      </div>
                  </div>
    </div></div>

    <div class="col-md-1">
      <button type="button" class="btn btn-primary" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));">Corrigir</button>
    </div>
      </div><br>

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