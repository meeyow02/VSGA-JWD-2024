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
    console.log(inputJumlahTagihan);
});


function hapusData(id) {
    var linkHapusData = document.getElementById('linkHapusData');
    linkHapusData.href = "controller/hapus_data.php?id=" + id;
}

const editBtn = document.getElementById('editBtn');

function editData(id) {
    console.log(id);
    fetch('controller/get_data.php?id=' + id)
    .then(response => response.json())
    .then(data => {
        document.getElementById('id').value = data.id;
        document.getElementById('nama').value = data.nama;
        document.getElementById('nomor_telepon').value = data.nomor_telepon;
        document.getElementById('jumlah_tagihan').value = data.jumlah_pembayaran;

        if (data.paket_game == 'A') {
            document.getElementById('paketA').checked = true;
            biayaPaket = 5000;
        } else if (data.paket_game == 'B') {
            console.log(data.paket_game);
            document.getElementById('paketB').checked = true;
            biayaPaket = 10000;
        } else if (data.paket_game == 'C') {
            document.getElementById('paketC').checked = true;
            biayaPaket = 15000;
        } else if (data.paket_game == 'D') {
            document.getElementById('paketD').checked = true;
            biayaPaket = 20000;
        }

        if (data.paket_makanan == 1) {
            document.getElementById('checkboxMakananRingan').checked = true;
            biayaMakanan = 2000;
        } else if (data.paket_makanan == 2) {
            document.getElementById("checkboxMakananBerat").checked = true;
            biayaMakanan = 3000;
        } else if (data.paket_makanan == 3) {
            document.getElementById("checkboxMakananRingan").checked =true;
            document.getElementById("checkboxMakananBerat").checked = true;
            biayaMakanan = 4000;
        } else {
            document.getElementById("checkboxMakananRingan").checked =false;
            document.getElementById("checkboxMakananBerat").checked = false;
            biayaMakanan = 0;
        }
    });
}