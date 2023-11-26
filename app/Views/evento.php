<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $evento->nome_evento ?></title>
    <link rel="stylesheet" href="../dist/main.css">
</head>
<body class="bg-slate-100">

    <!-- header - cabeçalho com a imagem, pode definir a largura do header pra pegar 100% da tela e colocar a imagem no centro, usando flexbox ou text-center -->
    <header> 
        <img class="mt-5 mb-8 w-96 h-auto mx-auto"  src="<?php echo $sala->imagem ?>" alt="MAPA DA UNIVIÇOSA">
    </header>

    <!-- main - conteúdo principal da página -->
    <main class="border-4 border-blue-600 p-4 rounded-2xl mx-auto w-96 mb-10">
        <!-- div com o titulo principal -->
        <div class="bg-blue-600 rounded-full max-w-xs mx-auto">
            <!-- luiz vai mudar isso depois -->
            <h2 class="p-3 text-sm font-bold text-white text-center">INFORMAÇÕES DO EVENTO</h2>
        </div>

        <!-- div com as informações do evento(banheiro, biblioteca ...) -->
        <div class="text-center pt-10 font-semibold">
            <h3>Bloco: <?php echo $sala->bloco_id ?></h3>
            <h3>Andar: <?php echo $sala->andar ?>° andar</h3>
            <h3>Data: <?php echo $time->toLocalizedString('dd/MM/yyyy'); ?></h3>
            <h3>Horário: <?php echo $time->toLocalizedString('HH:mm') ?></h3>
        </div>

        <!-- titulo e imagem do evento -->
        <div class="pt-6">
            <h2 class="text-center font-bold"><?php echo strtoupper($evento->nome_evento) ?></h2>
            <p class="pt-4 w-80 mx-auto" style="text-align: justify;"><?php echo $evento->descricao_evento ?></p>
            <img class="pt-4 w-80 h-auto mx-auto" src="<?php echo $evento->foto ?>" alt="<?php echo $evento->nome_evento ?>">

        </div>
    </main>

</body>
</html>