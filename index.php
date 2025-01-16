<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="theme-color" content="#f3232">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
body{margin: auto;align-items: center;justify-content: center;text-align: center;background: linear-gradient(to right, blue, black, blue);}
h1{text-decoration: underline;white-space: nowrap;text-shadow: 9px;color: white;font-size: 30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
h2{text-decoration: none;white-space: nowrap;text-shadow: 9px;color: black;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: italic;}
p{text-shadow: 9px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: inherit;color: black;}
.summary:hover{transition: ease s;transform: scale(1.04);}
.footer:hover{transition: ease s;transform: scale(1.06);}
.nav:hover{transition: ease s;transform: scale(1.08);}
summary{cursor: grabbing;width: 100px;margin: auto;border-radius: 10px 10px;padding: 5px;text-shadow: 9px;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: azure;color: black;border: 3px solid black;box-shadow: 4px 4px 4px blue;}
footer{align-items: center;justify-content: center;border-radius: 10px 10px;text-align: center;margin: auto;cursor: grab;width: 300px;padding: 30px;border: 5px solid whitesmoke;}
nav{align-items: center;justify-content: center;border-radius: 10px 10px;text-align: center;margin: auto;cursor: grab;width: 300px;padding: 30px;border: 5px solid white;}
form{align-items: center;justify-content: center;text-align: center;margin: auto;display: flex;flex-direction: column;}
fieldset{cursor: grabbing;width: 300px;margin: auto;border-radius: 10px 10px;padding: 10px;align-items: center;justify-content: center;text-align: center;display: flex;flex-direction: column;background-color: whitesmoke;border: 3px solid black;box-shadow: 5px 5px 5px red;}
label{text-shadow: 9px;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;color: black;padding: 19px;margin: auto;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;}
.color1{gap:6px;padding:10px;width:800px;margin:auto;border-radius:10px 10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;white-space:nowrap;background-color: blue;border:5px solid white;box-shadow:5px 5px 5px black;cursor:grabbing;}
.color2{gap:6px;padding:10px;width:800px;margin:auto;border-radius:10px 10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;white-space:nowrap;background-color: red;border:5px solid white;box-shadow:5px 5px 5px black;cursor:grabbing;}
.color3{gap:6px;padding:10px;width:800px;margin:auto;border-radius:10px 10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;white-space:nowrap;background-color: black;border:5px solid white;box-shadow:5px 5px 5px black;cursor:grabbing;}
.color4{gap:6px;padding:10px;width:800px;margin:auto;border-radius:10px 10px;display:flex;flex-direction:row;align-items:center;justify-content:center;text-align:center;white-space:nowrap;background-color: darkblue;border:5px solid white;box-shadow:5px 5px 5px black;cursor:grabbing;}
input{text-align: left;text-shadow: 9px;width: 300px;margin: auto;border-radius: 10px 10px;padding: 5px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: inherit;background-color: aliceblue;color: black;border: 4px solid blue;cursor: alias;}
select{cursor: move;width: 200px;margin: auto;border-radius: 10px 10px;padding: 5px;text-shadow: 9px;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: black;color: white;border: 4px solid white;box-shadow: 5px 5px 5px yellow;}
textarea{cursor: vertical-text;width: 300px;height: 200px;margin: auto;border-radius: 10px 10px;padding: 14px;background-color: aliceblue;color: black;border: 4px solid black;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: initial;}
button{cursor: progress;width: 280px;margin: auto;border-radius: 10px 10px;padding: 4px;background-color: blue;color: white;border: 4px solid white;box-shadow: 7px 7px 7px black;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;text-shadow: 9px;}
</style>
<body>
    <div id="text"><details><summary style="width:300px;background-color:blue;color:white;border:4px solid white;box-shadow:5px 5px 5px black;">Formulário</summary>
    <br>
    <form action="index.php" method="post">
    <header><h1><big>Cadastro de <b>BRS</b></big></h1>
    </header>
    <main>
    <fieldset>
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="Nome" placeholder="Exemplo: Guilherme Barbosa da Silva" maxlength="30" required>
    <label for="Idade">Idade</label>
    <input type="number" name="idade" id="Idade" title="Digite sua Idade" placeholder="Exemplo: 23 ou 36 anos ??" pattern="" maxlength="30" required>
    <label for="Cpf">Cpf</label>
    <input type="text" name="cpf" id="Cpf" title="Digite seu Cpf" placeholder="Exemplo: 503.552.748-41" maxlength="30" required>
    <label for="RG">RG</label>
    <input type="text" name="rg" id="RG" title="Digite seu RG" placeholder="Exemplo: 53.742.867-7" maxlength="30" required>
    <label for="Sexo">Sexo</label>
    <select name="genero" id="Sexo" required style="width:150px;padding:3px;font-size:14px;background-color:white;color:blue;border:3px solid black;box-shadow:4px 4px 4px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Bigênero">Bigênero</option>
    <option value="Agênero">Agênero</option>
    <option value="Transgênero">Transgênero</option>
    <option value="Cisgênero">Cisgênero</option>
    </select>
    <br>
    <label for="Cep">Cep</label>
    <input type="text" name="cep" id="Cep" title="Digite seu Cep" placeholder="Exemplo: 03936-000" maxlength="30" required>
    <label for="Email">Email</label>
    <input type="email" name="email" id="Email" title="Digite seu Email" placeholder="Exemplo: guilherme8876sk@gmail.com" maxlength="30" required>
    <label for="Telefone">Telefone</label>
    <input type="tel" name="telefone" id="Telefone" title="Digite seu Telefone" placeholder="Exemplo: (11) 98341-7590" maxlength="30" required>
    <label for="Endereço">Endereço</label>
    <input type="text" name="endereco" id="Endereço" title="Digite seu Endereço" placeholder="Exemplo: Av Rio das Pedras Nª4100" maxlength="30" required>
    <label for="Data de Nacimento">Data de Nascimento</label>
    <input type="date" name="data_nasc" id="Data de Nacimento" title="Digite sua Data de Nacimento" placeholder="Exemplo: 22/05/2001" pattern="" maxlength="30" required>
    <label for="Data e hora">Data e hora</label>
    <input type="datetime-local" name="data_hora" id="Data e hora" title="Digite seu Data e hora" placeholder="Exemplo: 22/05 ás 10AM" pattern="" maxlength="30" required>
    <br>
    <br>
    <h2><big>Qual é a sua classe social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color1">
    <label for="Classe A" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe A</label>
    <input type="radio" name="classe_social" value="Classe A" required>
    <label for="Classe B" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe B</label>
    <input type="radio" name="classe_social" value="Classe B" required>
    <label for="Classe C" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Classe C</label>
    <input type="radio" name="classe_social" value="Classe C" required>
    <label for="Classe D" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe D</label>
    <input type="radio" name="classe_social" value="Classe D" required>
    <label for="Classe E" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Classe E</label>
    <input type="radio" name="classe_social" value="Classe E" required>
    <label for="Classe F" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Classe F</label>
    <input type="radio" name="classe_social" value="Classe F" required>
    <label for="Classe X" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe X</label>
    <input type="radio" name="classe_social" value="Classe X" required>
</div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é o seu nível de experiencia ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color2">
    <label for="Jovem" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Jovem</label>
    <input type="radio" name="experiencia" value="Jovem" required>
    <label for="Iniciante" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Iniciante</label>
    <input type="radio" name="experiencia" value="Iniciante" required>
    <label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Aprendiz</label>
    <input type="radio" name="experiencia" value="Aprendiz" required>
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Mediano</label>
    <input type="radio" name="experiencia" value="Mediano" required>
    <label for="Intermédiario" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Intermédiario</label>
    <input type="radio" name="experiencia" value="Intermédiario" required>
    <label for="Avançado" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Avançado</label>
    <input type="radio" name="experiencia" value="Avançado" required>
    <label for="Expert" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Expert</label>
    <input type="radio" name="experiencia" value="Expert" required>
</div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de conhecimento?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color3">
    <label for="Iniciante" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Iniciante</label>
    <input type="radio" name="conhecimento" value="Iniciante" required>
    <label for="Jovem" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Jovem</label>
    <input type="radio" name="conhecimento" value="Jovem" required>
    <label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Aprendiz</label>
    <input type="radio" name="conhecimento" value="Aprendiz" required>
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Mediano</label>
    <input type="radio" name="conhecimento" value="Mediano" required>
    <label for="Intermediário" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Intermediário</label>
    <input type="radio" name="conhecimento" value="Intermediário" required>
    <label for="Avançado" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Avançado</label>
    <input type="radio" name="conhecimento" value="Avançado" required>
    <label for="Master" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Master</label>
    <input type="radio" name="conhecimento" value="Master" required>
</div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color4">
    <label for="Base" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Base</label>
    <input type="radio" name="nivel_social" value="Base" required>
    <label for="Médio" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Médio</label>
    <input type="radio" name="nivel_social" value="Médio" required>
    <label for="Avançado" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Avançado</label>
    <input type="radio" name="nivel_social" value="Avançado" required>
    <label for="Neutro" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Neutro</label>
    <input type="radio" name="nivel_social" value="Neutro" required>
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Mediano</label>
    <input type="radio" name="nivel_social" value="Mediano" required>
    <label for="Avançado" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Avançado</label>
    <input type="radio" name="nivel_social" value="Avançado" required>
    <label for="Influêncer" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Influêncer</label>
    <input type="radio" name="nivel_social" value="Influêncer" required>
</div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é o seu signo?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:black;color:white;border:4px solid white;box-shadow:4px 4px 4px yellow;">QUAL?</summary>
    <br>
    <select name="signo" id="signo" required>
    <option value="" selected disabled>Selecione</option>
    <option value="Áries">Áries</option>
    <option value="Gêmeos">Gêmeos</option>
    <option value="Escorpião">Escorpião</option>
    <option value="Sagitário">Sagitário</option>
    <option value="Capricôrnio">Capricôrnio</option>
    <option value="Libra">Libra</option>
    <option value="Leão">Leão</option>
    <option value="Virgem">Virgem</option>
    <option value="Ofiúco">Ofiúco</option>
    <option value="Aquário">Aquário</option>
    <option value="Peixes">Peixes</option>
    <option value="Touro">Touro</option>
    <option value="Câncer">Câncer</option>
    </select>
</details></div></div>
    <br>
    <br>
    <h2><big>Me fale sobre a sua experiencia?</big></h2>
    <br>
    <textarea name="experience_text" id="experience_text" rows="9" required></textarea>
    <br>
    <br>
    <button value="experience_text">Cadastre</button>
    <br>
    </fieldset>
    <br>
    <div class="nav">
    <nav style="background-color:darkblue;">
    <p style="color:white;">Retorne para minha <a href="index.php" target="_blank" rel="external" style="text-shadow:9px;text-decoration:none;border-radius:10px 10px;font-size:14px;background-color:white;color:red;border:3px solid cyan;box-shadow:5px 5px 5px black;">1ªPágina</a></p>
    </nav>
    </div>
    <br>
    <div class="footer">
    <footer style="background-color:darkred;">
    <p style="color:white;">@GuilhermeBarbosaDaSilva,todos os direitos reservados.</p>
    </footer>
    </div>
    </main>
    </form>
</details></div>
    <script>
    //Caixa de Texto
    alert('Seja');
    alert('Bem');
    alert('Vindo');
    alert('Ao Formulário');
    //Alerta no console
    console.log('');
    console.log('');
    console.log('');
    console.log('');
    //Escrever no paragráfo que contém o ID.
    document.getElementById('').innerHTML='';
    document.getElementById('').innerHTML='';
    document.getElementById('').innerHTML='';
    document.getElementById('').innerHTML='';
    document.getElementById('').innerHTML='';
    //Escrever no HTML, usado para testes.
    document.write('');
    document.write('');
    document.write('');
    document.write('');
    document.write('');
    </script>
    <?php
    $host="127.0.0.1";
    $dbname="formguibarbosasilva";
    $username="formdogui";
    $password="";
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $nome=$_POST['nome']??null;
    $idade=$_POST['idade']??null;
    $cpf=$_POST['cpf']??null;
    $rg=$_POST['rg']??null;
    $genero=$_POST['genero']??null;
    $cep=$_POST['cep']??null;
    $email=$_POST['email']??null;
    $telefone=$_POST['telefone']??null;
    $endereco=$_POST['endereco']??null;
    $data_nasc=$_POST['data_nasc']??null;
    $data_hora=$_POST['data_hora']??null;
    $classe_social=$_POST['classe_social']??null;
    $experiencia=$_POST['experiencia']??null;
    $conhecimento=$_POST['conhecimento']??null;
    $nivel_social=$_POST['nivel_social']??null;
    $signo=$_POST['signo']??null;
    $experience_text=$_POST['experience_text']??null;
    $sql = "INSERT INTO formdogui (nome, idade, cpf, rg, genero, cep, email, telefone, endereco, data_nasc, data_hora, classe_social, experiencia, conhecimento, nivel_social, signo, experience_text)
    VALUES ('$nome','$idade','$cpf','$rg','$genero','$cep','$email','$telefone','$endereco','$data_nasc','$data_hora','$classe_social','$experiencia','$conhecimento','$nivel_social','$signo','$experience_text')";
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