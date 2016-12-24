@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<form
					action="{{ route('users.store') }}"
					method="POST"
					class="form-horizontal"
				>

					{{ csrf_field() }}

					<input type="text" name="name" id="name" class="form-control">
					<label class="label label-primary">Name</label>

					<input type="email" name="email" id="email" class="form-control">
					<label class="label label-primary">Email</label>

					<input type="password" name="password" id="password" class="form-control">
					<label class="label label-primary">Password</label>

					<p>
					<button class="btn btn-success">Submit</button>
					</p>
				</form>
			</div>
		</div>
	</div>
@endsection
