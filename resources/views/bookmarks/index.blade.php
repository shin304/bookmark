@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ブックマーク一覧</div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>タイトル</th>
                        </tr>
                      </thead>
                      @foreach ($bookmarks as $bookmark)
                        <tbody class=" table-striped">
                          <tr>
                            <td>{{$bookmark->id}}</td>
                            <td><a href="{{ route('bookmarks.show', $bookmark) }}">{{$bookmark->title}}</a></td>
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
