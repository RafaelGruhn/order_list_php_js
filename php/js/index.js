
window.onload = function(){
    let textBox = document.getElementById('text-box');
    let btnBox = document.getElementById('btn-box');
    let btnOrder = document.getElementById('btn-order');
    let inputs = document.getElementById('inputs');
    btnBox.onclick = function() {
        let value = parseInt(textBox.value);
        if (value > 0){
            inputs.innerHTML = "";
            for (let i=0; i<value; i++) {
                inputs.innerHTML = inputs.innerHTML + '<br/><input type="number" name="n' + i + '" value="' + Math.floor(Math.random() * 100) + '"/>';
            };
            inputs.innerHTML = inputs.innerHTML + '<br/><input type="number" class="d-none" value="' + value + '" name="qtd" />';
            btnOrder.classList.remove("d-none");
        } else {
            inputs.innerHTML = "";
            btnOrder.classList.add("d-none");
        }
    }
}

