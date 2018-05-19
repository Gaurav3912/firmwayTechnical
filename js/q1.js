$(document).ready(function () {
    var shapeSelector = document.getElementById('trophyShape');
    shapeSelector.addEventListener('change', openDimentions);
    var formSubmitBtn = document.getElementById('formSubmitBtn');
    formSubmitBtn.addEventListener('click', getTotalCost);
})

function openDimentions() {
    var shape = $(this).val();
    if (shape && shape != '') {
        switch (shape) {
            case 'Sphere':
                $('#Sphere').show();
                $('#Cylinder').hide();
                $('#Cube').hide();
                break;
            case 'Cylinder':
                $('#Cylinder').show();
                $('#Sphere').hide();
                $('#Cube').hide();
                break;
            case 'Cube':
                $('#Cube').show();
                $('#Cylinder').hide();
                $('#Sphere').hide();
                break;
            default:

        }
    }

}
function getTotalCost() {
//    console.log('in');
    var data = $('#q1Form').serialize();
    $.ajax({
        'url': siteUrl+'/Home/getCost',
        'data': data,
        'type': 'post',
        'success' : function(res){
//            console.log(res);
            var obj = $.parseJSON(res);
            if(obj.success){
                
                $('#totalCost').val(obj.cost);
            }else{
                alert(obj.message);
            }
        }
    })
}

