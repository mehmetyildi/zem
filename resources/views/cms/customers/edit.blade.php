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
						<h5><i class="fa fa-picture-o"></i> Görseller</h5>
						@include('cms.includes.form-partials.ibox-resize')
					</div>
					<div class="ibox-content">
						@include('cms.includes.crop-image-area', ['title' => 'Logo (200x200)', 'field' => 'logo', 'ratio' => '1', 'required' => false])
						@include('cms.includes.crop-image-area', ['title' => 'Temsilci Görseli (200x200)', 'field' => 'staff_image', 'ratio' => '1', 'required' => false])
					</div>
				</div>
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5><i class="fa fa-info-circle"></i> İçerik Bilgileri</h5>
						@include('cms.includes.form-partials.ibox-resize')
					</div>
					<div class="ibox-content">
						<div class="form-group">
							<label class="col-sm-3 control-label">Firma Adı</label>
							<div class="col-sm-9">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#tab-title_tr"> TR</a></li>
									<li class=""><a data-toggle="tab" href="#tab-title_en">EN</a></li>
								</ul>
								<div class="tab-content">
									<div id="tab-title_tr" class="tab-pane active">
										{!! Form::text('title_tr', null, ['class' => 'form-control']) !!}
									</div>
									<div id="tab-title_en" class="tab-pane">
										{!! Form::text('title_en', null, ['class' => 'form-control']) !!}
									</div>
								</div>
								<div class="error" style="color: red;">{{ $errors->first('title_tr') }}</div>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label for="tag_list" class="col-sm-3 control-label">Sektörler</label>
							<div class="col-sm-9">
								{{ Form::select('sector_list[]', $sectors, $record->sectors, ['id' => 'sector_list', 'class' => 'form-control', 'multiple', 'style' => 'display: none; width: 100%;', 'tabindex' => '-1']) }}
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label class="col-sm-3 control-label">Temsilci Ad Soyad</label>
							<div class="col-sm-9">
								{!! Form::text('staff_name', null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label class="col-sm-3 control-label">Temsilci Pozisyonu</label>
							<div class="col-sm-9">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#tab-staff_title_tr"> TR</a></li>
									<li class=""><a data-toggle="tab" href="#tab-staff_title_en">EN</a></li>
								</ul>
								<div class="tab-content">
									<div id="tab-staff_title_tr" class="tab-pane active">
										{!! Form::text('staff_title_tr', null, ['class' => 'form-control']) !!}
									</div>
									<div id="tab-staff_title_en" class="tab-pane">
										{!! Form::text('staff_title_en', null, ['class' => 'form-control']) !!}
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label class="col-sm-3 control-label">Müşteri Değerlendirmesi</label>
							<div class="col-sm-9">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#tab-testimonial_tr"> TR</a></li>
									<li class=""><a data-toggle="tab" href="#tab-testimonial_en">EN</a></li>
								</ul>
								<div class="tab-content">
									<div id="tab-testimonial_tr" class="tab-pane active">
										{!! Form::textarea('testimonial_tr', null, ['class' => 'form-control', 'rows' => '3']) !!}
									</div>
									<div id="tab-testimonial_en" class="tab-pane">
										{!! Form::textarea('testimonial_en', null, ['class' => 'form-control', 'rows' => '3']) !!}
									</div>
								</div>
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
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5><i class="fa fa-upload"></i> Yüklenmiş Öğeler</h5>
						@include('cms.includes.form-partials.ibox-resize')
					</div>
					<div class="ibox-content clearfix">
						@if($record->logo)
							<div class="form-group">
								<label class="control-label col-sm-3">
									Mevcut logo <br><br>
									<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteLogo"><i class="fa fa-trash"></i> Sil</button>
								</label>
								<div class="input-group col-sm-9">
									<img src="{{ url('storage/'.$record->logo) }}" class="img-responsive" alt="">
								</div>
							</div>
						@else
							Yüklenmiş bir logo yok.
						@endif
							@if($record->staff_image)
								<div class="form-group">
									<label class="control-label col-sm-3">
										Mevcut temsilci görseli <br><br>
										<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteStaffImage"><i class="fa fa-trash"></i> Sil</button>
									</label>
									<div class="input-group col-sm-9">
										<img src="{{ url('storage/'.$record->staff_image) }}" class="img-responsive" alt="">
									</div>
								</div>
							@else
								Yüklenmiş bir temsilci görseli yok.
							@endif
					</div>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>

	<!-- Delete Object Modal -->
	@include('cms.includes.delete-object-modal', [
        'modal_id' => 'deleteStaffImage',
        'field' => 'staff_image',
        'route' => 'cms.'.$pageUrl.'.delete-file',
        'id' => ['record' => $record->id]
    ])
	<!-- End Delete Object Modal -->

	<!-- Delete Object Modal -->
	@include('cms.includes.delete-object-modal', [
        'modal_id' => 'deleteLogo',
        'field' => 'logo',
        'route' => 'cms.'.$pageUrl.'.delete-file',
        'id' => ['record' => $record->id]
    ])
	<!-- End Delete Object Modal -->

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
            $("#sector_list").select2({placeholder: 'Sektörleri Seçiniz'});
            $('.input-group.date1').datepicker({
                todayHighlight: true,
                format: "dd/mm/yyyy",
                weekStart: 1,
                startDate: "{{ todayWithFormat('d/m/Y') }}"
            });
        });
	</script>
@endsection