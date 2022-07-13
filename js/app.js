//Button Overlay Hover Effect
var btnEff = document.querySelectorAll(".btn");
for (b = 0; b < btnEff.length; b++) {
    var btnEle = document.createElement("span");
    var ELeClass = btnEle.className = "btnSpan";
    btnEff[b].appendChild(btnEle, btnEff[b]);
    btnEff[b].onmousemove = (event) => {
        var vp = event.currentTarget.getBoundingClientRect(),
            topPos = vp.top + window.scrollY,
            leftPos = vp.left + window.scrollX;
        btnX = event.pageX - leftPos;
        btnY = event.pageY - topPos;
        event.currentTarget.lastElementChild.setAttribute("style", "top:" + btnY + "px; left:" + btnX + "px;");
    }
}

// Info Image Slider
var slider_ID = "info--imgSlider",
    myEle = document.getElementById(slider_ID);
if (myEle) {
    new Splide("." + slider_ID, {
        type: "loop",
        gap: '3rem',
        autoplay: false,
        arrows: true,
        pagination: false,
        perPage: 3,
    }).mount();
}