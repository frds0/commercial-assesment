<!DOCTYPE html>
<html>

<body>

    <p>Select a new car from the list.</p>

    <select id="selectNumber" onchange="myFunction()">
        <!-- <option value="Pilih" selected disabled>Pilih</option> -->
    </select>

    <p id="demo"></p>

    <script>
        // function myFunction() {
        //     var x = document.getElementById("mySelect").value;
        //     document.getElementById("demo").innerHTML = "You selected: " + x;
        // }
        var select = document.getElementById("selectNumber");
        var options = ["1", "2", "3", "4", "5"];

        for (var i = 0; i < options.length; i++) {
            var opt = options[i];
            var el = document.createElement("option");
            el.textContent = opt;
            el.value = opt;
            select.appendChild(el);
        }
    </script>

</body>

</html>