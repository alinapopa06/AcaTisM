function functie_js(id_profesor,id_proiect, id_student)
{
    var id_prof=id_profesor;
    var id_proj=id_proiect;
    var id_stud=id_student;
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "C:\\xampp\\htdocs\\12\\newMvc\\application\\models\\sendProject.php.php?q=" + id_prof, true);
        xmlhttp.send();
    }
