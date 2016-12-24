@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<p>Edit user named <strong>{{ $user->name }}</strong></p>
				<a href="{{ route('users.index') }}" class="btn btn-primary">
					Back
				</a>
			</div>
		</div>
	</div>
@endsection
