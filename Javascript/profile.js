//regular expression learnt from 
//https://www.javascripttutorial.net/javascript-regular-expression/#:~:text=JavaScript%20Regular%20Expression%201%20Introduction%20to%20regular%20expressions,5%20Searching%20strings.%20...%206%20Replacing%20strings.%20
//regular expression to test if user's email address is valid

//variable to retrieve the email input from the form
var checkEmail = document.querySelector("#email");
//creating a regular expression
var ce = /@/;
//testing if user's email address contains the regular expression
var reem = ce.test(checkEmail);

//writing the result to the console
console.log(reem);
//conditional to send message to the user
//if email is incorrect, an alert is sent to the user
if(reem == false) {
    alert("Please enter a valid email address!");

}

//selecting the age field from  the DOM
var checkAge = document.querySelector("body > form > input[type=number]:nth-child(6)");
//writing an error to the console if the user inputs an age below 18
if(checkAge < 18) {
    console.log("Try again!");
}

//code taken from
//https://www.javatpoint.com/how-to-toggle-password-visibility-in-javascript
//which was adapted, in order to toggle the password for the user
function togglePass() {
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
