var image_input = document.querySelector("#logo");
var uploaded_img = document.querySelector("#chosen-logo");

image_input.addEventListener("change", function() {
  let reader = new FileReader();
  reader.readAsDataURL(image_input.files[0]);
  reader.addEventListener("load", () => {
    uploaded_img.setAttribute("src",reader.result);
    document.querySelector(".display-logo").style.display = 'block';
    document.querySelector(".display-logo").style.backgroundImage = `url(${uploaded_img})`;
  })
})