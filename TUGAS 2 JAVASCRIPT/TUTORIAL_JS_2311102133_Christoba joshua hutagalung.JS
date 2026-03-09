/* Christoba Joshua Hutagalung - 2311102133*/
let statusWarna = 0;

function alignment() {
    let teks = document.querySelector('.header-logo h1');
    if (teks.style.textAlign === 'right') {
        teks.style.textAlign = 'center';
    } else {
        teks.style.textAlign = 'right';
    }
}

function ubahWarna() {
    let box = document.getElementById('box1');
    if (statusWarna === 0) {
        box.style.backgroundColor = 'black';
        statusWarna = 1;
    } else {
        box.style.backgroundColor = '';
        statusWarna = 0;
    }
}