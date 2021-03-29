<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use common\models\Paper;

$this->title = '三大顶会论文数据';
$this->params['breadcrumbs'][] = $this->title;

$Eccv2016 = Paper::find()->andFilterWhere(['like', 'conference', 'ECCV 2016'])->count();
$Cvpr2016 = Paper::find()->andFilterWhere(['like', 'conference', 'CVPR2016'])->count();

$Eccv2020 = Paper::find()->andFilterWhere(['like', 'conference', 'ECCV 2020'])->count();
$Cvpr2020 = 486;

$Eccv2018 = Paper::find()->andFilterWhere(['like', 'conference', 'ECCV 2018'])->count();
$Cvpr2018 = Paper::find()->andFilterWhere(['like', 'conference', 'CVPR2018'])->count();
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="chart0">
        <?php

            /* @var $this yii\web\View */

            // use yii\helpers\Html;

            $this->title = '图表样例';
            $this->params['breadcrumbs'][] = $this->title;
        ?>

         <script type='text/javascript' src="http://cdn.highcharts.com.cn/highcharts/9.0.1/highcharts.js"></script>"



        <div class="site-about">
            <h1><?= Html::encode($this->title) ?></h1>
            <div id="chart01" style="margin: 0 auto;width: 900px;height:600px;"></div>

        </div>

        <script type="text/javascript">
		    var ECCV2016 = parseInt("<?php echo $Eccv2016; ?>");
			var CVPR2016 = parseInt("<?php echo $Cvpr2016; ?>");

			var ECCV2020 = parseInt("<?php echo $Eccv2020; ?>");
			var CVPR2020 = parseInt("<?php echo $Cvpr2020; ?>");

			var ECCV2018 = parseInt("<?php echo $Eccv2018; ?>");
			var CVPR2018 = parseInt("<?php echo $Cvpr2018; ?>");
            var chart = Highcharts.chart('chart01',{
				chart: {
					type: 'column'
				},
				title: {
					text: '2016、2018、2020ECCV与CVPR两大顶会历年论文篇数'
				},
				xAxis: {
					categories: [
					'2014','2016','2018'
					],
					crosshair: true
				},
				yAxis: {
					min: 0,
					title: {
						text: '论文篇数'
					}
				},
				tooltip: {
					// head + 每个 point + footer 拼接成完整的 table
					headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
					pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y} 篇数</b></td></tr>',
					footerFormat: '</table>',
					shared: true,
					useHTML: true
				},
				plotOptions: {
					column: {
						borderWidth: 0
					}
				},
				series: [{
					name: 'ECCV',
					data: [ECCV2016, ECCV2018,ECCV2020]
				}, 
				{
					name: 'CVPR',
					data: [CVPR2016,CVPR2018,CVPR2020]
				}]
			});
        </script>
        
    
       
    </div>

</div>