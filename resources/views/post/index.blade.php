<x-app-layout>
  <div class="flex">
    <div class="w-3/12 bg-red-200">
      @include('layouts.navi')
      <div class="text-center my-10">
        <a href="{{ route('post.index') }}"><p class="font-bold text-xl text-emerald-700 my-5">Home</p></a>
        <a href="{{ route('user.show', Auth::user()) }}"><p class="font-bold text-xl text-blue-700 my-5">Profile</p></a>
        <a href="{{ route('post.create') }}"><x-primary-button>Post</x-primary-button></a>
      </div>
    </div>

    <div class="w-5/12 bg-blue-200">
      <!-- Navigation Links -->
      <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('post.index')" :active="request()->routeIs('post.index')">
            <h2>おすすめ</h2>
        </x-nav-link>
        <x-nav-link :href="route('post.index')" :active="request()->routeIs('post.index')">
          <h2>フォロー中</h2>
        </x-nav-link>
      </div>

      <div>
        <a href="{{ route('user.show', Auth::user()) }}">{{ Auth::user()->name }}</a>
      </div>
      
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
              <table class="table-auto">
                @foreach ($posts as $post)
                  <tbody>
                    <tr>
                      <td><a href="{{ route('user.show', $post->user) }}">{{ $post->user->name }}</a></td>
                    </tr>
                    <tr>
                      <td>{{ $post->content }} </td>
                    </tr>
                  </tbody>
                @endforeach
              </table>
            </div>
            <div class="p-6 text-gray-900">
              自分のポスト一覧
              <table class="table-auto">
                @foreach ($my_posts as $my_post)
                  <tbody>
                    <tr>
                      <td><a href="{{ route('user.show', $my_post->user) }}">{{ $my_post->user->name }}</a></td>
                    </tr>
                    <tr>
                      <td>{{ $my_post->content }} </td>
                    </tr>
                  </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="w-4/12 bg-green-200">
      content
    </div>
  </div>
</x-app-layout>