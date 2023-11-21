<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      キャンセル
    </h2>
  </x-slot>

  <div class="max-w-7xl mx-auto px-6">
    <form method="post" action="{{ route('post.store') }}">
      @csrf
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="content" class="font-semibold mt-4"></label>
          <x-input-error :messages="$errors->get('content')" class="mt-2" />
          <textarea name="content" class="w-auto py-2 border boder-gray-300 rounded-md" id="content" cols="30" rows="5">
            {{old('content')}}
          </textarea>
        </div>
      </div>
      <x-primary-button class="mt-4">
        ポストする
      </x-primary-button>
    </form>
  </div>

</x-app-layout>