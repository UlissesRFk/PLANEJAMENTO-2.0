window.onclick = function(event) {
    const errorModal = document.getElementById('errorModal');
    const successModal = document.getElementById('successModal');
    if (event.target == errorModal) {
        errorModal.style.display = 'none';
    }
    if (event.target == successModal) {
        successModal.style.display = 'none';
    }}