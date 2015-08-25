@extends('admin.admin')
@section('content-header')
this is from pages 
@end
@section('content')

    <p>This is my page content.</p>
    <div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">Primary Solid Box Example</h3>
              <h3 class="box-title">Primary Solid Box Example</h3>

            </div><!-- /.box-header -->
            <div class="box-body">
              The body of the box
            </div><!-- /.box-body -->
    </div>
     @foreach ($pages as $page)
     {{$page}}
     @endforeach
@stop