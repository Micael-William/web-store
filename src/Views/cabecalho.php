<?php if (isset($_SESSION['logado'])): ?>
  <div class="navbar p-5 bg-white gap-4 text-primary-content shadow-sm flex justify-between">
    <div class="" style="margin: 0 80px;">
      <h1 style="font-size: 2.4rem;" class="btn btn-ghost text-xl text-gray-900">WebStore</h1>
    </div>
    <form class="w-130 mx-auto menu-block">
      <label for="Search">
        <!-- <span class="text-sm font-medium text-gray-700"> Search </span> -->

        <div class="relative">
          <input
            type="text"
            id="Search"
            class="mt-0.5 w-full rounded border-gray-300 pe-10 shadow-sm sm:text-sm"
            placeholder="Pesquisar produto..." />

          <span class="absolute inset-y-0 right-2 grid w-8 place-content-center">
            <button
              type="button"
              aria-label="Submit"
              class="rounded-full p-1.5 text-gray-700 transition-colors hover:bg-gray-100">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-4">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
              </svg>
            </button>
          </span>
        </div>
      </label>
    </form>
    <div class="flex-none flex items-center">
      <button class="dropdown dropdown-end"  data-modal-target="select-modal" data-modal-toggle="select-modal" type="button">
        <div tabindex="0" role="button" class="me-5">
          <div class="indicator">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span class="badge badge-sm indicator-item">0</span>
          </div>
        </div>
      </button>
      <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class=" flex items-center gap-x-2">
          <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=faceare&facepad=3&w=688&h=688&q=100" alt="">
          <div>
            <h1 class="text-base font-semibold text-gray-700 capitalize dark:text-white">Mia John</h1>

            <p class="text-xs text-gray-500 dark:text-gray-400">miajohn@merakiui.com</p>
          </div>
        </div>
        <ul
          tabindex="0"
          class="menu menu-sm dropdown-content text-base-content bg-base-100 rounded-box z-2 mt-3 w-52 p-2 shadow">
          <li>
            <a href="<?= PROFILE ?>" class="justify-between">
              Perfil
            </a>
          </li>
          <li><a href="<?= SETTINGS ?>">Configurações</a></li>
          <li><a href="<?= LOGOUT ?>">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

  <nav class="bg-gray-700" style="width: 100vw; padding: 20px;">
    <div style=" margin: 0 100px; display: flex; gap: 20px;">
      <button class="text-white"><i class="bi bi-headphones"></i> Fones</button>
      
      <button class="text-white" aria-current="page"><i class="bi bi-border-all"></i> Todos</button>
      
      <button class="text-white"><i class="bi bi-laptop"></i> Notebooks</button>
      
      <button class="text-white"><i class="bi bi-phone"></i> Smartphones</button>
      
      <button class="text-white"><i class="bi bi-keyboard"></i> Acessórios</button>
    </div>
  </nav>
<?php endif; ?>

<!-- Main modal -->
<div id="select-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Seu carrinho
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="select-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <p class="text-gray-500 dark:text-gray-400 mb-4">Produtos no carrinho:</p>
                <ul class="space-y-4 mb-4">
                  <li>
                    <div>
                      <img src="" alt="">
                    </div>
                  </li>
                </ul>

                <button class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Finalizar compras
                </button>
            </div>
        </div>
    </div>
</div> 
