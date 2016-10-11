@extends('layouts.default')


@section('content')

	<div class="col-md-6 col-md-offset-3">
		<h1>Notes</h1>

		<ul class="list-group">
			@foreach ($notes as $note)
				<li class="list-group-item">{{ $note->name }}</li>
			@endforeach
		</ul>

	</div>

	<hr>

	<div class="col-md-6 col-md-offset-3">

		<form method="POST" action="submission" >
			{{ csrf_field() }}

			<div class="form-group">
				<label for="exampleTextarea">Add new Note </label>
				<textarea class="form-control" name="body" rows="3"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Note</button>
			</div>

		</form>

	</div>


@endsection