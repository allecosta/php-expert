function showAlbum(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }

    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "getalbum.php?q=" + str, true);
    xmlhttp.send();
}