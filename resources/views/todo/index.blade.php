@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Todos</div>
                @foreach ($todos as $todo)
                <div class="panel-body">
                    {{ $todo->text }}
                    <br>
                    <form method="POST" id="update_{{$todo->id}}" class="form-horizontal"  action="{{ route('todos.update', ['id' => $todo->id ]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="id" value="{{$todo->id}}" />
                        Completed <input onclick="javascript:document.getElementById('update_{{$todo->id}}').submit()" id="completed" type="checkbox" class="" name="completed"  {{ $todo->completed ? 'checked' : '' }}>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
