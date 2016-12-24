@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<p>User's name: {{ $user->name }}</p>
				<a href="{{ route('users.index') }}" class="btn btn-primary">
					Back
				</a>
			</div>
		</div>
	</div>
@endsection
