document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll('.button-planejamento, .button-feriados');
    
    buttons.forEach(button => {
        button.style.cursor = 'pointer';
    });
});