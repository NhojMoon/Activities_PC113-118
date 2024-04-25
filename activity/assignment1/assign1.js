var xhreq = new XMLHttpRequest();

    xhreq.onload = function(){
        var response = JSON.parse(this.responseText);
        console.log(response);
        output(response);
    }


    function output(response){
        var tblBody = document.getElementById('tblBody');
        for (var i = 0; i < response.length; i++) {
        var tblrow = "<tr>" +
        "<th>" + response[i].id + "</th>" +
        "<td>" + response[i].first_name + "</td>" +
        "<td>" + response[i].last_name + "</td>" +
        "<td>" + response[i].email + "</td>" +
        "<td>" + response[i].phone + "</td>" +
        "</tr>";
        tblBody.innerHTML += tblrow;
        }
    }

    xhreq.open('GET',"http://localhost/pc113/activity/assignment1/api.php");
    xhreq.send();