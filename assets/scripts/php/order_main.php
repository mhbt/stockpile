<section class = "container-fluid sections-wrapper">
        <div class = 'container container-left'>
             <nav>
                <ul class = 'nav nav-bar nav-stacked  li-orange'>
                    <li><a href="order.php?view=orders">View Orders</a></li>
                    <li><a href="order.php?view=stock">Manage Inventory</a></li>
                    <li><a href="order.php?view=osp">View OSP</a></li>
                </ul>
            </nav>
        </div>
    <div class = "container container-right">
        <?php 
            if(isset($_GET['view']))
                include_once "../assets/scripts/php/{$_GET['view']}.php";   
            else
                echo "<h1 class = \"text-center heading-orange heading-main\">Welcome to Order and Request management portal.</h1>";

        ?>
    </div>
</section>
    <footer>
        <div class = "container footer">
            <small>copyrights &copy; stockpile.Inc 2017</small>
        </div>
    </footer>

</body>