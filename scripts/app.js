window.onload = () => {
  //variables throughout the website
  let paybutton = document.getElementById(`paynow`);
  let close = document.getElementById(`close-button`);

  //Pay button function
  paybutton.addEventListener(`click`, function(e){
    document.getElementById(`popup`).style.display = `block`;

  });

// Close button function
  close.addEventListener(`click`, function(e){
    alert('click');
  });
}