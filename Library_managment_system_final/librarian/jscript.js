function validate(){
var isbn = document.isbn_insert.b_isbn.value

if (isbn.length<10){
    alert("INTERNATIONAL  STANDARD  OF  BOOK  NUMBER can not be less than 10 characters");
    return false;
}

}