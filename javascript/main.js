let listElement =document.querySelectorAll('.menu-button-click');



listElement.forEach(listElement =>{
    listElement.addEventListener('click',()=>{
        listElement.classList.toggle('arrow') //Al hacer click añade una clase arrow al objeto
    
        let height=0;
        let menu =listElement.nextElementSibling;//accedo al elemento adyacente
        console.log(menu.scrollHeight);
        // console.log(section.scrollHeight);

        if (menu.clientHeight=="0")
        {
            height=menu.scrollHeight;
        }
        
        menu.style.height =height+ "px"; 

    })

});

var menuButtons = document.querySelectorAll('.menu-button-click');

menuButtons.forEach(menuButton => {
    menuButton.addEventListener('click', () => {
        // Obtener el elemento h1 dentro del menú haciendo clic
        //var h1Element = menuButton.querySelector('.menu-button-click');

        // Obtener la altura del elemento h1
        var h1Height = menuButton.clientHeight;
        // Obtener el elemento ul hermano del elemento h1
        var ulElement = menuButton.nextElementSibling;

        // Ajustar la altura del elemento .main-footer-section
        var sectionElement = menuButton.parentElement;
        sectionElement.style.height = h1Height + ulElement.clientHeight + 'px';
    });
});



