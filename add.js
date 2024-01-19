const skillcontent = document.getElementsByClassName('content'),
    skillhead = document.querySelectorAll('.skill_head');
console.log(skillcontent);
console.log(skillhead);

function fire() {
    let item = this.parentNode.className;
    for (i = 0; i < skillcontent.length; i++) {
        skillcontent[i].className = 'content close'
    }

    if (item === 'content close') {
        this.parentNode.className = 'content open'
    }
    console.log(item)
}
skillhead.forEach((ele) => {
    ele.addEventListener('click', fire)
})