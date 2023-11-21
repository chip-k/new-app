<x-app-layout>
  <x-slot name="header">
    <!-- Navigation Links -->
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
      <x-nav-link :href="route('post.index')" :active="request()->routeIs('post.index')">
          <h2>おすすめ</h2>
      </x-nav-link>
      <x-nav-link :href="route('post.index')" :active="request()->routeIs('post.index')">
        <h2>フォロー中</h2>
    </x-nav-link>
    </div>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          {{ __("You're logged in!") }}
        </div>
      </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          全てのポスト一覧
          @foreach ($posts as $post)
            {{ $post->content }} 
          @endforeach
        </div>
        <div class="p-6 text-gray-900">
          自分のポスト一覧
          @foreach ($my_posts as $my_post)
            {{ $my_post->content }} 
          @endforeach
        </div>
        <a href="{{ route('post.create') }}">＋</a>
      </div>
    </div>
  </div>
</x-app-layout>