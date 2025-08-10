<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <header>
      <h2 style="font-family:Arial, Helvetica, sans-serif; font-size: 2rem;" class=" font-bold text-gray-900 sm:text-2l">Produtos em destaque</h2>

      <p class="mt-4 max-w-md text-gray-500">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
        dicta incidunt est ipsam, officia dolor fugit natus?
      </p>
    </header>

    <div class="mt-28 sm:flex sm:items-center sm:justify-between">
      <div class="block sm:hidden">
        <button
          class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
          <span class="text-sm font-medium"> Filters & Sorting </span>

          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-4 rtl:rotate-180">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>
        </button>
      </div>

      <div class="hidden sm:flex sm:gap-4">
        <!-- AVALIAÇÃO -->
        <div class="relative flex justify-between border border-gray-400 rounded-sm bg-white px-4 py-2">
          <details class="group [&_summary::-webkit-details-marker]:hidden">
            <summary
              class="flex cursor-pointer items-center gap-2  pb-1 text-gray-900 transition hover:border-gray-600">
              <span class="text-sm font-medium"> Availability </span>

              <span class="transition group-open:-rotate-180">
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
                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
              </span>
            </summary>

            <div
              class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
              <div class="w-96 rounded-sm border border-gray-200 bg-white">
                <header class="flex items-center justify-between p-4">
                  <span class="text-sm text-gray-700"> 0 Selected </span>

                  <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                    Reset
                  </button>
                </header>

                <ul class="space-y-1 border-t border-gray-200 p-4">
                  <li>
                    <label for="FilterInStock" class="inline-flex items-center gap-2">
                      <input
                        type="checkbox"
                        id="FilterInStock"
                        class="size-5 rounded-sm border-gray-300 shadow-sm" />

                      <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                    </label>
                  </li>

                  <li>
                    <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                      <input
                        type="checkbox"
                        id="FilterPreOrder"
                        class="size-5 rounded-sm border-gray-300 shadow-sm" />

                      <span class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                    </label>
                  </li>

                  <li>
                    <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                      <input
                        type="checkbox"
                        id="FilterOutOfStock"
                        class="size-5 rounded-sm border-gray-300 shadow-sm" />

                      <span class="text-sm font-medium text-gray-700"> Out of Stock (10+) </span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </details>
        </div>

        <!-- PREÇO -->
        <div class="relative flex justify-between border border-gray-400 rounded-sm bg-white px-4 p-2 py-2">
          <details class="group [&_summary::-webkit-details-marker]:hidden">
            <summary
              class="flex cursor-pointer items-center gap-2  pb-1 text-gray-900 transition hover:border-gray-600">
              <span class="text-sm font-medium"> Price </span>

              <span class="transition group-open:-rotate-180">
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
                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
              </span>
            </summary>

            <div
              class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
              <div class="w-96 rounded-sm border border-gray-200 bg-white">
                <header class="flex items-center justify-between p-4">
                  <span class="text-sm text-gray-700"> The highest price is $600 </span>

                  <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                    Reset
                  </button>
                </header>

                <div class="border-t border-gray-200 p-4">
                  <div class="flex justify-between gap-4">
                    <label for="FilterPriceFrom" class="flex items-center gap-2">
                      <span class="text-sm text-gray-600">$</span>

                      <input
                        type="number"
                        id="FilterPriceFrom"
                        placeholder="From"
                        class="w-full rounded-md border-gray-200 shadow-xs sm:text-sm" />
                    </label>

                    <label for="FilterPriceTo" class="flex items-center gap-2">
                      <span class="text-sm text-gray-600">$</span>

                      <input
                        type="number"
                        id="FilterPriceTo"
                        placeholder="To"
                        class="w-full rounded-md border-gray-200 shadow-xs sm:text-sm" />
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </details>
        </div>
      </div>
      <!-- TITULO -->
      <div class="hidden sm:block">
        <label for="SortBy" class="sr-only">SortBy</label>

        <select id="SortBy" class="h-10 rounded-sm border-gray-300 text-sm">
          <option>Sort By</option>
          <option value="Title, DESC">Title, DESC</option>
          <option value="Title, ASC">Title, ASC</option>
          <option value="Price, DESC">Price, DESC</option>
          <option value="Price, ASC">Price, ASC</option>
        </select>
      </div>
    </div>

    <!-- PRODUTOS -->
    <ul class="mt-4 grid gap-35 sm:grid-cols-2 lg:grid-cols-3 w-full">
      <?php foreach ($produtos as $produto):
        $id = (int) $produto['id'];
        $idF = in_array($id, $array);
      ?>
        <li class="border border-gray-100 bg-white p-2">
          <a href="#" class="group relative block overflow-hidden">
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

            <img
              src="<?= '../../Lib/img/produtos/' . $produto['imagem'] ?>"
              alt=""
              class="h-74 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72" 
            />

            <div class="relative  bg-white p-6">
              <p class="text-gray-700">
                $49.99
                <span class="text-gray-400 line-through">$80</span>
              </p>

              <h3 class="mt-1.5 text-lg font-medium text-gray-900"> <?= $produto['nome'] ?></h3>

              <p class="mt-1.5 line-clamp-3 text-gray-700">
               <?= $produto['descricao'] ?>
              </p>

              <form class="mt-4 flex gap-4">
                <button
                  class="block w-full rounded-sm bg-gray-100 px-4 py-3 text-sm font-medium text-gray-900 transition hover:scale-105">
                  Add to Cart
                </button>

                <button
                  type="button"
                  class="block w-full rounded-sm bg-gray-900 px-4 py-3 text-sm font-medium text-white transition hover:scale-105">
                  Buy Now
                </button>
              </form>
            </div>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>