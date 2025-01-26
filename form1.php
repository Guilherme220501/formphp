<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta name="theme-color" content="#f4443">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
body{margin: auto;align-items: center;justify-content: center;text-align: center;background: linear-gradient(to right,white,black,white);}
h1{font-size: 30px;font-family: Arial, Helvetica, sans-serif;font-style: oblique;text-shadow:9px;text-decoration: underline;color: white;white-space: nowrap;}
h2{font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;text-shadow:9px;text-decoration: none;color: black;white-space: nowrap;}
a{font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: italic;text-shadow:9px;text-decoration: none;border-radius: 10px 10px;}
p{font-size: 16px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-style: oblique;text-shadow:9px;text-decoration: none;color: white;}
.footer:hover{transition:ease s;transform:scale(1.06)}
.nav:hover{transition:ease s;transform:scale(1.05)}
.summary:hover{transition:ease s;transform:scale(1.03)}
footer{align-items: center;justify-content: center;text-align: center;margin: auto;border-radius: 10px 10px;width: 300px;padding: 30px;border: 5px solid white;cursor: grabbing;border-radius: 10px 10px;box-shadow: 4px 4px 4px black;}
nav{align-items: center;justify-content: center;text-align: center;margin: auto;border-radius: 10px 10px;width: 300px;padding: 30px;border: 5px solid whitesmoke;cursor: grabbing;border-radius: 10px 10px;box-shadow: 4px 4px 4px black;}
summary{cursor: grab;width: 100px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: white;color: red;border: 4px solid black;box-shadow: 5px 5px 5px black;text-shadow: 9px;}
form{display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;margin: auto;}
fieldset{cursor: grabbing;padding: 15px;margin: auto;border-radius: 10px 10px;width: 300px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;background-color: whitesmoke;border: 4px solid black;box-shadow: 5px 5px 5px red;}
label{display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;padding: 20px;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;color: black;text-shadow: 9px;cursor: e-resize;}
.color1{gap:6px;padding:10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;cursor:grab;margin:auto;width:800px;border-radius:10px 10px;background-color:darkblue;border:6px solid whitesmoke;box-shadow:6px 6px 6px black;}
.color2{gap:6px;padding:10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;cursor:grab;margin:auto;width:800px;border-radius:10px 10px;background-color:darkred;border:6px solid whitesmoke;box-shadow:6px 6px 6px black;}
.color3{gap:6px;padding:10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;cursor:grab;margin:auto;width:800px;border-radius:10px 10px;background-color:darkorange;border:6px solid whitesmoke;box-shadow:6px 6px 6px black;}
.color4{gap:6px;padding:10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;cursor:grab;margin:auto;width:800px;border-radius:10px 10px;background-color:darkolivegreen;border:6px solid whitesmoke;box-shadow:6px 6px 6px black;}
.color5{gap:6px;padding:10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;cursor:grab;margin:auto;width:800px;border-radius:10px 10px;background-color:darkslateblue;border:6px solid whitesmoke;box-shadow:6px 6px 6px black;}
input{cursor: move;width: 300px;margin: auto;border-radius: 10px 10px;padding: 4px;text-align: left;text-shadow: 9px;display: flex;flex-direction: column;background-color: whitesmoke;color: black;border: 4px solid red;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;}
select{cursor: context-menu;width: 200px;margin:auto;border-radius: 10px 10px;padding: 5px;font-size: 18px;font-family: Arial, Helvetica, sans-serif;font-style: oblique;background-color: black;color: white;border: 4px solid white;box-shadow: 4px 4px 4px yellow;text-shadow: 9px;}
textarea{cursor: context-menu;height: 200px;width: 300px;margin: auto;border-radius: 10px 10px;padding: 13px;font-size: 16px;font-family: Arial, Helvetica, sans-serif;font-style: oblique;background-color: wheat;border: 3px solid black;color: black;}
button{cursor: progress;width: 280px;margin: auto;border-radius: 10px 10px;padding: 6px;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: blue;color: white;border: 4px solid whitesmoke;box-shadow: 6px 6px 6px black;}
</style>
<body>
    <h1><big>Bem vindo</big></h1>
    <br>
    <p id="log"></p>
    <br>
    <p id="script"></p>
    <br>
    <p id="hello"></p>
    <br>
    <p id="alert"></p>
    <br>
    <p id="window"></p>
    <br>
    <p id="linux"></p>
    <br>
    <p id="power"></p>
    <br>
    <p id="bi"></p>
    <br>
    <p id="id"></p>
    <br>
    <div id="text"><details><summary style="width:300px;background-color:blue;color:white;border:4px solid white;box-shadow:5px 5px 5px black;">Formulário</summary>
    <br>
    <form action="form1.php" method="post">
    <header><h1><big>Cadastro de <b>BRS</b></big></h1></header>
    <main>
    <fieldset>
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="Nome" title="Digite o seu Nome" placeholder="Exemplo: Guilherme Barbosa da Silva;" max="30" maxlength="30" required>
    <label for="Idade">Idade</label>
    <input type="number" name="idade" id="Idade" title="Digite a sua Idade" placeholder="Exemplo: 23 ou 39 anos ?;" max="30" maxlength="30">
    <label for="Etnia">Etnia</label>
    <select name="etnia" id="Etnia" required style="width:140px;padding:3px;font-size:14px;background-color:white;color:black;border:3px solid red;box-shadow:5px 5px 5px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Amarela">Amarela</option>
    <option value="Branca">Branca</option>
    <option value="Parda">Parda</option>
    <option value="Negra">Negra</option>
    <option value="Cinza">Cinza</option>
    <option value="Nenhuma">Nenhuma</option>
    </select>
    <br>
    <label for="Email">Email</label>
    <input type="email" name="email" id="Email" title="Digite o seu Email" placeholder="Exemplo: guilherme8876sk@gmail.com;" max="30" maxlength="30" required>
    <label for="Telefone">Telefone</label>
    <input type="tel" name="telefone" id="Telefone" title="Digite o seu Telefone" placeholder="Exemplo: (11) 98341-7590;" max="30" maxlength="30" required>
    <label for="Sexo">Sexo</label>
    <select name="genero" id="Sexo" required style="width:150px;padding:3px;font-size:14px;background-color:white;color:blue;border:3px solid black;box-shadow:4px 4px 4px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Agênero">Agênero</option>
    <option value="Bigênero">Bigênero</option>
    <option value="Transgênero">Transgênero</option>
    <option value="Cisgênero">Cisgênero</option>
    </select>
    <br>
    <label for="RG">RG</label>
    <input type="text" name="rg" id="RG" title="Digite o seu RG" placeholder="Exemplo: 53.742.867-7;" max="30" maxlength="30" required>
    <label for="CPF">CPF</label>
    <input type="text" name="cpf" id="CPF" title="Digite o seu CPF" placeholder="Exemplo: 503.552.748-41;" max="30" maxlength="30" required>
    <label for="Estado civil">Estado civil</label>
    <select name="estado_civil" id="Estado civil" required style="width:160px;padding:3px;font-size:13px;color:red;background-color:white;border:4px solid black;box-shadow:4px 4px 4px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Solteiro">Solteiro</option>
    <option value="Casado">Casado</option>
    <option value="Divorciado">Divorciado</option>
    <option value="Separado">Separado</option>
    <option value="Víuvo">Víuvo</option>
    <option value="Compromissado">Compromissado</option>
    </select>
    <br>
    <label for="Endereço">Endereço</label>
    <input type="text" name="endereco" id="Endereço" title="Digite o seu Endereço" placeholder="Exemplo: Av Rio da Pedras Nª4100;" max="30" maxlength="30" required>
    <label for="CEP">CEP</label>
    <input type="text" name="cep" id="CEP" title="Digite o seu CEP" placeholder="Exemplo: 03936-000;" max="30" maxlength="30" required>
    <label for="Data de nascimento">Data de nascimento</label>
    <input type="date" name="data_nasc" id="Data de nascimento" title="Digite a sua Data de nascimento" placeholder="Exemplo: 22/05/2001;" max="30" maxlength="30" required>
    <label for="Nível">Nível</label>
    <input type="range" name="nivel" id="Nível" title="Digite o seu Nível" placeholder="Exemplo: +/-;" max="30" maxlength="30" required>
    <label for="Data e Hora">Data e Hora</label>
    <input type="datetime-local" name="data_hora" id="Data e Hora" title="Digite a sua Data e Hora" placeholder="Exemplo: 22/05 ás 10:00 AM;" max="30" maxlength="30" required>
    <br>
    <br>
    <h2><big>Qual o seu nível de conhecimento ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color1">
    <label for="Aprendiz" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Aprendiz</label>
    <input type="radio" name="conhecimento" value="Aprendiz" required>
    <label for="Júnior" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Júnior</label>
    <input type="radio" name="conhecimento" value="Júnior" required>
    <label for="Mediano" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Mediano</label>
    <input type="radio" name="conhecimento" value="Mediano" required>
    <label for="Profissional" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Profissional</label>
    <input type="radio" name="conhecimento" value="Profissional" required>
    <label for="Sênior" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Sênior</label>
    <input type="radio" name="conhecimento" value="Sênior" required>
    <label for="Master" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Master</label>
    <input type="radio" name="conhecimento" value="Master" required>
    <label for="Expert" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Expert</label>
    <input type="radio" name="conhecimento" value="Expert" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de experiencia ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color2">
    <label for="Iniciante" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Iniciante</label>
    <input type="radio" name="experiencia" value="Iniciante" required>
    <label for="Novato" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Novato</label>
    <input type="radio" name="experiencia" value="Novato" required>
    <label for="Mediano" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Mediano</label>
    <input type="radio" name="experiencia" value="Mediano" required>
    <label for="Intermediário" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Intermediário</label>
    <input type="radio" name="experiencia" value="Intermediário" required>
    <label for="Avançado" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Avançado</label>
    <input type="radio" name="experiencia" value="Avançado" required>
    <label for="Expert" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Expert</label>
    <input type="radio" name="experiencia" value="Expert" required>
    <label for="Sênior" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Sênior</label>
    <input type="radio" name="experiencia" value="Sênior" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível social ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color3">
    <label for="Conhecido" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Conhecido</label>
    <input type="radio" name="nivel_social" value="Conhecido" required>
    <label for="Desconhecido" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Desconhecido</label>
    <input type="radio" name="nivel_social" value="Desconhecido" required>
    <label for="Fluênte" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Fluênte</label>
    <input type="radio" name="nivel_social" value="Fluênte" required>
    <label for="Inflûnte" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Inflûnte</label>
    <input type="radio" name="nivel_social" value="Inflûnte" required>
    <label for="Famoso" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Famoso</label>
    <input type="radio" name="nivel_social" value="Famoso" required>
    <label for="Tiktoker" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Tiktoker</label>
    <input type="radio" name="nivel_social" value="Tiktoker" required>
    <label for="Famosinho" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Famosinho</label>
    <input type="radio" name="nivel_social" value="Famosinho" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de classe social ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color4">
    <label for="Classe A" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Classe A</label>
    <input type="radio" name="classe_social" value="Classe A" required>
    <label for="Classe B" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Classe B</label>
    <input type="radio" name="classe_social" value="Classe B" required>
    <label for="Classe C" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Classe C</label>
    <input type="radio" name="classe_social" value="Classe C" required>
    <label for="Classe D" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Classe D</label>
    <input type="radio" name="classe_social" value="Classe D" required>
    <label for="Classe E" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Classe E</label>
    <input type="radio" name="classe_social" value="Classe E" required>
    <label for="Classe F" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Classe F</label>
    <input type="radio" name="classe_social" value="Classe F" required>
    <label for="Classe S" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">Classe S</label>
    <input type="radio" name="classe_social" value="Classe S" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual a sua altura ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color5">
    <label for="1.40 cm" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">1.40 cm</label>
    <input type="radio" name="sua_altura" value="1.40 cm" required>
    <label for="1.50 cm" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">1.50 cm</label>
    <input type="radio" name="sua_altura" value="1.50 cm" required>
    <label for="1.60 cm" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">1.60 cm</label>
    <input type="radio" name="sua_altura" value="1.60 cm" required>
    <label for="1.70 cm" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">1.70 cm</label>
    <input type="radio" name="sua_altura" value="1.70 cm" required>
    <label for="1.80 cm" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">1.80 cm</label>
    <input type="radio" name="sua_altura" value="1.80 cm" required>
    <label for="1.90 cm" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">1.90 cm</label>
    <input type="radio" name="sua_altura" value="1.90 cm" required>
    <label for="2.00 cm" style="text-shadow:9px;font-size:14px;color:white;white-space:nowrap;">2.00 cm</label>
    <input type="radio" name="sua_altura" value="2.00 cm" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é o seu signo?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:black;color:white;border:4px solid white;box-shadow:5px 5px 5px yellow;">QUAL?</summary>
    <br>
    <select name="signo" id="signo" required>
    <option value="" selected disabled>Selecione</option>
    <option value="Ofiúco">Ofiúco</option>
    <option value="Ariés">Ariés</option>
    <option value="Capricôrnio">Capricôrnio</option>
    <option value="Aquário">Aquário</option>
    <option value="Libra">Libra</option>
    <option value="Leão">Leão</option>
    <option value="Virgem">Virgem</option>
    <option value="Escorpião">Escorpião</option>
    <option value="Gemêos">Gemêos</option>
    <option value="Sagitário">Sagitário</option>
    <option value="Câncer">Câncer</option>
    <option value="Peixes">Peixes</option>
    <option value="Touro">Touro</option>
    </select>
