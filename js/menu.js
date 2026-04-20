const menu_show = document.getElementById('Menu_show');
const menu_close = document.getElementById('Menu_close');
const menu = document.getElementById('Menu');

menu_show.addEventListener('click', ()=>{
    menu.style.display= 'flex';
    menu_close.style.display= 'block';
    menu_show.style.display= 'none';
})

menu_close.addEventListener('click', ()=>{
    menu.style.display= 'none';
    menu_close.style.display= 'none';
    menu_show.style.display= 'block';
})