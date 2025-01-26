<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="theme-color" content="#f4434">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
body{text-align: center;margin: auto;align-items: center;justify-content: center;background: linear-gradient(to right,blue,black,blue);}
h1{text-shadow:9px;color: white;text-decoration: underline;font-size: 30px;font-style: oblique;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;white-space:nowrap;}
h2{text-shadow:9px;color: black;text-decoration: none;font-size: 16px;font-style: italic;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;white-space:nowrap;}
p{text-shadow:9px;color: white;text-decoration: none;font-size: 15px;font-style: inherit;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;}
a{text-decoration: none;text-shadow: 9px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: inherit;border-radius: 10px 10px;}
footer{align-items: center;justify-content:center;text-align:center;width:300px;margin:auto;border-radius:10px 10px;border:6px solid whitesmoke;cursor:grab;padding:30px;}
nav{align-items: center;justify-content:center;text-align:center;width:300px;margin:auto;border-radius:10px 10px;border:6px solid white;cursor:grab;padding:30px;}
summary{cursor: crosshair;width: 100px;margin: auto;border-radius: 10px 10px;padding: 6px;font-size: 16px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: white;color: red;border: 4px solid black;box-shadow: 6px 6px 6px black;}
.footer:hover{transition: ease s;transform: scale(1.05);}
.nav:hover{transition: ease s;transform: scale(1.07);}
.summary:hover{transition: ease s;transform: scale(1.09);}
form{margin: auto;align-items: center;justify-content: center;text-align: center;display: flex;flex-direction: column;}
fieldset{cursor: progress;width: 300px;margin: auto;border-radius: 10px 10px;padding: 14px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;background-color: whitesmoke;border: 4px solid black;box-shadow: 5px 5px 5px red;}
label{padding: 20px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;margin: auto;text-shadow: 9px;color: black;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
.color1{display:flex;flex-direction:row;gap:6px;padding:10px;align-items:center;justify-content:center;text-align:center;margin:auto;width:800px;border-radius:10px 10px;background-color: blue;border:5px solid whitesmoke;box-shadow: 6px 6px 6px black;white-space:nowrap;cursor:grabbing;}
.color2{display:flex;flex-direction:row;gap:6px;padding:10px;align-items:center;justify-content:center;text-align:center;margin:auto;width:800px;border-radius:10px 10px;background-color: red;border:5px solid whitesmoke;box-shadow: 6px 6px 6px black;white-space:nowrap;cursor:grabbing;}
.color3{display:flex;flex-direction:row;gap:6px;padding:10px;align-items:center;justify-content:center;text-align:center;margin:auto;width:800px;border-radius:10px 10px;background-color: black;border:5px solid whitesmoke;box-shadow: 6px 6px 6px black;white-space:nowrap;cursor:grabbing;}
.color4{display:flex;flex-direction:row;gap:6px;padding:10px;align-items:center;justify-content:center;text-align:center;margin:auto;width:800px;border-radius:10px 10px;background-color: darkblue;border:5px solid whitesmoke;box-shadow: 6px 6px 6px black;white-space:nowrap;cursor:grabbing;}
input{text-align: left;padding: 4px;text-shadow: 9px;display: flex;flex-direction: column;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: inherit;background-color: whitesmoke;border: 4px solid blue;color: black;border-radius: 10px 10px;text-shadow: 9px;width: 300px;}
select{cursor: context-menu;width: 200px;margin: auto;border-radius: 10px 10px;padding: 5px;background-color: black;color: white;border: 4px solid white;box-shadow: 4px 4px 4px yellow;text-shadow: 9px;}
textarea{cursor: text;margin: auto;height: 200px;width: 300px;border-radius: 10px 10px;padding: 5px;background-color: wheat;border: 4px solid black;color: black;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: inherit;text-shadow: 9px;}
button{cursor: progress;width: 280px;margin: auto;border-radius: 10px 10px;padding: 6px;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: blue;color: white;border: 4px solid white;box-shadow: 6px 6px 6px black;text-shadow: 9px;}
</style>
<body>
    <h1><big>Formulário</big></h1>
    <br>
    <p id="script"></p>
    <br>
    <p id="text"></p>
    <br>
    <p id="hell"></p>
    <br>
    <p id="first"></p>
    <br>
    <p id="ola"></p>
    <br>
    <p id="meu"></p>
    <br>
    <p id="mundo"></p>
    <br>
    <p id="help"></p>
    <br>
    <div id="text"><details><summary style="width:300px;background-color:white;color:red;border:3px solid black;box-shadow:4px 4px 4px black;">Formulário</summary>
    <br>
    <form action="form3.php" method="post">
    <header><h1>Cadastro de <b>BRS</b></h1></header>
    <br>
    <main>
    <fieldset>
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="Nome" title="Digite seu Nome" placeholder="Exemplo: Guilherme Barbosa Da Silva" max="30" maxlength="30" required>
    <label for="Idade">Idade</label>
    <input type="number" name="idade" id="Idade" title="Digite sua Idade" placeholder="Exemplo: 23 ou 39 anos ??" max="30" maxlength="30" required>
    <label for="CPF">CPF</label>
    <input type="text" name="cpf" id="CPF" title="Digite seu CPF" placeholder="Exemplo: 503.552.748-41" max="30" maxlength="30" required>
    <label for="RG">RG</label>
    <input type="text" name="rg" id="RG" title="Digite seu RG" placeholder="Exemplo: 53.742.867-7" max="30" maxlength="30" required>
    <label for="Gênero">Gênero</label>
    <select name="genero" id="Gênero" required style="width:150px;font-size:13px;padding:3px;background-color:white;color:blue;border:3px solid black;box-shadow:5px 5px 5px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Agênero">Agênero</option>
    <option value="Bigênero">Bigênero</option>
    <option value="Transgênero">Transgênero</option>
    <option value="Cisgênero">Cisgênero</option>
    </select>
    <br>
    <label for="Data de Nascimento">Data de Nascimento</label>
    <input type="date" name="data_nasc" id="Data de Nascimento" title="Digite sua Data de Nascimento" placeholder="Exemplo: 22/05/2001" max="30" maxlength="30" required>
    <label for="Endereço">Endereço</label>
    <input type="text" name="endereco" id="Endereço" title="Digite seu Endereço" placeholder="Exemplo: Av Rio das Pedras Nª4100" max="30" maxlength="30" required>
    <label for="Telefone">Telefone</label>
    <input type="tel" name="telefone" id="Telefone" title="Digite seu Telefone" placeholder="Exemplo: (11) 98341-7590" max="30" maxlength="30" required>
    <label for="Data e Hora">Data e Hora</label>
    <input type="datetime-local" name="data_hora" id="Data e Hora" title="Digite sua Data e Hora" placeholder="Exemplo: 22/05 ás 10 AM" max="30" maxlength="30" required>
    <br>
    <br>
    <h2><big>Qual o seu nível de Conhecimento?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color1">
    <label for="Jovem" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Jovem</label>
    <input type="radio" name="conhecimento" value="Jovem" required>
    <label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Aprendiz</label>
    <input type="radio" name="conhecimento" value="Aprendiz" required>
    <label for="Iniciante" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Iniciante</label>
    <input type="radio" name="conhecimento" value="Iniciante" required>
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Mediano</label>
    <input type="radio" name="conhecimento" value="Mediano" required>
    <label for="Intermediário" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Intermediário</label>
    <input type="radio" name="conhecimento" value="Intermediário" required>
    <label for="Avançado" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Avançado</label>
    <input type="radio" name="conhecimento" value="Avançado" required>
    <label for="Expert" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Expert</label>
    <input type="radio" name="conhecimento" value="Expert" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de Experiência ?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color2">
    <label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Aprendiz</label>
    <input type="radio" name="experiencia" value="Aprendiz" required>
    <label for="Jûnior" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Jûnior</label>
    <input type="radio" name="experiencia" value="Jûnior" required>
    <label for="Pleno" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Pleno</label>
    <input type="radio" name="experiencia" value="Pleno" required>
    <label for="Sênior" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Sênior</label>
    <input type="radio" name="experiencia" value="Sênior" required>
    <label for="Master" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Master</label>
    <input type="radio" name="experiencia" value="Master" required>
    <label for="Profissional" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Profissional</label>
    <input type="radio" name="experiencia" value="Profissional" required>
    <label for="Expert" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Expert</label>
    <input type="radio" name="experiencia" value="Expert" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color3">
    <label for="Base" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Base</label>
    <input type="radio" name="nivel_social" value="Base" required>
    <label for="Iniciante" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Iniciante</label>
    <input type="radio" name="nivel_social" value="Iniciante" required>
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Mediano</label>
    <input type="radio" name="nivel_social" value="Mediano" required>
    <label for="Avançado" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Avançado</label>
    <input type="radio" name="nivel_social" value="Avançado" required>
    <label for="Expert" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Expert</label>
    <input type="radio" name="nivel_social" value="Expert" required>
    <label for="Master" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Master</label>
    <input type="radio" name="nivel_social" value="Master" required>
    <label for="Influêncer" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Influêncer</label>
    <input type="radio" name="nivel_social" value="Influêncer" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual a sua classe social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color4">
    <label for="Classe A" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe A</label>
    <input type="radio" name="classe_social" value="Classe A" required>
    <label for="Classe B" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe B</label>
    <input type="radio" name="classe_social" value="Classe B" required>
    <label for="Classe C" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe C</label>
    <input type="radio" name="classe_social" value="Classe C" required>
    <label for="Classe D" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe D</label>
    <input type="radio" name="classe_social" value="Classe D" required>
    <label for="Classe E" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe E</label>
    <input type="radio" name="classe_social" value="Classe E" required>
    <label for="Classe F" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe F</label>
    <input type="radio" name="classe_social" value="Classe F" required>
    <label for="Classe X" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe X</label>
    <input type="radio" name="classe_social" value="Classe X" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu signo?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:black;color:white;border:3px solid white;box-shadow:5px 5px 5px yellow;">QUAL?</summary>
    <br>
    <select name="signo" id="signo" required>
    <option value="" selected disabled>Selecione</option>
    <option value="Áries">Áries</option>
    <option value="Ofiùco">Ofiùco</option>
    <option value="Câncer">Câncer</option>
    <option value="Câpricôrnio">Câpricôrnio</option>
    <option value="Leão">Leão</option>
    <option value="Libra">Libra</option>
    <option value="Sagitário">Sagitário</option>
    <option value="Escorpião">Escorpião</option>
    <option value="Peixes">Peixes</option>
    <option value="Aquário">Aquário</option>
    <option value="Touro">Touro</option>
    <option value="Gêmeos">Gêmeos</option>
    <option value="Virgem">Virgem</option>
    </select>
</details></div></div>
    <br>
    <br>
    <h2><big>Me fale sobre a sua experiência</big></h2>
    <br>
    <textarea name="experience_text" id="experience_text" rows="9" required></textarea>
    <br>
    <br>
    <button value="experience_text">Cadastre</button>
    <br>
    </fieldset>
    </main>
    <br>
    <div class="nav">
    <nav style="background-color:darkblue;">
    <p style="color:white;">Retorne para minha <a href="index.php" target="_blank" rel="external" style="background-color:white;color:red;border:3px solid black;box-shadow:4px 4px 4px black;text-decoration:none;text-shadow:9px;border-radius:10px 10px;">1ªPágina</a></p>
    </nav>
    </div>
    <br>
    <div class="footer">
    <footer style="background-color:darkred;">
    <p style="color:white;">@GuilhermeBarbosaDaSilva, todos os direitos autorais.</p>
    </footer>
    </div>
    </form>
</details></div>
    <script>
    alert('Ola');
    alert('Bem');
    alert('Vindo');
    alert('Ao');
    alert('Meu');
    alert('Formulario');
    alert(200*222);
    alert(1000/399);
    console.log('ola');
    console.log('meu');
    console.log('mundo');
    console.log('favorito');
    console.log('wellcome');
    console.log('hello');
    document.getElementById('script').innerText='Ola';
    document.getElementById('text').innerHTML='sou';
    document.getElementById('hell').innerHTML='guilherme';
    document.getElementById('first').innerHTML='barbosa';
    document.getElementById('ola').innerHTML='da silva';
    document.getElementById('meu').innerHTML='estou';
    document.getElementById('mundo').innerHTML='desenvolvendo';
    document.getElementById('help').innerHTML='Form';
    document.write('Acesse');
    document.write('o');
    document.write('meu');
    document.write('formulario');
    document.write('que');
    document.write('desenvolvi');
    document.write('com');
    document.write('cuidado');
    function name(){
        console.log('well');
        console.log('come');
        console.log('to');
        console.log('my');
        console.log('page');
    }
    function idade ()
    {
        console.log(22);
        console.log(34);
        console.log(22*333);
        console.log(100);
        console.log(345-333);
    }
    </script>
    <?php
    $host='127.0.0.1';
    $username='bobmarley';
    $dbname='johnny';
    $password='';
    $conn = mysqli_connect($host,$username,$password,$dbname);
    $nome=$_POST['nome']??null;
    $idade=$_POST['idade']??null;
    $cpf=$_POST['cpf']??null;
    $rg=$_POST['rg']??null;
    $genero=$_POST['genero']??null;
    $data_nasc=$_POST['data_nasc']??null;
    $endereco=$_POST['endereco']??null;
    $telefone=$_POST['telefone']??null;
    $data_hora=$_POST['data_hora']??null;
    $conhecimento=$_POST['conhecimento']??null;
    $experiencia=$_POST['experiencia']??null;
    $nivel_social=$_POST['nivel_social']??null;
    $classe_social=$_POST['classe_social']??null;
    $signo=$_POST['signo']??null;
    $experience_text=$_POST['experience_text']??null;
    $sql = "INSERT INTO bobmarley (nome, idade, cpf, rg, genero, data_nasc, endereco, telefone, data_hora, conhecimento, experiencia, nivel_social, classe_social, signo, experience_text)
    VALUES ('$nome','$idade','$cpf','$rg','$genero','$data_nasc','$endereco','$telefone','$data_hora','$conhecimento','$experiencia','$nivel_social','$classe_social','$signo','$experience_text')";
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