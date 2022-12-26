jQuery(document).ready(function () {
    jQuery('#username').on('input', function () {
        checkuser();
    });
    jQuery('#lastName').on('input', function () {
        checklastName();
    });

    jQuery('#email').on('input', function () {
        checkemail();
    });

    jQuery('#submitbtn').click(function () {


        if (!checkuser() && !checklastName() &&!checkemail()) {
            console.log("er1");
            jQuery("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
        } else if (!checkuser() || !checklastName() || !checkemail() ) {
            jQuery("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
            console.log("er");
        }
        else {
            console.log("ok");
            console.log($("#username").val());
            console.log($("#userEmail").val());
            console.log($("#lastName").val());
            console.log($("#post_id").val());
            jQuery("#message").html("");
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
                    jQuery('#submitbtn').html('<i class="fa-solid fa-spinner fa-spin"></i>');
                    jQuery('#submitbtn').attr("disabled", true);
                    jQuery('#submitbtn').css({ "border-radius": "50%" });
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
                    jQuery('#message').html(data);
                },
                complete: function () {
                    setTimeout(function () {
                        jQuery('#myform').trigger("reset");
                        jQuery('#submitbtn').html('Submit');
                        jQuery('#submitbtn').attr("disabled", false);
                        jQuery('#submitbtn').css({ "border-radius": "4px" });
                        document.getElementById('download').click();
                        document.getElementById('download_reload').click();
                        document.getElementById('download_form').disabled=true;
                        jQuery.magnificPopup.close();
                        jQuery("#download_form").disabled = true;
                        console.log(jQuery("#download_form").disabled = true);
                        location.reload(true);
                    }, 1400);
                }
            });

        }
    });
});

function checklastName() {
    var pattern = /^[A-Za-z]+$/;
    var lastName = jQuery('#lastName').val();
    var validlastName = pattern.test(lastName);
    if (jQuery('#lastName').val().length < 1) {
        jQuery('#lastName_err').html('This field is required');
        return false;
    } else if (!validlastName) {
        jQuery('#lastName_err').html('Last name should be a-z ,A-Z only');
        return false;
    } else {
        jQuery('#lastName_err').html('');
        return true;
    }
}
function checkuser() {
    var pattern = /^[A-Za-z]+$/;
    var user = jQuery('#username').val();
    var validuser = pattern.test(user);
    if (jQuery('#username').val().length < 4) {
        jQuery('#username_err').html('This field is required');
        return false;
    } else if (!validuser) {
        jQuery('#username_err').html('First name should be a-z ,A-Z only');
        return false;
    } else {
        jQuery('#username_err').html('');
        return true;
    }
}


function checkemail() {

    var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = jQuery('#userEmail').val();
    var validemail = pattern1.test(email);
    if (email == "") {
        jQuery('#userEmail_err').html('This field is required');
        return false;
    } else if (!validemail) {
        jQuery('#userEmail_err').html('invalid email');
        return false;
     }
    else {
        jQuery('#userEmail_err').html('');
        return true;
    }
}
