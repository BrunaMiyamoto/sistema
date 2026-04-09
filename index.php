<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema em PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="bg-gray-100">
    <header class="bg-blue-700">
        <nav class="max-w-6xl mx-auto text-white flex justify-between p-2 shadow-2xl">
            <h1 class="font-bold">Meu Sistema</h1>
            <div>
                <!-- o flex deixa flexivel e elementos um do lado do outro, com o justify-between o elementos são separados com espaçamento igual, colocando dentro de div o flex entende que passa a ter apenas dois blocos e não 4 como antes -->
                <span>Olá Fulano</span>
                <!-- span tag de formatação inline -->
                <a href="login" class="bg-white text-blue-600 px-4 py-1 rounded">Login</a>
                <a href="login/logout.php" class="hover:underline">Sair</a>
            </div>
        </nav>
    </header>
    <main class="flex justify-center items-center h-[80vh]">
        <!-- sempre verificar o tamanho do bloco antes de fazer os alinhamentos, garanta que o bloco tenha esdpaço o suficiente para alinha os itens no centro
         h-screen pega 100% da tela visivel do usuário (cel, tv, computador) 
         h-[80vh]pega 80% da tela -->
        <!-- estabelecendo o valor de height(altura) e subtraindo o mesmo valor do margin top conseguimos alinhar o elemento ao centro -->
        <div class="bg-white p-8 rounded-2xl shadow text-center">
            <h2 class="font-bold text-2xl mb-4 ">Bem-vindo ao sistema!</h2>
            <p class="text-gray-600 mb-4">
                Faça login para acaessar o painel
            </p>
            <a href="login" class="bg-blue-600 text-white px-6 rounded-lg py-3 hover:bg-blue-700">Ir para Login</a>
        </div>

    </main>
</body>

</html>