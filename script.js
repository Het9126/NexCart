let popupViews = document.querySelectorAll('.popup-view');
let popupBtns = document.querySelectorAll('.popup-btn');
let closeBtns = document.querySelectorAll('.close-btn');
let login = document.querySelectorAll('.login');
let signup = document.querySelector('.signup');
let sup = document.querySelectorAll('.btn-sin');
let lin = document.querySelectorAll('.btn-lin');

//javascript for quick view button
let popup = function (popupClick) {
    popupViews[popupClick].classList.add('active');
}

popupBtns.forEach((popupBtn, i) => {
    popupBtn.addEventListener("click", () => {
        popup(i);
    });
});
// let sin_popup = function (popupClick) {
//     signup[popupClick].classList.add('active');
// }s

//javascript for close button
closeBtns.forEach((closeBtn) => {
    closeBtn.addEventListener("click", () => {
        popupViews.forEach((popupView) => {
            popupView.classList.remove('active');
        });
    });
});

// sup.forEach((popupBtn, i) => {
//     popupBtn.addEventListener("click", () => {
//         sin_popup(i);
//     });
// });

// let lin_popup = function (popupClick) {
//     login[popupClick].classList.add('active');
// }
// lin.forEach((popupBtn, i) => {
//     popupBtn.addEventListener("click", () => {
//         lin_popup(i);
//     });
// });

// document.querySelectorAll('.btn-lin').forEach(btn => {
//     btn.addEventListener('click', function(e) {
//         e.preventDefault();
//         document.querySelector('.login').classList.add('active');
//     });
// });

// document.querySelectorAll('.btn-sin').forEach(btn => {
//     btn.addEventListener('click', function(e) {
//         e.preventDefault();
//         document.querySelector('.signup').classList.add('active');
//     });
// });
