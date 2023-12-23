function toggleAccordion(btn) {
    let content = btn.nextElementSibling; 
    if (content.style.maxHeight) {
      content.style.maxHeight = null; 
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  }