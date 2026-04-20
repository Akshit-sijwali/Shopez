const banner_img = document.getElementById('product_img');
const prev = document.getElementById('prev');
const next = document.getElementById('next');

const arr = ['product_image/laptop.jpg','product_image/laptop2.jpg','product_image/laptop.jpg','product_image/laptop2.jpg'];

var i=0;

prev.addEventListener('click',()=>{
    if (i==0) {
        i=4;
    }
    product_img.src=arr[--i];
})
 
next.addEventListener('click',()=>{
    i++;
    if (i==4) {
        i=0
    }
    product_img.src=arr[i];
})
    


