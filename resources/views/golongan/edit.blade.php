@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
               <div class="panel-heading">Edit golongan</div>
                <div class="panel-body">
					{!! Form::model($golongan,['method'=>'PATCH','route'=>['golongan.update',$golongan->id]])!!}
						{!! Form::hidden('id',null,['class'=>'form-control']) !!}
                        <div class="form-group{{ $errors->has('kode_golongan') ? ' has-error' : '' }}">
                            <label for="kode_golongan" class="col-md-4 control-label">Kode Golongan</label>

                            <div class="col-md-6">
                                {!! Form::text('kode_golongan',null,['class'=>'form-control']) !!}
                                @if ($errors->has('kode_golongan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_golongan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama_golongan') ? ' has-error' : '' }}">
                            <label for="nama_golongan" class="col-md-4 control-label">Nama Golongan</label>

                            <div class="col-md-6">
                                {!! Form::text('nama_golongan',null,['class'=>'form-control']) !!}

                                @if ($errors->has('nama_golongan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_golongan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('besar_uang') ? ' has-error' : '' }}">
                            <label for="besar_uang" class="col-md-4 control-label">Besar Uang</label>

                            <div class="col-md-6">
                                {!! Form::text('besar_uang',null,['class'=>'form-control']) !!}

                                @if ($errors->has('besar_uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('besar_uang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
						{!! Form::submit('Save',['class'=>'btn btn-primary form-control']) !!}
					</div>
				{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection