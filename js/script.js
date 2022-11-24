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
