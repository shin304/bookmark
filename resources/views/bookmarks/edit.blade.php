@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">ブックマーク編集</div>
                <div class="card-body">
                  <form action="{{ route('bookmarks.update', $bookmark) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <table class="table">
                      <tr>
                        <th class='w-25'>タイトル</th>
                        <td>
                          <label for="inputTitle" class="form-label"></label>
                          <input type="text" class="form-control" id="inputTitle" name='title' value="{{$bookmark->title ?? ''}}">
                        </td>
                      </tr>
                      <tr>
                        <th class='w-25'>URL</th>
                        <td>
                          <label for="inputUrl" class="form-label"></label>
                          <input type="text" class="form-control" id="inputUrl" name="url" value="{{$bookmark->url ?? ''}}">
                        </td>
                      </tr>
                      <tr>
                        <th class='w-25'>概要</th>
                        <td>
                          <label for="inputDescription" class="form-label"></label>
                          <input type="text" class="form-control" id="inputDescription" name="description" value="{{$bookmark->description ?? ''}}">
                        </td>
                      </tr>
                    </table>
                    <div class="p-3">
                      <button type="submit" class="btn btn-primary">更新</button>
                      <a class="btn btn-secondary" href=" {{ route('bookmarks.index') }} ">一覧に戻る</a>
                    </div>
                  </form>
                </div>
          </div>
      </div>
  </div>
</div>
@endsection
