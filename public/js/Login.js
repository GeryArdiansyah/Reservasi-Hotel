document.getElementById("login-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah pengiriman form secara default
    this.submit(); // Mengirim form secara manual
});