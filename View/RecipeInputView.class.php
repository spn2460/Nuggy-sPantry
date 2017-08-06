<html>
<head>
    <link rel="stylesheet" href="inputStyles.css">
    <title>Add Recipe</title>
</head>
<body>
<form id="addRecipe" name="addRecipe" method="post" action="/addRecipeResult.class.php">
    <h1>Add New Recipe Below</h1>
    <div class="column">
        <label>Recipe Name:</label>
        <br>
        <input name="recipe" id="recipe"/>
        <br><br>
        <input type="button" class="button" id="more_fields" onclick="addFields();" value="Add Ingredients" />
    </div>
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