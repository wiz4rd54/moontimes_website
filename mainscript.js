const content = document.querySelectorAll('section');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const idlePeriod = 100;
const animationDuration = 1000;

let lastAnimation = 0;
var index = 0;

prev.addEventListener("click", function() {
    if (index < 1) return;
    index--;
    content.forEach((section, i) => {
        if (i===index)
        {
            section.scrollIntoView({behavior: "smooth"});
        }
    });
})

next.addEventListener('click', () => {
    if (index > 2) return;
    toggleText(index,'hide');
    index++;
    content.forEach((section, i) => {
        if (i===index) {
            section.scrollIntoView({behavior: "smooth"});
        }
    })
})