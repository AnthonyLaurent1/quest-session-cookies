<?php
require 'inc/head.php';
require 'inc/data/products.php';
require 'connect.php';
?>
<section class="cookies container-fluid">
    <div class="row">
                <div class="products">
                    <?php if(isset($_SESSION['cookies'])): ?>
                        <ul>
                            <?php $cookies = $_SESSION['cookies'];
                            foreach ($cookies as $id => $count) {
                                $cookieName = $catalog[$id]['name'];?>
                                <li><?= $count .' - '. $cookieName ?></li>
                            <?php } ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>
<?php require 'inc/foot.php'; ?>
