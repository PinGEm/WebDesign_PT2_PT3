<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McJollibee Menu</title>
</head>
<body>
    <header>
        <h1>McJollibee Menu</h1>
    </header>

    <form action="index.php" method="get">
        <input type="submit" value="Purchase" name= "buy" id="purchase">
        
        <div class="sections">
            <div class="card" style="border-right: 2px solid black;">
                <p>Burgers 🍔</p>
                <input type="checkbox" name="Item_CB"> <label>Big Mac - </label>
                <input type="number" name="Items_N" class="number_field"><br>
                <input type="checkbox" name="Item_CB"> <label>YumBurger - </label>
                <input type="number" name="Items_N" class="number_field"><br>
                <input type="checkbox" name="Item_CB"> <label>Quarter Pounder - </label>
                <input type="number" name="Items_N" class="number_field"><br>
                <input type="checkbox" name="Item_CB"> <label>Champ Burger - </label>
                <input type="number" name="Items_N" class="number_field">

            </div>

            <div class="card" style="border-right: 2px solid black; background-color: #fcfcfc;">
                <p>Chicken 🍗</p>
                <input type="checkbox" name="Item_CB"> <label>Spicy Chicken Joy - </label>
                <input type="number" name="Items_N" class="number_field"><br>
                <input type="checkbox" name="Item_CB"> <label>Chicken Joy - </label>
                <input type="number" name="Items_N" class="number_field"><br>
                <input type="checkbox" name="Item_CB"> <label>Spicy Chicken McDo- </label>
                <input type="number" name="Items_N" class="number_field"><br>
                <input type="checkbox" name="Item_CB"> <label>Chicken McDo - </label>
                <input type="number" name="Items_N" class="number_field">
            </div>

            <div class="card">
                <p>Drinks 🥤</p>
                <input type="checkbox" name="Item_CB"> <label>Coke - </label>
                <input type="number" name="Items_N" class="number_field"><br>
                <input type="checkbox" name="Item_CB"> <label>Baja Blast - </label>
                <input type="number" name="Items_N" class="number_field"><br>
                <input type="checkbox" name="Item_CB"> <label>Sprite - </label>
                <input type="number" name="Items_N" class="number_field"><br>
                <input type="checkbox" name="Item_CB"> <label>Royal - </label>
                <input type="number" name="Items_N" class="number_field"><br>
            </div>
        </div>
    </form>

    <p>
    <?php
    $items = array();

    if(isset($_GET['buy']))
    {
        if(!empty($_GET['Item_CB']))
        {
            echo "someting fond0";
        }
        else
        {
            echo "nothing fond";
        }
    }

    ?>
    </p>
</body>
</html>