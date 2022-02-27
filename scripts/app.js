window.onload = () => {
  //variables throughout the website
  let paybutton = document.querySelector(`button`);
  let close = document.getElementById(`close-btn`);

  //Pay button function
  paybutton.addEventListener(`click`, function(e){
    document.getElementById(`popup-1`).classList.toggle(`active`);
  });

// Close button function
  close.addEventListener(`click`, function(e){
    document.getElementById(`popup-1`).classList.toggle(`active`);
  });
}