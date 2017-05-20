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
              </div><br>
                                                              <!-- fim dos menus -->

                                                                    <!-- sair -->


<div id="sair">
  <span class="glyphicon glyphicon-off" aria-hidden="true" style="color: white"></span>
    <a href="#" style="background-color: rgba(0,0,0,0.0); color: white">SAIR</a>
</div>
  </div>

                                                                    <!-- conteúdo Criar questão Discursivo -->

<div class="col-md-8">

        <div class="panel panel-default">
        <div class="panel-heading">Criar Questão</div>
          <div class="panel-body">
            <ul class="nav nav-tabs">
              <ul class="nav nav-pills">
                <!--opçoes de tipo de prova-->

                </ul>

                <!--componentes questão discursiva-->
                <br>
          <!--label questão-->
            <h4> <span class="label label-default">Questão</span></h4>
            <br>
            <!--espaço para escrever questão-->

              <textarea class="form-control" rows="10"  style="resize:none;!important"></textarea>
            <br>
            <h4> <span class="label label-default">Gabarito</span></h4>
            <br>
            <!--espaço para escrever questão-->

              <textarea class="form-control" rows="7"  style="resize:none;!important"></textarea>
            <br>
            <div class="row">
              <div class="col-md-2">
                <h4> <span class="label label-danger">Disciplina</span></h4>
              </div>

                <div class="col-md-4">
                <select class="form-control">
                    <option>POO 2</option>
                    <option>Engenharia de software</option>
                    <option>Inglês instrumental</option>


                </select>
                </div>

                </div>
              <br>
              <!--botão-->
              <div class="modal-footer">
              <div class="row">

             <div class="col-md-10">
             <button type="button" class="btn btn-default">
     Salvar
    </button>
    </div>
    <div class="col-md-2">
    <button type="button" class="btn btn-default">
Cancelar
</button>
</div>
           </div>
               </div>
</div>

</ul>
</div>
      </div>
      <!--fim do conteudo da questão discursiva-->
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
