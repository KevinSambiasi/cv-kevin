console.log("log")

//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction()
};
console.log(mybutton)

function scrollFunction() {
    if (document.body.scrollTop > 650 || document.documentElement.scrollTop > 650) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

setTimeout(() => {
const box = document.getElementById('alert');
box.style.display =  'none';
}, 1000);