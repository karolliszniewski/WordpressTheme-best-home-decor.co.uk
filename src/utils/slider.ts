const slide__next = document.querySelector('.slide__next');
const slide__previous = document.querySelector('.slide__previous');
const slide__zoom = document.querySelector('.slide__zoom');
const slideImages = document.querySelectorAll('.slide__image');
const slideImagesCount = slideImages.length;
const gallery = document.querySelector('.gallery');
const body2 = document.body;

let slideCurrent = 0;
for (let i = 1; i <= slideImagesCount ; i++) {
    const thumbElement = document.getElementById(`thumb-${i}`);
    if (thumbElement) {
        thumbElement.addEventListener('touchstart', () => {
            slideCurrent = i - 2;
            slide(1);
    
        });


    }
}

function setBorders(){
    for(let i = 1; i <= slideImagesCount; i++){
        const thumbElement = document.getElementById("thumb-" + i);
        if (thumbElement) {
            thumbElement.style.border="none";

        }
    }

    
    let change = slideCurrent + 1;
    const thumbElement = document.getElementById("thumb-" + change );
    if (thumbElement) {
        thumbElement.style.border="2px solid black";

       
    }

}

function slide(direction: number){
    let number:number;

    if(slideImagesCount - 1 == slideCurrent && direction != -1){
        slideCurrent = 0;
    }
    else if(slideCurrent == 0 && direction == -1){
        slideCurrent = slideImagesCount - 1;
    }
    else{
        if(direction == 1){
            slideCurrent++;
        }
        else if(direction == -1){
            slideCurrent--;
        }   
    }

    setBorders()

    number = slideCurrent * 100;

    let i = 1;
    slideImages.forEach(function(slideImage) {
        number = ( i++ * 100 - 100 ) - ( slideCurrent * 100 );
        const htmlElement = slideImage as HTMLElement;
        htmlElement.style.transform = `translateX(${number}%)`;
    });
}

if (slide__next) {
    slide__next.addEventListener('click' , ()=>{
        slide(1);
    });
}

if (slide__previous) {
    slide__previous.addEventListener('click', ()=>{
        slide(-1);
    });
}

if (slide__zoom) {
    slide__zoom.addEventListener('click', ()=>{
        const fullScreen = document.createElement("div");
        fullScreen.className = "fullScreen";

        const image = slideImages[slideCurrent];
        const imageSrc = image.querySelector('img').src;

        const imageNew = document.createElement("img");
        imageNew.className = "fullScreen__image";
        imageNew.src = imageSrc;

        fullScreen.appendChild(imageNew);
        body2.appendChild(fullScreen);

        fullScreen.addEventListener('click', ()=>{
            body2.removeChild(fullScreen);
        });
    });
}

const slideContainer = document.querySelector('.slide');

if (slideContainer) {
    let startX: number;
    let endX: number;
    let startY: number;
    let endY: number;



    slideContainer.addEventListener('touchstart', (e: TouchEvent) => {
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
        endX = undefined;
    });

    slideContainer.addEventListener('touchmove', (e: TouchEvent) => {
        endX = e.touches[0].clientX;
        endY = e.touches[0].clientY;

        
    });

    slideContainer.addEventListener('touchend', () => {
        if(endX){
        const diffX = endX - startX;
        const diffY = endY - startY;

        const direction = diffX > 0 ? -1 : 1;
        if(diffY > -50 && diffY < 50)
        {

       slide(direction);
        }    
    
}
setBorders();
});


}


