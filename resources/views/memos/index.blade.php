@extends('welcome')

@section('content')
  <div class="container">
    <form action="memos" method="post">
      <textarea name="text" placeholder="メモしよう" class="form-control" style="width: 50%" rows="10"></textarea>
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <input type="submit" value="SENT" class="btn">
    </form>

    @foreach($memos as $memo)
      <p class="memo" style="width: 50%" rows="10">
        {{ $memo->text }}
        <!-- <input type="submit" value="削除" class="btn btn-delete"> -->
        <a href="/memos/{{$memo->id}}/delete">削除</a>
      </p>
    @endforeach
  </div>
@endsection