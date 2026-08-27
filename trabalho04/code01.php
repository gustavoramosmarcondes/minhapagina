<!DOCTYPE html>
<html>
<head>
    <title>PHP primeiro</title>
</head>
<body>
    <h1><?php echo "Ola"; ?></h1>
    <p>texto</p>
    <?php 
        $nome = "Gustavo";
        $idade = 17;
        $altura = 1.80;
        $isEstudante= true;

        echo "<p>Nome: " . $nome . "</p>";
        echo "<p>Idade: " . $idade . "</p>";
        echo "<p>Altura: " . number_format($altura, 2) . "</p>";
        echo "<p>É estudante? : " . ($isEstudante ? "Sim" : "Não") . "</p>";
        ?>
</body>

</html>