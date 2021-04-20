<?php

// Include database connection file
include './db-connection/connect.php';

// Execute MySQL Query
$result = mysqli_query($link, "SELECT * FROM `items`");

// Declare an array
$products = [];

// Loop through all the data
while ($row = mysqli_fetch_assoc($result)) {
    // Store results in array by pushing results
    array_push($products, $row);
}


// COLLECT DATA
// Create the function collectArray.
// This function contains the parameter 
// that defines the required product-type. 

function collectArray($productCode){

    // Make $products from your stock available 
    // inside this function.(use statement global)
    global $products;

    // Have a new empty array ready for 
    // collecting required products 
    $collect = [];
    
    // Check if $products array has any elements 
    if(!empty($products)){
        // If so,
        // scan through $products array (foreach-loop) and check
        // each product if it contains the required product-code 
        foreach($products as $product){
            if($productCode == $product['prod_code']){
                $collect[] = $product;
            }
            // If the match is found, push the 
            // fitting product into $collect array. 
        // close if
        }
        
        // If $collect is not empty, return collect
        if(!empty($collect)){
            return $collect;
        }else{
        // otherwise: return products
            return $products;
        // close conditional
        }

    // close if
    }

// close collectArray
}


// PRINT HTML:
// Create function printHTML.
function printHTML(){
    // Check if a product-code is in $_GET array. If product code is 
    // in $_GET array, it means user selected it, and you will 
    // print only the products of the selected type, otherwise
    // print all products.
    if(isset($_GET["data-prod"])){
        $selectedProducts = collectArray($_GET["data-prod"]);
    }else{
        $selectedProducts = collectArray(0);
    }


    // You need to loop through the array of selected products,
    foreach($selectedProducts as $selectedProduct){

        echo "<div class=\"col-sm-12 col-md-6 col-lg-3 mb-4\">
                <figure class=\"product\">
                    <img src=\"{$selectedProduct['prod_image']}\" class=\"img-fluid product-image\" alt=\"{$selectedProduct['prod_name']}\">
                    <figcaption class=\"p-3 pb-0\">
                    <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-primary float-right\">Add to Cart <i class=\"fa fa-cart-plus\"></i></a>
                        <ul class=\"list-unstyled\">
                            <li>{$selectedProduct['prod_name']}</li>
                            <li>$ {$selectedProduct['prod_price']}</li>
                        </ul>
                    </figcaption>
                </figure>
            </div>";
    
        // create HTML tags in the fly and extract values 
        // of each product into proper or corresponding HTML tag.
        // Print the HTML content.
    // Close loop.

    }
// Close printHTML.
}
?>