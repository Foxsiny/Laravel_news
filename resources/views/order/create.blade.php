@extends('layouts.order')
@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Добавить заявку</h1>
    </div>

    @if ($errors->any())
        @foreach($errors->all() as $error)
            <x-alert type="danger" :message="$error"></x-alert>
        @endforeach
    @endif

    <form method="post" action="{{ route('order.store', ['query' => 'test']) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"/>
        </div>
        <div class="form-group">
            <label for="tel">Телефона</label>
            <input type="tel" name="tel" id="tel" class="form-control" value="{{ old('tel') }}"/>
        </div>
        <div class="form-group">
            <label for="image">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"/>
        </div>
{{--        <div class="form-group">--}}
{{--            <label for="status">Статус</label>--}}
{{--            <select class="form-control" name="status" id="status">--}}
{{--                <option @if(old('status') === 'DRAFT') selected @endif>DRAFT</option>--}}
{{--                <option @if(old('status') === 'ACTIVE') selected @endif>ACTIVE</option>--}}
{{--                <option @if(old('status') === 'BLOCKED') selected @endif>BLOCKED</option>--}}
{{--            </select>--}}
{{--        </div>--}}
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
        </div>

        <br/>
        <button type="submit" class="btn btn-success">Cохранить</button>
    </form>

@endsection

