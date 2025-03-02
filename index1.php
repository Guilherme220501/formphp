<!DOCTYPE html>
<html lang="Pt-BR">
<head>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <meta name="theme-color" content="#f4344">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript</title>
</head>
<style>
body{margin: auto;align-items: center;justify-content: center;text-align: center;background: linear-gradient(to right,blue,white,blue);}
h1{white-space:nowrap;text-shadow:9px;text-decoration:none;font-size: 30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;color: black;cursor:grabbing;}
h2{white-space:nowrap;text-shadow:9px;text-decoration:none;font-size: 16px;font-family: Arial, Helvetica, sans-serif;font-style: italic;color: black;cursor:grabbing;}
p{text-shadow:9px;text-decoration:none;font-size: 15px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: inherit;color: black;cursor:grabbing;}
footer:hover{transform: scale(1.05);transition: ease s;}
nav:hover{transform: scale(1.06);transition: ease s;}
summary:hover{transform: scale(1.03);transition: ease s;}
footer{align-items: center;justify-content: center;margin: auto;text-align: center;width: 300px;border-radius: 10px 10px;padding: 30px;cursor: grabbing;border: 6px solid whitesmoke;}
nav{align-items: center;justify-content: center;margin: auto;text-align: center;width: 300px;border-radius: 10px 10px;padding: 30px;cursor: grabbing;border: 6px solid white;}
summary{text-shadow: 9px;text-decoration: none;margin: auto;padding: 6px;border-radius: 10px 10px;width: 100px;font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: azure;color: red;border: 3px solid black;box-shadow: 6px 6px 6px black;cursor: auto;}
form{display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;margin: auto;}
fieldset{cursor: auto;width: 300px;margin: auto;border-radius: 10px 10px;padding: 15px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;background-color: aliceblue;border: 4px solid black;box-shadow: 5px 5px 5px red;}
label{text-shadow: 9px;text-decoration: none;padding: 20px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;margin: auto;color: black;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;cursor: context-menu;}
.color1{gap:6px;padding:10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align: center;cursor:grab;width:850px;margin:auto;border-radius:10px 10px;white-space:nowrap;background-color: darkblue;border:4px solid whitesmoke;box-shadow:6px 6px 6px black}
.color2{gap:6px;padding:10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align: center;cursor:grab;width:850px;margin:auto;border-radius:10px 10px;white-space:nowrap;background-color: darkred;border:4px solid whitesmoke;box-shadow:6px 6px 6px black}
.color3{gap:6px;padding:10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align: center;cursor:grab;width:850px;margin:auto;border-radius:10px 10px;white-space:nowrap;background-color: darkgoldenrod;border:4px solid whitesmoke;box-shadow:6px 6px 6px black}
.color4{gap:6px;padding:10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align: center;cursor:grab;width:850px;margin:auto;border-radius:10px 10px;white-space:nowrap;background-color: darkmagenta;border:4px solid whitesmoke;box-shadow:6px 6px 6px black}
input{text-align: left;padding: 4px;text-shadow: 9px;margin: auto;width: 300px;border-radius: 10px 10px;cursor: cell;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: initial;color: black;background-color: whitesmoke;border: 4px solid blue;box-shadow: 3px 3px 3px black;display: flex;flex-direction: column;}
select{cursor: alias;width: 200px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: black;color: yellow;border: 3px solid white;box-shadow: 5px 5px 5px black;}
textarea{cursor: text;width: 300px;height: 200px;margin: auto;border-radius: 10px 10px;padding: 12px;background-color: antiquewhite;border: 3px solid black;border-radius: 10px 10px;color: black;font-size: 16px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-style: oblique;}
button{cursor: progress;width: 280px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: blue;color: white;border: 4px solid white;box-shadow: 6px 6px 6px black;}
</style>
<body>
    <h1><big>Meu Form</big></h1>
    <br>
    <p id="script"></p>
    <br>
    <p id="windows"></p>
    <br>
    <p id="react"></p>
    <br>
    <p id="php"></p>
    <br>
    <p id="laravel"></p>
    <br>
    <br>
    <div id="text"><details><summary style="width:300px;background-color:white;color:black;border:3px solid black;box-shadow:4px 4px 4px red;">Formulário</summary>
    <br>
    <header><h1><big>Cadastro de <b style="color:red">BRS</b></big></h1></header>
    <br>
    <form action="index1.php" method="post">
    <fieldset>
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="Nome" title="Digite o seu Nome;" placeholder="Exemplo: Guilherme Barbosa Da Silva;"
    max="30" maxlength="30" required>
    <label for="Idade">Idade</label>
    <input type="number" name="idade" id="Idade" title="Digite o seu Idade;" placeholder="Exemplo: 23 ou 35 anos ??;"
    max="30" maxlength="30" required>
    <label for="Email">Email</label>
    <input type="email" name="email" id="Email" title="Digite o seu Email;" placeholder="Exemplo: guilherme8876sk@gmail.com;"
    max="30" maxlength="30" required>
    <label for="CPF">CPF</label>
    <input type="text" name="cpf" id="CPF" title="Digite o seu CPF;" placeholder="Exemplo: 503.552.748-41;"
    max="30" maxlength="30" required>
    <label for="RG">RG</label>
    <input type="text" name="rg" id="RG" title="Digite o seu RG;" placeholder="Exemplo: 53.742.867-7;"
    max="30" maxlength="30" required>
    <label for="Altura">Altura</label>
    <select name="altura" id="Altura" required style="font-size:14px;padding:3px;width:160px;background-color:blue;color:white;border:3px solid white;box-shadow:4px 4px 4px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="1.50 cm">1.50 cm</option>
    <option value="1.60 cm">1.60 cm</option>
    <option value="1.70 cm">1.70 cm</option>
    <option value="1.80 cm">1.80 cm</option>
    <option value="1.90 cm">1.90 cm</option>
    <option value="2.00 cm">2.00 cm</option>
    </select>
    <br>
    <label for="Telefone">Telefone</label>
    <input type="tel" name="telefone" id="Telefone" title="Digite o seu Telefone;" placeholder="Exemplo: (11) 98341-7590;"
    max="30" maxlength="30" required>
    <label for="Endereço">Endereço</label>
    <input type="text" name="endereco" id="Endereço" title="Digite o seu Endereço;" placeholder="Exemplo: Av Rio das Pedras Nª4100;"
    max="30" maxlength="30" required>
    <label for="CEP">CEP</label>
    <input type="text" name="cep" id="CEP" title="Digite o seu CEP;" placeholder="Exemplo: 03936-000;"
    max="30" maxlength="30" required>
    <label for="Sexo">Sexo</label>
    <select name="genero" id="Sexo" required style="width:150px;padding:4px;font-size:13px;background-color:black;color:white;border:3px solid black;box-shadow:4px 4px 4px red;">
    <option value="" selected disabled>Selecione</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Agênero">Agênero</option>
    <option value="Bigênero">Bigênero</option>
    <option value="Transgênero">Transgênero</option>
    <option value="Cisgênero">Cisgênero</option>
    </select>
    <br>
    <label for="CNPJ">CNPJ</label>
    <input type="text" name="cnpj" id="CNPJ" title="Digite o seu CNPJ;" placeholder="Exemplo: 12345677;"
    max="30" maxlength="30" required>
    <label for="Data de Nascimento">Data de Nascimento</label>
    <input type="date" name="data_nasc" id="Data de Nascimento" title="Digite a sua Data de Nascimento;" placeholder="Exemplo: 22/05/2001;"
    max="30" maxlength="30" required>
    <label for="Estado civil">Estado civil</label>
    <select name="estado_civil" id="Estado civil" required style="width:140px;padding:3px;font-size:13px;background-color:darkblue;color:white;border:3px solid black;box-shadow:4px 4px 4px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Solteiro">Solteiro</option>
    <option value="Casado">Casado</option>
    <option value="Divorciado">Divorciado</option>
    <option value="Separado">Separado</option>
    <option value="Viúvo">Viúvo</option>
    <option value="Compromissado">Compromissado</option>
    </select>
    <br>
    <label for="Nível">Nível</label>
    <input type="range" name="nivel" id="Nível" title="Digite o seu Nível;" placeholder="Exemplo: +/-;"
    max="30" maxlength="30" required>
    <label for="Sua Cor">Sua Cor</label>
    <input type="color" name="cor" id="Sua Cor" title="Digite a seu Sua Cor;" placeholder="Exemplo: branco ou negro;"
    max="30" maxlength="30" required>
    <label for="Data e Hora">Data e Hora</label>
    <input type="datetime-local" name="data_hora" id="Data e Hora" title="Digite a sua Data e Hora;" placeholder="Exemplo: 22/05 ás 10:00 AM;"
    max="30" maxlength="30" required>
    <br>
    <br>
    <h2><big>Qual o seu Nível de conhecimento?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color1">
    <label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Aprendiz</label>
    <input type="radio" value="Aprendiz" name="conhecimento" required>
    <label for="Iniciante" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Iniciante</label>
    <input type="radio" value="Iniciante" name="conhecimento" required>
    <label for="Jûnior" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Jûnior</label>
    <input type="radio" value="Jûnior" name="conhecimento" required>
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Mediano</label>
    <input type="radio" value="Mediano" name="conhecimento" required>
    <label for="Intermediário" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Intermediário</label>
    <input type="radio" value="Intermediário" name="conhecimento" required>
    <label for="Avançado" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Avançado</label>
    <input type="radio" value="Avançado" name="conhecimento" required>
    <label for="Expert" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Expert</label>
    <input type="radio" value="Expert" name="conhecimento" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nivel social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color2">
    <label for="Base" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Base</label>
    <input type="radio" value="Base" name="nivel_social" required>
    <label for="Flûente" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Flûente</label>
    <input type="radio" value="Flûente" name="nivel_social" required>
    <label for="Conhecido" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Conhecido</label>
    <input type="radio" value="Conhecido" name="nivel_social" required>
    <label for="Desconhecido" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Desconhecido</label>
    <input type="radio" value="Desconhecido" name="nivel_social" required>
    <label for="Inflûente" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Inflûente</label>
    <input type="radio" value="Inflûente" name="nivel_social" required>
    <label for="Famosinho" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Famosinho</label>
    <input type="radio" value="Famosinho" name="nivel_social" required>
    <label for="Tiktoker" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Tiktoker</label>
    <input type="radio" value="Tiktoker" name="nivel_social" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu Nível de experiencia?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color3">
    <label for="Iniciante" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Iniciante</label>
    <input type="radio" value="Iniciante" name="experiencia" required>
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Mediano</label>
    <input type="radio" value="Mediano" name="experiencia" required>
    <label for="Intermediário" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Intermediário</label>
    <input type="radio" value="Intermediário" name="experiencia" required>
    <label for="Avançado" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Avançado</label>
    <input type="radio" value="Avançado" name="experiencia" required>
    <label for="Expert" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Expert</label>
    <input type="radio" value="Expert" name="experiencia" required>
    <label for="Master" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Master</label>
    <input type="radio" value="Master" name="experiencia" required>
    <label for="Profissional" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Profissional</label>
    <input type="radio" value="Profissional" name="experiencia" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu Nível de classe social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color4">
    <label for="Classe A" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Classe A</label>
    <input type="radio" value="Classe A" name="classe_social" required>
    <label for="Classe B" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Classe B</label>
    <input type="radio" value="Classe B" name="classe_social" required>
    <label for="Classe C" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Classe C</label>
    <input type="radio" value="Classe C" name="classe_social" required>
    <label for="Classe D" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Classe D</label>
    <input type="radio" value="Classe D" name="classe_social" required>
    <label for="Classe E" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Classe E</label>
    <input type="radio" value="Classe E" name="classe_social" required>
    <label for="Classe S" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Classe S</label>
    <input type="radio" value="Classe S" name="classe_social" required>
    <label for="Classe X" style="white-space:nowrap;text-shadow:9px;text-decoration:none;font-size:13px;color:white;">Classe X</label>
    <input type="radio" value="Classe X" name="classe_social" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é o seu signo?</big></h2>
    <br>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:black;color:yellow;border:3px solid white;box-shadow:5px 5px 5px black;">QUAL?</summary>
    <br>
    <select name="signo" id="signo" required>
    <option value="" selected disabled>Selecione</option>
    <option value="Ofíuco">Ofíuco</option>
    <option value="Áries">Áries</option>
    <option value="Aquário">Aquário</option>
    <option value="Câncer">Câncer</option>
    <option value="Capricôrnio">Capricôrnio</option>
    <option value="Leão">Leão</option>
    <option value="Libra">Libra</option>
    <option value="Sagitário">Sagitário</option>
    <option value="Escorpião">Escorpião</option>
    <option value="Virgem">Virgem</option>
    <option value="Gemêos">Gemêos</option>
    <option value="Touro">Touro</option>
    <option value="Peixes">Peixes</option>
    </select>
