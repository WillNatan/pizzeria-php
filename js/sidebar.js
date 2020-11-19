var sidebar = document.querySelector('#sidebar');
var closebtn = document.querySelector('.close-sidebar');
var mainContent = document.querySelector('.main-content');
var opentBtn = document.querySelector('.btn-open-sidebar');
closebtn.addEventListener('click', () => {
    sidebar.classList.remove('active');
    mainContent.classList.remove('pulled');
})

opentBtn.addEventListener('click', () => {
    sidebar.classList.add('active');
    mainContent.classList.add('pulled');
})