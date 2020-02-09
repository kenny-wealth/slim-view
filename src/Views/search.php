<h3>Search results for "<?= $keyword ?>" </h3>

<div class="container">
    <div class="row">

        <?php foreach ($products as $product) {?>
            <div class="col-sm col-md-3 col-xs-12">
                <div class="card" style="max-width: 18rem;">
                    <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title"><?= $product['product_name']?></p>
                        <p class="card-text text-primary font-weight-bold">$<?= $product['price']?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
