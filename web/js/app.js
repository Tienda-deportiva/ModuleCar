const Clickbutton=document.querySelectorAll('.button');
const tbody=document.querySelector('.tbody');
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
        const inputElemento=tbody.getElementsByClassName('table__cantidad');
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
    tbody.innerHTML='';
    carrito.map(item=>{
        const tr=document.createElement('tr');
        tr.classList.add('ItemCarrito');
        const Content=`
        <td class="table__productos"><img src=${item.img} alt="" class="img" style="width: 60px"></td>
        <td><p class="product-name">${item.title}</p></td>
        <td><input type="number" style="width: 50px" min="1" name="cant_prod" id="cant" class="input__elemento table__cantidad" value=${item.amount}></td>
        <td>${item.price}</td>
        <td><button type="button" class="btn btn-danger delete"><i class="fa fa-trash"></i></button></td>`;
        tr.innerHTML=Content;
        tbody.append(tr);
        tr.querySelector('.delete').addEventListener('click', removeItemCarrito);
        tr.querySelector('.input__elemento').addEventListener('change', sumaCantidad);
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
    const tr=buttonDelete.closest('.ItemCarrito');
    const title=tr.querySelector('.product-name').textContent;
    for(let i=0; i < carrito.length; i++){
        if (carrito[i].title.trim()===title.trim()) {
            carrito.splice(i, 1);
            console.log('ejecuta');
        }
    }
    tr.remove();
    CarritoTotal();
}
function sumaCantidad(e){
    const sumaInput=e.target;
    const tr=sumaInput.closest('.ItemCarrito');
    const title=tr.querySelector('.product-name').textContent;
    carrito.forEach(item=>{
        if (item.title.trim()===title) {
            sumaInput.value < 1 ? (sumaInput.value=1):sumaInput.value;//permite que cuando el usuario realice un value menor que 1 en el ansperson realiza el value a 1 con la respectiva suma
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