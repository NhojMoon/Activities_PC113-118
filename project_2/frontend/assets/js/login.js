const loginFormElement = document.getElementById('loginFormElement');

        loginFormElement.addEventListener('submit', function(event){
            event.preventDefault();

            fetch('http://localhost/pc113/project_2/backend/routes/login.php', {
                method: 'POST',
                body: new FormData(loginFormElement),
            })
            .then(res => res.json())
            .then(data => {
                console.log(data);
                alert(data.message);
                if(data.message === 'login has been successfully') 
                {
                    window.location.href = 'dashboard.php';
                }
            })
            .catch(error => console.error('error', error));
        });