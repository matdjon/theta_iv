<header>
    <div class="max-w-xl">
        <h2 class="text-lg font-medium text-gray-900">
          <x-primary-button id="btn-create">{{ __('New Post') }}</x-primary-button>
        </h2>
    </div>
</header>
<div id="new-post-form" class="py-6" style="display: none;">
    <form method="POST" action="{{ route('blogpost.store') }}">
        @csrf
        <div class="max-w-xl py-4">
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus/>
        </div>
        <div class="max-w-xl py-4">
        <x-input-label for="detail" :value="__('Detail')" />
            <textarea id="detail" name="detail" rows="4" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required autofocus></textarea>
        </div>
        <div class="flex items-center gap-4 py-4">
            <x-primary-button id="btn-submit">{{ __('Post') }}</x-primary-button>
        </div>
        <div class="row mt-2">
        </div>
    </form>
</div>
<script>
    createButton = document.getElementById("btn-create");
    form = document.getElementById("new-post-form");
    createButton.onclick = function(){
      if (form.style.display = "none") {
        form.style.display = "block";
      } else {
        form.style.display = "none";
      }
    }
</script>