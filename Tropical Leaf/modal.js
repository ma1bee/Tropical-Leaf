var btn = document.querySelector('.profile'); 
var blockHidden = document.querySelector('.avtorization');
var btnClose = document.querySelector('.close');

function showBlock() {
    blockHidden.classList.add('up');
}

function hideBlock() {
    blockHidden.classList.remove('up');
}

btn.addEventListener('click', showBlock)
btnClose.addEventListener('click',hideBlock);
