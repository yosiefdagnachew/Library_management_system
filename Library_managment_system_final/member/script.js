function reg_validate(){
    var name = document.register_form.m_name.value;
    var email = document.register_form.m_email.value;
    var username = document.register_form.m_user.value;
    var password = document.register_form.m_pass.value;
    var atposition = email.indexOf("@");
    var dotposition = email.lastIndexOf(".");

if(name == null || name == ""){
    alert("name cannot be empity !!!");
    return false;
}


else if(atposition < 1  || dotposition < atposition + 2 || dotposition + 2 >= email.length){
    alert("PLEASE ENTER A VALID EMAIL ADDRESS !!! \n atposition:"+ atposition +"\n dotposition:" +dotposition);
    return false;
}
else if(username == null ||  username == ""){
    alert("USER NAME can never be blank !!!");
return false;
}
else if(password.length<8){
    alert("the password length must be at least 8 characters !!!");
    return false;
}
}