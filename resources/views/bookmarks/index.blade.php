@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ブックマーク一覧</div>
                  <div class="card-body">
                    @include('components.alert')
                    <div class="p-2">
                      <a class="btn btn-primary" href="{{route('bookmarks.create')}}">新規登録</a>
                    </div>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>投稿No.</th>
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
                              <div class="d-flex">
                                <a href="{{route('bookmarks.show', $bookmark)}}"><button class="btn btn-secondary ml-1">表示</button></a>
                                <a href="{{route('bookmarks.edit', $bookmark)}}"><button class="btn btn-success ml-1">編集</button></a>
                                <form action="{{route('bookmarks.destroy', $bookmark)}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                    <button onclick="return confirm('本当に削除してよろしいですか？')" type="submit" class="btn btn-danger ml-1">削除</button>
                                </form>
                              </div>
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
