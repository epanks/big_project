@extends('adminlte::page')

@section('title', 'Paket')

@section('content_header')
    <h1>Paket</h1>
@stop

@section('content')
<div class="row">
<center>
        <div class="col-md-4">
            {!! Form::label('kdoutput', 'Pilih Kode Output') !!}
            {!! Form::select('kdoutput_id', $kodeoutput ,null , array('id'=>'kodeoutput','class' => 'form-control')) !!}
    </div>
</center>
</div>
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
          @endif     
        </div>
        <div class="box-body">
          <table id="laravel_datatable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Kode Output</th>
                <th>Nama Paket</th>
                <th>Pagu</th>
                <!-- <th>Keuangan</th>
                <th>Progres Keuangan</th> -->
                <th>Progres Fisik</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($paketlist as $paket)
                <tr>
                  <td>{{ $paket->kdoutput }}</td>
                  <td>{{ $paket->nmpaket }}</td>
                  <td class="text-right">{{ number_format($paket->pagurmp) }}</td>
                  <!-- <td class="text-right">{{ number_format($paket->keuangan) }}</td>
                  <td class="text-right">{{ number_format(($paket->keuangan),2) }}</td> -->
                  <td class="text-right">{{ number_format(($paket->progres_fisik),2) }}</td>
                  <td>
                                    <!-- <a href="/paket/{{$paket->id}}/edit">
                                        <i class="fa fa-edit blue"></i>
                                    </a>
                                    /
                                    <a href="/paket/{{$paket->id}}/delete">
                                        <i class="fa fa-trash red" onclick="return confirm('Yakin data mau dihapus')"></i>
                                    </a> -->
                                </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#laravel_datatable').DataTable();
            $('#kodeoutput').on('change', function(e){
                var id = e.target.value;
                $.get('{{ url('kdoutput')}}/'+kdoutput, function(data){
                    console.log(kdoutput);
                    console.log(data);
                    $('#kodeoutput').empty();
                    $.each(data, function(index, element){
                        $('#paket').append("<tr><td>"+element.kdoutput+"<tr><td>"+element.nmpaket+"</td><td>"+element.pagurmp+"</td>"+
                        "<td>"+element.progres_fisik+"</td></tr>");
                    });
                });
            });
        });
    </script>
@stop