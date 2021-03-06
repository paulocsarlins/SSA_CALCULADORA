<?php

    session_start();
    if(!isset($_SESSION['id_usuario'])){
        header("location: login.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Calculadora Seriado - UPE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.3/jquery.mask.min.js"></script>
  <script src="compressed.js" type="text/javascript"></script>
  
  <style>
    img#logoUpe{
      position: absolute;
      height: 350px;
      width: 350px;
  }

    img#logoVest{
      width: 100%;
      height: 100%;
      opacity:.50;
      position: absolute;
  }

    .container{
      position: relative;
      z-index: 9999;
  }
  </style>
  
  <script>
 
   function myFunction() {
    
    window.print();
   
  }

   function printFunc() {
    var divToPrint = document.getElementById('printarea');
    var htmlToPrint = '' +
        '<style type="text/css">' +
        'table th, table td {' +
        'border:1px solid #000;' +
        'padding;0.5em;' +
        '}' +
        '</style>';
    htmlToPrint += divToPrint.outerHTML;
    newWin = window.open("");
    newWin.document.write("<h3 align='center'>Print Page</h3>");
    newWin.document.write(htmlToPrint);
    newWin.print();
    newWin.close();
    }
   </script>

</head>
<body>

	<div>
  		<img src="img/img-upe.png" alt="" id="logoUpe">
  	</div>
  	<div>
  		<img src="img/vestibular.jpg" alt="" id="logoVest">
  	</div>

<div class="container">
	

<div class="panel panel-primary" >
<div class="panel-heading"><b>Calculadora Vestibular Seriado SSA3 - (UPE) v1.4</b></div>

<form  action="" style="margin-left:1%;margin-right:1%;">

<div class="form-group">
    <label for="ex1">Cotista:</label> 
	<div class="form-group">
    <label for="radio-1">Sim</label>
    <input type="radio" name="radio-1" id="radio-1">
    <label for="radio-2">Não</label>
    <input type="radio" name="radio-1" id="radio-2" checked="checked">
	</div>
</div>	

