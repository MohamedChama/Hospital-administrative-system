
let Xk = document.getElementById('btnnn2');
var modal = document.getElementById("myModal");

Xk.onclick = function () {
    document.getElementById('Vorname').value = ''
    document.getElementById('Nachname').value = ''
    document.getElementById('Email').value = ''
    document.getElementById('Tel').value = ''
    document.getElementById('User').value = ''
    document.getElementById('Password').value = ''
    document.getElementById('Passwordck').value = ''
    document.getElementById('combo').chick = ''
    modal.style.display = "none";
}