RegisterFormUserEmailOk=false;
RegisterFormUserPasswordOk=false;

function registerFormCheckUsername(){
    document.getElementById("registerFormUsername").className = "registerFormField registerFormFieldLoading input w100 mt10";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "tools/checkUsername.php?username="+document.getElementById("registerFormUsername").value, true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState == xhr.DONE) {
            if(xhr.responseText=="1"){
                document.getElementById("registerFormUsername").className = "registerFormField registerFormFieldOk input w100 mt10";
                RegisterFormUserNameOk=true;
                if(RegisterFormUserEmailOk&&RegisterFormUserPasswordOk){
                    document.getElementById("registerFormSubmitButton").disabled=false;
                }
            }else{
                document.getElementById("registerFormUsername").className = "registerFormField registerFormFieldKo input w100 mt10";
                RegisterFormUserNameOk=false;
            }
        }
    };
    xhr.send(null);
}
function registerFormCheckConfirmPassword() {
    registerFormPasswordConfirm = document.getElementById("registerFormPasswordConfirm");
    registerFormPassword = document.getElementById("registerFormPassword");

    if(registerFormPasswordConfirm.value==registerFormPassword.value){
        registerFormPasswordConfirm.className = "registerFormField registerFormFieldOk input w100 mt10";
        registerFormPassword.className = "registerFormField registerFormFieldOk input w100 mt10";
        RegisterFormUserPasswordOk = true;
        if(RegisterFormUserEmailOk&&RegisterFormUserNameOk){
            document.getElementById("registerFormSubmitButton").disabled=false;
        }
    }else{
        registerFormPasswordConfirm.className = "registerFormField registerFormFieldKo input w100 mt10";
        registerFormPassword.className = "registerFormField registerFormFieldKo input w100 mt10";
        RegisterFormUserPasswordOk = false;
        document.getElementById("registerFormSubmitButton").disabled=true;
    }
}
function registerFormCheckConfirmEmail() {
    registerFormEmailConfirm = document.getElementById("registerFormEmailConfirm");
    registerFormEmail = document.getElementById("registerFormEmail");

    if (registerFormEmail.value == registerFormEmailConfirm.value) {
        registerFormEmailConfirm.className = "registerFormField registerFormFieldOk input w100 mt10";
        registerFormEmail.className = "registerFormField registerFormFieldOk input w100 mt10";
        RegisterFormUserEmailOk = true;
        if (RegisterFormUserPasswordOk && RegisterFormUserNameOk) {
            document.getElementById("registerFormSubmitButton").disabled = false;
        }
    } else {
        registerFormEmailConfirm.className = "registerFormField registerFormFieldKo input w100 mt10";
        registerFormEmail.className = "registerFormField registerFormFieldKo input w100 mt10";
        RegisterFormUserEmailOk = false;
        document.getElementById("registerFormSubmitButton").disabled = true;
    }
}