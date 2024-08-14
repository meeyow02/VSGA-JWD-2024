const paketA = document.querySelector("#paketA");
const paketB = document.querySelector("#paketB");
const paketC = document.querySelector("#paketC");
const paketD = document.querySelector("#paketD");
const checkradio = document.querySelectorAll(".radio");

const checkboxMakananRingan = document.querySelector("#checkboxMakananRingan");
const checkboxMakananBerat = document.querySelector("#checkboxMakananBerat");
const checkboxs = document.querySelectorAll(".checkbox");

const inputJumlahTagihan = document.querySelector("#jumlah_tagihan");

const btnCek = document.querySelector("#btn_cek");

var biayaPaket = 0;
var biayaMakanan = 0;
var totalHarga = 0;

Array.from(checkradio).forEach((checkradio) => {
    checkradio.addEventListener("change", function () {
        if (paketA.checked) {
            biayaPaket = 5000;
        } else if (paketB.checked) {
            biayaPaket = 10000;
        } else if (paketC.checked) {
            biayaPaket = 15000;
        } else if (paketD.checked) {
            biayaPaket = 20000;
        } else {
            biayaPaket = 0;
        }
    })
})

Array.from(checkboxs).forEach((checkbox) => {
    checkbox.addEventListener("change", function () {
        if (checkboxMakananRingan.checked && checkboxMakananBerat.checked) {
            biayaMakanan = 4000;
        } else if (checkboxMakananRingan.checked) {
            biayaMakanan = 2000;
        } else if (checkboxMakananBerat.checked) {
            biayaMakanan = 3000;
        } else {
            biayaMakanan = 0;
        }
        console.log(biayaMakanan);
    });
});

btnCek.addEventListener("click", function () {
    totalHarga = biayaPaket + biayaMakanan;
    inputJumlahTagihan.value = totalHarga;
});