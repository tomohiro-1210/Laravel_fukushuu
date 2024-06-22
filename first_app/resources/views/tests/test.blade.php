テスト画面

@foreach($values as $value)
<p>{{ $value->text }}</p>
<p>{{ $value->name }}</p>
@endforeach