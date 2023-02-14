// Script to active Menu 
const menu = document.querySelectorAll("header nav ul li");
[...menu].map((el) => {
  el.classList[0] === document.title.split(' ')[0]
    ? el.classList.add("active")
    : el.classList.remove("active");
});
