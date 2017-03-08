@extends('main')

@section('title', '| Create New Post')




<link media="all" type="text/css" rel="stylesheet" href="css/parsley.css">



@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>

			{!! Form::open(['url' => 'save', 'data-parsely-validate' =>'']) !!}
   				 
   				 {{ Form::label('title', 'Title:')}}
   				 {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))}}

   				 {{ Form::label('body', "Post Body:")}}
   				 {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => ''))}}

   				 {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}


			{!! Form::close() !!}

	</div>
</div>

@endsection

@section('scripts')

<script src="js/parsley.min.js"></script>

@endsection
