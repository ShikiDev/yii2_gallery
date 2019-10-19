<?php
/* @var $this yii\web\View */
?>
<h1>Коллекция изображений</h1>
<div class="row">
    <div class="col-md-12">
        <?php echo \yii\helpers\Html::a('Добавить изображение', ['/images/add-image'], ['class' => 'btn btn-primary']); ?>
        <hr>
    </div>
</div>
<?php if (Yii::$app->session->hasFlash('info')): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-success">
                <strong>Внимание</strong><span><?php echo Yii::$app->session->getFlash('info'); ?></span>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if (!empty($images)): ?>
    <?php $elem_count = count($images); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="row">
                    <?php foreach ($images

                    as $key => $image): ?>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="thumbnail">
                            <img src="<?php echo Yii::getAlias('@web') . '/resources/images/' . $image->img_file; ?>"
                                 alt="">
                            <div class="caption">
                                <strong><?php echo $image->email; ?></strong>
                                <p><?php echo $image->describe; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php if (($key < $elem_count) && (($key + 1) % 3 == 0)): ?>
                    </div>
                    <div class="row">
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo \yii\widgets\LinkPager::widget(['pagination' => $pagination]); ?>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="alert alert-info">
                    <strong>Внимание!</strong> Изображения не загруженны в базу.
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

