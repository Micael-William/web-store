<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="../../Lib/css/menu.css">
  
  
</head>

<body>
  <?php require_once "./Views/cabecalho.php"; ?>

  <section class="text-gray-600 body-font">
    <div class="bg-gradient-to-r from-green-400 to-blue-500">
      <div class="container px-6 py-16 mx-auto">
        <div class="items-center  lg:flex">
          <div class="w-full text-center lg:w-1/2">
            <div class="w-full flex justify-center flex-col items-center h-50">
              <h1 class="text-3xl text-2xl font-semibold text-white dark:text-white lg:text-4xl">
                Melhor lugar para escolher seus produtos
              </h1>
              <p class="mt-3 text-white dark:text-gray-400">Até 50% de desconto em produtos selecionados</p>

              <button class="w-full px-5 py-2 mt-6 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-blue-600 rounded-lg lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Comprar agora</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap gap-19 align-center m-4">
        <?php require_once "produtos.php"; ?>
      </div>
    </div>
  </section>

  <?php require_once "./Views/rodape.php"; ?>
  
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../../Lib/js/index.js"></script>
</body>
</html>