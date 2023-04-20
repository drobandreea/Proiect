@extends('layouts.master')
@section('content')
 <div class="panel panel-default">
 <div class="panel-heading"> Modificare detalii produs</div>
 <div class="panel-body">
 @if (count($errors) > 0)
 <div class="alert alert-danger">
 <strong>Eroare:</strong>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 {!! Form::model($aliment, ['method' => 'PATCH','route' => ['aliments.update', $aliment->id]]) !!}
 <div class="form-group">
 <label for="nume">Nume</label>
 <input type="text" name="nume" class="form-control" value="{{$aliment->nume }}">
 </div>
 <div class="form-group">
 <label for="descriere">Descriere</label>
 <textarea name="descriere" class="form-control" rows="3">{{ $aliment->descriere }}</textarea>
 </div>
 <div class="form-group">
 <label for="pret">Pret</label>
 <input type="text" name="pret" class="form-control" value="{{$aliment->pret }}">
 </div>
 <div class="form-group">
 <input type="submit" value="Salvare Modificari" class="btn btn-info">
 <a href="{{route('aliments.index') }}" class="btn btndefault">Cancel</a>
 </div>
 {!! Form::close() !!}
 </div>
 </div>
@endsection