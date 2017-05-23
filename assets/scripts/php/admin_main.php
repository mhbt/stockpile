<section class = "container-fluid sections-wrapper">
        <div class = 'container container-left'>
             <nav>
                <ul class = 'nav nav-bar nav-stacked  li-orange'>
                       <li>
                        <a href="../assets/scripts/php/admin_main.php?loadpage=view_customer.php">View Customers
                            </a>

                      </li>
                    <li>
                        <a href="../assets/scripts/php/add_new_prodcut.php">Add New Product
                            </a>
                      
                      </li>
				    <li>
                        <a href="existing_product.html">Add Existing Product
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
    </section>
    <section class = "container container-right">
        <?php include_once "../assets/scripts/php/{$_GET['loadpage']}" ?>
    </section>
    
    <footer>
        <div class = "container footer">
            <small>copyrights &copy; stockpile.Inc 2017</small>
        </div>
    </footer>

</body>