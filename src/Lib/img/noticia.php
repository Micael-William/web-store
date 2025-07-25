<?php
if ($pg_int <> "S") {
    $redir = "Location:index.php";
    header($redir);
    die();
}

//echo ".............................";

if($noticia=="") {
    echo "<div class='text-center mt-5 mb-5'>";
    echo "<h1 class='display-1 fw-bold'>404</h1>";
    echo "<p class='fs-3'> <span class='text-danger'>Opps!</span></p>";
    echo "<p>A Página que vc está querendo acessar ($host/$url) não está mais disponível.</p>";
    echo "<a href='$host' class='btn btn-primary'>Voltar para a Home</a>";
    echo "</div>";
} else {

    echo "<section class='py-5'>";
    echo "<div class='container'>";
    echo "<div class='row'>";

    echo "<div class='col-12 col-lg-8'>";
    echo "<div class='d-flex flex-column gap-3'>";


    if ($sql->rowCount() == 0) {

        echo "<p class='text-center'><br><br><b>Nenhum registro encontrado<br><br>";
    } else {

        echo "<h3>$titulo_not</h3>";
        resimage($imagem, 'imagens', 'w-100', 'larg', '950');
        echo $texto_not;


        echo "<button class='btn btn-site text-center' onclick='history.back()'>Voltar</button>";

    }

    echo "</div>";
    echo "</div>";


    echo "<div class='col-12 col-lg-4'>";
    echo "<a href='https://www.saosebastiao.sp.gov.br/' target='_blank'>";
    echo "<img class='w-100' src='$host/banner/ir_2025.jpg' alt=''>";
    echo "</a>"; 
    echo "<br><br>";
    echo "<img class='w-100' src='$host/banner/lateral_1.png' alt=''>";   
    echo "</div>";
/*    
    echo "<div class='col-12 col-lg-4'>";
    echo "<div class='sticky-top'>";
    include("banner_lateral.php");
    echo "</div>";
    echo "</div>";
*/

    
echo "</div>";
echo "</div>";
echo "</section>";
}
?>