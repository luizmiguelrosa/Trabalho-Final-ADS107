<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $local->tipo_local ?></title>
    <link rel="stylesheet" href="../dist/main.css">
</head>
<body class="bg-slate-100">

    <!-- header - cabeçalho com a imagem, pode definir a largura do header pra pegar 100% da tela e colocar a imagem no centro, usando flexbox ou text-center -->
    <header> 
        <img class="mt-5 mb-8 w-96 h-auto mx-auto"  src="..<?php echo $local->imagem ?>" alt="MAPA DA UNIVIÇOSA">
    </header>

    <!-- main - conteúdo principal da página -->
    <main class="border-4 border-blue-600 p-4 rounded-2xl mx-auto w-96 mb-10">
        <!-- div com o titulo principal -->
        <div class="bg-blue-600 rounded-full max-w-xs mx-auto">
            <!-- luiz vai mudar isso depois -->
            <h2 class="p-3 text-sm font-bold text-white text-center">INFORMAÇÕES DO LOCAL</h2>
        </div>

        <!-- div com as informações do local(banheiro, biblioteca ...) -->
        <div class="text-center pt-10 font-semibold">
            <h3>Bloco: <?php echo $local->bloco_id ?></h3>
            <h3>Andar: <?php echo $local->andar ?>° andar</h3>
            <h3>Local: <?php echo $local->tipo_local ?></h3>
        </div>

        <!-- titulo e imagem do local -->
        <div class="text-center pt-6 font-bold">
            <h2><?php echo strtoupper($local->tipo_local) ?></h2>
            <img class="pt-4 w-80 h-auto mx-auto" src="..<?php echo $local->foto ?>" alt="<?php echo $local->tipo_local ?>">

        </div>
    </main>

</body>
</html>