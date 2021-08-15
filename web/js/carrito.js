// Variables
const carrito = document.querySelector('#carrito');
const listaProductos = document.querySelector('#lista-producto');
const contenedorCarrito = document.querySelector('#lista-carrito');
const vaciarCarritoBtn = document.querySelector('#vaciar-carrito'); 
let articulosCarrito = [];
let subTotal = 0;
// Listeners
cargarEventListeners();

function cargarEventListeners() {
     // Dispara cuando se presiona "Agregar Carrito"
     listaProductos.addEventListener('click', agregarCurso);

    //  // Cuando se elimina un curso del carrito
      carrito.addEventListener('click', eliminarCurso);

    //  // Al Vaciar el carrito
      vaciarCarritoBtn.addEventListener('click', vaciarCarrito);


     // NUEVO: Contenido cargado
     document.addEventListener('DOMContentLoaded', () => {
          articulosCarrito = JSON.parse( localStorage.getItem('carrito') ) || []  ;
          // console.log(articulosCarrito);
          carritoHTML();
     });
}


// Función que añade el curso al carrito
function agregarCurso(e) {
     e.preventDefault();
     // Delegation para agregar-carrito
    
     if(e.target.classList.contains('agregar-carrito')) {
          const curso = e.target.parentElement.parentElement;
          
          // Enviamos el curso seleccionado para tomar sus datos
          leerDatosCurso(curso);
     }
}

// Lee los datos del curso
function leerDatosCurso(curso) {
     
     const infoCurso = {
          imagen: curso.querySelector('img').src,
          precio: curso.querySelector('h4').textContent,
          titulo: curso.querySelector('.product-name').textContent,
          id: curso.querySelector('a').getAttribute('data-id'), 
          cantidad: 1
          
     }
     console.log(infoCurso);

     if( articulosCarrito.some( curso => curso.id === infoCurso.id ) ) { 
          const cursos = articulosCarrito.map( curso => {
               if( curso.id === infoCurso.id ) {
                    let cantidad = parseInt(curso.cantidad);
                    cantidad++
                    curso.cantidad =  cantidad;
                    return curso;
               } else {
                    return curso;
               }
          })
          articulosCarrito = [...cursos];
     }  else {
          articulosCarrito = [...articulosCarrito, infoCurso];
     }

    

     
     carritoHTML();
}

// Elimina el curso del carrito en el DOM
function eliminarCurso(e) {
     e.preventDefault();
     if(e.target.classList.contains('borrar-curso') ) {
          // e.target.parentElement.parentElement.remove();
          const curso = e.target.parentElement.parentElement;
          const cursoId = curso.querySelector('a').getAttribute('data-id');
          
          // Eliminar del arreglo del carrito
          articulosCarrito = articulosCarrito.filter(curso => curso.id !== cursoId);

          carritoHTML();
     }
}


// Muestra el curso seleccionado en el Carrito
function carritoHTML() {

     vaciarCarrito();
     
     articulosCarrito.forEach(curso => {
          const row = document.createElement('div');
          row.classList.add("cart-list")

           subTotal = curso.precio+subTotal;
          
          row.innerHTML = `
          <div class="product-widget">
          <div class="product-img">
              <img src="${curso.imagen}" alt="">
          </div>
          <div class="product-body">
              <h3 class="product-name"><a href="#">${curso.titulo}</a></h3>
              <h4 class="product-price"><span class="qty">3x</span>${curso.precio}</h4>
          </div>
          <button class="delete"><i class="fa fa-close"></i></button>
      </div>
      <div class="cart-summary">
      <small>3 Item(s) selected</small>
      <h5>SUBTOTAL: ${subTotal} </h5>
      </div>
      <div class="cart-btns" style="width: 607px;">
        <a href="#">View Cart</a>
        <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
     </div>`;
          contenedorCarrito.appendChild(row);
     });

     // NUEVO:
     sincronizarStorage();

}


// NUEVO: 
function sincronizarStorage() {
     localStorage.setItem('carrito', JSON.stringify(articulosCarrito));
}

// Elimina los cursos del carrito en el DOM
function vaciarCarrito() {
     // forma rapida (recomendada)
     while(contenedorCarrito.firstChild) {
          contenedorCarrito.removeChild(contenedorCarrito.firstChild);
      }
}