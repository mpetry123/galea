<?php
    $contact_block_cta = get_field("contact_block_cta", "options");
?>
<section id="contact" class="bg-gray">
    <div class="container">
        <div class="copy copy-wide align-center">
            <h2 class="heading">
                <?= get_field("contact_block_heading", "options"); ?>
            </h2>
            <div class="body-copy">
                <?= get_field("contact_block_body_copy", "options"); ?>
                <a href="<?= $contact_block_cta['url']; ?>" class="cta"><?= $contact_block_cta['title']; ?></a>
            </div>
        </div>
    </div>
</section>