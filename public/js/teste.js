document.addEventListener('DOMContentLoaded', function() {
    const openModalBtn = document.getElementById('openModalBtn');
    const selectTipo = document.getElementById('select');
    const modalProfessor = document.getElementById('modalProfessor');
    const modalAluno = document.getElementById('modalAluno');
    const closeButtons = document.querySelectorAll('.close');
    const pizzaForm = document.getElementById('pizza-form');
    const formTurma = document.getElementById('form-turma');
    const pessoaIdInput = document.getElementById('pessoa_id');

    openModalBtn.addEventListener('click', function(event) {
        // Impede o envio do formulário
        event.preventDefault();

        // Verifica se todos os campos estão preenchidos
        const nome = document.getElementById('nome').value.trim();
        const email = document.getElementById('email').value.trim();
        const senha = document.getElementById('senha').value.trim();

        if (nome === '' || email === '' || senha === '') {
            alert('Por favor, preencha todos os campos obrigatórios.');
            return;
        }

        // Envia o formulário via AJAX
        const formData = new FormData(pizzaForm);
        fetch(salvarCadastroUrl, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const selectedValue = selectTipo.value;
                if (selectedValue == '1') {
                    modalProfessor.style.display = 'block';
                } else if (selectedValue == '0') {
                    // Preenche o campo oculto com o ID da pessoa
                    pessoaIdInput.value = data.pessoa_id;
                    modalAluno.style.display = 'block';
                } else {
                    alert('Por favor, selecione um tipo válido.');
                }
            } else {
                alert('Erro ao cadastrar. Tente novamente.');
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            alert('Erro ao cadastrar. Tente novamente.');
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            modalProfessor.style.display = 'none';
            modalAluno.style.display = 'none';
        });
    });

    window.addEventListener('click', function(event) {
        if (event.target == modalProfessor) {
            modalProfessor.style.display = 'none';
        } else if (event.target == modalAluno) {
            modalAluno.style.display = 'none';
        }
    });
});
