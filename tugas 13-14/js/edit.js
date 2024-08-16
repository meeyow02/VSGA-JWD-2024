const checkboxPenginapan = document.querySelector("#checkbox_penginapan");
const checkboxTransportasi = document.querySelector("#checkbox_transportasi");
const checkboxMakanan = document.querySelector("#checkbox_makanan");
const checkboxs = document.querySelectorAll(".checkbox");

const inputWaktuPerjalanan = document.querySelector("#waktu_pelaksanaan");
const inputJumlahPeserta = document.querySelector("#jumlah_peserta");
const inputHargaPaket = document.querySelector("#harga_paket");
const inputJumlahTagihan = document.querySelector("#jumlah_pembayaran");

const btnCek = document.querySelector("#btn_cek");

var hargaPaketPerjalanan = 0;
var biayaLayananPenginapan = 0;
var biayaLayananTransportasi = 0;
var biayaLayananMakanan = 0;
var totalHarga = 0;


Array.from(checkboxs).forEach((checkbox) => {
  checkbox.addEventListener("change", function () {
    if (checkboxPenginapan.checked) {
      biayaLayananPenginapan = 1000000;
    } else {
      biayaLayananPenginapan = 0;
    }

    if (checkboxTransportasi.checked) {
      biayaLayananTransportasi = 1200000;
    } else {
      biayaLayananTransportasi = 0;
    }

    if (checkboxMakanan.checked) {
      biayaLayananMakanan = 500000;
    } else {
      biayaLayananMakanan = 0;
    }
  });
});

btnCek.addEventListener("click", function () {
  hargaPaketPerjalanan = biayaLayananPenginapan + biayaLayananTransportasi + biayaLayananMakanan;
  inputHargaPaket.value = hargaPaketPerjalanan;
  
  totalHarga = hargaPaketPerjalanan * inputWaktuPerjalanan.value * inputJumlahPeserta.value;
  inputJumlahTagihan.value = totalHarga;
});

function hapusData(id) {
  var linkHapusData = document.getElementById('linkHapusData');
  linkHapusData.href = "controller/hapus-data.php?id=" + id;
}

const editBtn = document.getElementById('editBtn');

function editData(id) {
  console.log(id);
  fetch('controller/get-item.php?id=' + id)
    .then(response => response.json())
    .then(data => {
      document.getElementById('id').value = data.id;
      document.getElementById('nama').value = data.nama;
      document.getElementById('nomor_telepon').value = data.nomor_telepon;
      document.getElementById('waktu_pelaksanaan').value = data.waktu_pelaksanaan;
      document.getElementById('jumlah_peserta').value = data.jumlah_peserta;
      document.getElementById('harga_paket').value = data.harga_paket;
      document.getElementById('jumlah_pembayaran').value = data.jumlah_pembayaran;

      if (data.layanan_penginapan == 1) {
        document.getElementById('checkbox_penginapan').checked = true;
        biayaLayananPenginapan = 1000000;
      } else {
        document.getElementById('checkbox_penginapan').checked = false;
      }

      if (data.layanan_transportasi == 1) {
        document.getElementById('checkbox_transportasi').checked = true;
        biayaLayananTransportasi = 1200000;
      } else {
        document.getElementById('checkbox_transportasi').checked = false;
      }

      if (data.layanan_makanan == 1) {
        document.getElementById('checkbox_makanan').checked = true;
        biayaLayananMakanan = 500000;
      } else {
        document.getElementById('checkbox_makanan').checked = false;
      }
    });
}