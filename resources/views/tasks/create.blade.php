@extends('layouts.app')

@section('content')
    
    <h1>タスク新規作成ページ</h1>
    
    @include('commons.error_messages')

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6 col-lg-offset-3">
        {!! Form::model($tasks, ['route' => 'tasks.store']) !!}
            
            <div class="form-group">
                {!! Form::label('content', 'タスク:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
    
            <div class="form-group">
                {!! Form::label('status', 'ステータス:') !!}
                {!! Form::select('status',[
                                '' => '',
                                '未着手' => '未着手',
                                '着手中' => '着手中',
                                '完了' => '完了',
                                '取り止め' => '取り止め'
                                ], null, ['class' => 'form-control']) !!}
            </div>
            
            {!! Form::submit('投稿' ,['class' => 'btn btn-primary']) !!}
                
            
        {!! Form::close() !!}
        </div>
    </div>    

@endsection