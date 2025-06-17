const produtos = document.querySelectorAll('.produtos');

produtos.forEach((produto) => {
  produto.addEventListener('click', () => {
    const id = produto.getAttribute('data-id');
    window.location.href = `detalhes?id=${id}`;
  })
})



$(document).ready(function(){
  $.ajax({
      url: '../Controllers/http/api.php',
      type: 'GET',
      datatype: 'json',
      success:function(response){
        console.log(response)
      },
      error:function(error){
        console.log(error)
      }
  })
})