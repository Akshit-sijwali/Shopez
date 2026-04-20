const banner_img = document.getElementById('banner_img');
const prev = document.getElementById('prev');
const next = document.getElementById('next');

//const arr = ['images/sale-electronics-banner-background-free-vector.jpg','images/stock-vector-super-sale-header-or-banner-design-with-d-smartphone-smart-watch-voice-assistant-air-purifier-1663164736.jpg','images/summer-fashion-sale-banner-design-template_2239-1174.jpeg','images/super-exclusive-mega-fashion-sale-web-banner-template_123247-43.jpeg'];
const arr=['images/electronics.png','images/womens.png','images/baby.png','images/shoes.png'];

var i=0;

prev.addEventListener('click',()=>{
    if (i==0) {
        i=4;
    }
    banner_img.src=arr[--i];
})
 
next.addEventListener('click',()=>{
    i++;
    if (i==4) {
        i=0
    }
    
    banner_img.src=arr[i];
})
    


