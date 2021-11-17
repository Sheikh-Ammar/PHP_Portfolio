//    ROGRESS CIRCLE BAR
$(function () {
    $('.circlechart').circlechart();
});


// RECENT BUTTON
let list = document.querySelectorAll(".list");
let itemBox = document.querySelectorAll(".itemBox");
for (let i = 0; i < list.length; i++) {
    list[i].addEventListener('click', function(){
        for (let j = 0; j < list.length; j++) {
            list[j].classList.remove('activebtn');
        }
        this.classList.add('activebtn');

        let datafilter = this.getAttribute('data-filter');
        for (let k = 0; k < itemBox.length; k++) {
            itemBox[k].classList.remove('hide');
            itemBox[k].classList.add('hide');
            if(itemBox[k].getAttribute('data-item') == datafilter || datafilter == "all")
            {
                itemBox[k].classList.remove('hide');
                itemBox[k].classList.add('activebtn');
            }         
        }
    })    
}



// SCROLL TO TOP BUTTON
var mybutton = document.getElementById("myBtn");
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
    