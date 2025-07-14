const produtos = document.querySelectorAll('.produtos');
const form = document.querySelector(".form");
form.addEventListener('click', (e) => {
  e.preventDefault();
})


produtos.forEach((produto) => {
  produto.addEventListener('click', () => {
    const id = produto.getAttribute('data-id');
    // window.location.href = `detalhes?id=${id}`;
  })
})

function adicionar(id, nome, preco, imagem){
  $(document).ready(function(){
    $.ajax({
        url: '../Services/ajax.php',
        type: 'GET',
        datatype: 'json',
        data: {
          id: id,
          nome: nome,
          preco: preco,
          imagem: imagem,
          action: 'adicionar'
        },
        success:function(response){
          console.log(response)
        },
        error:function(error){
          console.log(error)
        }
    })
  })
}

function favoritar(id){
  $(document).ready(function(){
    $.ajax({
        url: '../Services/ajax.php',
        type: 'GET',
        datatype: 'json',
        data: {
          id: id,
          action: 'favoritar'
        },
        success:function(response){
          console.log(response)
        },
        error:function(error){
          console.log(error)
        }
    })
  })
}

function desfavoritar(id){
  $(document).ready(function(){
    $.ajax({
        url: '../Services/ajax.php',
        type: 'GET',
        datatype: 'json',
        data: {
          id: id,
          action: 'desfavoritar'
        },
        success:function(response){
          console.log(response)
        },
        error:function(error){
          console.log(error)
        }
    })
  })
}

