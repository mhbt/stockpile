<form class = "text-center form-horizontal form-inline" method = "post" action = "admin.php?page=add_new_product" enctype = "multipart/form-data">
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
    <label>Price :</label><input name = "price" class = "form-control" type = "number"required>
</div>
<div class ="input-group">
    <label>Image :</label><input name = "file" class = "form-control" type = "file" value = "Upload Image" required>
</div>
<div class ="input-group">
    <button name = "submit" class = "form-controlform-input btn btn-warning btn-request" type = "submit" value = "add new product">ADD</button>
</div>
<div class ="input-group" style = "float:right;border:0!important;background:transparent!important">
    <small>Featured :</small><input name = "featured" type ="checkbox" value = "y" class = "form-control">
</div>
</form>