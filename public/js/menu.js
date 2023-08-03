document.addEventListener('DOMContentLoaded', function () {
const topMenu = document.querySelector('#icon-menu');
const toggleMenu = document.querySelector('#toggle-menu');

document.addEventListener('click' , (e)=>{
    if(topMenu.contains(e.target)){
        toggleMenu.classList.toggle('icon_topMenu');
        toggleMenu.classList.toggle('hidden')
    }
    else{
        if(toggleMenu.classList.contains('icon_topMenu')){
            toggleMenu.classList.remove('icon_topMenu');
            toggleMenu.classList.add('hidden')
        }
    }
});
});