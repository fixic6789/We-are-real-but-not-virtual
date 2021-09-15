let modalWindows = document.querySelector(".modal-windows");
let feedback = document.querySelector(".feedback");
let openPopupButtons = document.querySelectorAll(".get-in-touche");
let close = document.querySelector(".close-window");

openPopupButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        modalWindows.classList.add('active');
    })
});

close.addEventListener('click', () => {
    modalWindows.classList.remove('active');
})

document.addEventListener('click', (e) => {
    if(e.target === modalWindows){
        modalWindows.classList.remove('active');
    }
});