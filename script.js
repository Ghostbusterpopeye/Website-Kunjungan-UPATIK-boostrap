// Contoh logika sederhana untuk sinkronisasi
const radioUser = document.getElementById('role-user');
const radioAdmin = document.getElementById('role-admin');
const formUser = document.getElementById('form-user');
const formAdmin = document.getElementById('form-admin');

function toggleForm() {
    if (radioAdmin.checked) {
        formUser.style.display = 'none';
        formAdmin.style.display = 'block';
    } else {
        formUser.style.display = 'block';
        formAdmin.style.display = 'none';
    }
}

radioUser.addEventListener('change', toggleForm);
radioAdmin.addEventListener('change', toggleForm);