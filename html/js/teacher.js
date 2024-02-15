function fn_update(ele){
    console.log(ele);
    
    let username = $(ele).data('username');
    let fname = $(ele).data('fname');
    let lname = $(ele).data('lname');
    let address = $(ele).data('address');
    let gender = $(ele).data('gender');
    let clas = $(ele).data('class');
    let subjects = $(ele).data('subjects');
    let phone_number = $(ele).data('phone_number');
    let password = $(ele).data('password');
    let emailaddress = $(ele).data('emailaddress');
    let date_of_birth = $(ele).data('date_of_birth');
    let id = $(ele).data('id');
    

    console.log(username + " || " + fname + " || " + lname +" || " + " || " 
    + address + " || " + gender + " ||" + emailaddress + " ||" + date_of_birth + "||" + password + "||" 
    + clas + "||" + subjects + "||"+ phone_number + "||" + id);

    $('#updateteachers').css('display', 'block');

    $('#username').val(username);
    $('#firstname').val(fname);
    $('#lastname').val(lname);
    $('#address').val(address);
    $('#gender').val(gender);
    $('#gender1').val(gender);
    $('#password').val(password);
    $('#class').val(clas);
    $('#subjects').val(subjects);
    $('#phone_number').val(phone_number);
    $('#emailaddress').val(emailaddress);
    $('#date_of_birth').val(date_of_birth);
    $('#teachers_id').val(id);

    $('#modalCenterTitle').text("Update Teachers");
}
function update(){
    $('#updateteachers').css('display', 'none');
    $('#modalCenterTitle').text("Add Teachers");
    
    $('#username').val('');
    $('#firstname').val('');
    $('#lastname').val('');
    $('#address').val('');
    $('#gender').val('');
    $('#password').val('');
    $('#class').val('');
    $('#subjects').val('');
    $('#phone_number').val('');
    $('#emailaddress').val('');
    $('#date_of_birth').val('');
    $('#teachers_id').val('');

}