<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<style>
    p {
        float: right;
    }
    p > input {
        font-family: 'Courier New', Courier, monospace;
        font-size: 14pt;
    }
</style>
<body>
<div>

    <form method="get" action="formulario02.php">
        Nome: <input type="text" name="nome"><br>
        Ano de nascimento: <input type="number" name="ano"><br>
        <br>
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="masculino">
            <label for="masc">Masculino</label>
            <input type="radio" name="sexo" id="fem" value="feminino">
            <label for="fem">Feminino</label>
        </fieldset>
        <p><input type="submit" value="Enviar"></p>
        <script>
            if ($nome==null) or ($ano==null) or ($sexo==null) {
            document.write("Preencha todos os campos!") };
            </script>
    </form>
</div>
</body>
</html>
 