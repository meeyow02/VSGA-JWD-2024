const checkboxPenginapan = document.querySelector("#checkbox_penginapan");
const checkboxTransportasi = document.querySelector("#checkbox_transportasi");
const checkboxMakanan = document.querySelector("#checkbox_makanan");
const checkboxs = document.querySelectorAll(".checkbox");

const inputWaktuPerjalanan = document.querySelector("#waktu_pelaksanaan");
const inputJumlahPeserta = document.querySelector("#jumlah_peserta");
const inputHargaPaket = document.querySelector("#harga_paket");
const inputJumlahTagihan = document.querySelector("#jumlah_pembayaran");

const btnCek = document.querySelector("#btn_cek");
const form = document.querySelector("form");

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

function validateForm() {
  const nama = document.querySelector("#nama").value.trim();
  const nomorTelepon = document.querySelector("#nomor_telepon").value.trim();
  const waktuPerjalanan = inputWaktuPerjalanan.value;
  const jumlahPeserta = inputJumlahPeserta.value;
  const hargaPaket = inputHargaPaket.value;
  const jumlahTagihan = inputJumlahTagihan.value;

  if (!nama || !nomorTelepon || !waktuPerjalanan || !jumlahPeserta || !hargaPaket || !jumlahTagihan) {
      alert("Semua field harus diisi!");
      return false;
  }

  const checkboxPenginapan = document.querySelector("#checkbox_penginapan");
  const checkboxTransportasi = document.querySelector("#checkbox_transportasi");
  const checkboxMakanan = document.querySelector("#checkbox_makanan");

  if (!checkboxPenginapan.checked && !checkboxTransportasi.checked && !checkboxMakanan.checked) {
    alert("Pilih setidaknya satu layanan paket!");
    return false;
  }

  return true;
}

form.addEventListener("submit", function (event) {
  if (!validateForm()) {
      event.preventDefault();
  }
});
