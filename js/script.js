let hamburger = document.getElementById('hamburgerbtn');
        
let mobileMenu = document.getElementById('menublock');

hamburger.addEventListener('click', function(){
    mobileMenu.classList.toggle('hidden');
});