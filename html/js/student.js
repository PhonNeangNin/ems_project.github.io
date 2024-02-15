function fn_update(ele){
    console.log(ele);
    
    let username = $(ele).data('username');
    let fname = $(ele).data('fname');
    let lname = $(ele).data('lname');
    let address = $(ele).data('address');
    let gender = $(ele).data('gender');
    let password = $(ele).data('password');
    let emailaddress = $(ele).data('emailaddress');
    let date_of_birth = $(ele).data('date_of_birth');
    let id = $(ele).data('id');
    

    console.log(username + " || " + fname + " || " + lname +" || " + " || " 
    + address + " || " + gender + " ||" + emailaddress + " ||" + date_of_birth + "||" + password + "||"+ id);

    $('#updatestudent').css('display', 'block');

    $('#username').val(username);
    $('#firstname').val(fname);
    $('#lastname').val(lname);
    $('#address').val(address);
    $('#gender').val(gender);
    $('#gender').val(gender1);
    $('#password').val(password);
    $('#emailaddress').val(emailaddress);
    $('#date_of_birth').val(date_of_birth);
    $('#studentid').val(id);

    $('#modalCenterTitle').text("Update Student");
}
function update(){
    $('#updatestudent').css('display', 'none');
    $('#modalCenterTitle').text("Add Student");
    
    $('#username').val('');
    $('#firstname').val('');
    $('#lastname').val('');
    $('#address').val('');
    $('#gender').val('');
    $('#password').val('');
    $('#emailaddress').val('');
    $('#date_of_birth').val('');
    $('#studentid').val('');

}