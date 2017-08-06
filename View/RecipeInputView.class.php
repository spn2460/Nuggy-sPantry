<html>
<head>
    <link rel="stylesheet" href="inputStyles.css">
    <div class="column" id="title">
        <title>Add Recipe</title>
        <h1>Add New Recipe</h1>
        <label style="font-size: 16pt">Recipe Name:</label>
        <br>
        <input name="recipe" id="recipe"/>
    </div>

    <input type="button" class="button" id="more_fields" onclick="addRow();" value="Add Ingredients" align="center"/>

</head>
<body>
<form id="addRecipe" name="addRecipe" method="post" action="/addRecipeResult.class.php">

    <table id="ingredientTable">
        <tr id="firstRow">
            <th>Ingredient</th>
            <th>Quantity</th>
            <th>Measure</th>
        </tr>
        <tr id="emptyFields">
            <td id="tdSTD">
                <input name="ingredientTD" id="ingredientTD">
            </td>
            <td>
                <input name="qtyTD" id="qtyTD">
            </td>
            <td>
                <input name="measureTD" id="measureTD">
            </td>
        </tr>
    </table>

    <div class="column" id="ingredientID">
        <label>Ingredient: </label>
        <br>
        <input name="ingredient" id="ingredient"/>
        <br>
    </div>
    <div class="column" id="qtyID">
        <label>Qty: </label>
        <br>
        <input name="qty" id="qty"/>
        <br>
    </div>
    <div class="column" id="measureID">
        <label>Measure (e.g. oz, lb, tsp, etc.): </label>
        <br>
        <input name="measure" id="measure"/>
        <br>
    </div>
    <div>
        <input type="submit" class="button" id="submit" value="Submit">
    </div>

</body>
</html>

<script type='text/javascript'>
    function addFields() {

        var ingredientDiv = document.getElementById("ingredientID");
        var quantityDiv = document.getElementById("qtyID");
        var measureDiv = document.getElementById("measureID");

        var ingredient = document.createElement("input");
        ingredient.type = "text";
        ingredient.name = "ingredient";
        ingredient.id = "ingredient";
        ingredientDiv.appendChild(ingredient);
        ingredientDiv.appendChild(document.createElement("br"));

        var quantity = document.createElement("input");
        quantity.type = "text";
        quantity.name = "quantity";
        quantity.id = "qty";
        quantityDiv.appendChild(quantity);
        quantityDiv.appendChild(document.createElement("br"));

        var measure = document.createElement("input");
        measure.type = "text";
        measure.name = "measure";
        measure.id = "measure";
        measureDiv.appendChild(measure);
        measureDiv.appendChild(document.createElement("br"));

    }
</script>

<script type='text/javascript'>
    function addRow() {

        var ingredientTable = document.getElementById("ingredientTable");
        var newTableRow = document.createElement('tr');
        var newTD = document.createElement('td');
        var input = document.createElement('input');
        input.type = "text";
        newTD.appendChild(input);
        var newTD2 = document.createElement('td');
        var input2 = document.createElement('input');
        input2.type = "text";
        newTD2.appendChild(input2);
        var newTD3 = document.createElement('td');
        var input3 = document.createElement('input');
        input3.type = "text";
        newTD3.appendChild(input3);

        newTableRow.appendChild(newTD);
        newTableRow.appendChild(newTD2);
        newTableRow.appendChild(newTD3);
        ingredientTable.appendChild(newTableRow);

    }
</script>