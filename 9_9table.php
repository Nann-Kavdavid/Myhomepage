<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table id="myTable">
        <tr>
            <th>&nbsp;</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
        </tr>
        <?php
        for($i = 1; $i<=9; $i++){
            echo '<tr>';
            echo '<th>'.$i.'段階'.'</th>';
            for($j = 1; $j<=9; $j++){
                if($i%2 == 0){
                    echo '<td class="b1">'.$i*$j.'</td>';
                }else{
                    echo '<td>'.$i*$j.'</td>';
                }
            }
            echo '</tr>';
        }
        ?>
    </table>
    <select id="selectOption">
        <option value="1">1の段</option>
        <option value="2">2の段</option>
        <option value="3">3の段</option>
        <option value="4">4の段</option>
        <option value="5">5の段</option>
        <option value="6">6の段</option>
        <option value="7">7の段</option>
        <option value="8">8の段</option>
        <option value="9">9の段</option>
    </select>
    <button id="btn" onclick="display_row()" value="change_value();">Try it</button>

    <script>
        function display_row()
        {
            var index, table, button, button_value;


            index = document.getElementById('selectOption').value;
            table = document.getElementById('myTable');
            button = document.getElementById('btn')
            button_value = button.value;
            table.rows[index].classList.toggle("selected");
            button_value = index;
        }
        function change_value()
        {
            var index;
            index = document.getElementById('selectOption').value;
        }
    </script>
</body>
</html>


