// Banner Section 
var myEle = document.getElementById("bannerSection");
if (myEle) {
    var banner = gsap.timeline({
        scrollTrigger: {
            trigger: ".banner--section",
            start: "top 90%",
            id: "Banner Section",
            toggleActions: "play none none reset",
        },
    });
    banner.from(".banner--textbox > *", {
        duration: 0.75,
        opacity: 0,
        y: 150,
        ease: "back",
        stagger: 0.25,
    });
    banner.from(".banner--section .center--icons", {
        duration: 0.5,
        opacity: 0,
        y: 150,
        scale: 0,
        ease: "back"
    });
}

// About Section 
var myEle = document.getElementById("aboutSection");
if (myEle) {
    var about = gsap.timeline({
        scrollTrigger: {
            trigger: ".about--section",
            start: "top 90%",
            id: "About Section",
            toggleActions: "play none none reset",
        },
    });
    about.from(".about--textBox .section--title", {
        duration: 0.5,
        opacity: 0,
        y: 150,
        ease: "back",
    }, 1);
    about.from(".about--textBox .text > p", {
        duration: 0.5,
        delay: 0.1,
        opacity: 0,
        y: 150,
        ease: "back"
    }, 1);
    about.from(".about--textBox .text > article *", {
        duration: 0.5,
        delay: 0.2,
        opacity: 0,
        y: 150,
        ease: "back",
        stagger: 0.1
    }, 1);
    about.from(".about--imgBox > *", {
        duration: 0.5,
        delay: 0.5,
        opacity: 0,
        scale: 0,
        ease: "back",
        stagger: 0.1
    }, 1);
}

// Info Section 
var myEle = document.getElementById("infoSection");
if (myEle) {
    var info = gsap.timeline({
        scrollTrigger: {
            trigger: ".info--section",
            start: "top 90%",
            id: "Info Section",
            toggleActions: "play none none reset",
        },
    });
    info.from(".info--detailText >*", {
        duration: 0.5,
        opacity: 0,
        y: 150,
        ease: "back",
        stagger: 0.2
    });
    info.from(".info--box .info--minuteCard", {
        duration: 0.5,
        opacity: 0,
        y: 150,
        ease: "back",
        stagger: 0.2
    });
}

// Menu Section 
var myEle = document.getElementById("menuSection");
if (myEle) {
    var menu = gsap.timeline({
        scrollTrigger: {
            trigger: ".menu--section",
            start: "top 90%",
            id: "Menu Section",
            toggleActions: "play none none reset",
        },
    });
    menu.from(".menu--details .section--title > *", {
        duration: 0.5,
        opacity: 0,
        y: 150,
        ease: "back",
        stagger: 0.2
    });
    menu.from(".menu--details .menuLists *", {
        delay: 0.25,
        duration: 0.5,
        opacity: 0,
        y: 150,
        ease: "back",
        stagger: 0.2
    }, 0);
    menu.from(".menu--cards > *", {
        duration: 0.5,
        opacity: 0,
        left: -100,
        ease: "ease",
        stagger: 0.25
    }, 1);
}

// Recipe & Footer Section 
var myEle = document.getElementById("recipeSection");
if (myEle) {
    var recipe = gsap.timeline({
        scrollTrigger: {
            trigger: ".recipe--section",
            start: "top 90%",
            id: "Recipe Section",
            toggleActions: "play none none reset",
        },
    });
    recipe.from(".recipe--section .section--title > *", {
        duration: 0.5,
        opacity: 0,
        y: 150,
        ease: "back",
        stagger: 0.25
    });
    recipe.from(".recipe--leftContent > *", {
        delay: 0.5,
        duration: 0.5,
        opacity: 0,
        scale: 0,
        ease: "back",
        stagger: 0.25
    }, 0);
    recipe.from(".recipe--rightImg", {
        // delay: 0.5,
        duration: 0.5,
        opacity: 0,
        x: 100,
        ease: "back",
        stagger: 0.5
    }, 1);
    recipe.from(".recipe--rightInfo > *", {
        delay: 0.5,
        duration: 0.5,
        opacity: 0,
        y: 100,
        ease: "back",
        stagger: 0.25
    }, 1);
    recipe.from(".recipe--rightContent .btn--holder", {
        duration: 0.5,
        opacity: 0,
        scale: 0,
        ease: "back",
    }, 2);
    recipe.from(".footer--logo", {
        duration: 0.75,
        opacity: 0,
        scale: 0,
        ease: "back",
    }, 1);
    recipe.from(".footer--nav ul.menuList li", {
        delay: 0.3,
        duration: 0.75,
        opacity: 0,
        y: 100,
        ease: "back",
        stagger: 0.15
    }, 1);
}