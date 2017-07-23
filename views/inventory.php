<?php
    require "../db/DatabaseOperation.php";
?>

<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <form action="">
            <ul>
                <li>
                    <input name="brand" placeholder="Brand"/>
                </li>
                <li>
                    <input name="name_desc" placeholder="Name/Description"/>
                </li>
                <li>
                    <input name="type" placeholder="Product type (Seperate by comma)"/>
                </li>
                <li>
                    <input type="number" name="quantity" placeholder="Quantity"/>
                    <input name="qty_unit" placeholder="Unit"/>
                </li>
                <li>
                    <input type="number" name="cap" placeholder="Capital"/>
                </li>
                <li>
                    <input type="number" name="int" placeholder="Interest/Patong"/>
                </li>
                <li>
                    <input type="number" name="price" placeholder="Total Price"/>
                </li>
                <li>
                    <input type="date" name="bought" placeholder="Bought"/>
                </li>
                <li>
                    <input type="date" name="life" placeholder="Shelf Life"/>
                </li>
                <li>
                    <input name="stock" placeholder="Stock"/>
                    <input name="st_unit" placeholder="Unit"/>
                </li>
                <li>
                    <button type="submit" name="submit">Add Item</button>
                </li>
            </ul>
        </form>
    </body>
</html>
<?php
if (isset($_GET["submit"])){
    $id = "it".rand(100,999);
    $st_id = "st0";

    $brand = $_GET["brand"];

    $name = $_GET["name_desc"];

    $tp = $_GET["type"];

    $qty = $_GET["quantity"];
    $u_qty = $_GET["qty_unit"];

    $cap = $_GET["cap"];

    $int = $_GET["int"];

    $price = $_GET["price"];

    $bought = $_GET["bought"];

    $life = $_GET["life"];

    $instock = $_GET["stock"];
    $st_unit = $_GET["st_unit"];

    $img = "../images/nido.jpg";

    #Image location
    $arr_item_info = array($id, $st_id,
        $brand, $name, $tp, $qty, $u_qty,
        $cap, $int, $price, $bought, $life,
        $instock, $st_unit, $img);

    #CREATE THE ITEM
    create($t_item, null, $arr_item_info);
    //echo $cap;
}
