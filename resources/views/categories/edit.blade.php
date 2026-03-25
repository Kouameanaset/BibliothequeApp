<x-layout>
    <div class="max-w-xl mx-auto">
    <h1 class="text-4xl font-bold mb-8">
        {{ __('messages.edit_category') }}
    </h1>
        <a href="{{ route('categories.index') }}" class="inline-flex items-center gap-2 text-teal-600 hover:text-teal-700 mb-6">← {{ __('messages.back') }}</a>


        <form action="{{ route('categories.update', $category) }}" class="bg-white rounded-3xl shadow-xl p-10">
        @csrf
        @method('PUT')

        <x-input
            name="name"
            :label="__('messages.name')"
            :value="$category->name"
        />
        <x-error field="name" />

        <br>

            <x-button type="submit"
                      class="flex-1 text-center py-3 text-orange-600 font-medium">{{ __('messages.update') }}</x-button>
        </form>
    </div>
</x-layout>
