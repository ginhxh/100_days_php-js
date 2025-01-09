const eye1 = document.querySelector(".eye1");
const eye2 = document.querySelector(".eye2");
const close1 = document.querySelector(".close1");
const close2 = document.querySelector(".close2");
const pwd = document.querySelector(".pwd");
const conf = document.querySelector(".conf");

close1.addEventListener("click", () => {
  close1.classList.add("dd");
  eye1.classList.remove("dd");
  pwd.type = "text";
});
eye1.addEventListener("click", () => {
  close1.classList.remove("dd");
  eye1.classList.add("dd");
  pwd.type = "password";
});

close2.addEventListener("click", () => {
  close2.classList.add("dd");
  eye2.classList.remove("dd");
  conf.type = "text";
});

eye2.addEventListener("click", () => {
  close2.classList.remove("dd");
  eye2.classList.add("dd");
  conf.type = "password";
});
