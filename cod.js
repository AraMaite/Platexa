let index = 0;  
const slides = document.getElementsByClassName("carousel-item");  

function showSlide(n) {  
    if (n >= slides.length) index = 0;  
    if (n < 0) index = slides.length - 1;  
    for (let i = 0; i < slides.length; i++) {  
        slides[i].style.display = "none";  
    }  
    slides[index].style.display = "block";  
}  

function moveSlide(n) {  
    showSlide(index += n);  
}    
showSlide(index);