const form = document.getElementById('form');
const firstname = document.getElementById('firstname');
const middlename = document.getElementById('middlename');
const lastname = document.getElementById('lastname');
const username = document.getElementById('username');
const password = document.getElementById('password');
const email = document.getElementById('email');
const mobile = document.getElementById('mobile');
const social = document.getElementById('social');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});


const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const firstnameValue = firstname.value.trim();
    const middlenameValue = middlename.value.trim();
    const lastnameValue = lastname.value.trim();
    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();
    const emailValue = email.value.trim();
    const mobileValue = mobile.value.trim();
    const socialValue = social.value.trim();

    if(firstnameValue === '') {
        setError(firstname, 'Firstname is required');
    } else {
        setSuccess(firstname);
    }
    
    if(middlenameValue === '') {
        setError(middlename, 'Middlenamae is required');
    } else {
        setSuccess(middlename);

    }    
    if(lastnameValue === '') {
            setError(lastname, 'Lastname is required');
        } else {
            setSuccess(lastname);
    }
    if(usernameValue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }
    
    if(emailValue === '') {
    setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
    setError(email, 'Provide a valid email address');
    } else {
    setSuccess(email);
    }
    
    if(mobileValue === '') {
        setError(mobile, 'Mobile is required');
    } else {
        setSuccess(mobile);
    }

    if(socialValue === '') {
        setError(social, 'Add social Media Account');
    } else {
        setSuccess(social);
    }

}

    