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
        <input type="submit" value="Purchase" id="purchase">
        
        <div class="sections">
            <div class="card" style="border-right: 2px solid black;">
                <p>Burgers 🍔</p>
                <input type="checkbox" name="Item"> <label>Big Mac - </label>
                <input type="number" name="BM" class="number_field"><br>
                <input type="checkbox" name="Item"> <label>YumBurger - </label>
                <input type="number" name="BM" class="number_field"><br>
                <input type="checkbox" name="Item"> <label>Quarter Pounder - </label>
                <input type="number" name="BM" class="number_field"><br>
                <input type="checkbox" name="Item"> <label>Champ Burger - </label>
                <input type="number" name="BM" class="number_field">

            </div>

            <div class="card" style="border-right: 2px solid black; background-color: #fcfcfc;">
                <p>Chicken 🍗</p>
                <input type="checkbox" name="Item"> <label>Spicy Chicken Joy - </label>
                <input type="number" name="SCJ" class="number_field"><br>
                <input type="checkbox" name="Item"> <label>Chicken Joy - </label>
                <input type="number" name="Item" class="number_field"><br>
                <input type="checkbox" name="Spicy Chicken McDo"> <label>Spicy Chicken McDo- </label>
                <input type="number" name="Item" class="number_field"><br>
                <input type="checkbox" name="Chicken McDo"> <label>Chicken McDo - </label>
                <input type="number" name="Item" class="number_field">
            </div>

            <div class="card">
                <p>Drinks 🥤</p>
                <input type="checkbox" name="Item"> <label>Coke - </label>
                <input type="number" name="coke" class="number_field"><br>
                <input type="checkbox" name="Item"> <label>Baja Blast - </label>
                <input type="number" name="BB" class="number_field"><br>
                <input type="checkbox" name="Item"> <label>Sprite - </label>
                <input type="number" name="sprite" class="number_field"><br>
                <input type="checkbox" name="Item"> <label>Royal - </label>
                <input type="number" name="royal" class="number_field"><br>
            </div>
        </div>
    </form>

    <p>
    <?php
    $items = array();

    if(isset($_GET['Purchase']))
    {
        echo "hello";
    }

    ?>
    </p>
</body>
</html>