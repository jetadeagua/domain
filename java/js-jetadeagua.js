let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

document.querySelectorAll('.video-container1 video'). forEach(vid =>{
  vid.onclick = () => {
      document.querySelector('.popup-video').style.display = 'block';
      document.querySelector('.popup-video video').src = vid.getAttribute('src');
  }
});

document.querySelector('.popup-video span').onclick = () =>{
  document.querySelector('.popup-video').style.display = 'none';
}
