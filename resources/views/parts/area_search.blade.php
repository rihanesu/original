@foreach(config('area') as $key => $score)
	<option value="{{ $score }}">{{ $score }}</option>
@endforeach
