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
						@include('cms.includes.crop-image-area', ['title' => 'Ana Görsel (510*541)', 'field' => 'main_image', 'ratio' => '0.94', 'required' => false])
						@include('cms.includes.crop-image-area', ['title' => 'Mobil Görsel (434*300)', 'field' => 'mobil_image', 'ratio' => '1.45', 'required' => false])
						<div class="form-group">
							<label class="col-sm-3 control-label">İkon Dosyası (200x200)</label>
							<div class="col-sm-9">
								<div class="fileinput fileinput-new input-group col-sm-12" data-provides="fileinput">
									<div class="form-control" data-trigger="fileinput">
										<i class="glyphicon glyphicon-file fileinput-exists"></i>
										<span class="fileinput-filename"></span>
									</div>
									<span class="input-group-addon btn btn-default btn-file">
									<span class="fileinput-new">Dosya Seç</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file" name="icon">
								</span>
									<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Kaldır</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5><i class="fa fa-info-circle"></i> İçerik Bilgileri</h5>
						@include('cms.includes.form-partials.ibox-resize')
					</div>
					<div class="ibox-content">
						<div class="form-group">
							<label class="col-sm-3 control-label" for="isDetailedCategory">Detaylandırılmış Kategori?</label>
							<div class="col-sm-9">
								<input type="checkbox" name="isDetailedCategory" class="js-switch js-switch3" {{ $record->isDetailedCategory ? 'checked' : '' }}/>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label class="col-sm-3 control-label">URL</label>
							<div class="col-sm-9">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#tab-url_tr"> TR</a></li>
									<li class=""><a data-toggle="tab" href="#tab-url_en">EN</a></li>
								</ul>
								<div class="tab-content">
									<div id="tab-url_tr" class="tab-pane active">
										{!! Form::text('url_tr', null, ['class' => 'form-control', 'required']) !!}
									</div>
									<div id="tab-url_en" class="tab-pane">
										{!! Form::text('url_en', null, ['class' => 'form-control', 'required']) !!}
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<label class="col-sm-3 control-label">Başlık</label>
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
						@if($record->main_image)
							<div class="form-group">
								<label class="control-label col-sm-3">
									Mevcut Ana Görsel <br><br>
									<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteMainImage"><i class="fa fa-trash"></i> Sil</button>
								</label>
								<div class="input-group col-sm-9">
									<img src="{{ url('storage/'.$record->main_image) }}" class="img-responsive" alt="">
								</div>
							</div>
						@else
							Yüklenmiş Bir Ana Görsel Yok
						@endif
						<hr>
						@if($record->mobil_image)
							<div class="form-group">
								<label class="control-label col-sm-3">
									Mevcut Mobil <br><br>
									<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteParallaxImage"><i class="fa fa-trash"></i> Sil</button>
								</label>
								<div class="input-group col-sm-9">
									<img src="{{ url('storage/'.$record->mobil_image) }}" class="img-responsive" alt="">
								</div>
							</div>
						@else
							Yüklenmiş Bir Mobil Resim Yok
						@endif
						<hr>
						@if(strpos($record->video_path, 'https://www.youtube.com/embed/') !== false || strpos($record->video_path, 'https://player.vimeo.com/') !== false)
							<div class="form-group">
								<label class="control-label col-sm-3">Mevcut Video</label>
								<div class="input-group col-sm-9">
									<div class="controls embed-responsive embed-responsive-16by9" >
										<iframe class="embed-responsive-item" src="{{ $record->video_path }}" style="width:100%;"></iframe>
									</div>
									<small>*Videoyu silmek için "Video Linki" alanındaki linki silip, kaydı güncelleyin.</small>
								</div>
							</div>

						@else
							Yüklenmiş Bir Video Yok
						@endif
						<hr>
						@if($record->icon)
							<div class="form-group">
								<label class="control-label col-sm-3">
									Mevcut ikon <br><br>
									<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteIcon"><i class="fa fa-trash"></i> Sil</button>
								</label>
								<div class="input-group col-sm-9">
									<img src="{{ url('storage/'.$record->icon) }}" class="img-responsive" alt="">
								</div>
							</div>
						@else
							Yüklenmiş bir ikon yok.
						@endif

					</div>
				</div>
			</div>
		{!! Form::close() !!}
	</div>
</div>

<!-- Delete Object Modal -->
@include('cms.includes.delete-object-modal', [
	'modal_id' => 'deleteMainImage',
	'field' => 'main_image',
	'route' => 'cms.'.$pageUrl.'.delete-file',
	'id' => ['record' => $record->id]
])
<!-- End Delete Object Modal -->

<!-- Delete Object Modal -->
@include('cms.includes.delete-object-modal', [
	'modal_id' => 'deleteParallaxImage',
	'field' => 'mobil_image',
	'route' => 'cms.'.$pageUrl.'.delete-file',
	'id' => ['record' => $record->id]
])
<!-- End Delete Object Modal -->

<!-- Delete Object Modal -->
@include('cms.includes.delete-object-modal', [
	'modal_id' => 'deleteIcon',
	'field' => 'icon',
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
            new Switchery(document.querySelector('.js-switch3'), { color: '#1AB394' });
            $('.input-group.date1').datepicker({
                todayHighlight: true,
                format: "dd/mm/yyyy",
                weekStart: 1,
                startDate: "{{ todayWithFormat('d/m/Y') }}"
            });
            $('.input-group.date2').datepicker({
                todayHighlight: true,
                format: "dd/mm/yyyy",
                weekStart: 1
            });
        });
	</script>
@endsection