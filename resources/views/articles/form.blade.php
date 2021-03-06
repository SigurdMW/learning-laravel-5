<div class="form-group">
	{!! Form::label('title', 'Name:') !!}
	{!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('body', 'Body:') !!}
	{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('publish_at', 'Publish on:') !!}
	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tag_list', 'Tags:') !!}
	{!! Form::select('tag_list[]', $tags, null, ['class'=>'form-control', 'multiple']) !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary']) !!}
</div>

@section('footer')
<script type="text/javascript">
  $('select').select2({
  	placeholder: "Chose your tags",
  	//tags: true
  });
</script>
@stop