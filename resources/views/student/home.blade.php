@extends('layout.main')
@section('2')
    <div class="wrapper row2">
        <div class="rounded">
            <nav id="mainav" class="clear">
                <ul class="clear">
                    <li><a class="active" href="{{ route('student.submit') }}">Contribution</a>
                    <li><a class="active" href="#">Profiile</a>
                    <li class="active"><a href="{{ route('student.home') }}">Home</a></li>
                </ul>
            </nav>
        </div>
    </div>
