//Script carosello aziende

const carousel = document.querySelector(".carousel");
carouselElement = carousel.querySelectorAll(".azienda");
firstDiv = carousel.querySelectorAll(".azienda")[0];
imgVec = document.querySelectorAll(".azienda");
arrowIcons = document.querySelectorAll(".aziende-div i");

if (carouselElement.length<=4) {
  arrowIcons[1].style.pointerEvents = "none";
  arrowIcons[1].style.color = "transparent";
  arrowIcons[1].style.cursor = "auto";
}

const showHiddenIcons = () => {
  let scrollWidth = carousel.scrollWidth -carousel.clientWidth; 

  if (carousel.scrollLeft >= scrollWidth - scrollWidth/4) {

    arrowIcons[0].style.pointerEvents = "none";
    arrowIcons[0].style.color = "transparent";
    arrowIcons[1].style.cursor = "pointer";
    arrowIcons[1].style.color = "#1B263B";
    arrowIcons[1].style.pointerEvents = "auto";

  } else if(carousel.scrollLeft <= scrollWidth/4) {

    arrowIcons[1].style.pointerEvents = "none";
    arrowIcons[1].style.color = "transparent";
    arrowIcons[0].style.cursor = "pointer";
    arrowIcons[0].style.color = "#1B263B";
    arrowIcons[0].style.pointerEvents = "auto";

  }else {

    arrowIcons[0].style.cursor = "pointer";
    arrowIcons[0].style.color = "#1B263B";
    arrowIcons[1].style.cursor = "pointer";
    arrowIcons[1].style.color = "#1B263B";
    
  }
}

arrowIcons.forEach(icon => {
  icon.addEventListener("click", () => {

    let firstDivWidth;

    firstDivWidth = firstDiv.clientWidth+900;
    console.log(firstDiv.clientWidth);
    setTimeout(() => showHiddenIcons(),60);

    carousel.scrollLeft += icon.id == "left" ? -firstDivWidth : firstDivWidth;
  });
});