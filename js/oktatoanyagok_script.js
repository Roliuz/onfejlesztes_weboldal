window.addEventListener('scroll', function () {
    var dolog5 = document.querySelectorAll('.dolog');



    //hírlevél balról animáció
    for (var i = 0; i < dolog5.length; i++) {
        var element = dolog5[i];
        var position = element.getBoundingClientRect().top;
        var windowHeight = window.innerHeight;

        // Ha az elem feljut a képernyő aljára, hozzáadjuk az animációhoz szükséges osztályt
        if (position < windowHeight) {
            element.classList.add('dolog5');
        }
    }
})