window.onload = () => {
  let paybutton = document.querySelector(`button`);
  let close = document.getElementById(`close-btn`);

  paybutton.addEventListener(`click`, function(e){
    document.getElementById(`popup-1`).classList.toggle(`active`);
  });

  close.addEventListener(`click`, function(e){
    document.getElementById(`popup-1`).classList.toggle(`active`);
  });
  }