<div class="form-group">
 <label id="lbNaoCotista" for="ex1">Disciplina:</label> 
 <select id="cboMateria" name="cboMateria" class="form-control" >
   <option value="-1">Selecione...</option>
   <optgroup label="Campus Benfica">
   <option value="61.74">Administração (Bacharelado Manhã)</option>
   <option value="58.84">Administração (Bacharelado Noite)</option>
   <option value="72.67">Direito (Bacharelado)</option>
   <option value="63.40">Eng. Civil (Bacharelado Manhã)</option>
   <option value="59.34">Eng. Civil (Bacharelado Tarde/Noite)</option>
   <option value="62.04">Eng. Automação e Controle</option>
   <option value="64.24">Eng. Elétrica Eletrônica</option> 
   <option value="58.94">Eng. Elétrica Eletrotécnica</option>
   <option value="63.97">Eng. Mecânica Industrial</option>
   <option value="51.50">Eng. Elét. Telecomunicações</option>
   <option value="69.67">Eng. da Computação</option>
   <option value="58.10">Física de Materiais</option>
 </optgroup>
 <optgroup label="Campus Santo Amaro">
   <option value="54.04">Educação Física (Bacharelado)</option>
   <option value="49.20">Educação Física (Licenciatura)</option>
   <option value="78.70">Medicina (Bacharelado)</option>
   <option value="57.60">Enfermagem (Bacharelado)</option>
   <option value="60.77">Ciência Biológicas (Bacharelado Diurno)</option> 
   <option value="58.37">Ciência Sociais (Licenciatura)</option> 
   <option value="52.17">Saúde Coletiva (Bacharelado)</option> 
 </optgroup>
 <optgroup label="Campus Camaragibe">
   <option value="62.84">Odontologia (Bacharelado)</option>
 </optgroup>
 <optgroup label="Campus Garanhuns">
   <option value="42.64">Letras Português e suas Literaturas (Licenciatura)</option>
   <option value="42.87">História (Licenciatura)</option>
   <option value="25.24">Geografica (Licenciatura)</option>
   <option value="36.34">Pedagogia (Licenciatura)</option>
   <option value="45.64">Ciências Biológicas(Licenciatura)</option> 
   <option value="75.60">Medicina</option>
   <option value="62.50">Psicologia (Bacharelado)</option>
   <option value="40.67">Computação (Licenciatura)</option>
   <option value="43.50">Matemática (Licenciatura)</option>
   <option value="60.70">Eng. Software (Bacharelado)</option>
 </optgroup>
 <optgroup label="Campus Caruaru">
   <option value="50.30">Administração(com ênfase em Markerting de Moda)</option>
   <option value="53.94">Sistema de Informação</option>
 </optgroup>
 <optgroup label="Campus Salgueiro">
  <option value="42.10">Administração (Bacharelado)</option>
 </optgroup>
 <optgroup label="Campus Mata Norte">
   <option value="38.14">Pedagogia (Licenciatura)</option>
   <option value="45.57">Ciências Biológicas (Licenciatura Noite)</option>
   <option value="44.67">Ciências Biológicas (Licenciatura Tarde)</option> 
   <option value="47.20">Matemática (Licenciatura Noite)</option>
   <option value="43.94">Matemática (Licenciatura Tarde)</option>
   <option value="46.50">Letras (Port. e Inglês e suas Literaturas) (Licenciatura)</option>
   <option value="41.57">Letras (Espanhol e suas Literaturas) (Licenciatura)</option>
   <option value="50.14">História (Licenciatura)</option>
   <option value="33.10">Geografia (Licenciatura)</option>
   <option value="27.47">Gestão em Logística (Tecnológico)</option>
 </optgroup>
 <optgroup label="Campus Mata Sul">
   <option value="33.57">Gestão em Logística (Tecnológico)</option>
   <option value="32.07">Serviço Social (Bacharelado)</option>
   <option value="42.34">Administração (Bacharelado)</option>
 </optgroup>

 <optgroup label="Campus Petrolina">
   <option value="20.20">Pedagogia (Licenciatura Noite)</option>
   <option value="29.47">Pedagogia (Licenciatura Tarde)</option>
   <option value="25.37">Letras Português/Inglês (Licenciatura Noite)</option>
   <option value="36.74">Letras Português/Inglês (Licenciatura Tarde)</option>
   <option value="23.27">Letras Português/Espanhol (Licenciatura Noite)</option>
   <option value="23.20">Letras Português/Espanhol (Licenciatura Tarde)</option>  
   <option value="32.60">Ciência Biológicas(Licenciatura Noite)</option>
   <option value="34.47">Ciência Biológicas(Licenciatura Tarde)</option> 
   <option value="38.44">Geografia (Licenciatura Tarde)</option>
   <option value="22.40">Geografia (Licenciatura Noite)</option>
   <option value="27.27">História (Licenciatura Tarde)</option>
   <option value="29.57">História (Licenciatura Noite)</option>
   <option value="53.07">Fisioterapia (Bacharelado)</option>
   <option value="50.87">Enfermagem (Bacharelado)</option>
   <option value="52.37">Nutrição (Bacharelado)</option>
   <option value="52.04">Matemática (Licenciatura) </option>
 </optgroup>

 <optgroup label="Campus Arcoverde">
   <option value="61.17">Direito</option>
   <option value="60.90">Odontologia</option>
 </optgroup>
 <optgroup label="Campus Serra Talhada">
   <option value="75.47">Medicina (Bacharelado)</option>
 </optgroup>


 </select>
  <label id="lbCotista" for="ex1">Disciplina:</label> 
 <select id="cboMateriaCotista" name="cboMateria" class="form-control" >
  <option value="-1">Selecione...</option>
 
 <optgroup label="Campus Benfica">
   <option value="46.77">Administração (Bacharelado Manhã)</option>
   <option value="46.24">Administração (Bacharelado Noite)</option>
   <option value="62.77">Direito (Bacharelado)</option>
   <option value="51.70">Eng. Civil (Bacharelado Manhã)</option>
   <option value="45.17">Eng. Civil (Bacharelado Tarde/Noite)</option>
   <option value="51.40">Eng. Automação e Controle</option>
   <option value="49.10">Eng. Elétrica Eletrônica</option> 
   <option value="43.80">Eng. Elétrica Eletrotécnica</option>
   <option value="50.80">Eng. Mecânica Industrial</option>
   <option value="41.40">Eng. Elét. Telecomunicações</option>
   <option value="52.00">Eng. da Computação</option>
 </optgroup>

 <optgroup label="Campus Santo Amaro">
   <option value="45.04">Educação Física (Bacharelado)</option>
   <option value="42.20">Educação Física (Licenciatura)</option>
   <option value="68.70">Medicina (Bacharelado)</option>
   <option value="55.60">Enfermagem (Bacharelado)</option>
   <option value="58.77">Ciência Biológicas (Bacharelado Diurno)</option> 
   <option value="58.37">Ciência Sociais (Licenciatura)</option> 
   <option value="50.17">Saúde Coletiva (Bacharelado)</option> 
 </optgroup>

 <optgroup label="Campus Camaragibe">
   <option value="49.84">Odontologia (Bacharelado)</option>
 </optgroup>

 <optgroup label="Campus Garanhuns">
   <option value="43.67">Letras Português e suas Literaturas (Licenciatura)</option>
   <option value="32.40">História (Licenciatura)</option>
   <option value="24.20">Geografica (Licenciatura)</option>
   <option value="33.34">Pedagogia (Licenciatura)</option>
   <option value="37.07">Ciências Biológicas (Licenciatura)</option> 
   <option value="63.34">Medicina (Bacharelado)</option>
   <option value="52.07">Psicologia (Bacharelado)</option>
   <option value="34.64">Computação (Licenciatura)</option>
   <option value="41.27">Matemática (Licenciatura)</option>
   <option value="32.64">Eng. de Software (Bacharelado)</option>
 </optgroup>

 <optgroup label="Campus Caruaru">
   <option value="41.90">Administração (com ênfase em Markerting de Moda)</option>
   <option value="46.50">Sistema de Informação</option>
 </optgroup>

 <optgroup label="Campus Salgueiro">
  <option value="31.10">Administração (Bacharelado)</option>
 </optgroup>

 <optgroup label="Campus Mata Norte">
   <option value="36.14">Pedagogia (Licenciatura)</option>
   <option value="45.57">Ciência Biológicas (Licenciatura Noite)</option>
   <option value="47.14">Ciência Biológicas (Licenciatura Tarde)</option> 
   <option value="47.20">Matemática (Licenciatura Noite)</option>
   <option value="43.94">Matemática (Licenciatura Tarde)</option>
   <option value="38.74">Letras (Port. e Inglês e suas Literaturas) (Licenciatura)</option>
   <option value="41.57">Letras (Espanhol e suas Literaturas) (Licenciatura)</option>

   <option value="47.74">História (Licenciatura)</option>
   <option value="38.17">Geografica (Licenciatura)</option>
   <option value="40.44">Gestão em Logística (Tecnológico)</option>
 </optgroup>
 <optgroup label="Campus Mata Sul">
   <option value="33.57">Gestão em Logística (Tecnológico)</option>
   <option value="32.07">Serviço Social (Bacharelado)</option>
   <option value="39.34">Administração (Bacharelado)</option>
 </optgroup>

 <optgroup label="Campus Petrolina">
   <option value="20.20">Pedagogia (Licenciatura Noite)</option>
   <option value="29.47">Pedagogia (Licenciatura Tarde)</option>
   <option value="25.37">Letras Português/Inglês (Licenciatura Noite)</option>
   <option value="36.74">Letras Português/Inglês (Licenciatura Tarde)</option>
   <option value="23.27">Letras Português/Espanhol (Licenciatura Noite)</option>
   <option value="23.20">Letras Português/Espanhol (Licenciatura Tarde)</option>  
   <option value="32.60">Ciência Biológicas(Licenciatura Noite)</option>
   <option value="34.47">Ciência Biológicas(Licenciatura Tarde)</option> 
   <option value="38.44">Geografica (Licenciatura Tarde)</option>
   <option value="22.40">Geografica (Licenciatura Noite)</option>
   <option value="27.27">História (Licenciatura Tarde)</option>
   <option value="29.57">História (Licenciatura Noite)</option>
   <option value="50.07">Fisioterapia (Bacharelado)</option>
   <option value="48.87">Enfermagem (Bacharelado)</option>
   <option value="48.37">Nutrição (Bacharelado)</option>
   <option value="52.04">Matemática (Licenciatura) </option>
 </optgroup>

 <optgroup label="Campus Arcoverde">
   <option value="55.94">Direito</option>
   <option value="52.00">Odontologia</option>
 </optgroup>
 <optgroup label="Campus Serra Talhada">
   <option value="72.47">Medicina (Bacharelado)</option>
 </optgroup>
