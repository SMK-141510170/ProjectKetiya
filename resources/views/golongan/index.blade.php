@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-">
            <div class="panel panel-info">
                <div class="panel-heading"><h3><center>Data Golongan</center></h3></div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <a href="{{url('/golongan/create')}}"class="btn btn-success form-control">Tambah Data Golongan</a><br><br>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6"><center>
                            <form action="{{url('/golongan')}}/?nama_golongan=nama_golongan">
                            <input type="text" name="nama_golongan" placeholder="Cari">
                            <input class="btn btn-sm btn-primary" type="submit" value="Cari" /></form>
                        </center></div>
                    </div>

                <div class="panel-body">
                    <table border="1" class="table table-striped table-border table-hover">
		<thead>
		
				<th>No</th>
				<th>Kode Golongan</th>
				<th>Nama Golongan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($golongan as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_g}}</td>
				<td>{{$data->nama_g}}</td>
				<td>{{$data->besar_uang}}</td>
				<td>
					<a href="{{route('golongan.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
                </div>
            </div>
        </div>
    </div>
</div>

	
@endsection