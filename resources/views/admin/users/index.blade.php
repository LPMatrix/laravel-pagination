@extends('layouts.app')


@section('content')
	<div class="row">
	<div>{{$users->total()}} total users</div>
	<b>{{$users->count()}} on this page</b>
		<div class="col-md-6 col-md-offset-3">
			<ul class="list-group">
			@foreach($users as $user)
				<li class="list-group-item" style="margin-top: 20px">
					<span>{{$user->name}}</span>
					<span class="pull-right clearfix">{{$user->created_at->diffForHumans()}}
					<button class="btn btn-primary btn-xs">Follow</button>
					</span>
				</li>
			@endforeach
			</ul>
			{{$users->links()}}
		</div>
	</div>
@endsection