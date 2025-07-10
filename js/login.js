document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('loginForm');

  form.addEventListener('submit', function (event) {
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();

    if (!email.includes('@')) {
      alert('Por favor, insira um email válido.');
      event.preventDefault();
    } else if (password.length < 6) {
      alert('A senha deve ter pelo menos 6 caracteres.');
      event.preventDefault();
    }
  });
});
