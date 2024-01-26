@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="title p-2">
                                    <h1>{{ Str::limit($headline->name, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ Str::limit($headline->gender, 70) }}</p>
                            <p class="body mx-auto">《趣味》<br />
                            {{($headline->hobby) }}</p>
                            <p class="body mx-auto">《自己紹介》<br />
                            {{($headline->introduction) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            
        </div>
    </div>
    </div>
@endsection
