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
    for(let i=0; i<carrito.length; i++){
        
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
        <td class="table__productos"><img src="${item.img}" alt="" class="img" style="width: 60px"></td>
        <td>${item.title}</td>
        <td class="table__cantidad"><input type="number" style="width: 50px" min="1" values="${item.amount}" name="cant_prod" id="cant"></td>
        <td>${item.price}}</td>
        <td><a href="#"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
        <div class="row">
            <div class="col">
                <h3 class="itemCartTotal text-white">Total: 0</h3>
            </div>
            <div class="col d-flex justify-content-end">
                <button class="btn btn-success">Comprar</button>
            </div>
        </div>`;
        tr.innerHTML=Content;
        tbody.append(tr);
    });
}