@foreach ($paragraphs as $paragraph)
  <p> {!! nl2br(e($paragraph)) !!}</p>
@endforeach
