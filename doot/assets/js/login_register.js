
// password hide or show //
var input_pass = document.getElementById("userpassword");
var eye_icon = document.getElementById("eye_icon");
var eye_btn = document.getElementById("password-addon");
var addon_input = 1;

eye_btn.addEventListener("click", () => {
    if (addon_input == 1) {
        input_pass.type = "text";
        eye_icon.classList.remove("bi-eye-fill");
        eye_icon.classList.add("bi-eye-slash-fill");
        addon_input = 0;
    } else {
        input_pass.type = "password";
        eye_icon.classList.remove("bi-eye-slash-fill");
        eye_icon.classList.add("bi-eye-fill");
        addon_input = 1;
    }
})



// register page js 


if (window.location.href.includes("register/register")) {


    let check_term = document.getElementById("remember-check")
    let check_name = document.getElementById("fullname");
    let check_mail = document.getElementById("email")
    let check_mobile = document.getElementById("mobile")
    let check_password = document.getElementById("userpassword")
    let log = document.getElementById("register")
    var register_name = "";
    var register_mail = "";
    var register_mobile = "";
    var register_password = "";


    // function for rigistrtion valdation //


    function name_check(input_slector, second_condition) {
        if (input_slector.value == "" || second_condition) {
            input_slector.classList.add("error")
            if (input_slector.value == "") {
                input_slector.parentElement.lastElementChild.innerHTML = "can't be empyt";
            } else if (second_condition) {
                input_slector.parentElement.lastElementChild.innerHTML = "Enter a valid name";
            }
            input_slector.nextElementSibling.style.opacity = "1";
        }
    }

    function mobile_check(input_slector, second_condition) {
        if (input_slector.value == "" || second_condition || input_slector.value.length != 10) {
            input_slector.classList.add("error")
            if (input_slector.value == "") {
                input_slector.parentElement.lastElementChild.innerHTML = "can't be empyt";
            } else if (second_condition || input_slector.value.length != 10) {
                input_slector.parentElement.lastElementChild.innerHTML = "Enter a valid mobile number";
            }
            input_slector.nextElementSibling.style.opacity = "1";
        }
    }
    function email_check(input_slector, second_condition) {
        if (input_slector.value == "" || second_condition) {
            input_slector.classList.add("error")
            if (input_slector.value == "") {
                input_slector.parentElement.lastElementChild.innerHTML = "can't be empyt";
            } else if (second_condition) {
                input_slector.parentElement.lastElementChild.innerHTML = "enter a valid email";
            }
            input_slector.nextElementSibling.style.opacity = "1";
        }
    }
    function password_check(input_slector, second_condition) {
        if (input_slector.value == "" || second_condition) {
            input_slector.classList.add("error")
            if (input_slector.value == "") {
                input_slector.parentElement.lastElementChild.innerHTML = "can't be empyt";
                input_slector.parentElement.lastElementChild.style.textAlign = "end"
            } else if (second_condition) {
                input_slector.parentElement.lastElementChild.innerHTML = "password must have atleast one speial charecter, one uppercase(A-Z), one lowercase , one digit(0-9), 8 or more charechers";
                input_slector.parentElement.lastElementChild.style.textAlign = ""
            }
            input_slector.nextElementSibling.style.opacity = "1";

        }
    }


    log.addEventListener("click", (e) => {

        e.preventDefault()
        if (check_name.value == "" || check_mobile.value == "" || check_mail.value == "" || check_password.value == "" || /[^a-zA-Z\ \/]/.test(check_name.value) || !(/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/).test(check_mail.value) || /[^0-9]/.test(check_mobile.value) || check_mobile.value.length != 10 || !(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/).test(check_password.value) || !check_term.checked) {

            name_check(check_name, /[^a-zA-Z\ \/]/.test(check_name.value));
            email_check(check_mail, !/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(check_mail.value));
            mobile_check(check_mobile, /[^0-9]/.test(check_mobile.value));
            password_check(check_password, !/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/.test(check_password.value));

            if (!check_term.checked) {
                check_term.style.borderColor = "red"
                check_term.nextElementSibling.children[0].style.color = "red"
            }
        } else {
            register_name = check_name.value;
            register_mail = check_mail.value;
            register_mobile = check_mobile.value;
            register_password = check_password.value;

            $.ajax({
                url: "/doot/register_login.php",
                type: "POST",
                data: {
                    work: "register",
                    full_name: register_name,
                    mail: register_mail,
                    mobile: register_mobile,
                    password: register_password
                },
                success: function (ps) {
                    console.log(ps);
                    
                    if (ps == "false") {
                        Swal.fire({
                            icon: "warning",
                            title: "Oops...",
                            text: "Account Already exists!",
                            footer: 'Already have an account ? <a href="login.php" class="fw-mediam">Log in</a>'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.getElementById("register_form").reset();
                            }
                        });
                    }else if (ps=="true") {
                            window.open("/doot/index.php", "_self");
                         
                    }
                }

            })


        }
    })

    check_term.addEventListener("change", () => {
        check_term.nextElementSibling.firstElementChild.style.color = ""
        check_term.style.borderColor = ""
        erroer_count = 0;

    })
    function change_err(selector) {
        selector.addEventListener("keyup", () => {
            selector.classList.remove("error")
            selector.parentElement.lastElementChild.innerHTML = "";
            selector.nextElementSibling.style.opacity = "";
        })

    }
    change_err(check_name);
    change_err(check_mail);
    change_err(check_mobile);
    change_err(check_password);

}

