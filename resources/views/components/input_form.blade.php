<table class="table">
  <tr>
    <th class='w-25'>タイトル</th>
    <td>
      <label for="inputTitle" class="form-label"></label>
      <input type="text" class="form-control @error('url') is-invalid @enderror" id="inputTitle" name='title' value="{{$bookmark->title ?? ''}}">
      @error('title')
        @include('components.validation_error')
      @enderror
    </td>
  </tr>
  <tr>
    <th class='w-25'>URL</th>
    <td>
      <label for="inputUrl" class="form-label"></label>
      <input type="text" class="form-control @error('url') is-invalid @enderror" id="inputUrl" name="url" value="{{$bookmark->url ?? ''}}">
      @error('url')
        @include('components.validation_error')
      @enderror
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