</details></div></div>
    <br>
    <br>
    <h2><big>Me fale sobre a sua experiencia?</big></h2>
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
    <nav style="background-color:darkblue">
    <p style="color:white;">Retorne para minha <a href="index.php" target="_blank" rel="noopener" style="border-radius:10px 10px;font-size:14px;font-family:franklin;font-style:oblique;color:black;background-color:white;border:3px solid blue;box-shadow:5px 5px 5px black;cursor:grab;text-shadow:9px;text-decoration:none;">1ªPágina</a></p>
    </nav>
    </div>
    <br>
    <div class="footer">
    <footer style="background-color:darkred">
    <p style="color:white;">@GuilhermeBarbosaDaSilva,todos os direitos reservados.</p>
    </footer>
    </div>
    </form>
</details></div>
    <script>
    alert('Seja');
    alert('Bem-vindo');
    alert('Ao');
    alert(444*44);
    alert('Form');
    console.log('Hello');
    console.log('My');
    console.log('Name');
    console.log('Best');
    console.log(222*22);
    document.write('Acesse');
    document.write('Meu');
    document.write('Form');
    document.write('Acima');
    document.getElementById('script').innerHTML='Acesse';
    document.getElementById('windows').innerText='Meu';
    document.getElementById('react').innerHTML='Form';
    document.getElementById('php').innerHTML='Logo abaixo';
    document.getElementById('laravel').innerHTML='Thanks';
    function name()
    {
        console.log('Ola');
        console.log('Mundo');
        document.write(11*22);
        document.write('Hello');
    }
    function idade()
    {
        console.log('Very');
        console.log('Good');
        console.log(22*3333);
    }
    </script>
    <?php
    $host='127.0.0.1';
    $username='tablegui22';
    $dbname='guibsilva220501';
    $password='';
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $nome=$_POST['nome']??null;
    $idade=$_POST['idade']??null;
    $email=$_POST['email']??null;
    $cpf=$_POST['cpf']??null;
    $rg=$_POST['rg']??null;
    $altura=$_POST['altura']??null;
    $telefone=$_POST['telefone']??null;
    $endereco=$_POST['endereco']??null;
    $cep=$_POST['cep']??null;
    $genero=$_POST['genero']??null;
    $cnpj=$_POST['cnpj']??null;
    $data_nasc=$_POST['data_nasc']??null;
    $estado_civil=$_POST['estado_civil']??null;
    $nivel=$_POST['nivel']??null;
    $cor=$_POST['cor']??null;
    $data_hora=$_POST['data_hora']??null;
    $conhecimento=$_POST['conhecimento']??null;
    $nivel_social=$_POST['nivel_social']??null;
    $experiencia=$_POST['experiencia']??null;
    $classe_social=$_POST['classe_social']??null;
    $signo=$_POST['signo']??null;
    $experience_text=$_POST['experience_text']??null;
    $sql = "INSERT INTO tablegui22 (nome, idade, email, cpf, rg, altura, telefone, endereco, cep, genero, cnpj, data_nasc, estado_civil, nivel, cor, data_hora, conhecimento, nivel_social, experiencia, classe_social, signo, experience_text)
    VALUES ('$nome','$idade','$email','$cpf','$rg','$altura','$telefone','$endereco','$cep','$genero','$cnpj','$data_nasc','$estado_civil','$nivel','$cor','$data_hora','$conhecimento','$nivel_social','$experiencia','$classe_social','$signo','$experience_text')";
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