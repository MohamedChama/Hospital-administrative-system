check();
var modal = document.getElementById("myModal");
function showmsg() {
    let nameNach = document.getElementById('Nachrichttextname').value;
    let NachrichtNach = document.getElementById('NachrichtNach').value;

    let showname = document.getElementById('cheef');
    let showmsg = document.getElementById("Nachrichtbychef");

    showname.innerHTML = nameNach;
    showmsg.innerHTML = NachrichtNach;
    modal.style.display = "none";

    document.getElementById('Nachrichttextname').value = ''
    document.getElementById('NachrichtNach').value = ''



}



let nav1 = document.getElementById('nav1')
let nav2 = document.getElementById('nav2')
let nav3 = document.getElementById('nav3')
let nav4 = document.getElementById('nav4')
let navbott = document.getElementById('navbott')
let tr = document.getElementById('tablelefttop')
let tr1 = document.getElementById('alltheth1')
let tr2 = document.getElementById('alltheth2')
let tr3 = document.getElementById('alltheth3')
let tr4 = document.getElementById('alltheth4')
let tr5 = document.getElementById('alltheth5')
let trlast = document.getElementById('tablerighttop')
let iconpara = document.getElementById('iconpara')
let iconpara2 = document.getElementById('iconpara2')
let msg = document.getElementById('msg');
let notification = document.getElementById('notification');
let myBtn = document.getElementById('myBtn');
let cheef = document.getElementById('cheef');
let Nachrichtbychef = document.getElementById('Nachrichtbychef');



let buttonsendnachricht = document.getElementById('buttonsendnachricht');
let Nachrichttitel = document.getElementById('Nachrichttitel');



function darkmoodF() {
    var checkBox = document.getElementById("darkmode-toggle");
    var x = document.getElementsByTagName("BODY")[0];

    if (checkBox.checked == false) {
        x.style = `background-image: linear-gradient(to bottom, #7537d8, #7945d9, #7e51d9, #835cd9, #8867d9, #8e70da, #9379db, #9982db, #a18bdd, #a895df, #b09ee1, #b7a8e3);`;
        nav3.style.background = "#7e51d9";
        nav4.style.background = "#9982db";
        nav1.style.background = "#4e2e94bd";
        nav2.style.background = "#4e2e94bd";
        navbott.style.background = "#7537d8";
        tr.style.background = "#4e2e94bd";
        tr1.style.background = "#4e2e94bd";
        tr2.style.background = "#4e2e94bd";
        tr3.style.background = "#4e2e94bd";
        tr4.style.background = "#4e2e94bd";
        tr5.style.background = "#4e2e94bd";
        trlast.style.background = "#4e2e94bd";

        iconpara.style.color = "#dad8d8f3";
        iconpara.style.border = "2px solid  #dad8d8f3";
        iconpara2.style.color = "#dad8d8f3";
        iconpara2.style.border = "2px solid  #dad8d8f3";

        msg.style.background = "#7945d9";
        notification.style.background = "#651fd4";
        notification.style.color = "#fff";
        myBtn.style.background = "#651fd4";
        myBtn.style.color = "#fff";
        cheef.style.color = "#fff";
        Nachrichtbychef.style.color = "#dce6f3";
        buttonsendnachricht.style.background = "#8867d9";
        buttonsendnachricht.style.color = "#fff";
        Nachrichttitel.style.color = "#8867d9";




    } else {
        x.style = `background-image: linear-gradient(0deg, #d4e1f1, #d4e1f1);`;
        nav1.style.background = "#3a99f3";
        nav2.style.background = "#3a99f3";
        navbott.style.background = "#3a99f3";
        nav3.style.background = "#d4e1f1";

        nav4.style.background = "#d4e1f1";

        tr.style.background = "#3395f0";
        tr1.style.background = "#3395f0";
        tr2.style.background = "#3395f0";
        tr3.style.background = "#3395f0";
        tr4.style.background = "#3395f0";
        tr5.style.background = "#3395f0";
        trlast.style.background = "#3395f0";



        msg.style.background = "#87c1f7";
        notification.style.background = "#6ab1f3dc";
        notification.style.color = "#2c2b2b";
        myBtn.style.background = "#6ab1f3dc";
        myBtn.style.color = "#2c2b2b";
        cheef.style.color = "#000000";
        Nachrichtbychef.style.color = "#3b3939";
        buttonsendnachricht.style.background = "#6ab1f3dc";
        buttonsendnachricht.style.color = "#fff";
        Nachrichttitel.style.color = "#3395f0";


        iconpara.style.color = "#3395f0";
        iconpara.style.border = "2px solid  #3395f0";
        iconpara2.style.color = "#3395f0";
        iconpara2.style.border = "2px solid  #3395f0";
    }
}



function check() {
    let mySpans = document.querySelectorAll(".depart");

    mySpans.forEach(function (span) {
        if (span.textContent.includes(".")) {
            span.style.color = "#d4e1f1";
        }
    });

}