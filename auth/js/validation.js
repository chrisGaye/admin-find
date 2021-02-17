const password = document.querySelector('#password');
const username = document.querySelector('#username');
const submit = document.querySelector('#submit');
const errorAlert = document.querySelector('#error-alert');
const state = {
    loading: false,
    loaded: false,
    error: false,
};

submit.addEventListener('click', (event) => {
    event.preventDefault();
    state.loading = true;
    if (password.value && username.value) {
        console.log('password ', password.value);
        console.log('username ', username.value);
    }
    else {
        alert('login ou mot de passe incorrect');
    }
});