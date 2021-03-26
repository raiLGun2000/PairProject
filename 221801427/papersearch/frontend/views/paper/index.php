<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use common\models\Paper;
use frontend\components\TagsCloudWidget;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PaperSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>

<div class="container">

    <div class="row">

        <div class="col-md-9">
            <ol class="breadcrumb">
                <li><a href="<?= Yii::$app->homeUrl;?>">首页</a></li>
                <li>文章列表</li>

            </ol>

            <div class="searchbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> 查找文章（
                        <?= Paper::find()->count();?>
                        ）
                    </li>
                    <li class="list-group-item">
                        <form class="form-inline" action="<?= Yii::$app->urlManager->createUrl(['paper/index']);?>" id="w0" method="get">
                            <div class="form-group" style="margin-left:15px">
                                <input type="text" class="form-control" name="PaperSearch[title]" id="w0input" placeholder="按标题">
                                <input type="text" class="form-control" name="PaperSearch[abstract]" id="w0input" placeholder="按摘要">
                                <input type="text" class="form-control" name="PaperSearch[conference]" id="w0input" placeholder="按会议">
                                <input type="text" class="form-control" name="PaperSearch[keywords]" id="w0input" placeholder="按关键词">
                            </div>
                            <button type="submit" class="btn btn-default" style="width:75px;margin-left:5px">搜索</button>
                        </form>
                    </li>
                </ul>
            </div>

            <?= ListView::widget([
                'id'=>'paperList',
                'dataProvider'=>$dataProvider,
                'itemView'=>'_listitem',//子视图,显示一篇论文的标题等内容.
                'layout'=>'{items} {pager}',
                'pager'=>[
                    'maxButtonCount'=>10,
                    'nextPageLabel'=>Yii::t('app','下一页'),
                    'prevPageLabel'=>Yii::t('app','上一页'),
                ],
            ])?>

        </div>
        <div class="col-md-3">
            <div id="he-plugin-standard"></div>

            <div class="tagcloudbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-tags" aria-hidden="true"></span> Top10关键词
                    </li>
                    <li class="list-group-item">
                        <?= TagsCloudWidget::widget(['keywords'=>$keywords]);?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
