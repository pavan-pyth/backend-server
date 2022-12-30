<!DOCTYPE html>
<html>
    <head>
    <script>
           function apiCall() {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if(this.readyState==4 && this.status==200) {
                    document.getElementById("txtHint").innerHTML= this.responseText;
                }
            }
            xmlhttp.open("GET", "quiz.php", true);
            xmlhttp.send();
           } 
        </script>

    </head>
    <body>
        <button id="txtHint" onclick="apiCall()">click</button>
    </body>
</html>