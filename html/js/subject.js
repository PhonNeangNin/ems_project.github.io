function fn_update(ele){
    console.log(ele);
    
    let name = $(ele).data('name');
    let code = $(ele).data('code');
    let grade = $(ele).data('grade');
    let id = $(ele).data('id');
    

    console.log(name + " || " + code + " || " + grade +" || " + id);

    $('#updatesubject').css('display', 'block');

    // $('#nameWithTitle').val();
    // $('#emailWithTitle').val(status);
    $('#subjectname').val(name);
    $('#subjectcode').val(code);
    $('#subjectgrade').val(grade);
    $('#subjectid').val(id);

    $('#modalCenterTitle').text("Update Subject");
}
function update(){
    $('#updatesubject').css('display', 'none');
    $('#modalCenterTitle').text("Add Grade");
    
    $('#subjectname').val('');
    $('#subjectcode').val('');
    $('#subjectgrade').val('');
    $('#subjectid').val('');

}