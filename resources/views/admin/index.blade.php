@extends('layouts.layout')

@section('content')
  <div id="admin-datatable"></div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function () {
      $('#admin-datatable').load('/admin/datatable');
    });
  </script>
@endsection