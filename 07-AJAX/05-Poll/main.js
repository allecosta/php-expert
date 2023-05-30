function getVote(int) {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("poll").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "poll.php?vote=" + int, true);
    xmlhttp.send();
}