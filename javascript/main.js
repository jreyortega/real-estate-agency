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



