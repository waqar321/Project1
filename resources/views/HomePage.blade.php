@extends('layouts.app')

@section('content')
		
	 @if(Session::has('status'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('status') !!}</strong>
            </div>
        @endif   
		
@endsection