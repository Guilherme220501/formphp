<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta name="theme-color" content="#f4344">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
body{margin: auto;align-items: center;justify-content: center;text-align: center;background: linear-gradient(to right,blue,black,blue);}
h1{text-shadow: 9px;font-size: 30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;text-decoration: underline;color: white;white-space: nowrap;}
h2{text-shadow: 9px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: inherit;text-decoration: none;color: black;white-space: nowrap;}
p{text-shadow: 9px;font-size: 15px;font-family: Arial, Helvetica, sans-serif;font-style: inherit;text-decoration: none;color: white;}
a{border-radius: 10px 10px;font-size: 16px;font-family: 'Courier New', Courier, monospace;font-style: initial;text-shadow: 9px;text-decoration: none;}
.summary:hover{transition: ease s;transform: scale(1.04);}
.footer:hover{transition: ease s;transform: scale(1.05);}
.nav:hover{transition: ease s;transform: scale(1.07);}
footer{cursor: grab;width: 300px;padding:30px;border-radius:10px 10px;margin:auto;align-items:center;justify-content:center;text-align:center;border:6px solid white;}
nav{cursor: grab;width: 300px;padding:30px;border-radius:10px 10px;margin:auto;align-items:center;justify-content:center;text-align:center;border:6px solid whitesmoke;}
summary{cursor: grabbing;width: 100px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 16px;font-family: Arial, Helvetica, sans-serif;font-style: inherit;background-color: white;color: red;border: 3px solid black;box-shadow: 6px 6px 6px black;}
form{display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;margin: auto;}
fieldset{cursor: crosshair;width: 300px;margin: auto;border-radius: 10px 10px;padding: 14px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;background-color: whitesmoke;border: 4px solid black;box-shadow: 6px 6px 6px red;}
label{padding: 20px;text-shadow: 9px;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;color: black;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;cursor: text;}
.color1{gap:6px;padding:10px;margin:auto;width:800px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;border-radius:10px 10px;background-color:darkblue;border:4px solid whitesmoke;box-shadow:6px 6px 6px black;cursor:grab}
.color2{gap:6px;padding:10px;margin:auto;width:800px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;border-radius:10px 10px;background-color:darkred;border:4px solid whitesmoke;box-shadow:6px 6px 6px black;cursor:grab}
.color3{gap:6px;padding:10px;margin:auto;width:800px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;border-radius:10px 10px;background-color:darkorange;border:4px solid whitesmoke;box-shadow:6px 6px 6px black;cursor:grab}
.color4{gap:6px;padding:10px;margin:auto;width:800px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;border-radius:10px 10px;background-color:darkgoldenrod;border:4px solid whitesmoke;box-shadow:6px 6px 6px black;cursor:grab}
input{text-align: left;padding: 4px;font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;color: black;background-color: whitesmoke;border: 3px solid blue;border-radius: 10px 10px;margin: auto;width: 300px;display: flex;flex-direction: column;margin: auto;cursor: context-menu;}
select{cursor: se-resize;width: 200px;margin: auto;border-radius: 10px 10px;padding: 5px;background-color: black;color: white;border: 4px solid white;box-shadow: 5px 5px 5px yellow;font-size: 16px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-style: oblique;}
textarea{cursor: ns-resize;width: 300px;height: 200px;margin: auto;border-radius: 10px 10px;padding: 13px;font-size: 16px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-style: inherit;background-color: antiquewhite;border: 4px solid black;color: black;}
button{cursor: progress;width: 280px;margin: auto;border-radius: 10px 10px;padding: 5px;background-color: blue;color: white;border: 4px solid white;box-shadow: 6px 6px 6px black;font-size: 18px;font-family: Arial, Helvetica, sans-serif;font-style: oblique;}
</style>
<body>
    <header><h1><big>Formulário</big>
    </h1></header>
    <br>
    <p id="alert"></p>
    <br>
    <p id="show"></p>
    <br>
    <p id="script"></p>
    <br>
    <p id="console"></p>
    <br>
    <p id="welcome"></p>
    <br>
    <p id="window"></p>
    <br>
    <p id="input"></p>
    <br>
    <p id="select"></p>
    <br>
    <br>
    <div id="text"><details><summary style="width:300px;background-color:white;color:red;border:4px solid black;box-shadow:5px 5px 5px black">Formulário</summary>
    <br>
    <form action="form.php" method="post">
    <header><h1><big>Cadastro de BRS</big></h1></header>
    <main>
    <fieldset>
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="Nome" title="Digite o seu Nome" placeholder="Exemplo: Guilherme Barbosa da Silva" max="30" maxlength="30" required>
    <label for="Idade">Idade</label>
    <input type="number" name="idade" id="Idade" title="Digite a sua Idade" placeholder="Exemplo: 23 ou 39 anos ?" max="30" maxlength="30" required>
    <label for="Estado civil">Estado civil</label>
    <select name="estado_civil" id="Estado civil" required style="width:150px;padding:4px;font-size:14px;background-color:blue;color:white;border:3px solid white;box-shadow:5px 5px 5px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Solteiro">Solteiro</option>
    <option value="Casado">Casado</option>
    <option value="Divorciado">Divorciado</option>
    <option value="Viúvo">Viúvo</option>
    <option value="Separado">Separado</option>
    <option value="Compromissado">Compromissado</option>
    </select>
    <br>
    <label for="RG">RG</label>
    <input type="text" name="rg" id="RG" title="Digite o seu RG" placeholder="Exemplo: 53.742.867-7" max="30" maxlength="30" required>
    <label for="CPF">CPF</label>
    <input type="text" name="cpf" id="CPF" title="Digite o seu CPF" placeholder="Exemplo: 503.552.748-41" max="30" maxlength="30" required>
    <label for="Email">Email</label>
    <input type="email" name="email" id="Email" title="Digite o seu Email" placeholder="Exemplo: guilherme8876sk@gmail.com" max="30" maxlength="30" required>
    <label for="Endereço">Endereço</label>
    <input type="text" name="endereco" id="Endereço" title="Digite o seu Endereço" placeholder="Exemplo: Av Rio das Pedras Nª4100" max="30" maxlength="30" required>
    <label for="CEP">CEP</label>
    <input type="text" name="cep" id="CEP" title="Digite o seu CEP" placeholder="Exemplo: 03936-000" max="30" maxlength="30" required>
    <label for="Sexo">Sexo</label>
    <select name="genero" id="Sexo" required style="width:120px;padding:3px;font-size:13px;background-color:white;color:blue;border:4px solid black;box-shadow:5px 5px 5px red;">
    <option value="" selected disabled>Selecione</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Agênero">Agênero</option>
    <option value="Bigênero">Bigênero</option>
    <option value="Cisgênero">Cisgênero</option>
    <option value="Transgênero">Transgênero</option>
    </select>
    <br>
    <label for="Sua Cor">Sua Cor</label>
    <input type="color" name="cor" id="Sua Cor" title="Digite a Sua Cor" placeholder="Exemplo: Branco ou Negro" max="30" maxlength="30" required>
    <label for="Seu Nível">Seu Nível</label>
    <input type="range" name="nivel" id="Seu Nível" title="Digite o seu Seu Nível" placeholder="Exemplo: +/-" max="30" maxlength="30" required>
    <label for="Data de nascimento">Data de nascimento</label>
    <input type="date" name="data_nasc" id="Data de nascimento" title="Digite a sua Data de nascimento" placeholder="Exemplo: 22/05/2001" max="30" maxlength="30" required>
    <label for="Data e Hora">Data e Hora</label>
    <input type="datetime-local" name="data_hora" id="Data e Hora" title="Digite a sua Data e Hora" placeholder="Exemplo: 22/05 ás 10 AM" max="30" maxlength="30" required>
    <br>
    <br>
    <h2><big>Qual o seu nível de conhecimento ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color1">
    <label for="Aprendiz" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Aprendiz</label>
    <input type="radio" name="conhecimento" value="Aprendiz" required>
    <label for="Júnior" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Júnior</label>
    <input type="radio" name="conhecimento" value="Júnior" required>
    <label for="Pleno" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Pleno</label>
    <input type="radio" name="conhecimento" value="Pleno" required>
    <label for="Profissional" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Profissional</label>
    <input type="radio" name="conhecimento" value="Profissional" required>
    <label for="Sênior" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Sênior</label>
    <input type="radio" name="conhecimento" value="Sênior" required>
    <label for="Master" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Master</label>
    <input type="radio" name="conhecimento" value="Master" required>
    <label for="Gênio" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Gênio</label>
    <input type="radio" name="conhecimento" value="Gênio" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de experiencia ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color2">
    <label for="Aprendiz" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Aprendiz</label>
    <input type="radio" name="experiencia" value="Aprendiz" required>
    <label for="Iniciante" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Iniciante</label>
    <input type="radio" name="experiencia" value="Iniciante" required>
    <label for="Novato" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Novato</label>
    <input type="radio" name="experiencia" value="Novato" required>
    <label for="Jovem" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Jovem</label>
    <input type="radio" name="experiencia" value="Jovem" required>
    <label for="Médio" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Médio</label>
    <input type="radio" name="experiencia" value="Médio" required>
    <label for="Pleno" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Pleno</label>
    <input type="radio" name="experiencia" value="Pleno" required>
    <label for="Expert" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Expert</label>
    <input type="radio" name="experiencia" value="Expert" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de classe social ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color3">
    <label for="Classe A" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Classe A</label>
    <input type="radio" name="classe_social" value="Classe A" required>
    <label for="Classe B" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Classe B</label>
    <input type="radio" name="classe_social" value="Classe B" required>
    <label for="Classe C" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Classe C</label>
    <input type="radio" name="classe_social" value="Classe C" required>
    <label for="Classe D" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Classe D</label>
    <input type="radio" name="classe_social" value="Classe D" required>
    <label for="Classe E" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Classe E</label>
    <input type="radio" name="classe_social" value="Classe E" required>
    <label for="Classe F" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Classe F</label>
    <input type="radio" name="classe_social" value="Classe F" required>
    <label for="Classe S" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Classe S</label>
    <input type="radio" name="classe_social" value="Classe S" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nivel social ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color4">
    <label for="Base" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Base</label>
    <input type="radio" name="nivel_social" value="Base" required>
    <label for="Médiano" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Médiano</label>
    <input type="radio" name="nivel_social" value="Médiano" required>
    <label for="Pleno" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Pleno</label>
    <input type="radio" name="nivel_social" value="Pleno" required>
    <label for="Conhecido" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Conhecido</label>
    <input type="radio" name="nivel_social" value="Conhecido" required>
    <label for="Desconhecido" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Desconhecido</label>
    <input type="radio" name="nivel_social" value="Desconhecido" required>
    <label for="Inflûencer" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Inflûencer</label>
    <input type="radio" name="nivel_social" value="Inflûencer" required>
    <label for="Famosinho" style="white-space:nowrap;color:white;text-shadow:9px;font-size:14px;">Famosinho</label>
    <input type="radio" name="nivel_social" value="Famosinho" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu signo?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:black;color:white;border:3px solid white;box-shadow:4px 4px 4px yellow;">QUAL?</summary>
    <br>
    <select name="signo" id="signo" required>
    <option value="" selected disabled>Selecione</option>
    <option value="Ofiúco">Ofiúco</option>
    <option value="Áries">Áries</option>
    <option value="Aquário">Aquário</option>
    <option value="Câncer">Câncer</option>
    <option value="Capricôrnio">Capricôrnio</option>
    <option value="Libra">Libra</option>
    <option value="Leão">Leão</option>
    <option value="Sagitário">Sagitário</option>
    <option value="Gêmeos">Gêmeos</option>
    <option value="Escorpião">Escorpião</option>
    <option value="Virgem">Virgem</option>
    <option value="Peixes">Peixes</option>
    <option value="Touro">Touro</option>
    </select>
