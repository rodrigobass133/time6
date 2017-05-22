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
              </div><br><br><br>
                                                              <!-- fim dos menus -->

                                                                      <!-- sair -->


<div id="sair">
  <span class="glyphicon glyphicon-off" aria-hidden="true" style="color: white"></span>
    <a href="#" style="background-color: rgba(0,0,0,0.0); color: white">SAIR</a>
</div>
  </div>

                                                                    <!-- conteúdo -->

<div class="col-md-9" align="center">
  <div class="panel-group" id="conteudo">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><span class="label label-primary" style="background-color: black; background-image: linear-gradient(45deg, rgba(0,0,0,0.3),  rgba(255,0,0, 0.3));">Correção de Prova</span></h2>
      </div><br>



        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="panel-group">
              <div class="panel panel-default">

                            <div class="panel-body">

                            <div class="col-md-1"></div>
                            <label for="exampleInputEmail1"><font color="#000000"><u>Gabarito Aluno:</u></font></label><br>

                            <br>
                            <div class="col-md-1"></div>
                            <img src="icon-images/gaba.jpg" width="550"/><br>


                            <br><div class="col-md-1"></div>
                            <label for="exampleInputEmail1"><font color="#000000"><u>Correção:</u></font></label><br>


                            <br><div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-9">
                                <table border=1 align="center">
                                <tr>
                                  <td width=50 colspan=6 style="background-color: rgba(0,128,128,0.7);"><font color="white"><b><center>Gabarito Oficial</b></font></td>
                                </tr>
                                <tr>
                                  <td width=50><font color="#000000"><center>1</font></td>
                                  <td width=50><font color="#000000"><center>2</font></td>
                                  <td width=50><font color="#000000"><center>3</font></td>
                                  <td width=50><font color="#000000"><center>4</font></td>
                                  <td width=50><font color="#000000"><center>5</font></td>
                                </tr>
                                <tr>
                                  <td style="color: black;"><VALUE  type="textfield" style="text-align:center" name="questao1" id="questao1" size="2" maxlength="1"/><center> B</td>
                                  <td style="color: black;"><VALUE  type="textfield" style="text-align:center" name="questao2" id="questao2"size="2" maxlength="1"/><center> C</td>
                                  <td style="color: black;"><VALUE type="textfield" style="text-align:center" name="questao3" id="questao3"size="2" maxlength="1"/><center> B</td>
                                  <td style="color: black;"><VALUE type="textfield" style="text-align:center" name="questao4" id="questao4"size="2" maxlength="1"/><center> A</td>
                                  <td style="color: black;"><VALUE type="textfield" style="text-align:center" name="questao5" id="questao5"size="2" maxlength="1"/><center> D</td>
                                </tr>
                                </table></div></div>

                                <br><div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-9">
                                    <table border=1 align="center">
                                    <tr>
                                      <td width=50 colspan=6 style="background-color: rgba(0,128,128,0.7);"><font color="white"><b><center>Gabarito do Aluno</b></font></td>
                                    </tr>
                                    <tr>
                                      <td width=50><font color="#000000"><center>1</font></td>
                                      <td width=50><font color="#000000"><center>2</font></td>
                                      <td width=50><font color="#000000"><center>3</font></td>
                                      <td width=50><font color="#000000"><center>4</font></td>
                                      <td width=50><font color="#000000"><center>5</font></td>
                                    </tr>
                                    <tr>
                                      <td style="color: black;"><input type="textfield" style="text-align:center" name="questao1" id="questao1" size="2" maxlength="1"/></td>
                                      <td style="color: black;"><input type="textfield" style="text-align:center" name="questao2" id="questao2"size="2" maxlength="1"/></td>
                                      <td style="color: black;"><input type="textfield" style="text-align:center" name="questao3" id="questao3"size="2" maxlength="1"/></td>
                                      <td style="color: black;"><input type="textfield" style="text-align:center" name="questao4" id="questao4"size="2" maxlength="1"/></td>
                                      <td style="color: black;"><input type="textfield" style="text-align:center" name="questao5" id="questao5"size="2" maxlength="1"/></td>
                                    </tr>
                                    </table></div></div>



                                <div class="col-md-3"></div>
                                <div class="col-md-5">
                                <br><table border=1>
                                <tr>
                                  <td width=50 colspan=6 style="background-color: rgba(0,128,128,0.7);"><font color="white"><b><center>Resultado</b></font></td>
                                </tr>
                                <tr>
                                  <td width=50><font color="#000000"><center>1</font></td>
                                  <td width=50><font color="#000000"><center>2</font></td>
                                  <td width=50><font color="#000000"><center>3</font></td>
                                  <td width=50><font color="#000000"><center>4</font></td>
                                  <td width=50><font color="#000000"><center>5</font></td>
                                </tr>
                                <tr>
                                  <td width=50><font name="notaQ1" id="notaQ1"color="#000000"><center>0,0</font></td>
                                  <td width=50><font name="notaQ2" id="notaQ2"color="#000000"><center>0,0</font></td>
                                  <td width=50><font name="notaQ3" id="notaQ3"color="#000000"><center>0,0</font></td>
                                  <td width=50><font name="notaQ4" id="notaQ4"color="#000000"><center>0,0</font></td>
                                  <td width=50><font name="notaQ5" id="notaQ5"color="#000000"><center>0,0</font></td>
                                </tr>

                                </table></div><br>

                                 <table border=1>
                                <tr>
                                  <td width=50 colspan=6 style="background-color: rgba(0,128,128,0.7);"><font color="white"><b><center>Nota</b></font></td>
                                </tr>
                                <tr>
                                  <td width=50 name="notaDG" id="notaDG"><font color="#000000"><center>0,0</font></td>
                                </tr>

                                </table>
                                <br>

                            <br>
                            </div><br>
                            <div class="col-md-1"></div>
                            <label for="exampleInputEmail1"><font color="#000000"><u>Correção Discursiva:</u></font></label><br>

                            <div class="row">
                            <br><div class="col-md-1"></div>

                            <label for="exampleInputEmail1"><font color="#000000"><u>Nota:</u></font></label>
                            <input name="respQ" id="respQ" style="color: black;" type="textfield" size="1" maxlength="3"/>

                            </div><br>

                            <br><div class="row">
                            <div class="col-md-1"></div>
           <div class="col-md-10">
                <textarea class="form-control" rows="4" style="resize: none;!important"></textarea>
           </div>
        </div><br>

                            <div align="center">
                            <button type="submit" class="btn btn-default">Salvar Correção</button>
                            <button type="button" class="btn btn-default">Cancelar</button>
                            </div><br>

                            </div>
                        </div>
                    </div>

      </form>

            </div>
              </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
