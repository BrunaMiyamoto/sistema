<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/main.css">

</head>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen ">
    <div class="bg-white p-6 shadow w-[300px] rounded-xl">
        <h1 class="text-2xl font-bold text-center mb-3">Login</h1>
        <p class="text-sm text-gray-600 mb-5 text-center">Entre com seus dados para acessar o sistema</p>
        <form action="autenticacao.php" method="post">
            <div class="mb-3">
                <label class="block" for="email">Email:</label>
                <input class="w-full border border-gray-500 rounded p-1" type="text" name="email" id="email" placeholder="Digite seu email" />
            </div>
            <div class="mb-3">
                <label class="block" for="senha">Senha:</label>
                <input class="w-full border  border-gray-500 rounded p-1" type="password" name="senha" id="senha" placeholder="*********" />
            </div>
            <label>
                <!-- se no input não estiver estipulado um value, ele reconhecerá como verdadeiro ou falso -->
                <input type="checkbox" name="lembrar" id="lembrar" /> Lembrar-me
            </label>
            <button class="bg-blue-500 w-full rounded text-white p-1 hover:bg-blue-300 cursor-pointer transition duration-500 mt-4" type="submit">Entrar</button>
        </form>
    </div>
</body>

</html>