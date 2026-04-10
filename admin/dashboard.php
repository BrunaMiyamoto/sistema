<?php

session_start(); //trava de segurança

if (!isset($_SESSION["logado"])) {

    header("Location:../");
};

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema em PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/main.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">
    <header class="bg-blue-700">
        <nav class="max-w-6xl mx-auto text-white flex justify-between p-2 shadow-2xl">
            <h1 class="font-bold">Dashboard</h1>
            <div>
                <!-- o flex deixa flexivel e elementos um do lado do outro, com o justify-between o elementos são separados com espaçamento igual, colocando dentro de div o flex entende que passa a ter apenas dois blocos e não 4 como antes -->

                <a href="../login/logout.php" class="hover:underline">Sair</a>
            </div>
        </nav>
    </header>
    <main class="py-6 max-w-6xl mx-auto mt-3">
        <div class="text-2xl font-bold text-gray-700 ">
            Bem Vindo, <?= $_SESSION["nome"] ?>!
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white rounded-xl shadow p-4 mt-7">
                <h2 class="font-bold text-2xl text-blue-600">Usuários</h2>
                <p class="text-7xl text-center text-gray-400 font-bold mt-5 "><i class="fa-solid fa-user"></i></i>10</p>

            </div>
            <div class="bg-white rounded-xl shadow p-4 mt-7">
                <h2 class="font-bold text-2xl text-blue-600">Notícias Publicadas</h2>
                <p class="text-7xl text-center text-gray-400 font-bold  mt-5"><i class="fa-solid fa-newspaper"></i>15</p>
            </div>
            <div class="bg-white rounded-xl shadow p-4 mt-7">
                <h2 class="font-bold text-2xl text-blue-600 ">Relatórios</h2>
                <p class="text-7xl text-center text-gray-400 font-bold  mt-5"><i class="fa-solid fa-bug"></i>0</p>
            </div>
        </div>

    </main>
</body>

</html>