@extends('layouts.app')
@section('content')
 <div class="panel panel-default">
 <div class="panel-heading">Adauga produs nou in lista ta de cumparaturi!</div>
 <div class="panel-body">
@if (count($errors) > 0)
 <div class="alert alert-danger">
 <strong>Errors:</strong>
 <ul>
@foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
 {{ Form::open(array('route' => 'aliments.store','method'=>'POST')) }}
<div class="form-group">
<label for="nume">Nume</label>
<input type="text" name="nume" class="form-control" value="{{old('nume') }}">
</div>
<div class="form-group">
<label for="descriere">Descriere</label>
<textarea name="descriere" class="form-control" rows="3">{{old('descriere') }}</textarea>
</div>
<div class="form-group">
<label for="pret">Pret</label>
<input type="text" name="pret" class="form-control" value="{{old('pret') }}">
</div>
<div class="form-group">
<input type="submit" value="Adauga Sarcina" class="btn btn-info">
<a href="{{ route('aliments.index') }}" class="btn btndefault">Cancel</a>
</div>
 {{ Form::close() }}
</div>
</div>
@endsection
