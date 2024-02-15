$(document).ready(function(){
    
});

function fn_update(ele){
    console.log(ele);
    
    let section = $(ele).data('section');
    let id = $(ele).data('id');
    

    console.log(section + " || " + " || " + id);

    $('#updatesection').css('display', 'block');

    $('#section').val(section);
    $('#section_id').val(id);

    $('#modalCenterTitle').text("Update Section");
}
function update(){
    $('#updatesection').css('display', 'none');
    $('#modalCenterTitle').text("Add section");
    
    $('#section').val('');
    $('#section_id').val('');
}