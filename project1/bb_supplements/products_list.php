<div class="row">
<?php
    $sql = "SELECT * FROM products
            WHERE product_status = 'Active'";

    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result) > 0)

    {
        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH))
        {
            
            echo "<div class='col-lg-4 col-md-6 mb-4'>";
                echo "<div class='card h-100'>";
                    echo "<a href='#'><img class='card-img-top' src='$row[product_img]' alt=''></a>";
                    echo "<div class='card-body'>";
                        echo "<h4 class='card-title'>";
                            echo "<a href='#'>$row[product_name]</a>";
                        echo "</h4>";

                        $product_promo_p = $row["product_promo_p"];

                        if($product_promo_p != 0){
                            echo "<h5>".$row["product_promo_p"]." RSD</h5>";
                        }
                        else{
                            echo "<h5>".$row["product_price"]." RSD</h5>";
                        }
                       
                        echo "<p class='card-text'>$row[product_brand],<br> $row[product_category],<br> $row[product_weight] $row[product_weight_unit]</p>";
                    echo "</div>";
                    echo "<div class='card-footer'>";

                    $barcode = $row["product_barcode"];

                    if($barcode != NULL){
                        echo "<center><img alt='testing' src='barcode.php?codetype=code39&size=50&text=".$barcode."&print=true'/></center>";
                    }
                    else{
                        echo "<center><img alt='testing' src='barcode.php?codetype=code39&size=50&text=".$barcode."&print=true'/></center>";
                    }

                echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    }
    ?>

</div>
<!-- /.row -->