// register page js end
// login page start?

if (window.location.href.includes("login")) {

    let login_data = document.getElementById("emailormobile");
    let login_password = document.getElementById("userpassword");
    let login_remember = document.getElementById('remember-check')
    let login_btn = document.getElementById('log-in');

    var login_password_value = "";
    var login_data_value = "";
    var login_data_type = "";
    var log_in_first_con = false;
    var log_in_second_con = false;


    login_btn.addEventListener("click", (e) => {
        e.preventDefault()

        if (login_data.value == "" || login_password.value == "" || !(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/.test(login_password.value)) || !login_remember.checked) {

            if (login_password.value == "") {
                login_password.classList.add("error")
                login_password.parentElement.lastElementChild.innerHTML = "can't be empty";
            } else if (!/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/.test(login_password.value)) {
                login_password.classList.add("error")
                login_password.parentElement.lastElementChild.innerHTML = "Enter a valid Password";
            }
            if (login_data.value == "") {
                login_data.classList.add("error")
                login_data.nextElementSibling.innerHTML = "Can't be empty";
            }
            if (!login_remember.checked) {
                login_remember.style.borderColor = "red"
                login_remember.nextElementSibling.style.color = "red"
            }
        } else {
            log_in_first_con = true;
            login_password_value = login_password.value;


        }

        if (login_data.value != "") {
            if (/[^0-9]/.test(login_data.value)) {
                if ((/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(login_data.value))) {
                    login_data_type = "email";
                    login_data_value = login_data.value;
                    log_in_second_con = true;
                } else {
                    login_data.classList.add("error")
                    login_data.nextElementSibling.innerHTML = "enter a valid Email or mobile";
                }
            } else {
                if (login_data.value.length == 10) {
                    login_data_type = "mobile";
                    login_data_value = login_data.value;
                    log_in_second_con = true;
                } else {
                    login_data.classList.add("error")
                    login_data.nextElementSibling.innerHTML = "enter a valid Email or mobile";
                }

            }
        };
        if (log_in_first_con && log_in_second_con && login_remember.checked) {

            $.ajax({
                url: "/doot/register_login.php",
                type: "POST",
                data: {
                    work: "login",
                    login_type: login_data_type,
                    login_data: login_data_value,
                    login_pass: login_password_value
                },
                success: function (ps) {
                    if (ps == "false") {
                        Swal.fire({
                            icon: "warning",
                            title: "Oops...",
                            text: "Don't have an account ?",
                            footer: "Create new doot account? <a href='register.php' class='fw-mediam'>Register</a>"
                        }).then((result) => {
                            if (result.isConfirmed) {
                               window.open('/doot/register/register.php',"_self")
                            // console.log(12454)
                            }
                        });
                    } else if (ps == "pass_incorrect") {
                        login_password.classList.add("error")
                        login_password.parentElement.lastElementChild.innerHTML = "incorrect Password";
                    } else if (ps == "true") {
                        window.open("/doot/index.php", "_self");
                    }
                    
                    
                }

            })


        }




    })


    login_remember.addEventListener('change', () => {
        login_remember.style.borderColor = ""
        login_remember.nextElementSibling.style.color = ""
    })
    login_data.addEventListener('keyup', () => {
        login_data.classList.remove("error");
        login_data.nextElementSibling.innerHTML = "";
    })
    login_password.addEventListener('keyup', () => {
        login_password.classList.remove("error");
        login_password.parentElement.lastElementChild.innerHTML = "";
    })



}




