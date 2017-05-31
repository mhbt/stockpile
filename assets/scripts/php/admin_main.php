<section class = "container-fluid sections-wrapper">
        <div class = 'container container-left'>
             <nav>
                <ul class = 'nav nav-bar nav-stacked  li-orange'>
                       <li>
                        <a href="admin.php?page=view_customer">View Customers
                            </a>

                      </li>
                    <li>
                        <a href="admin.php?page=add_new_product">Add New Product
                            </a>
                      </li>
                    <li>
                        <a href="admin.php?page=add_description">Add Description<br><small>to an existing product</small>
                            </a>
                      </li>
                    <li>
                        <a  href="delete_products.html">Delete Product
                            </a>
                       
                      </li>
                    <li>
                        <a href="#">View Requests
                          </a>
                       
                      </li>
					                    <li>
                        <a href="sales.html">View Sales
                          </a>
                       
                      </li>

             
                    <br>
                </ul>
            </nav>
        </div>
    <div class = "container container-right">
        <?php include_once "../assets/scripts/php/{$_GET['page']}.php"; ?>
    </div>
</section>
    <footer>
        <div class = "container footer">
            <small>copyrights &copy; stockpile.Inc 2017</small>
        </div>
    </footer>

</body>