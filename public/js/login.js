$(document).ready(function() {
    if(session('loginSuccess'))
        $('#successModal').show();
    endif

    if(session('loginError'))
        $('#errorModal').show();
    endif
});