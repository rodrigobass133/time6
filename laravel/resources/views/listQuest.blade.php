<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tela Inicial</title>

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
</div>
</div>
                                                              <!-- fim dos menus -->

                                                                    <!-- conteúdo -->
    <div class="col-md-9">
      <div class="panel-group" id="conteudo">
        <div class="panel panel-default">
         <div class="panel-heading">

      <h3 align="center"><span class="label label-primary" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));">LISTA DE QUESTÕES</span></h3></div><br>

<div class="inbox-body">


  <!-- Default panel contents -->


  <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-2">
              <label for="exampleInputEmail1"><font color="#000000">Curso:</font></label>
                </div></div>



          <div class="row">
          <div class="col-md-1"></div>
              <div class="col-md-4">
          <select class="form-control">
            <option>-----</option>
          <option name="matL1" id="matL1">Ciencias da Computação</option>
          <option name="logL2" id="logL2">Analise e Desenvolvimento de Sistemas</option>
          <option name="pooL3" id="pooL3">Administração</option>
          <option>Direito</option>
            </select>
              </div>

          </div><br>

              <div class="row">
                      <div class="col-md-1"></div>
                        <div class="col-md-2">
                          <label for="exampleInputEmail1"><font color="#000000">Disciplina:</font></label>
                            </div>


                            <div class="col-md-2"></div>
                              <div class="col-md-2">
                                <label for="exampleInputEmail1"><font color="#000000">Tipo Questão:</font></label>
                                </div>
                          </div>

      <div class="row">
                      <div class="col-md-1"></div>
                          <div class="col-md-4">
                      <select class="form-control">
                        <option>-----</option>
                      <option name="matL1" id="matL1">Matemática</option>
                      <option name="logL2" id="logL2">Lógica de Programação</option>
                      <option name="pooL3" id="pooL3">Programação Orientada a Objeto</option>
                      <option>Redes</option>
                        </select>
                          </div>


                      <div class="col-md-4"></div>
                          <div class="col-md-4">
                      <select class="form-control">
                        <option>-----</option>
                      <option name="matL1" id="matL1">Discursiva</option>
                      <option name="logL2" id="logL2">Objetiva</option>

                        </select>
                          </div>

                          <a href="#"> <button type="button" class="btn btn-primary" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"> Buscar </button></a>

                        </div><br>

<br><div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
  <!-- Table -->
  <table class="table">
    <tr>
      <td colspan="1" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"><label for="exampleInputEmail1"><font color="#FFFFFF">Disciplina:</font></label></td>
      <td colspan="1" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"><label for="exampleInputEmail1"><font color="#FFFFFF">Enunciado:</td>
      <td colspan="1" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"><label for="exampleInputEmail1"><font color="#FFFFFF">Tipo:</td>

    </tr>

    <tr>
      <td style="width: 150px"><font color="black">Lógica de Programação</td>
      <td style="width: 276px"><font color="black">Se o Cardin e cachorrão, quanto otarrio é o Rodrigo?</td>
      <td style="width: 90px"><font color="black">Discursiva</td>
      <td><button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
               </div>

              <div class="col-md-1"></div>
               <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button></td>
    </tr>

    <tr>
      <td><font color="black">Lógica de Programação</td>
      <td><font color="black">No céu tem pão?</td>
      <td><font color="black">Objetiva</td>
      <td><button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
               </div>

              <div class="col-md-1"></div>
               <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button></td>
    </tr>

    <tr>
      <td><font color="black">Lógica de Programação</td>
      <td><font color="black">Oloco bixo</td>
      <td><font color="black">Objetiva</td>
      <td><button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>


              <div class="col-md-1"></div>
               <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button></td>
    </tr>
    <tr>
      <td><font color="black">Lógica de Programação</td>
      <td><font color="black">Oloco bixo</td>
      <td><font color="black">Discursiva</td>
      <td><button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
               </div>

              <div class="col-md-1"></div>
               <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button></td>
    </tr>
  </table>
  
  <div class="modal-footer">

                  <a href="#"><button type="button" class="btn btn-default" data-dismiss="modal"> Cancelar </button></a>
                  <a href="#"><button type="button" class="btn btn-primary" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"> Salvar </button></a>
              </div>

</div>
</div>
</div>

</div>
</aside>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
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
