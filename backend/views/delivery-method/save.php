<?php
use sointula\shop\widgets\LanguageSwitcher;
use marqu3s\summernote\Summernote;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;


/**
 * @author Albert Gainutdinov <xalbert.einsteinx@gmail.com>
 *
 * @var $this yii\web\View
 * @var $model sointula\shop\common\entities\DeliveryMethod
 * @var $modelTranslation sointula\shop\common\entities\DeliveryMethodTranslation
 * @var $languages \bl\multilang\entities\Language[]
 * @var $selectedLanguage \bl\multilang\entities\Language
 */

$this->title = ($modelTranslation->isNewRecord) ?
    Yii::t('cart', 'Creating new delivery method') :
    Yii::t('cart', 'Editing delivery method');
?>


<div class="box">

    <?php $form = ActiveForm::begin(); ?>
    <div class="box-title">
        <h1>
            <i class="glyphicon glyphicon-list">
            </i>
            <?= Html::encode($this->title); ?>
        </h1>

        <section class="buttons">

            <!--SAVE BUTTON-->
            <?= Html::submitButton(Yii::t('shop', 'Save'),
                ['class' => 'btn btn-xs btn-primary']); ?>

            <!--CANCEL BUTTON-->
            <?= Html::a(Yii::t('shop', 'Cancel'), Url::toRoute('delivery-method/index'),
                ['class' => 'btn btn-xs btn-danger']); ?>

            <!-- LANGUAGES -->
            <?= LanguageSwitcher::widget([
                'languages' => $languages,
                'selectedLanguage' => $selectedLanguage,
            ]); ?>
        </section>

    </div>

    <div class="box-content">
        <?= $form->field($modelTranslation, 'title')->textInput(['maxlength' => true]); ?>
        <?= $form->field($modelTranslation, 'description')->widget(Summernote::className()); ?>
        <?= $form->field($model, 'show_address_or_post_office')->dropDownList([
            $model::DO_NOT_SHOW_ADDRESS_OR_POST_OFFICE_FIELDS => \Yii::t('shop', 'Show nothing'),
            $model::SHOW_ADDRESS_FIELDS => \Yii::t('shop', 'Show address fields'),
            $model::SHOW_POST_OFFICE_FIELD => \Yii::t('shop', 'Show post office field')
        ]); ?>

        <div class="row">
            <div class="col-md-9">
                <?= $form->field($model, 'logo')->fileInput(); ?>
            </div>
            <div class="col-md-3">
                <?php if (!empty($model->image_name)) : ?>
                    <?= Html::img($model->smallLogo); ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group">
            <?= Html::a(Yii::t('shop', 'Cancel'), Url::toRoute('delivery-method/index'), ['class' => 'btn btn-xs btn-danger pull-right']); ?>
            <?= Html::submitButton(Yii::t('shop', 'Save'), ['class' => 'btn btn-xs btn-primary']); ?>
        </div>

    </div>
    <?php ActiveForm::end(); ?>
</div>
