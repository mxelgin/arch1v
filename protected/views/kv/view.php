<?php
$this->breadcrumbs=array(
	Yii::t('core','Journal')=>array('journal/index'),
	Yii::t('core','Kv')=>array('index'),
	$model->week->weeknum,
);
?>

<table>
	<tr>
		<th colspan="6">КАССОВАЯ ВЕДОМОСТЬ № <?php echo $model->week->weeknum; ?></th>
		<th>с</th>
		<th colspan="2"><?php echo $model->getBeginWeek(); ?></th>
		<th>по</th>
		<th colspan="2"><?php echo $model->getEndWeek(); ?></th>
	</tr>	
	<tr>
		<th colspan="13"></th>
	</tr>	
	<tr>
		<th rowspan="3">День недели</th>
		<th rowspan="3">Дата</th>
		<th rowspan="3">Менеджеры</th>
		<th colspan="4">ПРИХОД</th>
		<th colspan="2">РАСХОД</th>
		<th colspan="2">ОСТАТОК</th>
		<th></th>
	</tr>	
	<tr>
		<th colspan="3">Касса</th>
		<th rowspan="2">Другое</th>
		<th rowspan="2">Выдача денег из кассы</th>
		<th rowspan="2">Другое</th>
		<th rowspan="2">На конец дня в кассе фактический</th>
		<th rowspan="2">Согласно расчета</th>
		<th rowspan="2">Подпись менеджера</th>
	</tr>	
	<tr>
		<th>Приход</th>
		<th>Возврат</th>
		<th>Итого</th>
	</tr>
	<tr>
		<td colspan="9">Остаток на начало недели</td>
		<td><?php echo $model->getDay(1)->beginostatok; ?></td>
		<td></td>
		<td></td>
	</tr>
<?php 
	foreach ($model->arr as $key=>$value)
	{
?>
	<tr>
		<td><?php echo date("D",strtotime($value->operdate)); ?></td>
		<td><?php echo date("d.m.Y", strtotime($value->operdate)); ?></td>
		<td><?php echo $value->mgr1id; echo '/'; echo $value->mgr2id; ?></td>
		<td><?php echo $value->prixod; ?></td>
		<td><?php echo $value->vozvrat; ?></td>
		<td><?php echo $value->itog; ?></td>
		<td><?php echo $value->drugoeprixod; ?></td>
		<td><?php echo $value->rashod; ?></td>
		<td></td>
		<td><?php echo $value->endostatok; ?></td>
		<td><?php echo $value->rachet; ?></td>
		<td></td>
	</tr>
<?php 
	}
?>	
	<tr>
		<td colspan="9">Остаток на конец недели</td>
		<td><?php echo $model->getDay(7)->endostatok; ?></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="5">Итого оборот за неделю</td>
		<td><?php echo $model->sumItog(); ?></td>
		<td><?php echo $model->sumDrugoePrihod(); ?></td>
		<td><?php echo $model->sumRashod(); ?></td>
		<td><?php echo $model->sumDrugoeRashod(); ?></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="5">Баланс за неделю: остаток на начало + приход = остаток на конец + расход</td>
		<td colspan="2"><?php echo $model->sumBalancePrihod(); ?></td>
		<td colspan="2"><?php echo $model->sumBalanceRashod(); ?></td>
		<td></td>
		<td><?php echo $model->sumBalanceOstatok(); ?></td>
		<td></td>
	</tr>
	
</table>