<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>

<h1>Formulario</h1>    
    <form action="envio.php" method="get">
        <div class="form"> 
        <fieldset class="contaiter">
        <!-- required= para ser obrigatorio usuario preencher, placeholder= ficar nome dentro caixa , size= tamanho, maxlength= numeros caracteres--> 

    Nome:<input type="text" name="nome" id="nome" required placeholder="Digite o nome" size="40" maxlength="50">
    
    <label for="ida">Idade</label> 
    <input type="number" name="idade" id="idade" required placeholder="Escolha sua idade"><br> <br>
 
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required placeholder="Digite seu email" size="40">
    
    <label for="passaword">Senha</label>
    <input type="password" name="senha" id="passaword" required placeholder="Digite sua senha"><br><br>

    <label for="dat">Data de Nascimento</label>
    <input type="date" name="dat" id="dat" required>
    
    <label for="hora">Horario</label>
    <input type="time" name="hora" id="hora" required> <br><br>

    <!--<label for="arquivo">Arquivo</label>
    <input type="file" name="arquivo" id="arquivo" required><br><br> -->

    <label for="nivel">Nível</label>
    <input type="range" name="nivel" id="nivel" min="1" max="4" step="1" required> <br> <br>

    Gênero <br>
    <label for="sexo">Masculino</label>
    <input type="radio" value="masc" id="masc" name="sexo">
    <label for="sexo">Femenino</label>
    <input type="radio" value="fem" id="fem" name="sexo">
    <label for="meu">Neutro</label>
    <input type="radio" value="neutro" id="neutro" name="sexo">

    <br><br>Hoobs <br>
    <label for="hobby">Gamer</label>
    <input type="checkbox" name="hobby" id="game" checked><br>

    <label for="hobby">Esporte</label>
    <input type="checkbox" name="hobby" id="esporte"><br>

    <label for="hobby">Balada</label>
    <input type="checkbox" name="hobby" id="balada"><br><br>
 
    <label for="buscar">Buscar</label>
    <input type="search" name="buscar" id="buscar"><br><br>

    Escolha sua cidade<select id="cidade" name="cidade">
        <option ------------------></option>
        <option value="bh">Belo Horizonte</option>
        <option value="sp">São Paulo</option>
        <option value="ba">Bahia</option>
        <option value="rj">Rio de Janeiro</option>
    </select><br><br>
    
    <textarea name="areatexto" id="area" cols="50" rows="8" placeholder="Deixa sua mensagem aqui"></textarea>
    
    <!--<label for="color">Cor</label>
    <input type="color" color="cor" id="cor" required placeholder="Escolha sua cor">-->

    <br> <br> <br>

    <input type="submit" value="Enviar">
    <input type="reset" value="Limpar">
    <button>Salvar</button>
        
    </fieldset>
    </form>
 </div>   
    
</body>
</html>