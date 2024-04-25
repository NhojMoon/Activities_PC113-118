const button = document.getElementById('submit');

button.addEventListener("click", () => {
    let username = document.getElementById('username').value;
    let player_class = document.getElementById('player_class').value;
    let player_type = document.getElementById('player_type').value;
    let gender = document.getElementById('gender').value;
    let description = document.getElementById('description').value;
    
    const data = {
        username: username,
        player_class: player_class,
        player_type: player_type,
        gender: gender,
        description: description,
    };

    fetch('http://localhost/pc113/activity/db.php', {
        method: "POST",
        headers: {
            "Content-Type": "application/json; charset=UTF-8",
        },
        body: JSON.stringify(data),
    })
    .then((res) => res.json())
    .then(response => {
        console.log(response);
        fetchAndDisplay();
    });

});

    function fetchAndDisplay() {
        fetch('http://localhost/pc113/activity/assignment2/show.php')
        .then(response => response.json())
        .then(data => {
            let tableBody = document.getElementById('tableBody');

            tableBody.innerHTML = '';
            for(let i = 0; i < data.length; i++){
                let tableRow = `<tr>
                                <td>${data[i].id}</td>
                                <td>${data[i].username}</td>
                                <td>${data[i].player_class}</td>
                                <td>${data[i].player_type}</td>
                                <td>${data[i].gender}</td>
                                <td>${data[i].description}</td>
                             </tr>`;
                tableBody.innerHTML += tableRow;
            }

        })
    }
    fetchAndDisplay();