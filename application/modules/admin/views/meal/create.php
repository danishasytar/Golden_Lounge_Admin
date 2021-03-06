<?php echo $form->messages(); ?>

<div class="row">

	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Meal Info</h3>
			</div>
			<div class="box-body">
				<?php echo $form->open(); ?>

					<?php echo $form->bs3_text('Meal Name', 'name'); ?>

					<?php echo $form->bs3_text('Meal Ingredient', 'ingredient'); ?>

					<label for="facility_types">Meal Type</label>
					<div class="row">
						<div class="col-md-3">
							<?php echo $form->field_dropdown('type', $mealtype); ?>
						</div>
					</div>
					<br>

					<label for="facility_types">Meal Time Serving</label>
					<div class="row">
						<div class="col-md-3">
							<?php echo $form->field_dropdown('timeserving', $mealtimeserving); ?>
						</div>
					</div>
					<br>

					<label for="facility_types">Availability</label>

					<div class="row">
						<div class="col-md-3">
							<?php echo $form->field_dropdown('availability', $availability); ?>
						</div>
	

					</div>
					<br>

					<div  class="row">
						<div class="col-md-3">
	 						<?php echo $form->bs3_submit(); ?>
						</div>
						<div class="col-md-9">
            				<a class='btn btn-flat btn-primary' href='facility/view_all2'>Back</a>
						</div>
					</div>
				
					
				<?php echo $form->close(); ?>
			</div>
		</div>
	</div>
	
</div>