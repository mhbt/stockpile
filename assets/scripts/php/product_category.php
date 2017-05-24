<?php
    include_once "../assets/scripts/php/db.php";
    $category_list = "SELECT UPPER(p_category) category FROM products";
    $category_result = $db->query($category_list);
    $count  = mysqli_num_rows($category_result);
    //echo $count;
    if($count > 0)
    {
        echo "<ul class = \"nav nav-stacked  li-orange\">";
        for ($i = 0; $i < $count; $i++)
        {
            $category_row = $category_result->fetch_assoc();
            $brand_list = "SELECT upper(p_manufacturer) brand FROM products WHERE p_category = '{$category_row['category']}'";
            $brand_result = $db->query($brand_list);
            $brand_count = mysqli_num_rows($brand_result);
            //echo $brand_count;
            echo  "<li class=\"dropdown\">
     <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-placement = \"right\"href=\"#\">&nbsp;&nbsp;{$category_row['category']}
         <span class=\"caret\"></span></a>";
             if ($brand_count > 0)
            {
                echo "<ul class=\"dropdown-menu\">";
                for ($j= 0; $j < $brand_count; $j++)
                {
                    $brand_row = $brand_result->fetch_assoc();
                    echo "<li><a href=\"products.php?category={$category_row['category']}&brand={$brand_row['brand']}\">&nbsp;&nbsp;{$brand_row['brand']}</a></li>";
                }
                 echo "</ul>";
            }
        }
         echo "</ul>";
    }
?>