@extends('layouts.cms')
@section('title') <title>{{ config('app.cms_name') }} | Yeni {{ $pageItem }} Oluştur</title> @endsection
@section('styles')
	@include('cms.includes.form-partials.css-inserts')
@endsection
@section('content')

	@component('cms.components.breadcrumb')
		@slot('page') Yeni {{ $pageItem }} Oluştur @endslot
		<li><a href="{{ route('cms.'.$pageUrl.'.index') }}">{{ $pageName }}</a></li>
	@endcomponent

	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			{!! Form::open(['route' => 'cms.'.$pageUrl.'.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
			<div class="col-lg-1 formActions">
				<a href="{{ route('cms.'.$pageUrl.'.index') }}" class="btn btn-sm btn-default"><i class="fa fa-arrow-left"></i> Geri</a>
				<button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-save"></i> Kaydet</button>
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
										<option value="{{ $customer->id }}">{{ $customer->title_tr }}</option>
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
									@foreach($projects as $project)
										<option value="{{ $project->id }}">{{ $project->title_tr }}</option>
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
								<input type="checkbox" name="promote" class="js-switch js-switch2" />
							</div>
						</div>
						<hr>
					</div>
				</div>
				@include('cms.includes.form-partials.create-publish-settings')
			</div>
			{!! Form::close() !!}
		</div>
	</div>
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