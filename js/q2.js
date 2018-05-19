$(document).ready(function () {
    var formSubmitBtn = document.getElementById('formSubmitBtn');
    formSubmitBtn.addEventListener('click', getTotalHandshakes);
})
function getTotalHandshakes(e){
    e.preventDefault();
    var persons = $('#totalpersons').val();
    if(/^\d*$/.test(persons)){
    $('#totalHandshakes').val((persons * (persons - 1))/2);
    }else{
        alert('Please enter integer');
    }
    
}
