function hitungGanjil(min, max) {
    let total = 0;
    let deret = [];

    for (let i = min; i <= max; i++) {
        if (i % 2 !== 0) {
            total += i;
            deret.push(i);
        }
    }
    return { total, deret };
}

function proses() {
    let vMin = parseInt(document.getElementById('min').value);
    let vMax = parseInt(document.getElementById('max').value);

    // panggil fungsi logika
    let data = hitungGanjil(vMin, vMax);

    // tampilkan ke HTML
    document.getElementById('hasil-akhir').innerText = "Hasil: " + data.total;
    document.getElementById('deret-angka').innerText = "(" + data.deret.join("+") + ")";
}