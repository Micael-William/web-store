const btnAbrir = document.querySelector('.menu-mobile');
const btnFechar = document.querySelector('.close');

const container = document.querySelector('.abrir-menu');
const containerFechar = document.querySelector('.fechar-menu');

btnAbrir.addEventListener('click', () => {
  container.classList.add('abrir');

  if(container.classList.contains('fechar')) {
   container.classList.remove('abrir');
  }
})

btnFechar.addEventListener('click', () => {
  containerFechar.classList.add('fechar');


  if(container.classList.contains('abrir')) {
   containerFechar.classList.remove('fechar');
   container.classList.remove('abrir');


  }else{
    console.log('não tem classe para fechar');
  }
})
