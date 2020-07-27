<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator with PHP</title>

</head>

<body>

    <form>

        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiplication</option>
            <option>Division</option>
        </select>
        <br>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>

    </form>
    <p>The answer is : </p>
    <?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        switch ($operator) {
            case "None":
                echo "ERROR, Select an operator.";
                break;

            case "Add":
                echo $result1 + $result2;
                break;

            case "Subtract":
                echo $result1 - $result2;
                break;

            case "Multiplication":
                echo $result1 * $result2;
                break;

            case "Division":
                echo $result1 / $result2;
                break;
        }
    }

    ?>



</body>

</html>