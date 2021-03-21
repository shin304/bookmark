@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ブックマーク一覧</div>
                  <div class="card-body">
                    <div class="p-2">
                      <a class="btn btn-primary" href="{{route('bookmarks.create')}}">新規登録</a>
                    </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>タイトル</th>
                          <th>アクション</th>
                        </tr>
                      </thead>
                      @foreach ($bookmarks as $bookmark)
                        <tbody class=" table-striped">
                          <tr>
                            <td>{{$bookmark->id}}</td>
                            <td><a href="{{ route('bookmarks.show', $bookmark) }}">{{$bookmark->title}}</a></td>
                            <td>
                              <a href="{{route('bookmarks.show', $bookmark)}}"><button class="btn btn-secondary">表示</button></a>
                              <a href="{{route('bookmarks.edit', $bookmark)}}"><button class="btn btn-secondary">編集</button></a>
                            </td>
                          </tr>
                        </tbody>
                      @endforeach
                    </table>
                  </div>
                  <div class="p-3 float-right">
                    {{$bookmarks->links()}}
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