</select>
</div>

<div id="printarea" class="form-group row">
<div class="col-xs-4">
 <label for="ex1">Nota do Primeiro Ano(SSA1):</label> 
 <input type="text" id="notaserial1" maxlength="5" size="5" class="form-control" placeholder="Nota do Primeiro Ano">
 </div> 
<div class="col-xs-4">
  <label for="ex1">Nota do Segundo Ano(SSA2):</label> 
  <input type="text" id="notaserial2" maxlength="5" size="5" class="form-control" placeholder="Nota do Segundo Ano">
</div> 
<div class="col-xs-4"> 
  <label for="ex1">Nota do Terceiro Ano(SSA3):</label> 
  <input type="text" id="notaserial3" maxlength="5" size="5" class="form-control" placeholder="Nota do Terceiro Ano:" disabled>
 </div>
 <br><br><br>
<div id="msgAprovado" class="col-xs-6">
   <h2 style="color:#003eff;"><b>Aprovado!!!</b></h2>
 </div>
</div> 
<br>
</form>
</div>
<button type="button" class="btn btn-primary" id="btnSeriado"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Calcular</button>
<button type="button" class="btn btn-primary hidden-print" id="btnImprimir" onclick="myFunction();"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir</button>
<button type="button" class="btn btn-primary" id="btnLimpar"><span class="glyphicon glyphicon-erase" aria-hidden="true"> Limpar</button>
<button type="button" class="btn btn-warning" id="btnNotas" onclick="window.open('https://nota-ssa.firebaseapp.com/folder/Inbox')"><span aria-hidden="true" class="glyphicon glyphicon-pencil"></span> Notas</button>
<a class="btn-sair" href="sair.php">
    <button type="button" class="btn btn-danger">Sair</button>
</a>
</div>
<br>


<div>

</div>
<div class="container">
  <div id="divResultado" class="panel panel-default"  >
  <div class="panel-heading" style="color:#337ab7"><b>Resultado SSA3 - (UPE) v1.4</b></div>
  <div class="panel-body">
    <div class="row">
            <div class="col-6 col-md-4">Nota do primeiro Ano (SSA1):</div><div id="divSSA1" class="col-md-6"></div>
			<div class="col-6 col-md-4">Nota do Segundo Ano (SSA2):</div><div id="divSSA2" class="col-md-6"></div>
			<div class="col-6 col-md-4">Nota do Terceiro Ano (SSA3):</div><div id="divSSA3" class="col-md-6"></div>
			<div class="col-6 col-md-4">Nota Final (SS3):</div><div id="divFinal" class="col-md-6"></div>
			<div class="col-6 col-md-4">Classificação:</div><h4 class="col-md-6" style="color:#003eff;"><b>Aprovado!!!</b></h4></div>
    </div>
  </div>
  
</div>  


</body>
</html>