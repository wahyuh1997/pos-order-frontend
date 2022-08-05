(function ($) {
    "use strict";

    // let input = document.getElementById('search_company');
    // input.addEventListener("keyup", function (e) {
    //     if (e.keyCode === 13) {
    //         e.preventDefault();
    //         document.getElementById('btn-search').click()
    //     }
    // });    

    /* Function For get login permission */
    $('#toggle-perm').on('change', function () {
        if ($(this).is(':checked')) {
            document.getElementById('login_perm').value = 1
        } else {
            document.getElementById('login_perm').value = 2
        }
    });

    $(document).on('click', '.btn-company', function () {
        $('.first-section').fadeOut("slow");
        $('.first-section').css('display', 'none');
        $('.second-section').fadeIn("slow");
    });

    $(document).on('click', '.btn-back', function () {
        $('.second-section').animate({
            left: '250px'
        });
        $('.second-section').css('display', 'none');
        $('.first-section').fadeIn("slow");
    });
    /* End Main Function */

    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function () {
        $(this).on('blur', function () {
            if ($(this).val().trim() != "") {
                $(this).addClass('has-val');
            } else {
                $(this).removeClass('has-val');
            }
        })
    })

    var showPass = 0;
    $(document).on('click', '.btn-show-pass', function () {
        if (showPass == 0) {
            $(this).next('input').attr('type', 'text');
            $(this).find('i').removeClass('zmdi-eye');
            $(this).find('i').addClass('zmdi-eye-off');
            showPass = 1;
        } else {
            $(this).next('input').attr('type', 'password');
            $(this).find('i').addClass('zmdi-eye');
            $(this).find('i').removeClass('zmdi-eye-off');
            showPass = 0;
        }
    });

    const flashdata = $('.flashdata').data('flashdata');
    if (flashdata) {
        $.notify({
            /* Options */
            icon: "fas fa-sign-out-alt",
            title: flashdata,
            message: 'Thank You!',
        }, {
            /* Settings */
            type: 'danger',
            time: 1000,
            delay: 2000,
            animate: {
                enter: 'animate__animated animate__fadeInDown',
                exit: 'animate__animated animate__fadeOutRight'
            }
        });
    }

    const alert = $('.alert').data('alert');
    if (alert) {
        Swal.fire({
            icon: 'error',
            title: alert
        })
    }


})(jQuery);