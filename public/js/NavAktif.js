document.addEventListener("DOMContentLoaded", function () {
    // Ambil semua elemen menu
    var menuItems = document.querySelectorAll(".navbar ul li a");

    // Tambahkan event listener untuk setiap elemen menu
    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener("click", function (event) {
            // Hapus class aktif dari semua elemen menu
            menuItems.forEach(function (item) {
                item.classList.remove("aktif");
            });

            // Tambahkan class aktif pada elemen menu yang diklik
            this.classList.add("aktif");
        });
    });
});
