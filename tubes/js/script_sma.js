// ambil elemen
var keyword = document.getElementById("keyword");
var tombolcari = document.getElementById("tombol");
var container = document.getElementById("semua_data_sma");

// tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {

    // buat objek ajax
  var xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
        container.innerHTML = xhr.responseText;
    }
  };


//   eksekusi ajax
  xhr.open("GET", "../ajax/sma.php?keyword=" + keyword.value, true);
  xhr.send();
});