</details></div></div>
    <br>
    <br>
    <h2><big>Me fale sobre a sua experiencia</big></h2>
    <br>
    <textarea name="experience_text" id="experience_text" required rows="9"></textarea>
    <br>
    <br>
    <button value="experience_text">Cadastre</button>
    <br>
    </fieldset>
    <br>
    <br>
    <div class="nav">
    <nav style="background-color:blueviolet;">
    <p style="color:white;">Retorne para minha <a href="index.php" target="_blank" rel="noopener" style="font-size:14px;text-decoration:none;cursor:grabbing;font-family:Arial;font-style:oblique;background-color:white;color:blue;border:3px solid black;box-shadow:5px 5px 5px black;border-radius:10px 10px;">1ªPágina</a></p>
</nav>
    </div>
    <br>
    <br>
    <div class="footer">
    <footer style="background-color:red;">
    <p style="color:white;">@GuilhermeBarbosaDaSilva,todos os direitos autorais reservados.</p>
    </footer>
    </div>
    </main>
    </form>
</details></div>
    <script>
    alert('Welcome to my page');
    alert(100*222);
    alert('My Forms');
    alert('inputs');
    alert('front');
    alert('back-end');
    alert(101010/44444);
    console.log('My');
    console.log('Form');
    console.log('Welcome');
    console.log('Bem');
    console.log('vindo');
    console.log('olá');
    document.getElementById('alert').innerHTML='Olá';
    document.getElementById('show').innerHTML='Segue a minha';
    document.getElementById('script').innerHTML='Criação';
    document.getElementById('console').innerHTML='do';
    document.getElementById('welcome').innerHTML='Formulário';
    document.getElementById('window').innerHTML='logo';
    document.getElementById('input').innerHTML='a';
    document.getElementById('select').innerHTML='baixo';
    document.write('Ola');
    document.write('Seja');
    document.write('Bem');
    document.write('Vindo');
    document.write('Ao');
    document.write('Meu');
    document.write('Formulário');
    </script>
    <?php
    $host='127.0.0.1';
    $username='mybestfriend';
    $dbname='welcome';
    $password='';
    $conn= mysqli_connect($host,$username,$password,$dbname);
    $nome=$_POST['nome']??null;
    $idade=$_POST['idade']??null;
    $estado_civil=$_POST['estado_civil']??null;
    $rg=$_POST['rg']??null;
    $cpf=$_POST['cpf']??null;
    $email=$_POST['email']??null;
    $endereco=$_POST['endereco']??null;
    $cep=$_POST['cep']??null;
    $genero=$_POST['genero']??null;
    $cor=$_POST['cor']??null;
    $nivel=$_POST['nivel']??null;
    $data_nasc=$_POST['data_nasc']??null;
    $data_hora=$_POST['data_hora']??null;
    $conhecimento=$_POST['conhecimento']??null;
    $experiencia=$_POST['experiencia']??null;
    $classe_social=$_POST['classe_social']??null;
    $nivel_social=$_POST['nivel_social']??null;
    $signo=$_POST['signo']??null;
    $experience_text=$_POST['experience_text']??null;
    $sql = "INSERT INTO mybestfriend (nome, idade, estado_civil, rg, cpf, email, endereco, cep, genero, cor, nivel, data_nasc, data_hora, conhecimento, experiencia, classe_social, nivel_social, signo, experience_text)
    VALUES ('$nome','$idade','$estado_civil','$rg','$cpf','$email','$endereco','$cep','$genero','$cor','$nivel','$data_nasc','$data_hora','$conhecimento','$experiencia','$classe_social','$nivel_social','$signo','$experience_text')";
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