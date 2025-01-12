@extends('layouts.layout')

@section('breadcrumb')
  <!-- breadcrumb -->
  <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
    <li class="text-sm leading-normal">
      <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
    </li>
    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Cars</li>
  </ol>
  <h6 class="mb-0 font-bold capitalize">Cars</h6>
@endsection

@section('content')
    <div class="container">
        <h1>Dashboardaaa</h1>
    </div>
@endsection

