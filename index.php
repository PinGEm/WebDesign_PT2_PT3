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
                <input type="checkbox" name="Item_CB[]" value = "Big Mac"> <label>Big Mac - </label>
                <input type="number" name="Items_N[Big Mac]" class="number_field"><label> : 180Php</label> <br>
                <input type="checkbox" name="Item_CB[]" value = "YumBurger"> <label>YumBurger - </label>
                <input type="number" name="Items_N[YumBurger]" class="number_field"><label> : 70Php</label><br>
                <input type="checkbox" name="Item_CB[]" value = "Quarter Pounder"> <label>Quarter Pounder - </label>
                <input type="number" name="Items_N[Quarter Pounder]" class="number_field"><label> : 140Php</label><br>
                <input type="checkbox" name="Item_CB[]" value = "Champ Burger"> <label>Champ Burger - </label>
                <input type="number" name="Items_N[Champ Burger]" class="number_field"> <label> : 150Php</label>

            </div>

            <div class="card" style="border-right: 2px solid black; background-color: #fcfcfc;">
                <p>Chicken 🍗</p>
                <input type="checkbox" name="Item_CB[]" value = "S. Chicken Joy"> <label>Spicy Chicken Joy - </label>
                <input type="number" name="Items_N[S. Chicken Joy]" class="number_field"> <label> : 99Php</label> <br>
                <input type="checkbox" name="Item_CB[]" value = "Chicken Joy"> <label>Chicken Joy - </label>
                <input type="number" name="Items_N[Chicken Joy]" class="number_field"> <label> : 95Php</label> <br>
                <input type="checkbox" name="Item_CB[]" value = "S. Chicken McDo"> <label>Spicy Chicken McDo- </label>
                <input type="number" name="Items_N[S. Chicken McDo]" class="number_field"> <label> : 96Php</label> <br>
                <input type="checkbox" name="Item_CB[]" value="Chicken McDo"> <label>Chicken McDo - </label>
                <input type="number" name="Items_N[Chicken McDo]" class="number_field"> <label> : 94Php</label>
            </div>

            <div class="card">
                <p>Drinks 🥤</p>
                <input type="checkbox" name="Item_CB[]" value="Coke"> <label>Coke - </label>
                <input type="number" name="Items_N[Coke]" class="number_field"> <label> : 50Php</label> <br>
                <input type="checkbox" name="Item_CB[]" value="Baja Blast"> <label>Baja Blast - </label>
                <input type="number" name="Items_N[Baja Blast]" class="number_field"> <label> : 70Php</label> <br>
                <input type="checkbox" name="Item_CB[]" value="Sprite"> <label>Sprite - </label>
                <input type="number" name="Items_N[Sprite]" class="number_field"><label> : 50Php</label> <br>
                <input type="checkbox" name="Item_CB[]" value="Royal"> <label>Royal - </label>
                <input type="number" name="Items_N[Royal]" class="number_field"><label> : 50Php</label> <br>
            </div>
        </div>
    </form>

    <p style="text-align: center; margin-top:2%; background-color:#eae8e8; padding:1%;">
    <?php
    $prices = array("Big Mac" => 180,
                    "YumBurger" => 70,
                    "Quarter Pounder" => 140,
                    "Champ Burger" => 150,
                    "S. Chicken Joy" => 99,
                    "Chicken Joy" => 95,
                    "S. Chicken McDo" => 96,
                    "Chicken McDo" => 140,
                    "Coke" => 50,
                    "Baja Blast" => 70,
                    "Sprite" => 50,
                    "Royal" => 50);
    if(isset($_GET['buy']))
    {
        if(!empty($_GET['Item_CB']))
        {
            $overall_price = 0;
            $items = $_GET['Item_CB'];
            $quantity = $_GET['Items_N'];
            $money_seperate = array();
            

            // Check for How Much Items are In the List
            echo "Buying ". count($items) . " items!";
            
            // Show the Price of Each Item Bought, With Price.
            echo "<br> Displaying List of Items with Price: <br>";
            foreach($items as $item)
            {
                $quantities = isset($quantity[$item]) ? $quantity[$item] : 0; // check if quantity is set, if not set to 0.

                echo "<span style='color:#3c3c3c'>";
                if($quantities > 0)
                {
                    $orig_price = $prices[$item];
                    $price = $orig_price * $quantities;
                    $money_seperate[] = $price;
                    echo $item . " - Quantity: " . $quantities . " - Price: " . $price . "<br>";
                }
            }

            // Calculate the Overall Price
            if(!empty($money_seperate))
            {
                foreach($money_seperate as $money)
                {
                    $overall_price = $overall_price + $money;       
                }
                
                echo "<span style='color:#00d925;'> Overall Price: " . $overall_price . "</span>";
            }

        }
        else
        {
            echo "Error: No Items Found in the List";
        }
    }

    ?>
    </p>
</body>
</html>