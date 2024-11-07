/*document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const documentType = document.getElementById('documentType').value;
    const documentNumber = document.getElementById('documentNumber').value;
    const password = document.getElementById('password').value;

    fetch('./BaseDeDatos/base.json')
        .then(response => response.json())
        .then(data => {
            const user = data.usuarios.find(user => user.documentType === documentType && user.documentNumber === documentNumber && user.password === password);
            if (user) {
                window.location.href = './Paginas/Materia.html';
            } else {
                alert('Datos incorrectos');
            }
        })
        .catch(error => console.error('Error:', error));
});
*/