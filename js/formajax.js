function myFunction_r() {
var name = document.getElementById("name").value;
var email = document.getElementById("email_r").value;
var password = document.getElementById("password_r").value;

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name=' + name + '&email_r=' + email + '&password_r=' + password ;
if (name == '' || email == '' || password == '' || contact == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "../php/q3.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}