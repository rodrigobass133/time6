<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Editar Provas</title>

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
        <h3 align="center"><span class="label label-primary" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));">EDITAR PROVA</span></h3></div><br>
       
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
          <option name="turmNV3" id="turmNV3">ADS</option>
          <option name="turmNV1" id="turmNV1">Engenharia</option>
          <option name="turmNV2" id="turmNV2">Jogos Digitais</option>
          </select>
        </div>
        
        
        <div class="col-md-3">
          <select class="form-control">
            <option name="matNV1" id="matNV1">Matemática</option>
          <option name="lpNV2" id="lpNV2">Lógica de Programação</option>
          <option name="pooNV3" id="pooNV3">Programação Orientada a Objeto</option>
          <option name="redNV4" id="redNV4">Redes</option>
          </select>
        </div>

        <div class="col-md-2">
          <select class="form-control">
          <option name="tipoNV1" id="tipoNV1">P1</option>
          <option name="tipoNV2" id="tipoNV2">P2</option>
          <option name="tipoNV3" id="tipoNV3">P3</option>
          </select>
        </div>

        <div class="col-md-2">
          <select class="form-control">
          <option name="turmNV1" id="turmNV1">ADS1</option>
          <option name="turmNV2" id="turmNV2">ADS2</option>
          <option name="turmNV3" id="turmNV3">ADS3</option>
          </select>
        </div>
        
      </div><br> 


<br><div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
  <!-- Table -->
  <table class="table">
    <tr>
      <td colspan="4" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"><label for="exampleInputEmail1"><font color="#FFFFFF">Enunciados:</font></label></td>
      <td colspan="1" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"><label for="exampleInputEmail1"><font color="#FFFFFF">Valor</td>
      <td align="center" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"><label for="exampleInputEmail1"><font color="#FFFFFF">Excluir</td>
    </tr>

    <tr>
      <td colspan="3" ><input type="checkbox" id="cbox1" value="first_checkbox"></td>
      <td><font color="black">O que é o que é... Cabe em um olho e pesa uma tonelada?</td>
      <td><input style="color: black;" type="textfield" align="center" name="valor" size="1" maxlength="3" value="1,0"/></td>
      <td align="center"><button type="button" class="btn btn-default btn-lg"><img id="icon-plus" src="icon-images/delete-icon.png" style="width: 23px; height: 23px;"></button></td>
      
    </tr>
    <tr>
      <td colspan="3" ><input type="checkbox" id="cbox1" value="first_checkbox"></td>
      <td><font color="black">O que é o que é... Cabe em um olho e pesa uma tonelada?</td>
      <td><input style="color: black;" type="textfield" align="center" name="valor" size="1" maxlength="3" value="1,0"/></td>
      <td align="center"><button type="button" class="btn btn-default btn-lg"><img id="icon-plus" src="icon-images/delete-icon.png" style="width: 23px; height: 23px;"></button></td>
    </tr>
    <tr>
      <td colspan="3" ><input type="checkbox" id="cbox1" value="first_checkbox"></td>
      <td><font color="black">O que é o que é... Cabe em um olho e pesa uma tonelada?</td>
      <td><input style="color: black;" type="textfield" align="center" name="valor" size="1" maxlength="3" value="1,0"/></td>
      <td align="center"><button type="button" class="btn btn-default btn-lg"><img id="icon-plus" src="icon-images/delete-icon.png" style="width: 23px; height: 23px;"></button></td>
    </tr>
    <tr>
      <td colspan="3" ><input type="checkbox" id="cbox1" value="first_checkbox"></td>
      <td><font color="black">O que é o que é... Cabe em um olho e pesa uma tonelada?</td>
      <td><input style="color: black;" type="textfield" align="center" name="valor" size="1" maxlength="3" value="1,0"/></td>
      <td align="center"><button type="button" class="btn btn-default btn-lg"><img id="icon-plus" src="icon-images/delete-icon.png" style="width: 23px; height: 23px;"></button></td>
    </tr>
    <tr>
      <td colspan="3" ><input type="checkbox" id="cbox1" value="first_checkbox"></td>
      <td><font color="black">O que é o que é... Cabe em um olho e pesa uma tonelada?</td>
      <td><input style="color: black;" type="textfield" align="center" name="valor" size="1" maxlength="3" value="1,0"/></td>
      <td align="center"><button type="button" class="btn btn-default btn-lg"><img id="icon-plus" src="icon-images/delete-icon.png" style="width: 23px; height: 23px;"></button></td>
    </tr>
    <tr>
      <td colspan="4"></td>
      <td><label for="exampleInputEmail1"><font color="#000000">Total:</font></label></td>
      <td><input style="color: black;" type="textfield" align="center" name="valor" size="1" maxlength="3" value="5,0" disabled/></td>
    </tr>

  </table>
</div></div>

<div class="row">
<div class="col-md-1"></div>
<button type="button" class="btn btn-primary" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"> Adicionar </button>
</div><br>

<br><div class="modal-footer">

                <a href="#"><button type="button" class="btn btn-default" data-dismiss="modal"> Cancelar </button></a>
                <a href="#"><button type="button" class="btn btn-primary" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));"> Salvar </button></a>
            </div>
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
  