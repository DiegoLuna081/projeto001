</ul>
</body>

<div class="container">
        <h2>Formulário para contratação</h2>
        <form method="GET" action="">
            <label for="nomeCandidato">Digite o seu nome completo:</label>
            <input type="text" name="nomeCandidato" id="nomeCandidato">
            <br><br>
            <label for="idadeCandidato">Digite a sua idade:</label>
            <input type="number" name="idadeCandidato" id="idadeCandidato">
            <br><br>
            <label for="genero">Escolha o seu gênero:</label>
            <select id="genero" name="genero">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Prefiro não informar">Prefiro não informar</option>
            </select>
            <br><br>
            <label for="deOndeTrabalha">De onde você prefere trabalhar?</label>
            <select id="deOndeTrabalha" name="deOndeTrabalha">
                <option value="Casa">Casa</option>
                <option value="Escritório">Escritório</option>
            </select>
            <br><br>
            <label for="trabalhouProgramacao">Você já trabalhou na área de programação?:</label>
            <select id="trabalhouProgramacao" name="trabalhouProgramacao">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>
            <label for="qualDisponibilidade">Quando pretende começar a trabalhar?</label>
            <select id="qualDisponibilidade" name="qualDisponibilidade">
                <option value="proxSemana">Próxima semana</option>
                <option value="proxMes">Próximo mês</option>
                
            </select>
            <br><br>
            <label for="codigoPromocional">Digite a senha que lhe foi enviada:</label>
            <input type="password" name="codigoPromocional" id="codigoPromocional">
            <br><br>
            <br><br>
            <input type="submit" value="Enviar">
            <br><br>


</html>