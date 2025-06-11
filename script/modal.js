const imgs = document.querySelectorAll('.imgs > img');
const openImgs = document.querySelector('.open-imgs');
const hiddenImgs = document.querySelector('.hidden-imgs');
const image = document.querySelector('.open-imgs > img');
const modalTitle = document.querySelector('.modal-title');
const closeModal = document.querySelector('.closetag');


let currentIndex = -1;
imgs.forEach((e,index) =>{

    e.addEventListener('click', n =>{
        currentIndex = index
        openImgs.classList.toggle('active');
        image.src = n.target.src;

        if(n.target.alt == ''){
            modalTitle.innerHTML = 'Facilities'
        }else{
            modalTitle.innerHTML = n.target.alt;
        }

        e.style.display = "block";
        document.body.style.overflow = "hidden";
        document.body.style.height = "100%";
    })
})


hiddenImgs.addEventListener('click', () =>{
    openImgs.classList.remove('active');
    document.body.style.overflow = "auto";
    document.body.style.height = "auto";
})
closeModal.addEventListener('click', () =>{
    openImgs.classList.remove('active');
    document.body.style.overflow = "auto";
    document.body.style.height = "auto";
})


window.addEventListener('keydown', function(event){
    if(event.key === 'Escape'){
        openImgs.classList.remove('active');
    }
    document.body.style.overflow = "auto";
    document.body.style.height = "auto";
} )
//Buttons

const carouselButtons = document.querySelectorAll('.carousel');
carouselButtons.forEach(n =>{
    let x = 0;
    if (n.classList.contains('prev')) {
        x = -1
    } else { x = 1}

    n.addEventListener('click', () =>{
        
        try {
            image.src = imgs[currentIndex + x].src;
    
            if(imgs[currentIndex + x].alt == ''){
                modalTitle.innerHTML = 'Facilities'
            }else{
                modalTitle.innerHTML = imgs[currentIndex + x].alt;
            }
            currentIndex += x;
        } catch (error) {
            console.log(error);
        }

    })
})