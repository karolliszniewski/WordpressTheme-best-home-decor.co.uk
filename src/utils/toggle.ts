const navigation__close = document.querySelector('.navigation__close')
const menu__open = document.querySelector('.menu__open')
const navigation = document.querySelector('.navigation')
const body = document.body;
let screenWidth = window.innerWidth;

// settings if style will change
const mobileScreenSize = 1000;

// Resolve the issue with the click event on mobile devices and the hover event on desktops
// by disabling the hover effect for screens smaller than 1000 pixels
window.addEventListener('resize', () => {
  screenWidth = window.innerWidth;
});

navigation__close.addEventListener('click', ()=>{
    navigation.classList.toggle("active")
    const overlay = document.querySelector('.overlay')
    if(overlay){
    body.removeChild(overlay)
    }
    })

menu__open.addEventListener('click', ()=>{
    navigation.classList.toggle("active")
    const overlay = document.createElement("div")
    overlay.className = "overlay"
    body.appendChild(overlay) 

    overlay.addEventListener('click',()=>{
      navigation.classList.toggle("active")
      const overlay = document.querySelector('.overlay')
      if(overlay){
      body.removeChild(overlay)
      }
    })
   
})

const dropdownTriggers = document.querySelectorAll('.navigation__item-dropdown');

dropdownTriggers.forEach(function (dropdownTrigger) {
    const dropdownMenu = dropdownTrigger.querySelector('.navigation__dropdown');
    
    dropdownTrigger.addEventListener('mouseenter', () => {
      // Dodaj klasę, gdy myszka najedzie na element
      if(screenWidth > mobileScreenSize)
      {
      dropdownMenu.classList.add('active');
      }
    });
    
    dropdownTrigger.addEventListener('mouseleave', () => {
      if(screenWidth > mobileScreenSize)
      {
      dropdownMenu.classList.remove('active');
      }
    });


    dropdownTrigger.addEventListener('click', function () {
     
      
      dropdownMenu.classList.toggle('active');
     
    });




  });