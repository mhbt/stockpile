<?php
    include_once "db.php";
    $fetch_products = "SELECT p_id, upper(p_name) as p_name FROM products";
    $result = $db->query($fetch_products);
    $count = mysqli_num_rows($result);
?>
<form class = "form-inline" method = "POST" action = "admin.php?page=add_description">
    <div class ="input-group">
        <label>Select Product : &nbsp;</label>
        <select name = "product" class = "form-control">
            <option value ='none'><?php 
                if (isset($_POST['selected_product'])) 
                    echo "SELECTED PRODUCT ID : " . $_POST['product'];
                else
                    echo "TOTAL PRODUCTS : " . $count;
                ?></option>
                <?php
                    for( $i= 0; $i <$count; $i++)
                    {
                        $row = $result->fetch_assoc();
                        echo "<option value = {$row['p_id']}>{$row['p_id']} {$row['p_name']}</option>";
                    }
            $result->free();
                ?>    
        </select>
    </div>
    <div class ="input-group">
         <button name = "selected_product" class = "form-control input-form btn btn-warning btn-request" type = "submit" >Select</button>     
    </div>
</form>
<br>
<form class = "text-center form-inline" method = "post" action = "admin.php?page=add_description">
    <legend>ADD DESCRIPTION</legend>
<div class ="input-group">
    <input name = "product" class = "form-control" type = "number" value = <?php if(isset($_POST['product'])) echo $_POST['product']?> hidden style = "display:none">
</div>
<div class ="input-group">
    <label>Color :</label><input name = "color" class = "form-control" type = "text" max = 30 required>
</div>
    <br>
<div class ="input-group">
    <label>Specification :</label><textarea name = "spec" class = "form-control" max = 599 required cols = 5 rows = 5></textarea>
</div>
    <br>
<div class ="input-group">
    <button name = "add_description" class = "form-control btn btn-warning btn-request" type = "submit">ADD Description</button>
</div>
</form>
<?php 
    if (isset($_POST['add_description']))
    {
        $id = $_POST['product'];
        $color = addslashes(trim($_POST['color']));
        $spec = htmlspecialchars(addslashes(trim($_POST['spec'])));
        $description = "INSERT INTO description (p_color,p_spec,p_id) VALUES ('{$color}','{$spec}',{$id})";
        $result = $db->query($description);
        if ($result)
        {
            echo "<p>Description Added Successfully.</p>";
        }
    }
?>