@extends('admin.admin')
@section('content')
	 <?php Form::open(array('url'=>'form-submit')) ; ?>
  	<?php  Form::label('username','Username',array('id'=>'','class'=>'')); ?>
 	<?php  Form::text('username','clivern'); ?>
   	<?php Form::close() ; ?>
   	<form method="post">
   		<input type="text" name ="code">
   		<input type="submit">
   	</form>
@stop