document.addEventListener("DOMContentLoaded", function() {
    let modalWindows = document.querySelector(".modal-windows");
    let getInTouchBtn = document.querySelectorAll(".get-in-touche");
    let feedback = document.querySelector(".feedback");
    let close = document.querySelectorAll(".close-window");
    let orderBtn = document.querySelectorAll(".order-photo");
    let order = document.querySelector(".order");

    function openWindow(btn, formName) {
        btn.forEach(button => {
            button.addEventListener("click", e => {
                e.preventDefault();
                modalWindows.classList.add("active");
                formName.classList.add("active");
                disableScroll();
            });
        });
    }

    function closeWindow(formName) {
        close.forEach(button => {
            button.addEventListener("click", e => {
                e.preventDefault();
                modalWindows.classList.remove("active");
                formName.classList.remove("active");
                enableScroll();
            });
        });

        document.addEventListener("click", e => {
            if (e.target === modalWindows) {
                modalWindows.classList.remove("active");
                formName.classList.remove("active");
                enableScroll();
            }
        });
    }

    function disableScroll() {
        document.body.style.overflow = "hidden";
    }

    function enableScroll() {
        document.body.style.overflow = "initial";
    }

    openWindow(getInTouchBtn, feedback);
    closeWindow(feedback);

    openWindow(orderBtn, order);
    closeWindow(order);
});