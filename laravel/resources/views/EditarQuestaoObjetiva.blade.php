<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editar Questão</title>

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

                                                                <!-- questões objetivas -->

<div class="col-md-8">
  <div class="panel-group" id="conteudo">
    <div class="panel panel-default">
      <div class="panel-heading">
Editar Questão</div>
<div class="panel-body">
  <ul class="nav nav-tabs">
        <dir>
    <h4><span class="label label-default">Enunciado:</span></h4><br>
  </dir>

      <textarea class="form-control" rows="5" style="resize: none;!important" > Enunciado Enunciado Enunciado Enunciado
      Enunciado EnunciadovEnunciadoEnunciadoEnunciado</textarea><br>

  <dir>
  <h4><span class="label label-default">Alternativas:</span></h4><br>
  </dir>

  <dir>
  <div class="row">
  <div class="col-md-1">
  <h4><span class="label label-danger">A</span></h4>
  </div>
  <div class="col-md-11">
                <textarea class="form-control" rows="5" style="resize: none;!important" >Alternativa Alternativa Alternativa
                AlternativaAlternativaAlternativa</textarea><br>
  </div>
  </div>
  </dir>

  <dir>
  <div class="row">
  <div class="col-md-1">
  <h4><span class="label label-danger">B</span></h4>
  </div>
  <div class="col-md-11">
                <textarea class="form-control" rows="5" style="resize: none;!important" >Alternativa Alternativa Alternativa
                AlternativaAlternativaAlternativa</textarea><br>
  </div>
  </div>
  </dir>

  <dir>
  <div class="row">
  <div class="col-md-1">
  <h4><span class="label label-danger">C</span></h4>
  </div>
  <div class="col-md-11">
                <textarea class="form-control" rows="5" style="resize: none;!important" >Alternativa Alternativa Alternativa
                AlternativaAlternativaAlternativa</textarea><br>
  </div>
  </div>
  </dir>

  <dir>
  <div class="row">
  <div class="col-md-1">
  <h4><span class="label label-danger">D</span></h4>
  </div>
  <div class="col-md-11">
                <textarea class="form-control" rows="5" style="resize: none;!important" >Alternativa Alternativa Alternativa
                AlternativaAlternativaAlternativa</textarea><br>
  </div>
  </div>
  </dir>

  <dir>
  <div class="row">
  <div class="col-md-1">
  <h4><span class="label label-danger">E</span></h4>
  </div>
  <div class="col-md-11">
                <textarea class="form-control" rows="5" style="resize: none;!important" >Alternativa Alternativa Alternativa
                AlternativaAlternativaAlternativa</textarea><br>
  </div>
  </div>
  </dir>
  <div class="row">
    <div class="col-md-2 col-md-offset-1">
  <h4><span class="label label-default">Gabarito:</span></h4>

  <select class="form-control" name="TGabarito" id="CGabarito">
    <option> A </option>
    <option> B </option>
    <option> C </option>
    <option> D </option>
    <option> E </option>
  </select>
</div>
</div>
  <br><br>
  <div class="row">
    <div class="col-md-2 col-md-offset-1">
  <h4><span class="label label-default">Disciplinas:</span></h4>

  <select class="form-control"name="TDisciplina" id="CDisciplina">
    <option> Linguagem de Programação </option>
    <option> Banco de Dados </option>
    <option> Programação Objeto </option>
  </select>
</div>
</div>
  <br> <br>
  </dir>
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
  </dir>
</div>
</div>

    </form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="js/bootstrap.min.js"></script>
   </body>
 </html>
