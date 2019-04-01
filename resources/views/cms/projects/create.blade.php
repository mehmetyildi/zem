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
						<h5><i class="fa fa-picture-o"></i> Görseller</h5>
						@include('cms.includes.form-partials.ibox-resize')
					</div>
					<div class="ibox-content">
						@include('cms.includes.crop-image-area', ['title' => 'Ana Görsel (1600*900)', 'field' => 'main_image', 'ratio' => '1.78', 'required' => false])
					</div>
				</div>
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5><i class="fa fa-info-circle"></i> İçerik Bilgileri</h5>
						@include('cms.includes.form-partials.ibox-resize')
					</div>
					<div class="ibox-content">
						<div class="form-group">
							<label for="project_type_id" class="col-sm-3 control-label">Proje Tipi</label>
							<div class="col-sm-9">
								<select class="select2 form-control" required name="project_type_id" id="project_type_id" tabindex="-1" style="display: none; width: 100%">
									<option></option>
									@foreach($types as $type)
										<option value="{{ $type->id }}">{{ $type->title_tr }}</option>
									@endforeach
								</select>
							</div>
							<div class="error" style="color: red;">{{ $errors->first('project_type_id') }}</div>
						</div>
						<hr>
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
							<label for="product_id" class="col-sm-3 control-label">Ürün</label>
							<div class="col-sm-9">
								{{ Form::select('product_list[]', $products, null, ['id' => 'product_list', 'class' => 'form-control', 'multiple', 'style' => 'display: none; width: 100%;', 'tabindex' => '-1']) }}
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label for="city_id" class="col-sm-3 control-label">Şehir</label>
							<div class="col-sm-9">
								<select class="select2 form-control" required name="city_id" id="city_id" tabindex="-1" style="display: none; width: 100%">
									<option></option>
									@foreach($cities as $city)
										<option value="{{ $city->id }}">{{ $city->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label class="col-sm-3 control-label">Proje Adı</label>
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
							<label class="col-sm-3 control-label">Depo Alanı (m&sup2;)</label>
							<div class="col-sm-9">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#tab-area_size_tr"> TR</a></li>
									<li class=""><a data-toggle="tab" href="#tab-area_size_en">EN</a></li>
								</ul>
								<div class="tab-content">
									<div id="tab-area_size_tr" class="tab-pane active">
										{!! Form::text('area_size_tr', null, ['class' => 'form-control']) !!}
									</div>
									<div id="tab-area_size_en" class="tab-pane">
										{!! Form::text('area_size_en', null, ['class' => 'form-control']) !!}
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label class="col-sm-3 control-label">Süre</label>
							<div class="col-sm-9">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#tab-duration_tr"> TR</a></li>
									<li class=""><a data-toggle="tab" href="#tab-duration_en">EN</a></li>
								</ul>
								<div class="tab-content">
									<div id="tab-duration_tr" class="tab-pane active">
										{!! Form::text('duration_tr', null, ['class' => 'form-control']) !!}
									</div>
									<div id="tab-duration_en" class="tab-pane">
										{!! Form::text('duration_en', null, ['class' => 'form-control']) !!}
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label class="col-sm-3 control-label">Ön Yazı</label>
							<div class="col-sm-9">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#tab-caption_tr"> TR</a></li>
									<li class=""><a data-toggle="tab" href="#tab-caption_en">EN</a></li>
								</ul>
								<div class="tab-content">
									<div id="tab-caption_tr" class="tab-pane active">
										{!! Form::textarea('caption_tr', null, ['class' => 'form-control', 'rows' => '3']) !!}
									</div>
									<div id="tab-caption_en" class="tab-pane">
										{!! Form::textarea('caption_en', null, ['class' => 'form-control', 'rows' => '3']) !!}
									</div>
								</div>
								<div class="error" style="color: red;">{{ $errors->first('caption_tr') }}</div>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label class="col-sm-3 control-label">Yazı</label>
							<div class="col-sm-9">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#tab-description_tr"> TR</a></li>
									<li class=""><a data-toggle="tab" href="#tab-description_en">EN</a></li>
								</ul>
								<div class="tab-content">
									<div id="tab-description_tr" class="tab-pane active">
										{!! Form::textarea('description_tr', null, ['class' => 'form-control ckeditor', 'rows' => '3']) !!}
									</div>
									<div id="tab-description_en" class="tab-pane">
										{!! Form::textarea('description_en', null, ['class' => 'form-control ckeditor', 'rows' => '3']) !!}
									</div>
								</div>
								<div class="error" style="color: red;">{{ $errors->first('description_tr') }}</div>
							</div>
						</div>
						<hr>

						<div class="form-group">
							<label class="col-sm-3 control-label">Video Linki</label>
							<div class="col-sm-9">
								{!! Form::text('video_path', null, ['class' => 'form-control']) !!}
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
            $("#category_id").select2({placeholder: 'Seçiniz'});
            $("#customer_id").select2({placeholder: 'Seçiniz'});
            $("#project_type_id").select2({placeholder: 'Seçiniz'});
            $("#city_id").select2({placeholder: 'Seçiniz'});
            $("#product_list").select2({placeholder: 'Seçiniz'});
            $('.input-group.date1').datepicker({
                todayHighlight: true,
                format: "dd/mm/yyyy",
                weekStart: 1,
                startDate: "{{ todayWithFormat('d/m/Y') }}"
            });

        });
	</script>
@endsection