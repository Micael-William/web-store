<?php 

foreach ($produtos as $produto){
    $id = (int) $produto['id'];

    if (isset($_SESSION['favoritos'])){
        $idF = (int) $_SESSION['favoritos'][$indice]['id'];
    
        if ($id == $idF){
            ?>
            <li class="produtos" data-id="<?= $produto['id'] ?>">
                <div class="lg:w-1/4 md:w-1/2 p-4 w-60 flex flex-col align-center justify-center">
                    <a class="block relative h-60 rounded overflow-hidden">
                        <button
                            class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                            <span class="sr-only">Wishlist</span>
                            <span onclick="favoritar(<?= $produto['id'] ?>,<?= $index ?>)">❤️</span>
                        </button>
                        <img alt="ecommerce" class="h-full w-full object-cover transition opacity-100 group-hover:opacity-0 duration-500 group-hover:scale-105 sm:h-72 transition hover:scale-105" src="<?= '../../Lib/img/produtos/' . $produto['imagem'] ?>">
                        <img alt="ecommerce" class="h-64 w-84 object-cover transition opacity-0 group-hover:opacity-100 duration-500 group-hover:scale-105 sm:h-72 transition hover:scale-105" src="<?= '../../Lib/img/produtos/' . $produto['imagem'] ?>">
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
                                class="block w-full rounded-sm bg-green-200 px-4 py-3 text-sm font-medium text-gray-900 transition hover:scale-105">
                                Adicionar ao carrinho
                            </button>
                        </form>
                    </div>
                </div>
            </li>
            <?php
            if($indice < count($_SESSION['favoritos'])){
                $indice = $indice + 1;
            }
        }else{ 
        ?>
        <li class="produtos" data-id="<?php $produto['id'] ?>">
            <div class="lg:w-1/4 md:w-1/2 p-4 w-60 flex flex-col align-center justify-center">
                <a class="block relative h-60 rounded overflow-hidden">
                    <button
                        class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                        <span class="sr-only">Wishlist</span>
                        <span onclick="favoritar(<?= $produto['id'] ?>, <?= $index ?>)">🤍</span>
                    </button>

                    <img alt="ecommerce" class="h-full w-full object-cover transition opacity-100 group-hover:opacity-0 duration-500 group-hover:scale-105 sm:h-72 transition hover:scale-105" src="<?= '../../Lib/img/produtos/' . $produto['imagem'] ?>">
                    <img alt="ecommerce" class="h-64 w-84 object-cover transition opacity-0 group-hover:opacity-100 duration-500 group-hover:scale-105 sm:h-72 transition hover:scale-105" src="<?= '../../Lib/img/produtos/' . $produto['imagem'] ?>">
                </a>
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
                            class="block w-full rounded-sm bg-green-200 px-4 py-3 text-sm font-medium text-gray-900 transition hover:scale-105">
                            Adicionar ao carrinho
                        </button>
                    </form>
                </div>
            </div>
        </li>
        <?php
        }
    }
}
?>