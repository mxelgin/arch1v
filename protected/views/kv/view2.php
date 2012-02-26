<?php 
$model1 = $model->operation1;
$model2 = $model->operation2;
$model3 = $model->operation3;
$model4 = $model->operation4;
$model5 = $model->operation5;
$model6 = $model->operation6;
$model7 = $model->operation7;

?>

<table>
	<tr>
		<th colspan="6">КАССОВАЯ ВЕДОМОСТЬ - МАГАЗИН</th>
		<th>с</th>
		<th colspan="2"><?php echo $model1->id; ?></th>
		<th>по</th>
		<th colspan="2"><?php echo $model7->id; ?></th>
	</tr>	
	<tr>
		<th colspan="13"></th>
	</tr>	
	<tr>
		<th rowspan="3">День недели</th>
		<th rowspan="3">Дата</th>
		<th rowspan="3">Ответственный менеджер</th>
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
		<th rowspan="2">На конец дна в кассе фактический</th>
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
		<td><?php echo $model1->beginostatok; ?></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>ПН</td>
		<td><?php echo $model1->operdate; ?></td>
		<td><?php echo $model1->mgr1id; echo '/'; echo $model1->mgr2id; ?></td>
		<td><?php echo $model1->prixod; ?></td>
		<td><?php echo $model1->vozvrat; ?></td>
		<td><?php echo $model1->itog; ?></td>
		<td><?php echo $model1->drugoeprixod; ?></td>
		<td><?php echo $model1->rashod; ?></td>
		<td></td>
		<td><?php echo $model1->endostatok; ?></td>
		<td><?php echo $model1->rachet; ?></td>
		<td></td>
	</tr>
	<tr>
		<td>ВТ</td>
		<td><?php echo $model2->operdate; ?></td>
		<td><?php echo $model2->mgr1id; echo '/'; echo $model2->mgr2id; ?></td>
		<td><?php echo $model2->prixod; ?></td>
		<td><?php echo $model2->vozvrat; ?></td>
		<td><?php echo $model2->itog; ?></td>
		<td><?php echo $model2->drugoeprixod; ?></td>
		<td><?php echo $model2->rashod; ?></td>
		<td></td>
		<td><?php echo $model2->endostatok; ?></td>
		<td><?php echo $model2->rachet; ?></td>
		<td></td>
	</tr>
	<tr>
		<td>СР</td>
		<td><?php echo $model3->operdate; ?></td>
		<td><?php echo $model3->mgr1id; echo '/'; echo $model3->mgr2id; ?></td>
		<td><?php echo $model3->prixod; ?></td>
		<td><?php echo $model3->vozvrat; ?></td>
		<td><?php echo $model3->itog; ?></td>
		<td><?php echo $model3->drugoeprixod; ?></td>
		<td><?php echo $model3->rashod; ?></td>
		<td></td>
		<td><?php echo $model3->endostatok; ?></td>
		<td><?php echo $model3->rachet; ?></td>
		<td></td>
	</tr>
	<tr>
		<td>ЧТ</td>
		<td><?php echo $model4->operdate; ?></td>
		<td><?php echo $model4->mgr1id; echo '/'; echo $model4->mgr2id; ?></td>
		<td><?php echo $model4->prixod; ?></td>
		<td><?php echo $model4->vozvrat; ?></td>
		<td><?php echo $model4->itog; ?></td>
		<td><?php echo $model4->drugoeprixod; ?></td>
		<td><?php echo $model4->rashod; ?></td>
		<td></td>
		<td><?php echo $model4->endostatok; ?></td>
		<td><?php echo $model4->rachet; ?></td>
		<td></td>
	</tr>
	<tr>
		<td>ПТ</td>
		<td><?php echo $model5->operdate; ?></td>
		<td><?php echo $model5->mgr1id; echo '/'; echo $model5->mgr2id; ?></td>
		<td><?php echo $model5->prixod; ?></td>
		<td><?php echo $model5->vozvrat; ?></td>
		<td><?php echo $model5->itog; ?></td>
		<td><?php echo $model5->drugoeprixod; ?></td>
		<td><?php echo $model5->rashod; ?></td>
		<td></td>
		<td><?php echo $model5->endostatok; ?></td>
		<td><?php echo $model5->rachet; ?></td>
		<td></td>
	</tr>
	<tr>
		<td>СБ</td>
		<td><?php echo $model6->operdate; ?></td>
		<td><?php echo $model6->mgr1id; echo '/'; echo $model6->mgr2id; ?></td>
		<td><?php echo $model6->prixod; ?></td>
		<td><?php echo $model6->vozvrat; ?></td>
		<td><?php echo $model6->itog; ?></td>
		<td></td>
		<td><?php echo $model6->rashod; ?></td>
		<td></td>
		<td><?php echo $model6->endostatok; ?></td>
		<td><?php echo $model6->rachet; ?></td>
		<td></td>
	</tr>
	<tr>
		<td>ВС</td>
		<td><?php echo $model7->operdate; ?></td>
		<td><?php echo $model7->mgr1id; echo '/'; echo $model7->mgr2id; ?></td>
		<td><?php echo $model7->prixod; ?></td>
		<td><?php echo $model7->vozvrat; ?></td>
		<td><?php echo $model7->itog; ?></td>
		<td></td>
		<td><?php echo $model7->rashod; ?></td>
		<td></td>
		<td><?php echo $model7->endostatok; ?></td>
		<td><?php echo $model7->rachet; ?></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="9">Остаток на конец недели</td>
		<td><?php echo $model7->endostatok; ?></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="5">Итого оборот за неделю</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="5">Баланс за неделю: остаток на начало + приход = остаток на конец + расход</td>
		<td colspan="3"></td>
		<td colspan="3"></td>
		<td></td>
	</tr>
	
</table>