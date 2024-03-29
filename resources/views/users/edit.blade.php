@extends('layouts.app')

@section('content')

    <h1>{{ $micropost->id }} のメッセージ編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($micropost, ['route' => ['microposts.update', $micropost->id], 'method' => 'put']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-light']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection