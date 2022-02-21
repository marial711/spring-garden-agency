window.onload = () => {
  //variables throughout the website
  let paybutton = document.querySelector(`button`);
  let close = document.getElementById(`close-btn`);
  let next = document.getElementById(`next`);
  let previous = document.getElementById(`previous`);
  let page = 1;

  //Pay button function
  paybutton.addEventListener(`click`, function(e){
    document.getElementById(`popup-1`).classList.toggle(`active`);
  });

// Close button function
  close.addEventListener(`click`, function(e){
    document.getElementById(`popup-1`).classList.toggle(`active`);
  });

//Homepage Slideshow
  slideShow(page);
  function slideShow(e) {
    let slides = document.getElementsByClassName('slide');
    if(e > slides.length) {
      page = 1
    }else if (e < 1) {
      page = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[page-1].style.display= "block";
  }
  function plusSlides(n){
    slideShow(page += n);
  }
  //Next Button Function
  next.addEventListener(`click`, function(e){
    plusSlides(1);
  });

  //Previous Button Function
  previous.addEventListener(`click`, function(e){
    plusSlides(-1);
  });
}
