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
		    </div>
			<div class="col-lg-5">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5><i class="fa fa-upload"></i> Yüklenmiş Öğeler</h5>
					@include('cms.includes.form-partials.ibox-resize')
				</div>
				<div class="ibox-content clearfix">
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
	'modal_id' => 'deleteIcon',
	'field' => 'icon',
	'route' => 'cms.'.$pageUrl.'.delete-file',
	'id' => ['record' => $record->id]
])
<!-- End Delete Object Modal -->
@endsection
@section('scripts')
	@include('cms.includes.form-partials.js-inserts')
@endsection