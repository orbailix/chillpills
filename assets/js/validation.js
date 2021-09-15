function validate(){
    let usernameValue = $('.valid_mail').val();
    
    if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be empty!');
	}
    else if(usernameValue.lenght < 5){
        setErrorFor(username, 'username must be at least 6 char')
    }
    else {
		setSuccessFor(username);
	}
}

// to show erroe messages
function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

// when validation is true call this function
function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}