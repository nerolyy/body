function togglePassword(id) {
            var passwordField = document.getElementById(id);
            var icon = passwordField.nextElementSibling;
            var type = passwordField.type === "password" ? "text" : "password";
            passwordField.type = type;
            icon.classList.toggle('fa-eye-slash');
            icon.classList.toggle('fa-eye');
        }