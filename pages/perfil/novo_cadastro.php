<?php include '../../php/connection.php'; ?>
<?php session_start();
   if(!isset($_SESSION["matricula"]) || !isset($_SESSION["senha"])){
       header("Location: ../../index.php");exit();}
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de itens</title>
        <link rel="stylesheet" type="text/css" href="../../css/style_profile.css"/> 
        <script src="../../js/plugins/jquery.js"> </script>   
        <script src="../../js/jquery/jarvis.js"> </script>   
    </head>
    <body>    
<div class="nav">
<div id="div_img"><img id="user_img" src="../../imgs/user.png"></div>     
<p id="name_user"><?php echo $_SESSION['nome']; ?></p>    
<ul id="menu">
<li><a href="perfil.php">Perfil</a></li>
<li class="selected"><a href="#">Cadastros</a>
 <ul id="sub_menu_c">
  <li><a href="novo_cadastro.php">Novo</a></li>
  <li><a href="cadastros.php">Visualizar</a></li>
 </ul>
</li>
<li><a href="#">Agendamentos</a>
 <ul id="sub_menu_a">
  <li><a href="novo_agendamento.php">Novo</a></li>
  <li><a href="agendamentos.php">Visualizar</a></li>
 </ul>
</li>
<li><a href="../../php/logout.php">Sair</a></li>
</ul>
</div>
<div id="content_profile">
 <p id="title_page">Cadastre um novo item agora</p> 
 
 <form method="post" action="../../php/functions.php" id="form_cadastre">   
       <p>Data de recebimento do item</p>
       <input class="input-text" name="date" type="date" required>
       <p>Tipo de material</p>
        <input type="radio" name="iten-type" value="Permanente" id="radio_permanente" class="input-radio"required>  
        <label for="radio_permanente">Permanente</labe>
        <br>
        <input type="radio" name="iten-type" value="Consumo" id="radio_consumo" class="input-radio" require>
        <label for="radio_consumo">Consumo</label>
       <p>Descrição</p>
       <textarea name="description" id="description" ></textarea>
       <p>Unidade</p>
        <input type="radio" name="iten-unit" value="kg" id="kg" class="input-radio"required>  
        <label for="kg">Kg</label>
        <br>
        <input type="radio" name="iten-unit" value="caixas" id="box" class="input-radio" require>
        <label for="box">Caixas</label>
        <br>
        <input type="radio" name="iten-unit" value="litros" id="liter" class="input-radio"required>
        <label for="liter">Litros</label>  
        <br>
        <input type="radio" name="iten-unit" value="pacotes" id="package" class="input-radio" require>
        <label for="package">Pacotes</label>
        <br>
        <input type="radio" name="iten-unit" value="outro" id="other" class="input-radio" required>  
        <label for="other">Outro</label>
        <input type="text" name="other_unit" id="other_unit" class="input-text" placeholder="Digite outra unidade" require>
        <p>Quantidade</p>
        <input id="amount" name="amount" class="input-text" type="text" required>
        <p>Valor unitário (R$)</p>
        <input id="unit-cost" name="unit-cost" class="input-text" type="text" required>
        <p>Quantidade mínina no estoque</p>
        <input id="min-amount" name="min-amount" class="input-text" type="text" requited>
        <p>Palavras chave para a busca</p>
        <span id="legend">Selecione as palavras chaves para busca futura deste item</span>
        <br>
        <input type="radio" name="key-words" value="Transistor" id="Transistor" class="input-check" >
        <label class="key-words" for="Transistor">Transistores</label>
        <br>
        <input type="radio" name="key-words" value="Resistores" id="Resistores" class="input-check" >
        <label class="key-words" for="Resistores">Resistores</label>
        <br>
        <input type="radio" name="key-words" value="Circuito integrados" id="Circuito_integrados" class="input-check" >
        <label class="key-words" for="Circuito_integrados">Circuito integrados</label>
        <br>
        <input type="radio" name="key-words" value="Instrumentos" id="Instrumentos" class="input-check" >   <label class="key-words" for="Instrumentos">Instrumentos</label>
        <br>
        <input type="radio" name="key-words" value="Ferramentas" id="Ferramentas" class="input-check">
        <label class="key-words" for="Ferramentas">Ferramentas</label>
        <br>
        <input type="radio" name="key-words" id="Mais" value="mais" class="input-check">
        <label class="key-words" for="Mais">Mais</label>
        <input type="text" name="more" id="more" class="input-text" placeholder="Digite outra opção de palavra chave..." >


        <p>Fornecedor principal</p>
        <input type="text" name="provider" class="input-text" required>  
        <input class="btn" type="submit" id="cadastre-btn" name="cadastrar" value="Salvar">
 </form>
</div>
 <div id="footer_profile">
  <a href="http://portal.ifrn.edu.br/" target="_blank"><img id="icon_if" src="../../imgs/IFRN_Logo.png"></a>
  <p id="copyright">©Copyright IFRN <br></p>
  <p id="developer_details">Desenvolvedor: Carlos Henrique<br>
  <a href="https://github.com/Karth" target="_blank"><img id="icon_git" class="img_contact" src="../../imgs/Github.png"></a>
  <a href="https://www.facebook.com/carlos.henry.562" target="_blank"><img id="icon_face" class="img_contact" src="../../imgs/facebook.ico"></a></p>
  </div>   
</body>
</html>
