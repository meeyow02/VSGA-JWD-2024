const touring_event = document.querySelector("#touring_event");
const pelatihan_berkendara = document.querySelector("#pelatihan_berkendara");
const modifikasi = document.querySelector("#modifikasi");
const workshop = document.querySelector("#workshop");
const jasa_event = document.querySelector("#jasa_event");
const helm = document.querySelector("#helm");
const baju = document.querySelector("#baju");
const sticker = document.querySelector("#sticker");
const checkboxs = document.querySelectorAll(".checkbox");

const inputJumlahTagihan = document.querySelector("#jumlah_tagihan");

const btnCek = document.querySelector("#btn_cek");

var biaya_touring = 0;
var biaya_pelatihan = 0;
var biaya_modifikasi = 0;
var biaya_workshop = 0;
var biaya_event = 0;
var biaya_merchandise = 0;
var totalHarga = 0;

Array.from(checkboxs).forEach((checkbox) => {
    checkbox.addEventListener("change", function () {
        if (touring_event.checked) {
            biaya_touring = 5000;
        } else {
            biaya_touring = 0;
        }

        if (pelatihan_berkendara.checked) {
            biaya_pelatihan = 4000;
        } else {
            biaya_pelatihan = 0;
        }

        if (modifikasi.checked) {
            biaya_modifikasi = 3000;
        } else {
            biaya_modifikasi = 0;
        }

        if (workshop.checked) {
            biaya_workshop = 4000;
        } else {
            biaya_workshop = 0;
        }

        if (jasa_event.checked) {
            biaya_event = 5000;
        } else {
            biaya_event = 0;
        }
        
        if (helm.checked && baju.checked && sticker.checked) {
            biaya_merchandise = 5000;
        } else if (helm.checked && baju.checked) {
            biaya_merchandise = 2000;
        } else if (helm.checked && sticker.checked) {
            biaya_merchandise = 2000;
        } else if (baju.checked && sticker.checked) {
            biaya_merchandise = 2000;
        } else if (helm.checked) {
            biaya_merchandise = 2500;
        } else if (baju.checked) {
            biaya_merchandise = 2500;
        } else if (sticker.checked) {
            biaya_merchandise = 2500;
        } else {
            biaya_merchandise = 0;
        }
        console.log(biaya_merchandise);
    });
});

btnCek.addEventListener("click", function () {
    totalHarga = biaya_touring + biaya_pelatihan + biaya_modifikasi + biaya_workshop + biaya_event + biaya_merchandise;
    inputJumlahTagihan.value = totalHarga;
    console.log(inputJumlahTagihan);
});