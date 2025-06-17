<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../Lib/css/menu.css">
    <title>Perfil</title>
</head>

<body>
    <?php require_once "./Views/cabecalho.php"; ?>
    <section class="max-w-4xl m-6 p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <div class="avatar avatar-placeholder gap-5 flex items-center">
            <div class="bg-neutral text-neutral-content w-24 rounded-full">
                <label class="block mb-2 text-sm font-medium text-gray-100 dark:text-white" for="foto"><span class="text-3xl">M</span></label>
                
            </div>
            <input style="display: none;" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="foto" type="file" multiple>
            <div class="flex flex-column">

                <h1>Micael</h1>
                <p>Cliente</p>
            </div>
        </div>
        <br>
        <br>
        <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Configurações de conta</h2>

        <form>
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Nome</label>
                    <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Seu nome">
                </div>
                

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Endereço de email</label>
                    <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Seu endereço">
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password">Senha</label>
                    <input id="password" type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Sua senha">
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="passwordConfirmation">Confirmação de senha</label>
                    <input id="passwordConfirmation" type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Confirmação de senha">
                </div>
            </div>
        <br>
        <br>
        <h3 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Endereço</h3>
       
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Endereço</label>
                    <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Seu endereço">
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Telefone</label>
                    <input id="emailAddress" type="tel" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="(99) 99999-99">
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password">Cep</label>
                    <input id="password" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="99999-99">
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="passwordConfirmation">Número</label>
                    <input id="passwordConfirmation" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="número">
                </div>
                <!-- <div>
                    <div class="flex items-center justify-center w-210">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>
                </div> -->
            </div>

            <div class="flex justify-end mt-6">
                <button class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Salvar</button>
            </div>
        </form>

    </section>

</body>

</html>