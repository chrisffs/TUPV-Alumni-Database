var y_grad = document.getElementById('filter');

y_grad.onchange = ()=> {
    let tbl_y_grad = document.getElementsByClassName('year-grad')

    let typedText = y_grad.value
    console.log(typedText);
    Array.from(tbl_y_grad).forEach(
        function(item) {
            let tr = item.parentElement;
            
            let year_grad = item.textContent;
            
            if (year_grad.indexOf(typedText) != -1) {
                tr.style.display = ''
            } else {
                tr.style.display = 'none'
            }
        }
    )
}

window.addEventListener('scroll', reveal)

function reveal(){

    var reveals = document.querySelectorAll('.reveal')

    for (let i = 0; i < reveals.length; i++) {
        
        let windowHeight = window.innerHeight;
        let revealTop = reveals[i].getBoundingClientRect().top;
        let revealPoint = 150;

        if (revealTop < windowHeight - revealPoint) {
            reveals[i].classList.add('active')
        } else {
            reveals[i].classList.remove('active')
        }
    }

}

