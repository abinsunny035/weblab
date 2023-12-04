<?php
//db connection

if (isset($_GET['sub'])) {
    $sl = $_GET['sl'];
    $productname = $_GET['pname'];
    $quantity = $_GET['qty'];
    $price = $_GET['price'];
    $total = $quantity * $price;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cash Invoice</title>
</head>

<body>
    <form name="enter-bill" method="GET">
        <table class="grid-container" name="enter">
            <tr class="grid-item">
                <tr>
                    <td>Sl No</td>
                    <td>
                        <input type="number" name="sl">
                    </td>
                    <td>Product name</td>
                    <td>
                        <input type="text" name="pname">
                    </td>
                    <td>Quantity</td>
                    <td>
                        <input type="number" name="qty">
                    </td>
                    <td>Price</td>
                    <td>
                        <input type="number" name="price">
                    </td>
                </tr>
            </tr>
        </table>
        <input type="submit" name="sub">
    </form>
    <form name="show-bill" method="GET">
        <table class="grid-container" name="enter">
            <tr class="grid-item">
                <th>Sl No</th>
            </tr>
            <tr>
                <td>
                    <?php echo "Sl No: ", $sl; ?>
                </td>
                <td>
                    <?php echo "Product: ", $productname; ?>
                </td>
                <td>
                    <?php echo "Quantity: ", $quantity; ?>
                </td>
                <td>
                    <?php echo "Price: ", $price; ?>
                </td>
                <td>
                    <?php echo "Total: ", $total; ?>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

