function validate_change_pwd() {
    var cur_pwd = document.getElementById('cur_pwd1');
    var cur_pwd_err = document.getElementById('cur_pwd_err');
    var pwd = document.getElementById('pwd1');
    var pwd_err = document.getElementById('pwd_err');
    var pwd1 = document.getElementById('repwd1');
    var repwd_err = document.getElementById('repwd_err');
    var a = validate_required(cur_pwd, cur_pwd_err);
    var b = validate_password(pwd, pwd_err);
    var c = validate_confirm_password(pwd1, repwd_err, pwd);
    if (a == true && b == true && c == true) {
        return true;
    }
    else {
        return false;
    }
}
function validate_csv() {

    var filename_err = document.getElementById('csv_err');
    var FileUploadPath = document.getElementById('csv1').value;
    // To check if user upload any file
    if (FileUploadPath == '') {
        filename_err.innerHTML = "Please upload a file";
        filename_err.style.color = "red";
        return false;
    }
    else {
        var Extension = FileUploadPath.substring(
            FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
        if (Extension == "csv") {
            return true;
        }
        else {
            filename_err.innerHTML = "Please upload a valid CSV File";
            filename_err.style.color = "red";
            return false;
        }
    }
}
function validate_change_password() {
    var pwd = document.getElementById('pwd');
    var pwd_err = document.getElementById('pwd_err');
    var pwd1 = document.getElementById('repwd1');
    var repwd_err = document.getElementById('repwd_err');
    var pwd1 = validate_password(pwd, pwd_err);
    var repwd1 = validate_confirm_password(pwd1, repwd_err, pwd);
    if (pwd == true && repwd1 == true) {
        return true;
    }
    else {
        return false;
    }
}
function validate_add_event() {
    // alert("hello");
    var et = document.getElementById('et1');
    var et_err = document.getElementById('et_err');
    var a = validate_required(et, et_err);
    var description = document.getElementById('description1');
    var description_err = document.getElementById('description_err');
    var b = validate_required(description, description_err);
    var ev_date = document.getElementById('ev_date1');
    var ev_date_err = document.getElementById('ev_date_err');
    var c = validate_required(ev_date, ev_date_err);
    var company = document.getElementById('company1');
    var company_err = document.getElementById('company_err');
    var d = validate_required(company, company_err);
    var city = document.getElementById('city1');
    var city_err = document.getElementById('city_err');
    var e = validate_required(city, city_err);
    var main_photo = document.getElementById('main_photo1');
    var main_photo_err = document.getElementById('main_photo_err');
    var f = validate_image(main_photo, main_photo_err);

    if (a == true && b == true && c == true && d == true && e == true && f == true)
        return true;
    else
        return false;
}
function go2Page(a) {
    var page = document.getElementById("page").value;
    page = ((page > a) ? a : ((page < 1) ? 1 : page));
    window.location = 'manage_events.php?page=' + page;
}
function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query

    var isset = false;

    //This loop evalaute all rows
    for (i = 0; i < tr.length; i++) {
        //Here we search for all columns in this row
        //note that we get rid of [0] at the end because we're looking for all
        //tds, not just the first one
        let tds = tr[i].getElementsByTagName("td");
        //Here we evaluate each column for this row
        for (let td of tds) {
            //If td has a value
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    //If the filter catch any result, we show the row
                    isset = true;
                }
            }
        }
        //The decision of show or hide the row is made here because
        //the loop has to evaluate all columns before decide if show or hide the entire row
        if (isset) {
            //If the filter catch any result, we show the row
            tr[i].style.display = "";
        } else {
            //If the filter catch no result, we hide the row
            tr[i].style.display = "none";
        }
        //This is to reset the variable for the next loop
        isset = false;
    }
}

function check_email(y) {
    var url = "check_email.php?emailid=" + y.value;

    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET", url, false);
    xmlhttp.send(null);

    // alert(xmlhttp.responseText);
    if (xmlhttp.responseText != "noerror") {
        alert("Email ID is Already registered Please Enter a new Email address");
        document.getElementById('em1').value = "";
        document.getElementById('em1').focus();
    }
}

