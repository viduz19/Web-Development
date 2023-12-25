let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCart = document.querySelector('.listCart');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})
let products = [
    {
        id: 1,
        name: 'Pepperoni Pizza',
        image: 'p.PNG',
        price:  1200
    },
    {
        id: 2,
        name: 'Ham Pizza',
        image: 'p1.PNG',
        price: 1500
    },
    {
        id: 3,
        name: 'Sausage Pizza',
        image: 'p2.PNG',
        price: 1000
    },
    {
        id: 4,
        name: 'Mushroom Pizza',
        image: 'p3.PNG',
        price: 1100
    },
    {
        id: 5,
        name: 'Beef Pepperoni',
        image: 'p4.PNG',
        price: 1700
    },
    {
        id: 6,
        name: 'Vegi Pizza',
        image: 'p5.PNG',
        price: 990
    },
    {
        id: 7,
        name: 'Chicken Burger',
        image: 'b1.PNG',
        price: 750
    },
    {
        id: 8,
        name: 'Double Burger',
        image: 'b2.PNG',
        price: 1000
    },
    {
        id: 9,
        name: 'Ham Burger',
        image: 'b3.PNG',
        price: 1200
    },
   {
        id: 10,
        name: 'Cheese Pasta',
        image: 'pasta1.PNG',
        price: 600
    },
   {
        id: 11,
        name: 'Masala mix Pasta',
        image: 'pasta2.PNG',
        price:  800
    },
    {
        id: 12,
        name: 'Chicken Pasta',
        image: 'pasta3.PNG',
        price: 900
    },
    {
        id: 13,
        name: 'Meat Tacos',
        image: 't1.PNG',
        price: 500
    },
    {
        id: 14,
        name: 'Roll Tacos',
        image: 't2.PNG',
        price: 750
    },
    {
        id: 15,
        name: 'BBQ chicken Tacos',
        image: 't3.PNG',
        price: 900
    },
    {
        id: 16,
        name: 'Vegi Sushi',
        image: 's1.PNG',
        price: 500
    },
    {
        id: 17,
        name: 'Salmon Sushi',
        image: 's2.PNG',
        price: 800
    },
    {
        id: 18,
        name: 'Sushi',
        image: 's3.PNG',
        price: 700
    },
    {
        id: 19,
        name: 'Avocado Toast',
        image: 'avo1.JPG',
        price: 300
    },
    {
        id: 20,
        name: 'with Onion Avocado Toast ',
        image: 'avo2.JPG',
        price: 500
    },
    {
        id: 21,
        name: 'Egg Avocado Toast',
        image: 'avo3.JPG',
        price: 550
    },
    {
        id: 22,
        name: 'acaibowls with Blueberry',
        image: 'a1.PNG',
        price: 800
    },
    {
        id: 23,
        name: 'acaibowls',
        image: 'a2.PNG',
        price: 800
    },
    {
        id: 24,
        name: 'acaibowls with Avocado',
        image: 'a3.PNG',
        price: 800
    },
    {
        id: 25,
        name: 'Ice-coffee',
        image: 'co1.PNG',
        price: 300
    },
    {
        id: 26,
        name: 'Ice-coffee',
        image: 'co2.PNG',
        price: 300
    },
    {
        id: 27,
        name: 'Ice-coffee',
        image: 'co3.PNG',
        price: 300
    },
    {
        id: 28,
        name: 'Hot Coffee',
        image: 'c1.PNG',
        price: 200
    },
    {
        id: 29,
        name: 'Black Coffee',
        image: 'c2.PNG',
        price: 150
    },
    {
        id: 30,
        name: 'Coffee',
        image: 'c3.PNG',
        price: 200
    },
    {
        id: 31,
        name: 'Blueberry Juice',
        image: 'ju1.PNG',
        price: 170
    },
    {
        id: 32,
        name: 'Lemon Juice',
        image: 'ju2.PNG',
        price: 170
    },
    {
        id: 33,
        name: 'Papaya Juice',
        image: 'ju3.PNG',
        price: 170
    }
];
let listCarts  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCart(${key})">Add To Cart</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCart(key){
    if(listCarts[key] == null){
        // copy product form list to list card
        listCarts[key] = JSON.parse(JSON.stringify(products[key]));
        listCarts[key].quantity = 1;
    }
    reloadCart();
}
function reloadCart(){
    listCart.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCarts.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCart.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCarts[key];
    }else{
        listCarts[key].quantity = quantity;
        listCarts[key].price = quantity * products[key].price;
    }
    reloadCart();
}
