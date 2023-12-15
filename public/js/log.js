window.addEventListener('DOMContentLoaded', function () {
    var currentPath = window.location.pathname;
    var navLink = document.querySelector('.navbar ul li:last-child a');

    if (
        currentPath === '/Beranda' ||
        currentPath === '/Kontak' ||
        currentPath === '/TentangKami' ||
        currentPath === '/LihatKamar' ||
        currentPath === '/Kamar%20Junior' ||
        currentPath === '/Kamar%20Executive' ||
        currentPath === '/Kamar%20Precidential' ||
        currentPath === '/Kamar%20Deluxe' ||
        currentPath === '/Kamar%20Premiere' ||
        currentPath === '/Kamar%20Premiere%20Twin'
    ) {
        navLink.textContent = 'Keluar';
        navLink.classList.add('logout');
        var logoutIcon = document.createElement('i');
        logoutIcon.classList.add('fas', 'fa-sign-out-alt');
        navLink.insertBefore(logoutIcon, navLink.firstChild);

        logoutIcon.style.marginTop = '-7px';
    }
});
