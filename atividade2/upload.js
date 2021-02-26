var input = document.getElementById('arquivo');
var label = document.getElementById('teste');

input.addEventListener('change', function(){
    var fileName = this.value;
    if (fileName){
        label.querySelector('span').innerHTML = fileName.split("\\").pop();
    }
});
