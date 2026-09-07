  @props(['url' => '/', 'mobile' => null])
  @if($mobile)
    <a href="{{ $url }}" class="block px-4 py-2  ">{{$slot}}</a>
  @else
    <a href="{{ $url }}">{{$slot}}</a>
  @endif