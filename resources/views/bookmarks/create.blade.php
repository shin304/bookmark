@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">ブックマーク登録</div>
                <div class="card-body">
                  <form action="{{ route('bookmarks.store') }}" method="POST">
                    @csrf
                     @include('components.input_form')
                    <div class="p-3">
                      <button type="submit" class="btn btn-primary">送信</button>
                      <a class="btn btn-secondary" href=" {{ route('bookmarks.index') }} ">一覧に戻る</a>
                    </div>
                  </form>
                </div>
          </div>
      </div>
  </div>
</div>
@endsection
