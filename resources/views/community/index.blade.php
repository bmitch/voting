@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Community</h1>

		<ul class="Links">
		@foreach ($links as $link)
			<li class="Links__link">
				<a href="{{ $link->link }}" target="_blank">
					{{ $link->title}}
				</a>

				<small>
					Contributed by {{ $link->creator->name }} {{ $link->updated_at->diffForHumans() }}
				</small>
			</li>
		@endforeach
		</ul>
	</div>
	
@stop