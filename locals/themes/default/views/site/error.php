<?php

use yii\helpers\Html;

$this->title = $name;
$this->params['breadcrumbs'] = [
    $this->title,
];
?>
<div class="site-error">

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>
