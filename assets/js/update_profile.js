$(document).ready(function() {

    $('#submit-update').click(function() {

        //get value from input field
        let username = $('input[name="users_name"]').val();
        let lastname = $('input[name="users_lastname"]').val();
        let email = $('input[name="users_mail"]').val();
        let phone = $('input[name="users_phone"]').val();
        let add = $('input[name="users_add"]').val();
        let code = $('input[name="users_code"]').val();


        $.ajax({
            url: 'update_profile.php',
            method: 'POST',
            data: {
                users_name: username,
                users_lastname: lastname,
                users_mail: email,
                users_phone: phone,
                users_add: add,
                users_code: code
            },
            success: function(response) {
                Swal.fire({
                    title: "แก้ไขข้อมูลสำเร็จ",
                    text: "ข้อมูลของคุณได้รับการแก้ไขแล้ว",
                    icon: "success"
                }).then(function() {
                    location.reload();
                });
            }
        });
        


    });

});