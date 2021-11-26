document.addEventListener("DOMContentLoaded", () => {
  const btns = document.querySelectorAll(".acc-btn");


  function accordion() {

    this.classList.toggle("is-open");
  

    const content = this.nextElementSibling;
  

    if (content.style.maxHeight) content.style.maxHeight = null;
    else content.style.maxHeight = content.scrollHeight + "px";
  }
  
  // event
  btns.forEach((el) => el.addEventListener("click", accordion));
  
  
  });
  