const togglebutton = documen.getElementByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('nav-links')[0]

togglebutton.addEventListener('click',()=>{
    navbarLinks.classList.toggle("active")
})