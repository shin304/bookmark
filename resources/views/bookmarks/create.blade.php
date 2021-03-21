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
                    <table class="table">
                      <tr>
                        <th class='w-25'>タイトル</th>
                        <td>
                          <label for="inputTitle" class="form-label"></label>
                          <input type="text" class="form-control" id="inputTitle" name='title' value="">
                        </td>
                      </tr>
                      <tr>
                        <th class='w-25'>URL</th>
                        <td>
                          <label for="inputUrl" class="form-label"></label>
                          <input type="text" class="form-control" id="inputUrl" name="url" value="">
                        </td>
                      </tr>
                      <tr>
                        <th class='w-25'>概要</th>
                        <td>
                          <label for="inputDescription" class="form-label"></label>
                          <input type="text" class="form-control" id="inputDescription" name="description" value="">
                        </td>
                      </tr>
                    </table>
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
