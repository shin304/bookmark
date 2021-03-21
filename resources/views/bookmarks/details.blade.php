@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">ブックマーク詳細</div>
                <div class="card-body">
                  <table class="table">
                    <tr>
                      <th class='w-25'>タイトル</th>
                      <td>{{$bookmark->title}}</td>
                    </tr>
                    <tr>
                      <th class='w-25'>URL</th>
                      <td><a href="{{$bookmark->url}}">{{$bookmark->url}}</a></td>
                    </tr>
                    <tr>
                      <th class='w-25'>概要</th>
                      <td>{{$bookmark->description}}</td>
                    </tr>
                    <tr>
                      <th class='w-25'>作成日</th>
                      <td>{{$bookmark->created_at->format('y年m月d日')}}</td>
                    </tr>
                  </table>
                  <a href="{{route('bookmarks.edit', $bookmark)}}"><button class="btn btn-success">編集する</button></a>
                </div>
          </div>
      </div>
  </div>
</div>
@endsection
