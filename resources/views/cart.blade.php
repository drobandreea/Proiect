@extends('layoutcos')
@section('title', 'Cart')
@section('content')
 <table id="cart" class="table table-hover table-condensed">
 <thead>
 <tr>
 <th style="width:50%">Product</th>
 <th style="width:10%">Pret</th>
 <th style="width:8%">Cantitate</th>
 <th style="width:22%" class="text-center">Subtotal</th>
 <th style="width:10%"></th>
 </tr>
 </thead>
 <tbody>
 <?php $total = 0 ?>
 @if(session('cart'))
 @foreach(session('cart') as $id => $details)
 <?php $total += $details['pret'] * $details['cantitate'] ?>
 <tr>
 <td data-th="Product">
 <div class="row">
 <div class="col-sm-3 hidden-xs"><img src="{{ $details['imagine'] }}" width="100" height="100" class="imgresponsive"/></div>
 <div class="col-sm-9">
 <h4 class="nomargin">{{ $details['nume'] }}</h4>
 </div>
 </div>
 </td>
 <td data-th="Pret">Lei {{ $details['pret'] }}</td>
 <td data-th="Cantitate">
 <input type="number" value="{{ $details['cantitate'] }}" class="form-control cantitate" />
 </td>
 <td data-th="Subtotal" class="text-center">Lei {{ $details['pret'] * $details['cantitate'] }}</td>
 <td class="actions" data-th="">
 <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i>Update</button> 
 <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i>Delete</button>
 </td>
 </tr>
 @endforeach
 @endif
 </tbody>
 <tfoot>
 <tr class="visible-xs">
 <td class="text-center"><strong>Total {{ $total }} lei</strong></td>
 </tr>
 <tr>
 <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuare Cumparaturi</a></td>
 <td colspan="2" class="hidden-xs"></td>
 <td class="hidden-xs text-center"><strong>Total {{ $total }} lei</strong></td>
 </tr>
 </tfoot>
 </table>
@section('scripts')
 <script type="text/javascript">
 $(".update-cart").click(function (e) {
 e.preventDefault();
 var ele = $(this);
 $.ajax({
 url: '{{ url('update-cart') }}',
 method: "patch",
 data: {_token: '{{ csrf_token() }}', 
 id: ele.attr("data-id"), 
 cantitate: ele.parents("tr").find(".cantitate").val()},
 success: function (response) {
 window.location.reload();
 }
 });
 });
 $(".remove-from-cart").click(function (e) {
 e.preventDefault();
 var ele = $(this);
 if(confirm("Esti sigur!!!")) {
 $.ajax({
 url: '{{ url('remove-from-cart') }}',
 method: "DELETE",
 data: {_token: '{{ csrf_token() }}', 
 id: ele.attr("data-id")},
 success: function (response) {
 window.location.reload();
 }
 });
 }
 });
 </script>
@endsection
 <script type="text/javascript">
 $(".update-cart").click(function (e) {
 e.preventDefault();
 var ele = $(this);
 $.ajax({
 url: '{{ url('update-cart') }}',
 method: "patch",
 data: {_token: '{{ csrf_token() }}', 
 id: ele.attr("data-id"),
 cantitate: ele.parents("tr").find(".cantitate").val()},
 success: function (response) {
 window.location.reload();
 }
 });
 });
 $(".remove-from-cart").click(function (e) {
 e.preventDefault();
 var ele = $(this);
 if(confirm("Esti sigur!!!")) {
 $.ajax({
 url: '{{ url('remove-from-cart') }}',
 method: "DELETE",
 data: {_token: '{{ csrf_token() }}', 
 id: ele.attr("data-id")},
 success: function (response) {
 window.location.reload();
 }
 });
 }
 });
 </script>
@endsection
