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
					@include('cms.includes.crop-image-area', ['title' => 'Ana Görsel (264*320)', 'field' => 'main_image', 'ratio' => '0.825', 'required' => false])
				</div>
			</div>
	        <div class="ibox float-e-margins">
	            <div class="ibox-title">
	                <h5><i class="fa fa-info-circle"></i> İçerik Bilgileri</h5>
					@include('cms.includes.form-partials.ibox-resize')
	            </div>
	            <div class="ibox-content">
					<div class="form-group">
						<label class="col-sm-3 control-label">Ad Soyad</label>
						<div class="col-sm-9">
							{!! Form::text('name', null, ['class' => 'form-control']) !!}
						</div>
						<div class="error" style="color: red;">{{ $errors->first('name') }}</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Pozisyon</label>
						<div class="col-sm-9">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#tab-job_title_tr"> TR</a></li>
								<li class=""><a data-toggle="tab" href="#tab-job_title_en">EN</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab-job_title_tr" class="tab-pane active">
									{!! Form::text('job_title_tr', null, ['class' => 'form-control']) !!}
								</div>
								<div id="tab-job_title_en" class="tab-pane">
									{!! Form::text('job_title_en', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="error" style="color: red;">{{ $errors->first('job_title_tr') }}</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">İş Telefonu</label>
						<div class="col-sm-4">
							{!! Form::text('desk_phone', null, ['class' => 'form-control']) !!}
						</div>
						<label class="col-sm-2 control-label">Dahili</label>
						<div class="col-sm-3">
							{!! Form::text('desk_extension', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Cep Telefonu</label>
						<div class="col-sm-9">
							{!! Form::text('mobile_phone', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Fax</label>
						<div class="col-sm-9">
							{!! Form::text('pbx', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">E-Posta</label>
						<div class="col-sm-9">
							{!! Form::text('email', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Linkedin</label>
						<div class="col-sm-9">
							{!! Form::text('linkedin', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Whatsapp</label>
						<div class="col-sm-9">
							{!! Form::text('whatsapp', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">VCF Dosyası</label>
						<div class="col-sm-9">
							<div class="fileinput fileinput-new input-group col-sm-12" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput">
									<i class="glyphicon glyphicon-file fileinput-exists"></i>
									<span class="fileinput-filename"></span>
								</div>
								<span class="input-group-addon btn btn-default btn-file">
									<span class="fileinput-new">Dosya Seç</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file" name="vcf">
								</span>
								<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Kaldır</a>
							</div>
						</div>
					</div>
				</div>
	        </div>
	    </div>
		<div class="col-lg-5">
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
            $('.input-group.date1').datepicker({
                todayHighlight: true,
                format: "dd/mm/yyyy",
                weekStart: 1,
                startDate: "{{ todayWithFormat('d/m/Y') }}"
            });
        });
	</script>
@endsection