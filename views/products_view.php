
<div id="container" class="clear">
        <!-- content body -->

    <?php //include "views/partials/slider.php"; ?>


</div>

<div class="container">


    <ul class="tabs">
        <li class="tab-link current" data-tab="tab-1">Tab One</li>
        <li class="tab-link" data-tab="tab-2">Tab Two</li>
        <li class="tab-link" data-tab="tab-3">Tab Three</li>
    </ul>

    <div id="tab-1" class="tab-content current">
        <?php

//        echo '<pre>';
//        print_r($products);
//        die;

        if($products){
            foreach($products as $product) {


                echo
                '
                
                <div class="product">
                <img src="/images/demo/80x80.gif'.$product['image'].'" alt="">
                <div style="clear:both;"></div>
                <span> '.$product['name'].' </span>
                <span> '.$product['price'].' </span>
                </div>
                ';






            }
        }
        ?>


        <div style="clear:both;"></div>
    </div>
    <div id="tab-2" class="tab-content">
        <div class="product">

        </div>
        <div class="product">

        </div>
        <div class="product">

        </div>
        <div class="product">

        </div>
        <div class="product last">

        </div>
        <div style="clear:both;"></div>
        <div class="product">

        </div>
        <div class="product">

        </div>
        <div class="product">

        </div>
        <div class="product">

        </div>
        <div class="product last">

        </div>
        <div style="clear:both;"></div>
    </div>
    <div id="tab-3" class="tab-content">
        <div class="product">

        </div>
        <div class="product">

        </div>
        <div class="product">

        </div>
        <div class="product">

        </div>
        <div class="product last">

        </div>
        <div style="clear:both;"></div>
        <div class="product">

        </div>
        <div class="product">

        </div>
        <div class="product">

        </div>
        <div class="product">

        </div>
        <div class="product last">

        </div>
        <div style="clear:both;"></div>
    </div>

</div>