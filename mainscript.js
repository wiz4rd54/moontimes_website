const content = document.getElementsByClassName('.section');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const idlePeriod = 100;
const animationDuration = 1000;

let lastAnimation = 0;
let index = 0;

console.log(content[1]);
/*
const toggleText = (index,state) => {
    if (state === 'show') {
        content[index].querySelector('.text').classList.add('show');
    }
    else 
    {
        content[index].querySelector('.text').classList.remove('show');
    }
}


toggleText(0, 'show');

prev.addEventListener("click", function() {
    
    if (index < 1) return;
    index--;
    content.forEach((section, i) => {
        if (i==index)
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
        if (i==index) {
            section.scrollIntoView({behavior: "smooth"});
        }
    })
})*/