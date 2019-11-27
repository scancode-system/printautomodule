<div class="tab-pane {{ ($tab=='order_setting_print')?'show active':'' }}" >
	@alert_errors()
	@alert_success()
	{{ Form::model($setting_print_auto, ['route' => 'setting_print_auto.update', 'method' => 'put']) }}
	<div class="form-group">
		{{ Form::label('number_copies', 'Número de vias') }}
		{{ Form::text('number_copies', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group row">
		{{ Form::label('auto', 'Impressão Automática', ['class' => 'col-sm-2 col-form-label']) }}
		<div class="col-sm-10">
			<label class="switch switch-primary switch-lg mb-0 ml-3">
				{{ Form::hidden('auto', 0) }}
				{{ Form::checkbox('auto', 1, null,['class' => 'switch-input']) }}
				<span class="switch-slider"></span>
			</label>
		</div>
	</div>
	{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
	{{ Form::close() }}
</div>