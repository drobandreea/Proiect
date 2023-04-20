@extends('layouts.master')
@section('content')
 <div class="panel panel-default">
 <div class="panel-heading">Produse lista</div>
 <div class="panel-body">
 <div class="pull-right">
 <a class="btn btn-default" href="{{ route('aliments.index')}}">Inapoi</a>
 </div>
 <div class="form-group">
 <strong>Nume: </strong> {{ $aliment->nume }}
 </div>
 <div class="form-group">
 <strong>Descriere: </strong> {{ $aliment->descriere }}
 <div class="form-group">
 <strong>Pret: </strong> {{ $aliment->pret }}
 </div>
 </div>
 </div>
@endsection