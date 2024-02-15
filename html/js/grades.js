$(document).ready(function(){
    $('#add_grade').click(function (){
        $('#modalCenterTitle').text("Save Subject");
        $('#updateId').css('display', 'none');

        $('#nameWithTitle').val('');
        $('#emailWithTitle').val('');
        $('#IDWithTitle').val('');
    });
});

function fn_update(ele){
    console.log(ele);
    
    let grade = $(ele).data('grade');
    let code = $(ele).data('code');
    let id = $(ele).data('id');
    

    console.log(grade + " || " + code + " || " + id);

    $('#updategrade').css('display', 'block');

    // $('#nameWithTitle').val();
    // $('#emailWithTitle').val(status);
    $('#Grade').val(grade);
    $('#Gradecode').val(code);
    $('#gradeid').val(id);

    $('#modalCenterTitle').text("Update Grade");
}
function update(){
    $('#updategrade').css('display', 'none');
    $('#modalCenterTitle').text("Add Grade");
    
    $('#Grade').val('');
    $('#Gradecode').val('');
    $('#gradeid').val('');

}