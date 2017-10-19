<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Acesso ao bd</title>
</head>

<body>
<p>Curso Unity Web - UDESC - 2017-2</p>
<p>Acesso ao Banco de Dados do Servidor do Jogo</p>
<p></p>
<form id="form1" name="form1" method="post" action="insere.php">
  <p>INSERE:</p>
  <p>
    <label for="textfield">nome</label>
    <input type="text" name="textfield" id="textfield" />
    <label for="textfield2">login</label>
    <input type="text" name="textfield2" id="textfield2" />
    <label for="textfield3">senha</label>
    <input type="text" name="textfield3" id="textfield3" />
    <label for="textfield4">score</label>
    <input type="text" name="textfield4" id="textfield4" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Insere" />
  </p>
</form>
<br />
<br />
<br />

<p></p>
<form id="form2" name="form2" method="post" action="">
  <p>ATUALIZA:</p>
  <p>
    <label for="textfield2">nome</label>
    <input type="text" name="textfield5" id="textfield2" />
    <label for="textfield3">login</label>
    <input type="text" name="textfield5" id="textfield3" />
    <label for="textfield4">senha</label>
    <input type="text" name="textfield5" id="textfield4" />
    <label for="textfield5">score</label>
    <input type="text" name="textfield5" id="textfield5" />
  </p>
  <p>
    <label for="textfield10">where</label>
    <input type="text" name="textfield10" id="textfield10" />
  </p>
  <p>
    <input type="submit" name="button2" id="button2" value="Atualiza" />
  </p>
  
  
</form>

 <br />
 <br />
 <br />
  
  
<form id="form3" name="form2" method="post" action="">
  <p>DELETA:</p>
  <p>
    <label for="textfield6">nome</label>
    <input type="text" name="textfield6" id="textfield6" />
    <label for="textfield7">login</label>
    <input type="text" name="textfield6" id="textfield7" />
    <label for="textfield8">senha</label>
    <input type="text" name="textfield6" id="textfield8" />
    <label for="textfield9">score</label>
    <input type="text" name="textfield6" id="textfield9" />
  </p>
  <p>
    <label for="textfield10">where</label>
    <input type="text" name="textfield7" id="textfield10" />
  </p>
  <p>
    <input type="submit" name="button3" id="button3" value="Deleta" />
  </p>
</form>
 <br />
  <br />
  <br />
  
<form id="form4" name="form2" method="post" action="">
  <p>SELECIONA:</p>
  <p>
    <label for="textfield10">nome</label>
    <input type="text" name="textfield8" id="textfield10" />
    <label for="textfield11">login</label>
    <input type="text" name="textfield8" id="textfield11" />
    <label for="textfield12">senha</label>
    <input type="text" name="textfield8" id="textfield12" />
    <label for="textfield13">score</label>
    <input type="text" name="textfield8" id="textfield13" />
  </p>
  <p>
    <label for="textfield14">where</label>
    <input type="text" name="textfield8" id="textfield14" />
  </p>
  <p>
    <input type="submit" name="button4" id="button4" value="Seleciona" />
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>