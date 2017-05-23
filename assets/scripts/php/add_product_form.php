<form class = "text-center form-horizontal form-inline" method = "post" action = "request_product.php">
<div class ="input-group">
    <label>Name :</label><input name = "product" class = "form-control" type = "text" max = 30 required>
</div>
<div class ="input-group">
    <label>Category :</label><input name = "category" class = "form-control" type = "text" max = 30 required>
</div>
<div class ="input-group">
    <label>Manufacturer :</label><input  name = "manufacturer" class = "form-control" type = "text" max = 30 required>
</div>
<div class ="input-group">
    <label>Quantity :</label><input name = "quantity" class = "form-control" type = "number">
</div>
<div class ="input-group">
    <label>Price :</label><input name = "category" class = "form-control" type = "number" max = 11 required>
</div>
<div class ="input-group">
    <label>Image :</label><input name = "image" class = "form-control" type = "file" value = "Upload Image">
</div>
<div class ="input-group">
    <button name = "submit" class = "form-controlform-input btn btn-warning btn-request" type = "submit">ADD</button>
</div>
</form>