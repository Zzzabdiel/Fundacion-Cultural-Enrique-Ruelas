
function encriptar() {
    document.getElementById('pass').value =
        sha256_digest(document.getElementById('pass').value);
}
function togglePasswordVisibility(inputId) {
    var input = document.getElementById(inputId);
    if (input.type === "password") {
        input.type = "text";
    } else {
        input.type = "password";
    }
}