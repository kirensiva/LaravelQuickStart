@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Todo</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('todos.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Text</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="text" value="{{ old('text') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('text') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('completed') ? ' has-error' : '' }}">
                            <label for="completed" class="col-md-4 control-label">Is Completed</label>

                            <div class="col-md-6">
                                <input id="completed" type="checkbox" class="" name="completed"  {{ old('remember') ? 'checked' : '' }}> 

                                @if ($errors->has('completed'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('completed') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

<!--                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>

                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
