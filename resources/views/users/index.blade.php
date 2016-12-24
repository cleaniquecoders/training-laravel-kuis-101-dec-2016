@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>User Manager
			<a href="{{ route('users.create') }}"
				class="btn btn-success">
				New User
			</a>
		</h1>
		{{ $users->links() }}
		<table class="table table-condensed table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>E-mail</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							<div class="btn-group">
								<a
									href="{{ route('users.show', ['id' => $user->id]) }}"
									class="btn btn-info">Details</a>
								<a
									href="{{ route('users.edit', ['id' => $user->id]) }}"
									class="btn btn-primary">Edit</a>

								<a
									href="{{ route('users.destroy', ['id' => $user->id]) }}"
									class="btn btn-danger"
                                    onclick="event.preventDefault();
                                             if(confirm('Are you sure want to remove {{ $user->name }}?')){
                                             	document.getElementById('delete-form-{{ $user->id }}').submit();
                                             }">
                                    Delete
                                </a>

                                <form
                                	id="delete-form-{{ $user->id }}"
                                	action="{{ route('users.destroy', ['id' => $user->id]) }}"
                                	method="POST"
                                	style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>

							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $users->links() }}
	</div>
@endsection
