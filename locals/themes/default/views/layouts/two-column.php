<?php $this->beginContent('@app/views/layouts/main.php'); ?>
    <div class="row">

            <div class="col-md-8">
            	<?php echo $content ?>
            </div>

            <div class="col-md-4">
                <?php if (isset($this->blocks['sidebar'])): ?>
                    <?= $this->blocks['sidebar'] ?>
                <?php endif; ?>
            </div>

        </div>
<?php $this->endContent();