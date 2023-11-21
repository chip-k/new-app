{{ $user->name }}

@if(session('message'))
  <div class="text-red-600 font-bold">
    {{ session('message') }}
  </div>
@endif

@foreach ($my_posts as $my_post)
  {{ $my_post->content }}
@endforeach