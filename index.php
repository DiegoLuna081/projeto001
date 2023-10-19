    <?php
        include 'header.php';
        
        $names =  ["Thiago", "Andressa", "Diego", "Vanessa", "Gabriel"];

        echo "<ul>";
        foreach ($names as $name) {
            echo "<li>$name</li><br>";
        }
        echo "</ul>";

        include 'footer.php';
    ?>

    <?php
    
    //Aqui eu utilizei a verificação via GET para exibir em tela o que foi feito
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Aqui eu condicionei a variável if para exibir via get os nomes das variáveis que quero exibir na URL. O isset está condicionando em TRUE OR FALSE as informações
        if (isset($_GET["nomeCandidato"]) &&
            isset($_GET["idadeCandidato"]) &&
            isset($_GET["genero"]) &&
            isset($_GET["deOndeTrabalha"]) &&
            isset($_GET["qualDisponibilidade"]) 
            ) {
            
            // Aqui eu atribui os valores das variáveis ao getara exibir tudo o que for digitato
            $nomeCandidato = $_GET["nomeCandidato"];
            $idadeCandidato = $_GET["idadeCandidato"];
            $genero = $_GET["genero"];
            $deOndeTrabalha = $_GET["deOndeTrabalha"];
            $trabalhouProgramacao = $_GET["trabalhouProgramacao"];
            $qualDisponibilidade = $_GET["qualDisponibilidade"];
            // Pela função ECHO, obrigo o PHP a exibir em tela o que foi definido por mim, note que o campo password por exemplo não é exibido em tela
            echo "Nome do Candidato: " . $nomeCandidato . "<br>";
            echo "Idade do Candidato: " . $idadeCandidato . "<br>";
            echo "Gênero: " . $genero . "<br>";
            echo "De onde você prefere trabalhar? " . $deOndeTrabalha . "<br>";
            echo "Já Trabalhou na Área de Programação: " . $trabalhouProgramacao . "<br>";
            echo "Quando pretende começar a trabalhar?? " . $qualDisponibilidade . "<br>";
        } else {
            echo "Os dados não foram preenchidos corretamente.";
        }
    }