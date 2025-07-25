<?php if(isset($_SESSION['logado'])): ?>
<div class="navbar p-5 bg-white gap-4 text-primary-content shadow-sm">
  <div class="flex-1">
    <h1 style="font-size: 2.4rem;" class="btn btn-ghost text-xl text-gray-900">WebStore</h1>
  </div>
  <form style="margin-right: 130px;" class="w-130 mx-auto menu-block">
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
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circlex">
        <div class="indicator">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <span class="badge badge-sm indicator-item">0</span>
        </div>
      </div>
    </div>
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
<nav class="bg-gray-700 border-gray-200  w-full">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <!-- MENU -->
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
        <li>
          <button class="block py-2 px-3 text-gray-100 bg-blue-700 rounded-sm md:bg-transparent  md:p-0 md:dark:text-blue-500" aria-current="page"><i class="bi bi-border-all"></i> Todos</button>
        </li>
        <li>
          <button class="block py-2 px-3 md:p-0 text-gray-100 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><i class="bi bi-phone"></i> Smartphones</button>
        </li>
        <li>
          <button class="block py-2 px-3 md:p-0 text-gray-100 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><i class="bi bi-laptop"></i> Notebooks</button>
        </li>
        <li>
          <button class="block py-2 px-3 md:p-0 text-gray-100 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><i class="bi bi-headphones"></i> Fones</button>
        </li>
        <li>
          <button class="block py-2 px-3 md:p-0 text-gray-100 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><i class="bi bi-keyboard"></i> Acessórios</button>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php endif; ?>

