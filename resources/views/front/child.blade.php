{{-- <!-- Stored in resources/views/child.blade.php -->

@extends('front.layout.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection
	
@section('content')
    <p>This is my body content.</p>
    <h1>
    	child: {{ $test }}
    </h1>
@endsection --}}

<h2>
	Child
</h2>
<h1>
	{{ echoTxt('aaaa') }}
</h1>