function validate_login() {
    // alert("error");
    var em = document.getElementById('em1');
    var em_err = document.getElementById('em_err');
    // alert(em.value);
    var a = validate_required(em, em_err);
    var pwd = document.getElementById('pwd1');
    var pwd_err = document.getElementById('pwd_err');
    // alert(pwd.value);
    var b = validate_required(pwd, pwd_err);
    if (a == true && b == true)
        return true;
    else
        return false;
}
function validate_required(a, a_err) {
    if (a.value == "") {
        a.style.borderColor = "red";
        a_err.innerHTML = "This is a required field";
        a_err.style.color = "red";
        return false;
    }
    else {
        a.style.borderColor = "green";
        a_err.innerHTML = "";
        return true;
    }
}
function validate_forget_password() {
    f_pwd = document.getElementById('em1');
    f_pwd_err = document.getElementById('em_err');
    var a = validate_required(f_pwd, f_pwd_err);
    if (a == true)
        return true;
    else
        return false;
}
function validate_image(main_photo, main_photo_err) {
    alert("hello");

    var FileUploadPath = main_photo.value;
    alert(FileUploadPath);

    // To check if user upload any file
    if (FileUploadPath == '') {
        main_photo_err.innerHTML = "Please upload a file";
        main_photo_err.style.color = "red";
        return false;
    }
    else {
        img_size = main_photo.files[0].size;
        alert(img_size);
        if (img_size >= 4096000) {
            main_photo_err.innerHTML = "Please upload a file of size less than 200Kb";
            main_photo_err.style.color = "red";
            return false;
        }
        else {
            var Extension = FileUploadPath.substring(
                FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
            //The file uploaded is an image
            if (Extension == "png" || Extension == "jpeg" || Extension == "jpg") {
                return true;
            }
            //The file upload is NOT an image
            else {
                main_photo_err.innerHTML = "Please upload a valid image file of type JPG or PNG";
                main_photo_err.style.color = "red";
                return false;
            }
        }
    }

}
function validate_register() {
    //alert("error");
    var fn = document.getElementById('fn1');
    var fn_err = document.getElementById('fn_err');
    var email = document.getElementById('em1');
    var em_err = document.getElementById('em_err');
    var pwd = document.getElementById('pwd1');
    var pwd_err = document.getElementById('pwd_err');
    var pwd1 = document.getElementById('repwd1');
    var repwd_err = document.getElementById('repwd_err');
    var no = document.getElementById('mobile1');
    var no_err = document.getElementById('mobile_err');
    var fn1 = validate_fullname(fn, fn_err);
    var em = validate_email(email, em_err);
    var pwdv = validate_password(pwd, pwd_err);
    var repwd = validate_confirm_password(pwd1, repwd_err, pwd);
    var mobile = validate_mobile(no, no_err);
    if (fn1 == true && mobile == true && em == true && pwdv == true && repwd == true) {
        return true;
    }
    else {
        return false;
    }
}

function validate_email(email, em_err) {
    if (email.value == "") {
        em_err.innerHTML = "Email Address field cannot be empty";
        em_err.style.color = "red";
        email.style.borderColor = "red";
        return false;
    } else {
        var em = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
        var a = em.test(email.value);
        if (a == false) {
            email.focus();
            em_err.innerHTML = "Invalid Email address Please Enter Valid Email Address";
            em_err.style.color = "red";
            email.style.borderColor = "red";
            return false;
        } else {
            em_err.innerHTML = "";
            email.style.borderColor = "green";
            return true;
        }
    }
}

function validate_password(pwd, pwd_err) {
    if (pwd.value == "") {
        pwd_err.innerHTML = "Password field cannot be empty";
        pwd_err.style.color = "red";
        pwd.style.borderColor = "red";
        return false;
    } else {
        re = /[0-9]/;
        re1 = /[a-z]/;
        re2 = /[A-Z]/;
        re3 = /[!@#\$%\^\&*+=._-]/;
        var a1 = pwd.value.length < 6;
        var a2 = pwd.value.length > 15;
        var a3 = re.test(pwd.value);
        var a4 = re1.test(pwd.value);
        var a5 = re2.test(pwd.value);
        var a6 = re3.test(pwd.value);
        if (a1 == true || (a2 == true) || (a3 == false) || (a4 == false) || (a5 == false) || (a6 == false)) {
            pwd.focus();
            var msgpwd = "Password length must be 6 to 15 charachters and must contain one small and capital letter a digit and special character";
            pwd_err.innerHTML = msgpwd;
            pwd_err.style.color = "red";
            pwd.style.borderColor = "red";
            return false;
        } else {
            var msgpwd = "";
            pwd_err.innerHTML = msgpwd;
            pwd.style.borderColor = "green";
            return true;
        }
    }

}

function validate_confirm_password(pwd1, repwd_err, pwd) {

    if (pwd1.value == "") {
        repwd_err.innerHTML = "Confirm Password field cannot be empty";
        repwd_err.style.color = "red";
        pwd1.style.borderColor = "red";
        return false;
    } else {
        if (pwd1.value != pwd.value) {
            pwd1.focus();
            repwd_err.innerHTML = "Password and Confirm Password must be same";
            repwd_err.style.color = "red";
            pwd1.style.borderColor = "red";
            return false;
        } else {
            document.getElementById('passw1').innerHTML = "";
            document.getElementById('password1').style.borderColor = "green";
            return true;
        }
    }
}

function validate_fullname(fn, fn_err) {
    if (fn.value == "") {
        fn_err.innerHTML = "Full name field cannot be empty";
        fn_err.style.color = "red";
        fn.style.borderColor = "red";
        return false;
    }
    else {
        var fn123 = /^[a-zA-Z ]*$/;
        var e = fn123.test(fn.value);
        if (e == false) {
            fn.focus();
            fn_err.innerHTML = "Full name must contain only letters";
            fn_err.style.color = "red";
            fn.style.borderColor = "red";
            return false;
        }
        else {
            fn_err.innerHTML = "";
            fn.style.borderColor = "green";
            return true;
        }
    }
}

function validate_mobile(no, no_err) {
    if (no.value == "") {
        no_err.innerHTML = "Mobile  number cannot be empty";
        no_err.style.color = "red";
        no.style.borderColor = "red";
        return false;
    } else {
        var mn = /^[0-9]{10}$/;
        var b = mn.test(no.value);
        if (b == false) {
            no.focus();
            no_err.innerHTML = "Mobile number must contain only 10 digits";
            no_err.style.color = "red";
            no.style.borderColor = "red";
            return false;
        }
        else {
            no_err.innerHTML = "";
            no.style.borderColor = "green";
            return true;
        }
    }
}
