@extends('main')

@section('title', '| Edit Blog Post')

@section('stylesheets')
	{!! Html::style('css/select2.min.css') !!}

	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

	<script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'lists link emoticons',
            menubar: false
        });
	</script>
	@endsection

@section('content')

<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}
<div class="col-md-8">
	{{ Form::label('title', 'Title:') }}

	{{ Form::text('title', null, ["class" => 'form-control input-lg'])}}

	{{ Form::label('slug', 'Slug:') }}
	{{ Form::text('slug', null, ['class' => 'form-control'])}}

	{{ Form::label('category_id', 'Category:') }}
	{{ Form:: select('category_id', $categories, null, ['class' => 'form-control']) }}

	{{ Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) }}
	{{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-kkk', 'multiple' => 'multiple']) }}

	{{ Form::label('featured_image', 'Updaet featured image:') }}
	{{ Form::file('featured_image') }}

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

	{!! Html::script('js/select2.min.js') !!}

		<script type="text/javascript">
			$('.select2-kkk').select2();
			$('.select2-kkk').select2().val(tagsForThisPost).trigger('change');
		</script>


@endsection