<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locais</title>
    <link rel="stylesheet" href="/dist/main.css">
</head>
<body class="bg-slate-100">

    <!-- header - cabeçalho com a imagem, pode definir a largura do header pra pegar 100% da tela e colocar a imagem no centro, usando flexbox ou text-center -->
    <header> 
        <img class="mt-5 mb-8
         w-96 h-auto mx-auto"  src="<?php echo $bloco->imagem?>" alt="MAPA DA UNIVIÇOSA">
    </header>

    <!-- main - conteúdo principal da página -->
    <main class="border-4 border-blue-600 p-4 rounded-2xl mx-auto w-96 mb-10">
        <!-- div com o titulo principal -->
        <div class="bg-blue-600 rounded-full max-w-xs mx-auto">
            <!-- luiz vai mudar isso depois -->
            <h2 class="p-3 text-sm font-bold text-white text-center">INFORMAÇÕES DO BLOCO</h2>
        </div>

        <!-- div com as informações da sala ou local(banheiro, biblioteca ...) -->
        <div class="text-center pt-10 font-semibold">
            <h3>Nome: <?php echo $bloco->nome_bloco?></h3>
            <h3>Andares: <?php echo $bloco->andares?></h3>
            <h3>Ano construção: <?php echo $bloco->ano_construcao?></h3>
        </div>

        <!-- titulo e imagem do local -->
        <div >
            <h2 class="text-center pt-6 font-bold">Histórico do Bloco</h2>

            <p class="text-justify pt-4"><?php echo $bloco->historico?></p>

        </div>
    </main>

</body>
</html>