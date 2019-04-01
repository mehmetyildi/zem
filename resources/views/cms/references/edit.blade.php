@extends('layouts.cms')
@section('title') <title>{{ config('app.cms_name') }} | Düzenle</title> @endsection
@section('styles')
	@include('cms.includes.form-partials.css-inserts')
@endsection
@section('content')

	@component('cms.components.breadcrumb')
		@slot('page') Düzenle @endslot
		<li><a href="{{ route('cms.'.$pageUrl.'.index') }}">{{ $pageName }}</a></li>
	@endcomponent

	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			{!! Form::model($record, ['route' => ['cms.'.$pageUrl.'.update', $record->id], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
			{!! method_field('PUT') !!}
			<div class="col-lg-1 formActions">
				<a href="{{ route('cms.'.$pageUrl.'.index') }}" class="btn btn-sm btn-default"><i class="fa fa-arrow-left"></i> Geri</a>
				@can('edit_content')
					<button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-save"></i> Güncelle</button>
				@endcan
				@can('delete_content')
					<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i> Sil</button>
				@endcan
			</div>
			<div class="col-lg-6">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5><i class="fa fa-info-circle"></i> İçerik Bilgileri</h5>
						@include('cms.includes.form-partials.ibox-resize')
					</div>
					<div class="ibox-content">
						<div class="form-group">
							<label for="customer_id" class="col-sm-3 control-label">Müşteri</label>
							<div class="col-sm-9">
								<select class="select2 form-control" required name="customer_id" id="customer_id" tabindex="-1" style="display: none; width: 100%">
									<option></option>
									@foreach($customers as $customer)
										<option value="{{ $customer->id }}" {{ $record->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->title_tr }}</option>
									@endforeach
								</select>
								<div class="error" style="color: red;">{{ $errors->first('customer_id') }}</div>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label for="project_id" class="col-sm-3 control-label">Proje</label>
							<div class="col-sm-9">
								<select class="select2 form-control" name="project_id" id="project_id" tabindex="-1" style="display: none; width: 100%">
									<option></option>
									<option value="null">Kaldır</option>
									@foreach($projects as $project)
										<option value="{{ $project->id }}" {{ $record->project_id == $project->id ? 'selected' : '' }}>{{ $project->title_tr }}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5><i class="fa fa-bullhorn"></i> Vitrin</h5>
						@include('cms.includes.form-partials.ibox-resize')
					</div>
					<div class="ibox-content">
						<div class="form-group">
							<label class="col-sm-3 control-label" for="promote">Vitrine Al</label>
							<div class="col-sm-9">
								<input type="checkbox" name="promote" class="js-switch js-switch2" {{ $record->promote ? 'checked' : '' }}/>
							</div>
						</div>
						<hr>
					</div>
				</div>
				@include('cms.includes.form-partials.edit-publish-settings')
			</div>
			{!! Form::close() !!}
		</div>
	</div>


	<!-- Delete Modal -->
	@include('cms.includes.delete-modal', [
        'modal_id' => 'deleteModal',
        'route' => 'cms.'.$pageUrl.'.delete',
        'id' => ['role' => $record->id]
    ])
	<!-- End Delete Modal -->

@endsection

@section('scripts')
	@include('cms.includes.form-partials.js-inserts')
	<script>
        $(document).ready(function(){
            new Switchery(document.querySelector('.js-switch1'), { color: '#1AB394' });
            new Switchery(document.querySelector('.js-switch2'), { color: '#1AB394' });
            $("#customer_id").select2({placeholder: 'Seçiniz'});
            $("#project_id").select2({placeholder: 'Seçiniz'});
            $('.input-group.date1').datepicker({
                todayHighlight: true,
                format: "dd/mm/yyyy",
                weekStart: 1,
                startDate: "{{ todayWithFormat('d/m/Y') }}"
            });

        });
	</script>
@endsection