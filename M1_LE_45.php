<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 45</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 45</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Discount Calculation (Ternary Operator): Write a script that calculates and displays the discount on a
                product based on a user-defined price. If the price is above 500, give a 10% discount; otherwise, no
                discount (use the ternary operator).</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Discount Calculation</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row mt-3">
                <div class="col-10 text-center p-5">
                    <form action="" method="post" class="p-5">
                        <label for="num">Enter a price</label>
                        <input type="number" id="num" name="num" required>
                        <input type="submit" value="Submit">
                    </form>

                    <?php
                    if (isset($_POST['num'])) {
                        
                        // Get the price
                        $price = $_POST['num'];
                        $discount = ($price > 500) ? ($price * 0.10) : 0;
                        $price_after_discount = $price - $discount;

                        // Output the result
                        echo "<p>Price of product is : $price</p>";
                        echo "<p>Discount on product is : $discount</p>";
                        echo "<p>Final price for product is : $price_after_discount</p>";

                    }
                    ?>
                </div>
            </div>
            <hr>
        </div>

    </div>
</body>

</html>