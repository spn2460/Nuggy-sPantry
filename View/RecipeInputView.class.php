<html>
    <head>

        <title>Add Recipe</title>
        <link rel="stylesheet" href="inputStyles.css">
    </head>
    <form id="addRecipe" name="addRecipe" method="post" action="/addRecipeResult.class.php">

    <body>
        <div align="center">
            <h1>Add New Recipe</h1>
            <label style="font-size: 16pt" >Recipe Name:</label>
            <br>
            <input name="recipe" id="recipeInput">
            <br><br>
            <label style="font-size: 16pt">Recipe Location:</label>
            <br>
            <input name="location" id="locationInput" placeholder="URL or other location info">
        </div>
    </body>
        <div align="center" style="width: 100%">
            <div class="column" style="width: 20%; float: left;">
                <input type="button" class="button" id="more_fields" onclick="addRow();" value="Add Ingredients" align="right">
            </div>

            <div class="column" style="width: 60%; float: left;">
                <table id="ingredientTable">
                    <tr>
                        <th>Ingredient</th>
                        <th>Qty</th>
                        <th>Measure</th>
                    </tr>
                    <tr>
                        <td>
                            <input name="ingredientTD" id="ingredientInput">
                        </td>
                        <td>
                            <input name="qtyTD" id="qtyInput">
                        </td>
                        <td>
                            <input name="measureTD" id="measureInput">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="column" style="width: 20%; float: right;">
                <input type="submit" class="button" id="submit" value="Submit"/>
            </div>
        </div>
    </form>
</html>

<script type='text/javascript'>
    function addRow() {

        var ingredientTable = document.getElementById("ingredientTable");
        var newTableRow = document.createElement('tr');

        var newTD = document.createElement('td');
        var input = document.createElement('input');
        input.type = "text";
        input.id= "ingredientInput";
        newTD.appendChild(input);

        var newTD2 = document.createElement('td');
        var input2 = document.createElement('input');
        input2.type = "text";
        input2.id = "qtyInput";
        newTD2.appendChild(input2);

        var newTD3 = document.createElement('td');
        var input3 = document.createElement('input');
        input3.type = "text";
        input3.id = "measureInput";
        newTD3.appendChild(input3);

        newTableRow.appendChild(newTD);
        newTableRow.appendChild(newTD2);
        newTableRow.appendChild(newTD3);
        ingredientTable.appendChild(newTableRow);

    }
</script>