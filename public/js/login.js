document.addEventListener("DOMContentLoaded", function() {
    if (window.hasErrors) {
        var errorMessage = window.errorMessage;
        document.getElementById('errorMessage').innerText = errorMessage;
        document.getElementById('errorModal').style.display = 'block';
    }

    document.querySelector('.close').addEventListener('click', function() {
        document.getElementById('errorModal').style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == document.getElementById('errorModal')) {
            document.getElementById('errorModal').style.display = 'none';
        }
    });
});
