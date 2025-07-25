<section class="w-full">
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <!-- FILTROS -->
    <div class="mt-4 sm:flex sm:items-center sm:justify-between w-full">

      <div class="hidden sm:block">
        <label for="preco" class="flex items-center mr-18">
          Preço máximo R$ 10.00
          <input type="range" name="valor" min="100" max="10000" id="preco">
        </label>
      </div>

      <div class="hidden sm:block mr-17">
        <label for="SortBy">Ordenar por: </label>
        <select id="SortBy" class="h-10 rounded-sm border-gray-300 text-sm">
          <option>Relevância</option>
          <option value="Title, DESC">Título, DESC</option>
          <option value="Title, ASC">Título, ASC</option>
          <option value="Price, DESC">Preço, DESC</option>
          <option value="Price, ASC">Preço, ASC</option>
        </select>
      </div>
    </div>
    <!-- PRODUTOS -->
    <ul class="mt-4 grid align-center gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($produtos as $produto):
        $id = (int) $produto['id'];
        $idF = in_array($id, $array);
      ?>
        <li class="produtos" data-id="<?= $produto['id'] ?>">
          <div class="lg:w-1/4 md:w-1/2 p-4 w-60 flex flex-col align-center justify-center">
            <a class="block relative h-50 rounded overflow-hidden">
              <button
                class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>
                <?php if ($id == $idF): ?>
                  <span onclick="desfavoritar(<?= $produto['id'] ?>)">❤️</span>
                <?php else: ?>
                  <span onclick="favoritar(<?= $produto['id'] ?>)">🤍</span>
                <?php endif; ?>
              </button>
              <img alt="ecommerce" class="h-full w-full object-cover transition opacity-100 group-hover:opacity-0 duration-500 group-hover:scale-105 sm:h-42 transition hover:scale-105" src="<?= '../../Lib/img/produtos/' . $produto['imagem'] ?>">

              <img alt="ecommerce" class="h-24 w-24 object-cover transition opacity-0 group-hover:opacity-100 duration-500 group-hover:scale-105 sm:h-40 transition hover:scale-105" src="<?= '../../Lib/img/produtos/' . $produto['imagem'] ?>">
            </a>
            <!-- Adicionar ao carrinho -->
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?= $produto['nome'] ?></h3>
              <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
              <p class="mt-1">$<?= $produto['preco']  . ',' . '00' ?></p>
              <form class="mt-4 flex gap-4 form" method="POST">
                <button
                  onclick="adicionar(
                    '<?= $produto['id'] ?>',
                    '<?= $produto['nome'] ?>',
                    '<?= $produto['preco'] ?>',
                    '<?= $produto['imagem'] ?>'
                    
                    )"
                  class="block w-45 rounded-sm bg-blue-200 px-1 py-3 text-sm font-medium text-gray-900 transition hover:scale-105">
                  <i class="bi bi-cart bg-dark"></i> Adicionar ao carrinho
                </button>
              </form>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>