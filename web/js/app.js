const Clickbutton=document.querySelectorAll('.button');
const cartlist=document.querySelector('.cart-list');
let carrito=[];
Clickbutton.forEach(btn=>{
    btn.addEventListener('click', addToCarritoItem);
});
function addToCarritoItem(e){
    const button=e.target;
    const item=button.closest('.product'); // closest sirve para devolver o mostrar elemento mas cercano del actual la info de la clase padre dentro del elemento button
    const itemTitle=item.querySelector('.product-name').textContent;
    const itemPrice=item.querySelector('.product-price').textContent;
    const itemImg=item.querySelector('.img').src;
    const newItem={
        title: itemTitle,
        price: itemPrice,
        img: itemImg,
        amount: 1
    }
    addItemCarrito(newItem);
}
function addItemCarrito(newItem){
    for(let i=0; i < carrito.length; i++){
        const inputElemento=cartlist.getElementsByClassName('table__cantidad');
        if (carrito[i].title.trim() === newItem.title.trim()) { //trim convertir a una cadena de texto a cadena sin espacios--- borra espacios de la cadena
            carrito[i].amount++;
            const inputValue=inputElemento[i];
            inputValue.value++;
            CarritoTotal();
            return null;
        }
    }
    carrito.push(newItem);
    renderCarrito();
}
function renderCarrito(){
    cartlist.innerHTML='';
    carrito.map(item=>{
        const div=document.createElement('div');
        div.classList.add('ItemCarrito');
        const Content=`
        <div class="product-widget">
            <div class="product-img">
                <img src=${item.img} alt="">
            </div>
            <div class="product-body">
                <h3 class="product-name"><a href="#" id="name_prod" data-id="1">${item.title}</a></h3>
                <h4 class="product-price"><span class="qty input__elemento table__cantidad" id="cant_prod_selected" min="1" value=${item.amount}>x</span id="prec_prod">${item.price}}</h4>
            </div>
            <button class="delete" id="vaciar-carrito"><i class="fa fa-close"></i></button>
        </div>`;
        div.innerHTML=Content;
        cartlist.append(div);
        div.querySelector('.delete').addEventListener('click', removeItemCarrito);
        div.querySelector('.input__elemento').addEventListener('change', sumaCantidad);
    });
    CarritoTotal();
}
function CarritoTotal(){
    let Total=0;
    const itemCartTotal=document.querySelector('.itemCartTotal');
    carrito.forEach((item)=>{
        const precio=Number(item.price.replace('$', ''));
        Total=Total+precio*item.amount;
    });
    itemCartTotal.innerHTML=`Total $${Total}`;
    addLoaclStorage();
}
function removeItemCarrito(e){
    const buttonDelete=e.target;
    const div=buttonDelete.closest('.ItemCarrito');
    const title=div.querySelector('.product-name').textContent;
    for(let i=0; i < carrito.length; i++){
        if (carrito[i].title.trim()===title.trim()) {
            carrito.splice(i, 1);
        }
    }
    div.remove();
    CarritoTotal();
}
function sumaCantidad(e){
    const sumaInput=e.target;
    const div=sumaInput.closest('.ItemCarrito');
    const title=div.querySelector('.product-name').textContent;
    carrito.forEach(item=>{
        if (item.title.trim()===title) {
            sumaInput.value < 1 ? (sumaInput.value=1):sumaInput.value;//alternario cuando el numero sea menor que 1 se ejecuta a 1 de lo contrario no va a cambiar  el value CONDICION ? --> VERDADERA : --> FALSE
            item.amount=sumaInput.value;
            CarritoTotal();
        }
    });
}
function addLoaclStorage(){
    localStorage.setItem('carrito', JSON.stringify(carrito));//guarda el string del carrito al local
}
window.onload=function(){
    const storage=JSON.parse(localStorage.getItem('carrito'));//permite cuando el usuario cargue la pagina no se pierda los datos del item carrito  mediante la bd de localstorage
    if (storage) {
        carrito=storage;
        renderCarrito();
    }
}