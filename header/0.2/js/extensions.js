let menuButton = document.querySelector('#menu-button');
let menu = document.querySelector('#sub-menu');
let NewcloseButton = document.querySelector('#close');
let mobileMenu = document.querySelector('#mobile-menu');



// add an event listener to listen for clicks on the menu button
    menuButton.addEventListener('click', function(e) {
        e.preventDefault();

        if(window.innerWidth > 768) {
            let menuIsClosed = !menuButton.classList.contains('selected')
            let menuIsHidden = !menu.classList.contains('open')

            if (menuIsClosed && menuIsHidden) {
                menuButton.classList.add('selected')
                menu.classList.add('open')
            } else {
                menuButton.classList.remove('selected')
                menu.classList.remove('open')
            }
        }
        if (window.innerWidth < 768) {
            let menuIsClosed = !menuButton.classList.contains('selected')
            let menuMobileIsHidden = !mobileMenu.classList.contains('open')

            if (menuIsClosed && menuMobileIsHidden) {
                menuButton.classList.add('selected')
                mobileMenu.classList.add('open')
            } else {
                menuButton.classList.remove('selected')
                mobileMenu.classList.remove('open')
            }

        }
    })

// add an event listener to listen for clicks on the menu button
NewcloseButton.addEventListener('click', function(e) {

    menuButton.classList.remove('selected')
    menu.classList.remove('open')

})


window.addEventListener("resize", function() {
    if(window.innerWidth < 768) {
        menu.classList.remove('open')
        menuButton.classList.remove('selected')
    }
});

window.addEventListener("resize", function() {
    if(window.innerWidth > 768) {
        mobileMenu.classList.remove('open')
        menuButton.classList.remove('selected')
    }
});
