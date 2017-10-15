import styles from './../css/main.css';

document.addEventListener("DOMContentLoaded", function (event) {
    let form = document.querySelector('form');

    if (form && form.length) {

        form.addEventListener('submit', function (e) {
            let formData = new FormData(form);
            let result = {};
            let xhr = new XMLHttpRequest();
            let message = document.querySelector('.md p');

            e.preventDefault();

            if (formData.get('_gotcha') && formData.get('_gotcha').length) {
                return;
            }
            formData.delete('_gotcha');
            if (formData.get('email')) {
                formData.append('_replyto', formData.get('email'));
            }
            for (let entry of formData.entries())
            {
                result[entry[0]] = entry[1];
            }
            xhr.open(form.method, form.action, true);
            xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            xhr.onreadystatechange = function () {
                if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    form.reset();
                    message.innerText = "Thanks for the message, I'll be in touch soon.";
                    message.classList.add('green');
                } else {
                    message.innerText = "Something went wrong.";
                    message.classList.add('red');
                }
            };
            xhr.send(JSON.stringify(result));
        });
    }
});
