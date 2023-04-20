@extends('layouts.master')
@section('content')
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 <div class="panel panel-default">
 <div class="panel-heading">
 Lista produse pe care doriti sa le cumparati
 </div>
 <div class="panel-body">
 <div class="form-group">
 <div class="pull-right">
 <a href="/aliments/create" class="btn btn-default">Adaugare Produs Nou</a>
 <div> <a href="{{URL::to('/') }}" class="btn btn-default"> Spre lista de cumparaturi</a> </div>
 </div>
 </div>
 <table class="table table-bordered table-stripped">
 <tr>
 <th width="20">No</th>
 <th>Nume</th>
 <th>Descriere</th>
 <th>Pret</th>
 <th width="300">Actiune</th>
 </tr>
 @if (count($aliments) > 0)
 @foreach ($aliments as $key => $aliment)
 <tr>
 <td>{{ ++$i }}</td>
 <td>{{ $aliment->nume }}</td>
 <td>{{ $aliment->descriere }}</td>
 <td>{{ $aliment->pret }}</td>
 <td>
 <a class="btn btn-success" href="{{route('aliments.show',$aliment->id) }}">Vizualizare</a>
 <a class="btn btn-primary" href="{{route('aliments.edit',$aliment->id) }}">Modificare</a>
 {{ Form::open(['method' => 'DELETE','route' =>['aliments.destroy', $aliment->id],'style'=>'display:inline']) }}
 {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
 {{ Form::close() }}
 </td>
 </tr>
 @endforeach
 @else
 <tr>
 <td colspan="4">Nu exista alimente!</td>
 </tr>
 @endif
 </table>
<!-- Introduce nr pagina -->
{{$aliments->render()}}
 </div>
 </div>
@endsection