<?php

namespace App\Controllers;

class ProdutosList
{
    public function getProducts()
    {
        return  [
            [
                "id" => 1,
                "nome" => "Samsung Galaxy",
                "descricao" => "Samsung Galaxy S21 Ultra",
                "preco" => 3000.00,
                "quantidade" => 100,
                "imagem" => "1616492395_Samsung-Galaxy-S21-Ultra-1608287647-0-0.jpg",
                "path" => "../Lib/img/produtos/"
            ],
            [
                "id" => 2,
                "nome" => "OnePlus",
                "descricao" => "OnePlus 8T-5G Lunar Silver",
                "preco" => 2100.00,
                "quantidade" => 50,
                "imagem" => "1616500410_OnePlus-8T-5G-Lunar-Silver-8GB-RAM-128GB-Storage-image-4.jpg",
                "path" => "../Lib/img/produtos/"
            ],
            [
                "id" => 3,
                "nome" => "sm zfold",
                "descricao" => "Poderoso e moderno",
                "preco" => 1900.00,
                "quantidade" => 30,
                "imagem" => "1616500092_sm-zfold.jpg",
                "path" => "../Lib/img/produtos/"
            ],
            [
                "id" => 4,
                "nome" => "iph12pm",
                "descricao" => "Moderno e elegante",
                "preco" => 2500.00,
                "quantidade" => 70,
                "imagem" => "1616499931_iph12pm.jpg",
                "path" => "../Lib/img/produtos/"
            ],
            [
                "id" => 5,
                "nome" => "Head set",
                "descricao" => "Fones de ouvido",
                "preco" => 170.00,
                "quantidade" => 200,
                "imagem" => "1616502847_hdphn.jpg",
                "path" => "../Lib/img/produtos/"
            ],
            [
                "id" => 6,
                "nome" => "menshoodie",
                "descricao" => "Casaco masculino",
                "preco" => 210.00,
                "quantidade" => 200,
                "imagem" => "blusa.png",
                "path" => "../Lib/img/produtos/"
            ]
        ];
    }
}
