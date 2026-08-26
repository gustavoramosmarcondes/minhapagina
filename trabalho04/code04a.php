<!DOCTYPE html>
<html>
<head>
    <title>PHP primeiro</title>
</head>
<body>
    <h1><?php echo "Ola"; ?></h1>
    <p>texto</p>
    <form action="code04a.php" method="POST">
        <label for='nota1'>Digite nota 1</label>
        <input type='Number' name='nota1'>
        <label for='nota2'>Digite nota 2</label>
        <input type='Number' name='nota2'>
        <label for='nota3'>Digite nota 3</label>
        <input type='Number' name='nota3'>
        <button type="submit">Enviar</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $media = ($nota1 + $nota2 + $nota3) / 3;

            
            if($media < 6){
                echo "<p>A media é: " . round($media,2) . ", e você esta REPROVADO</p>";
            } else if($media > 6 && $media <= 8){
                echo "<p>A media é: " . round($media,2) . ", e você esta APROVADO!!!</p>";
            } else if($media >= 9){
                echo "<p>A media é: " . round($media,2) . ", e você esta MUITO BEM APROVADO!!!!!</p>";
            }
        }
        ?>
</body>

</html>