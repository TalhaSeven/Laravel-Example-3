@extends('layouts.master')
@section('content2')

{{dd($courses)}}
<pre>
{{ print_r($courses) }}
</pre>
<p>///////////////</p>
@php

    var_dump($courses) ;
    
    $i='';
@endphp

    @empty($i)
        <div class="alert alert-danger">Danger</div>
    @endempty

    

@endsection