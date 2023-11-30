// Az animáció aktiválásához szükséges eseménykezelő
window.addEventListener('scroll', function () {
    var elements = document.querySelectorAll('.hirlevel');
    var erdemes = document.querySelectorAll('.miert-erdemes');
    var balrol_kartya = document.querySelectorAll('.balrol-kartya');
    var jobbrol_kartya = document.querySelectorAll('.jobbrol-kartya');
    var kartya_fentrol = document.querySelectorAll('.kartya-fentrol');
    var kartya_lentrol = document.querySelectorAll('.kartya-lentrol');
    var social_alulrol = document.querySelectorAll('.social-alulrol');


    //hírlevél balról animáció
    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        var position = element.getBoundingClientRect().top;
        var windowHeight = window.innerHeight;

        // Ha az elem feljut a képernyő aljára, hozzáadjuk az animációhoz szükséges osztályt
        if (position < windowHeight) {
            element.classList.add('animate');
        }
    }
    //"miért érdemes.." jobbról animáció szöveg 
    for (var i = 0; i < erdemes.length; i++) {
        var element = erdemes[i];
        var position = element.getBoundingClientRect().top;
        var windowHeight = window.innerHeight;

        // Ha az elem feljut a képernyő aljára, hozzáadjuk az animációhoz szükséges osztályt
        if (position < windowHeight) {
            element.classList.add('animate-right');
        }
    }

    //balról kártya animáció
    for (var i = 0; i < balrol_kartya.length; i++) {
        var element = balrol_kartya[i];
        var position = element.getBoundingClientRect().top;
        var windowHeight = window.innerHeight;

        // Ha az elem feljut a képernyő aljára, hozzáadjuk az animációhoz szükséges osztályt
        if (position < windowHeight) {
            element.classList.add('kartya_balrol');
        }
    }

    //jobrról kártya animáció
    for (var i = 0; i < jobbrol_kartya.length; i++) {
        var element = jobbrol_kartya[i];
        var position = element.getBoundingClientRect().top;
        var windowHeight = window.innerHeight;

        // Ha az elem feljut a képernyő aljára, hozzáadjuk az animációhoz szükséges osztályt
        if (position < windowHeight) {
            element.classList.add('kartya_jobbrol');
        }
    }


    //fentről kártya animáció
    for (var i = 0; i < kartya_fentrol.length; i++) {
        var element = kartya_fentrol[i];
        var position = element.getBoundingClientRect().top;
        var windowHeight = window.innerHeight;

        // Ha az elem feljut a képernyő aljára, hozzáadjuk az animációhoz szükséges osztályt
        if (position < windowHeight) {
            element.classList.add('kartya_fentrol');
        }
    }

    //lentről kártya animáció
    for (var i = 0; i < kartya_lentrol.length; i++) {
        var element = kartya_lentrol[i];
        var position = element.getBoundingClientRect().top;
        var windowHeight = window.innerHeight;

        // Ha az elem feljut a képernyő aljára, hozzáadjuk az animációhoz szükséges osztályt
        if (position < windowHeight) {
            element.classList.add('kartya_lentrol');
        }
    }

    //social media szövegek alulról animáció
    for (var i = 0; i < social_alulrol.length; i++) {
        var element = social_alulrol[i];
        var position = element.getBoundingClientRect().top;
        var windowHeight = window.innerHeight;

        // Ha az elem feljut a képernyő aljára, hozzáadjuk az animációhoz szükséges osztályt
        if (position < windowHeight) {
            element.classList.add('social_alulrol');
        }
    }
});
