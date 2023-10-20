check();

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
//var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
/** btn.onclick = function () {
    modal.style.display = "block";
    Day = 'Montage';
    xxx = 'D1'
    dayshow.innerHTML = Day;
    anyshow.innerHTML = xxx


}*/



/*------------------------------*/
const dropdowns = document.querySelectorAll('.dropdown')
const dropdowns1 = document.querySelectorAll('.dropdown1')



dropdowns.forEach(dropdown => {

    const select = dropdown.querySelector('.select');
    const menu = dropdown.querySelector('.menu');




    select.addEventListener('click', () => {
        select.classList.toggle('select-clicked');


        menu.classList.toggle('menu-open');

    });







    const selected = dropdown.querySelector('.selected');
    const optionsss = document.querySelector('.mennu');



    optionsss.addEventListener('click', () => {



        selected.innerText = '';

        select.classList.remove('select-clicked');


        menu.classList.remove('menu-open');



    });







    /*------*/

    dropdowns1.forEach(dropdown1 => {
        const select1 = dropdown1.querySelector('.select1');
        const menu1 = dropdown1.querySelector('.menu1');




        select1.addEventListener('click', () => {
            select1.classList.toggle('select1-clicked');


            menu1.classList.toggle('menu1-open');

        });


        const selected1 = dropdown.querySelector('.selected');
        const options1 = dropdown1.querySelectorAll('.menu1 li');


        options1.forEach(option1 => {

            option1.addEventListener('click', () => {



                selected1.innerText = option1.innerText;


                select1.classList.remove('select1-clicked');


                menu1.classList.remove('menu1-open');

                menu.classList.remove('menu-open');


                options1.forEach(option1 => {

                    option1.classList.remove('active');
                });
                option1.classList.add('active');

            });
        });
    });




});




















// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
/*show tableeeeeeeeeeeeeeeeeeeeeeeee*/




/*---------------------Nur Montaaaage----------------------*/

//const hahahaha = document.getElementById('myBtn');


document.getElementById('myBtn').readOnly = true;



const nodeList = document.querySelectorAll("#myBtn");
let btnshow = document.getElementById('buttonshow');
let btnvide = document.getElementById('buttonvid');
let nameshow = document.getElementById('selecteddd');


for (let i = 0; i < nodeList.length; i++) {
    nodeList[i].addEventListener("click", function () {
        modal.style.display = "block";

        btnshow.onclick = function () {
            nodeList[i].value = (nameshow.innerHTML)
            nodeList[i].style.color = "black"

            nameshow.innerHTML = '.'

            modal.style.display = "none";
        }

        btnvide.onclick = function () {
            nodeList[i].value = '.'
            nodeList[i].style.color = '#c0b9b99f'
            nameshow.innerHTML = '.'
            modal.style.display = "none";
        }





    });
}




const nodeList2 = document.querySelectorAll("#myBtn");

let dayshow = document.getElementById('day');
let anyshow = document.getElementById('any');
for (let i = 0; i < nodeList2.length; i++) {
    nodeList2[i].addEventListener("click", function () {
        if (i == 0 || i == 1 || i == 2 || i == 3 || i == 4 || i == 5 || i == 6 || i == 7 || i == 8 || i == 9 || i == 10 || i == 11 || i == 12 || i == 13 || i == 14 || i == 15 || i == 16 || i == 17 || i == 18 || i == 19 || i == 20) {
            anyshow.innerHTML = 'D1';
        } else if (i == 21 || i == 22 || i == 23 || i == 24 || i == 25 || i == 26 || i == 27 || i == 28 || i == 29 || i == 30 || i == 31 || i == 32 || i == 33 || i == 34) {
            anyshow.innerHTML = 'D2';
        } else if (i == 35 || i == 36 || i == 37 || i == 38 || i == 39 || i == 40 || i == 41) {
            anyshow.innerHTML = 'A4';
        } else if (i == 42 || i == 43 || i == 44 || i == 45 || i == 46 || i == 47 || i == 48) {
            anyshow.innerHTML = '22';
        } else if (i == 49 || i == 50 || i == 51 || i == 52 || i == 53 || i == 54 || i == 55 || i == 56 || i == 57 || i == 58 || i == 59 || i == 60 || i == 61 || i == 62 || i == 63 || i == 64 || i == 65 || i == 66 || i == 67 || i == 68 || i == 69) {
            anyshow.innerHTML = 'D5';
        } else if (i == 70 || i == 71 || i == 72 || i == 73 || i == 74 || i == 75 || i == 76) {
            anyshow.innerHTML = '7A';
        } else if (i == 77 || i == 78 || i == 79 || i == 80 || i == 81 || i == 82 || i == 83 || i == 84 || i == 85 || i == 86 || i == 87 || i == 88 || i == 89 || i == 90) {
            anyshow.innerHTML = 'D4';
        }


        if (i == 0 || i == 7 || i == 14 || i == 21 || i == 28 || i == 35 || i == 42 || i == 49 || i == 56 || i == 63 || i == 70 || i == 77 || i == 84) {
            dayshow.innerHTML = 'Montag';

        }
        else if (i == 1 || i == 8 || i == 15 || i == 22 || i == 29 || i == 36 || i == 43 || i == 50 || i == 57 || i == 64 || i == 71 || i == 78 || i == 85) {
            dayshow.innerHTML = 'Dienstag';
        }
        else if (i == 2 || i == 9 || i == 16 || i == 23 || i == 30 || i == 37 || i == 44 || i == 51 || i == 58 || i == 65 || i == 72 || i == 79 || i == 86) {
            dayshow.innerHTML = 'Mittwoch';
        }
        else if (i == 3 || i == 10 || i == 17 || i == 24 || i == 31 || i == 38 || i == 45 || i == 52 || i == 59 || i == 66 || i == 73 || i == 80 || i == 87) {
            dayshow.innerHTML = 'Donnerstag';
        }
        else if (i == 4 || i == 11 || i == 18 || i == 25 || i == 32 || i == 39 || i == 46 || i == 53 || i == 60 || i == 67 || i == 74 || i == 81 || i == 88) {
            dayshow.innerHTML = 'Freitag';
        }
        else if (i == 5 || i == 12 || i == 19 || i == 26 || i == 34 || i == 40 || i == 47 || i == 54 || i == 61 || i == 68 || i == 75 || i == 82 || i == 89) {
            dayshow.innerHTML = 'Samstag';
        }
        else if (i == 6 || i == 13 || i == 20 || i == 27 || i == 35 || i == 41 || i == 48 || i == 55 || i == 62 || i == 69 || i == 76 || i == 83 || i == 90) {
            dayshow.innerHTML = 'Sonntag';
        }

    });
}






function check() {
    let mySpans = document.querySelectorAll(".depart");
    mySpans.forEach(function (span) {
        if (span.value.includes(".")) {
            span.style.color = "#d4e1f1";
        }
    });

}


















