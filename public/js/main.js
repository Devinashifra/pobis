//untuk menentukan harga tiket
function hargaTiket() {
    let kelas = document.getElementById("Kelas_Penumpang").value;
    let harga = document.getElementById("Harga_Tiket");
    document.querySelector("input[name=Harga_Tiket]").value = kelas;
    if (kelas == "300000") {
        harga.innerHTML = "Rp. 300000";
    } else if (kelas == "450000") {
        harga.innerHTML = "Rp. 450000";
    } else if (kelas == "600000") {
        harga.innerHTML = "Rp. 600000";
    } else if (kelas == "") {
        harga.innerHTML = "Rp. 300000";
    } else {
        harga.innerHTML = "Tolong masukkan kelas penumpang dengan benar!";
    }
}


//untuk menghitung total harga
function hitungTotal() {
    let jumlah = document.getElementById("Jlh_Penumpang").value;
    let jumlah_lansia = document.getElementById("Jlh_Lansia").value;
    let kelas = document.getElementById("Kelas_Penumpang").value;
    let harga = kelas;
    let total_biasa = harga * jumlah;
    let total_lansia = jumlah_lansia * (harga - harga * 0.1);
    let harga_total = total_biasa + total_lansia;
    document.getElementById("total").innerHTML = "Rp. " + harga_total;
    document.querySelector("input[name=Total_Bayar]").value = harga_total;
}