 $(document).ready(function(){
        $('#sign-up').on('click', () => {
        var name = $('#name').val();
        name = $.trim(name);

        var surname = $('#surname').val();
        surname = $.trim(surname);

        var username = $('#username').val();
        username = $.trim(username);

        var password = $('#password').val();
        password = $.trim(password);


        if(name == '' || surname == '' || username == '' || password == '') {
            alert("All fields are required.");
        } 
        else if(password.length < 6) {
            alert("Password must be at least 6 characters long.");
        } 
        else {
            $.ajax({
                url : '../ajax/ajax_signup.php',
                method: 'post',
                data: {
                    name: name,
                    surname: surname,
                    username: username,
                    password: password
                },
                success: function($res){
                    $response = $.parseJSON($res) ; 

                    console.log($response);

                    if($response.error == true) {
                        alert($response.message);
                    } else { 
                        $('#name').val("");
                        $('#surname').val("");
                        $('#username').val("");
                        $('#password').val("");
                        alert($response.success);
                    }  
                }
            });
        }
    }); 
});