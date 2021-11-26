document.addEventListener("DOMContentLoaded", () => {
    const btns = document.querySelectorAll(".section_title");
  
  
    function fold() {
        this.classList.toggle("is-open");
        const content = this.nextElementSibling;
        content.classList.toggle("is-open")

      if (content.style.display == "flex") content.style.display = "none";
      else content.style.display = "flex";
    }
    
    btns.forEach((el) => el.addEventListener("click", fold));
    
    
    });