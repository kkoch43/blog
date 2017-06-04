@extends('main')

@section('title', '| Edit Blog Post')
<link media="all" type="text/css" rel="stylesheet" href="css/select2.min.css">

@section('content')

<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
<div class="col-md-8">
	{{ Form::label('title', 'Title:') }}

	{{ Form::text('title', null, ["class" => 'form-control input-lg'])}}

	{{ Form::label('slug', 'Slug:') }}
	{{ Form::text('slug', null, ['class' => 'form-control'])}}

	{{ Form::label('category_id', 'Category:') }}
	{{ Form:: select('category_id', $categories, null, ['class' => 'form-control']) }}

	{{ Form::label('body', 'Body:', ["class" => 'btn-h1-spacing']) }}
	{{ Form::textarea('body', null, ["class" => 'form-control'])}}
	</div>

		<div class="col-md-4">
			<div class="well">
			<dl clas=="horizontal">
				<dt>Created at:</dt>
				<dd>{{ date( 'M j, Y H:i', strtotime($post->created_at)) }}</dd>

				</dl>

				<dl clas=="horizontal">
				<dt>Last Updated:</dt>
				<dd>{{ date( 'M j, Y H:i', strtotime($post->updated_at)) }}</dd>

				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
						
				</div>
				<div class="col-sm-6">

						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
				</div>


			</div>

		</div>

		{!! Form::close()!!}

	</div>
</div>


@stop

	@section('scripts')


		<script src="select2.full.min.js"></script>

@endsection