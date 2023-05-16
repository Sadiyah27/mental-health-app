//regular expression learnt from 
//https://www.javascripttutorial.net/javascript-regular-expression/#:~:text=JavaScript%20Regular%20Expression%201%20Introduction%20to%20regular%20expressions,5%20Searching%20strings.%20...%206%20Replacing%20strings.%20
//regular expression to test if user's email address is valid
//variable to retrieve the email input from the form
var checkEmail = document.querySelector("#email");
//creating a regular expression
var ce = /@/;
//testing if user's email address contains the regular expression
var result = ce.test(checkEmail);

//writing the result to the console
console.log(result);
//conditional to send message to the user
//if email is incorrect, an alert is sent to the user
if(result == false) {
    alert("Please recheck your email!");

}

//code taken from
//https://www.javatpoint.com/how-to-toggle-password-visibility-in-javascript
//which was adapted, in order to toggle the password for the user
function passToggle() {
    //retrieving the id password from the DOM
    var getPass = document.getElementById("password");
    //conditional to check if toggle is set to password
    if(getPass.type == "password") {
        //if it is, then user can click the box to see their password in text
        getPass.type = "text";
    }
    //otherwise text remains hidden
    else {
        getPass.type = "password";
    }
}
