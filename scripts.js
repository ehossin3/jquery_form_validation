$(document).ready(function(){

    //password field value show and hide ===============================================>
    let pass            = $("#password");
    let confrmPass      = $("#confirm_pass");
    let eyeBtn          = $("#eye-btn");
    let confrmEyeBtn    = $("#confrm-eye-btn");
        //eye btns curosr pointer==========
        eyeBtn.css('cursor', 'pointer');
        confrmEyeBtn.css('cursor', 'pointer');

    eyeBtn.on('click', function(){

        if(pass.attr('type') === 'password'){
            $(this).removeClass('fa-eye-slash').addClass('fa-eye');
            pass.attr('type','text');
        }
        else {
            pass.attr('type', 'password');
            $(this).removeClass('fa-eye').addClass('fa-eye-slash');
        }

    });

    //password field value show and hide ===============================================>

    confrmEyeBtn.on('click', function(){
        if(confrmPass.attr('type') === 'password'){
            $(this).removeClass('fa-eye-slash').addClass('fa-eye');
            confrmPass.attr('type', 'text');
        }
        else{
            $(this).removeClass('fa-eye').addClass('fa-eye-slash');
            confrmPass.attr('type', 'password');
        }
    })



    // form validation =================================================================>

    $(document).on('submit', '#singup_form', function(){
        let isValid = true;

        //check username input=====================>
        let userName    = $("#username").val().trim();
        let userError   = $("#nameError");

        if(userName === ""){
            userError.html('Username is required');
            isValid = false;
        }
        else {
            userError.text('');
        }

        //check email input=====================>
        let userEmail   = $("#user_email").val().trim();
        let emailError  = $("#emailError");

        if(userEmail === ""){
            emailError.html('Email is required');
            isValid = false;
        }
        else {
            emailError.text('');
        }


        //check phone no input=====================>
        let userPhone   = $("#phone").val().trim();
        var phoneRegex  = /^(?:\+?88)?01[3-9]\d{8}$/;
        let phoneError  = $("#phoneError");

        if(userPhone ===''){
            phoneError.html('Phone no is required');
            isValid = false;

        } 
        else if(!phoneRegex.test(userPhone)){
            phoneError.html('Invalid Phone no');
            isValid = false;
        }
        else{
            phoneError.html('');
        }


        //check password and confirm password input=====================>

        let passW           = $("#password").val().trim();
        let passRegex       = /^(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?])(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
        let confrmPassW     = $("#confirm_pass").val().trim();
        let passError       = $("#passError");
        let confrmPassError = $("#confrmPassError");
        let passSymbolError = $("#passSymbolError");

        if(passW === ''){
            passError.html('Password is required');
            isValid = false;
        }
        else{
            passError.html('');
        }
        // Check for symbol in password
        if (!passRegex.test(passW)) {
            passSymbolError.html('Password must include at least one symbol, one lowercase letter, one uppercase letter, and be at least 6 characters long');
            isValid = false;
        } else {
            passSymbolError.html('');
        }
        if(confrmPassW === ''){
            confrmPassError.html('Confirm Password is required');
            isValid = false;
        }
        else if(confrmPassW !== passW){
            confrmPassError.html('Passwords do not match');
            isValid = false;
        } 
        else {
            confrmPassError.html('');
        }


        // Prevent form submission if validation fails=======================================>
        if(!isValid){
            event.preventDefault();
        }

        if(isValid){
            var formValidData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "signup_action.php",
                data: formValidData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response);
                },
                error: function(xhr, status, error) {
                    alert(xhr.responseText); // Access error message
                }
            }); 
        }

   
    });
    
});