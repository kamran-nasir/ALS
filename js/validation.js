$(document).ready(function () {
    $('#username').on('input', function () {
        checkuser();
    });
    $('#lastName').on('input', function () {
        checklastName();
    });

    $('#email').on('input', function () {
        checkemail();
    });

    $('#submitbtn').click(function () {


        if (!checkuser() && !checklastName() &&!checkemail()) {
            console.log("er1");
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
        } else if (!checkuser() || !checklastName() || !checkemail() ) {
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
            console.log("er");
        }
        else {
            console.log("ok");
            console.log($("#username").val());
            console.log($("#userEmail").val());
            console.log($("#lastName").val());
            console.log($("#post_id").val());
            $("#message").html("");
            var form = $('#myform')[0];
            var data = new FormData(form);
            jQuery.ajax({
                type: "POST",
                url: "https://lightaluminum.com/wp-content/themes/ALS/process.php",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                beforeSend: function () {
                    $('#submitbtn').html('<i class="fa-solid fa-spinner fa-spin"></i>');
                    $('#submitbtn').attr("disabled", true);
                    $('#submitbtn').css({ "border-radius": "50%" });
                },
                // url: "/wp-admin/admin-ajax.php",
                // data:{
                //     'userName': $("#username").val(),
                //     'userEmail': $("#userEmail").val(),
                //     'lastName': $("#lastName").val(),
                //     'post_id': $("#post_id").val(),
                //     'action': 'sayhello2',
                // },
                // type: "POST",
                success: function (data) {
                    $('#message').html(data);
                },
                complete: function () {
                    setTimeout(function () {
                        $('#myform').trigger("reset");
                        $('#submitbtn').html('Submit');
                        $('#submitbtn').attr("disabled", false);
                        $('#submitbtn').css({ "border-radius": "4px" });
                        document.getElementById('download').click();
                        document.getElementById('download_reload').click();
                        document.getElementById('download_form').disabled=true;
                        jQuery.magnificPopup.close();
                        jQuery("#download_form").disabled = true;
                        console.log(jQuery("#download_form").disabled = true);
                        location.reload(true);
                    }, 400);
                }
            });

        }
    });
});

function checklastName() {
    var pattern = /^[A-Za-z]+$/;
    var lastName = $('#lastName').val();
    var validlastName = pattern.test(lastName);
    if ($('#lastName').val().length < 1) {
        $('#lastName_err').html('This field is required.');
        return false;
    } else if (!validlastName) {
        $('#lastName_err').html('Last name should be a-z ,A-Z only');
        return false;
    } else {
        $('#lastName_err').html('');
        return true;
    }
}
function checkuser() {
    var pattern = /^[A-Za-z]+$/;
    var user = $('#username').val();
    var validuser = pattern.test(user);
    if ($('#username').val().length < 4) {
        $('#username_err').html('This field is required.');
        return false;
    } else if (!validuser) {
        $('#username_err').html('First name should be a-z ,A-Z only');
        return false;
    } else {
        $('#username_err').html('');
        return true;
    }
}


function checkemail() {

    var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $('#userEmail').val();
    var validemail = pattern1.test(email);
    if (email == "") {
        $('#userEmail_err').html('required field');
        $('#userEmail_err').html('This field is required.');
        return false;
    } else if (!validemail) {
        $('#userEmail_err').html('invalid email');
        return false;
     }
    else {
        $('#userEmail_err').html('');
        return true;
    }
}
