 <section class="cart">
    <div class="panel">
        <div class = "panel-title bg-cart" data-toggle="collapse" href="#cart-inside">
            <div class = "cart-name left"  ><span class = "glyphicon glyphicon-shopping-cart"></span> &nbsp;Shopping Cart </div>
        <div "cart-count right">
        <span class = "badge" id = "count">1</span>
        </div>
        </div>
        <div id="cart-inside" class="panel-collapse collapse">
            <div class="panel-body" id = "products">
                
            </div>
            <div class="panel-footer">
             <span class = "total left"><b id = "cost">0</b></span> <a href = "assets/scripts/php/process_order.php"><span class = "glyphicon glyphicon-check btn-check right"></span></a>
             </div>
        </div>
    </div>
</section>
<script>
    function count_products() {
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET","assets/scripts/php/fill_cart.php?command=count", true);
        xhttp.send();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                _("count").innerHTML = xhttp.responseText;
            }
        }
    }
     function list_products() {
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET","assets/scripts/php/fill_cart.php?command=p_enlist", true);
        xhttp.send();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                //console.log(xhttp.responseText);
                _("products").innerHTML = xhttp.responseText;
            }
        }
    }
     function calc_cost() {
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET","assets/scripts/php/fill_cart.php?command=p_cost", true);
        xhttp.send();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                //console.log(xhttp.responseText);
                _("cost").innerHTML = xhttp.responseText;
            }
        }
    }
    function lift_product(p_id) {
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET","assets/scripts/php/fill_cart.php?command=p_lift&id="+ p_id, true);
        xhttp.send();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                console.log(xhttp.responseText);
            }
        }
    }
     function _(id)
    {
        return document.getElementById(id);
    }        
    //find solution for product quantity decreament
</script>
<!--<div class = "item "><p class = "item-name left">Product Name</p> <button class = "btn btn-xs  item-remove right"><span class = "glyphicon glyphicon-remove"></span</button></div>-->