</details></div></div>
    <br>
    <br>
    <h2><big>Me fale sobre a sua experiencia</big></h2>
    <br>
    <textarea name="experience_text" id="experience_text" rows="9" required></textarea>
    <br>
    <br>
    <button value="experience_text">Cadastre</button>
    <br>
    </fieldset>
    <br>
    <div class="nav">
    <nav style="background-color:darkred;">
    <p style="color:white">Retorne para minha <a href="index,php" target="_black" rel="noopener" style="text-shadow:9px;font-size:14px;text-decoration:none;border-radius:10px 10px;background-color:white;color:black;border:4px solid black;box-shadow:4px 4px 4px red;">1ªPágina</a></p>
    </nav>
    </div>
    <br>
    <div class="footer">
    <footer style="background-color:darkblue;">
    <p style="color:white">@GuilhermeBarbosadaSilva,todos os direitos autorais.</p>
    </footer>
    </div>
    </main>
    </form>
</details></div>
    <script>
    alert('Olá');
    alert(1000*2222);
    alert(494949/3332);
    alert(23233-4333);
    alert('Bem vindo');
    alert('Ao meu');
    alert('Formulário');
    document.getElementById('log').innerHTML='Olá';
    document.getElementById('script').innerHTML='Segue Abaixo';
    document.getElementById('hello').innerHTML='o Desenvolvimento';
    document.getElementById('alert').innerHTML='Do meu';
    document.getElementById('window').innerHTML='Formulário';
    document.getElementById('linux').innerHTML='Feito';
    document.getElementById('power').innerHTML='com';
    document.getElementById('bi').innerHTML='PHP';
    document.getElementById('id').innerHTML='e My SQL';
    document.write('Ola');
    document.write('Seja Bem');
    document.write('Vindo');
    document.write('Ao meu Form');
    document.write('Feito');
    document.write('Cariciosamente');
    document.write('com');
    document.write('muito');
    document.write('cuidado');
    console.log('Olá');
    console.log('Meu');
    console.log('Mundo');
    console.log('Favorito');
    console.log('Feito');
    console.log('Com');
    console.log('Js');
    console.log('e');
    console.log('PHP');
    function name()
    {
    console.log('Hello WORD');
    console.log('Hello WORD');
    console.log('Hello WORD');
    console.log('Hello WORD');
    console.log('Hello WORD');
    }
    function idade()
    {
    console.log('Hello WORD');
    console.log('Hello WORD');
    console.log('Hello WORD');
    console.log('Hello WORD');
    console.log('Hello WORD');
    }
    function cpf()
    {
    console.log('Hello WORD');
    console.log('Hello WORD');
    console.log('Hello WORD');
    console.log('Hello WORD');
    console.log('Hello WORD');
    }
    function rg()
    {
    console.log('Hello WORD');
    console.log('Hello WORD');
    console.log('Hello WORD');
    console.log('Hello WORD');
    console.log('Hello WORD');   
    }
    </script>
    <?php
    $host='127.0.0.1';
    $username='windowsemuitoruimseloko';
    $dbname='verymyplacedows';
    $password='';
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $nome=$_POST['nome']??null;
    $idade=$_POST['idade']??null;
    $etnia=$_POST['etnia']??null;
    $email=$_POST['email']??null;
    $telefone=$_POST['telefone']??null;
    $genero=$_POST['genero']??null;
    $rg=$_POST['rg']??null;
    $cpf=$_POST['cpf']??null;
    $estado_civil=$_POST['estado_civil']??null;
    $endereco=$_POST['endereco']??null;
    $cep=$_POST['cep']??null;
    $data_nasc=$_POST['data_nasc']??null;
    $nivel=$_POST['nivel']??null;
    $data_hora=$_POST['data_hora']??null;
    $conhecimento=$_POST['conhecimento']??null;
    $experiencia=$_POST['experiencia']??null;
    $nivel_social=$_POST['nivel_social']??null;
    $classe_social=$_POST['classe_social']??null;
    $sua_altura=$_POST['sua_altura']??null;
    $signo=$_POST['signo']??null;
    $experience_text=$_POST['experience_text']??null;
    $sql = "INSERT INTO windowsemuitoruimseloko (nome, idade, etnia, email, telefone, genero, rg, cpf, estado_civil, endereco, cep, data_nasc, nivel, data_hora, conhecimento, experiencia, nivel_social, classe_social, sua_altura, signo, experience_text)
    VALUES ('$nome','$idade','$etnia','$email','$telefone','$genero','$rg','$cpf','$estado_civil','$endereco','$cep','$data_nasc','$nivel','$data_hora','$conhecimento','$experiencia','$nivel_social','$classe_social','$sua_altura','$signo','$experience_text')";
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }
    
    // Fechando a conexão
    $conn->close();
    ?>
</body>
</html>