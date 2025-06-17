<section class="w-full">
  <h2 class="text-3xl font-bold text-gray-900">PRODUTOS EM DESTAQUE</h2>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <header>
      <!-- <p class="mt-4 max-w-md text-gray-500">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
        dicta incidunt est ipsam, officia dolor fugit natus?
      </p> -->
    </header>

    <div class="mt-8 sm:flex sm:items-center sm:justify-between w-full">
      <div class="block sm:hidden">
        <button
          class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
        >
          <span class="text-sm font-medium"> Filters & Sorting </span>

          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-4 rtl:rotate-180"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>
        </button>
      </div>

      <div class="hidden sm:flex sm:gap-4">
        <div class="relative">
          <details class="group [&_summary::-webkit-details-marker]:hidden">
            <summary
              class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
            >
              <span class="text-sm font-medium"> Avaliação </span>

              <span class="transition group-open:-rotate-180">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-4"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                  />
                </svg>
              </span>
            </summary>

            <div
              class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0"
            >
              <div class="w-96 rounded-sm border border-gray-200 bg-white">
                <header class="flex items-center justify-between p-4">
                  <span class="text-sm text-gray-700"> 0 Selecionados</span>

                  <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                    Limpar
                  </button>
                </header>

                <ul class="space-y-1 border-t border-gray-200 p-4">
                  <li>
                    <label for="FilterInStock" class="inline-flex items-center gap-2">
                      <input
                        type="checkbox"
                        id="FilterInStock"
                        class="size-5 rounded-sm border-gray-300 shadow-sm"
                      />

                      <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                    </label>
                  </li>

                  <li>
                    <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                      <input
                        type="checkbox"
                        id="FilterPreOrder"
                        class="size-5 rounded-sm border-gray-300 shadow-sm"
                      />

                      <span class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                    </label>
                  </li>

                  <li>
                    <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                      <input
                        type="checkbox"
                        id="FilterOutOfStock"
                        class="size-5 rounded-sm border-gray-300 shadow-sm"
                      />

                      <span class="text-sm font-medium text-gray-700"> Out of Stock (10+) </span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </details>
        </div>

        <div class="relative">
          <details class="group [&_summary::-webkit-details-marker]:hidden">
            <summary
              class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
            >
              <span class="text-sm font-medium"> Preço </span>

              <span class="transition group-open:-rotate-180">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-4"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                  />
                </svg>
              </span>
            </summary>

            <div
              class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0"
            >
              <div class="w-96 rounded-sm border border-gray-200 bg-white">
                <header class="flex items-center justify-between p-4">
                  <span class="text-sm text-gray-700"> O preço mais alto é $600 </span>

                  <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                    Reiniciar
                  </button>
                </header>

                <div class="border-t border-gray-200 p-4">
                  <div class="flex justify-between gap-4">
                    <label for="FilterPriceFrom" class="flex items-center gap-2">
                      <span class="text-sm text-gray-600">$</span>

                      <input
                        type="number"
                        id="FilterPriceFrom"
                        placeholder="De"
                        class="w-full rounded-md border-gray-200 shadow-xs sm:text-sm"
                      />
                    </label>

                    <label for="FilterPriceTo" class="flex items-center gap-2">
                      <span class="text-sm text-gray-600">$</span>

                      <input
                        type="number"
                        id="FilterPriceTo"
                        placeholder="Para"
                        class="w-full rounded-md border-gray-200 shadow-xs sm:text-sm"
                      />
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </details>
        </div>
      </div>

      <div class="hidden sm:block">
        <label for="SortBy" class="sr-only">SortBy</label>
        <select id="SortBy" class="h-10 rounded-sm border-gray-300 text-sm">
          <option>Ordenar por</option>
          <option value="Title, DESC">Título, DESC</option>
          <option value="Title, ASC">Título, ASC</option>
          <option value="Price, DESC">Preço, DESC</option>
          <option value="Price, ASC">Preço, ASC</option>
        </select>
      </div>
    </div>

    <ul class="mt-4 grid align-center gap-4 sm:grid-cols-2 lg:grid-cols-4">
      
      
<?php foreach ($produtos as $produto): ?>
    <li class="produtos" data-id="<?= $produto['id']?>">
    <div class="lg:w-1/4 md:w-1/2 p-4 w-60 flex flex-col align-center justify-center">
        <a class="block relative h-60 rounded overflow-hidden">
            <button
                class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>
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
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>
            
            <img alt="ecommerce" class="h-full w-full object-cover transition opacity-100 group-hover:opacity-0 duration-500 group-hover:scale-105 sm:h-72 transition hover:scale-105" src="<?= '../../Lib/img/produtos/' . $produto['imagem'] ?>">
            <img alt="ecommerce" class="h-64 w-84 object-cover transition opacity-0 group-hover:opacity-100 duration-500 group-hover:scale-105 sm:h-72 transition hover:scale-105" src="<?= '../../Lib/img/produtos/' . $produto['imagem'] ?>">
        </a>
        <div class="mt-4">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?= $produto['nome'] ?></h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
            <p class="mt-1">$<?= $produto['preco']  . ',' . '00' ?></p>
            <form class="mt-4 flex gap-4">
                <button
                    class="block w-full rounded-sm bg-gray-100 px-4 py-3 text-sm font-medium text-gray-900 transition hover:scale-105">
                    Adicionar ao carrinho
                </button>
            </form>
        </div>
    </div>
    </li>
<?php endforeach; ?>
    </ul>
  </div>
</section>