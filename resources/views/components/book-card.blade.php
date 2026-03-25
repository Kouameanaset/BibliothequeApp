@props([
    'title',
    'author',
    'category',
    'year',
    'viewUrl',
    'editUrl',
    'deleteUrl'
])

<div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
    <div class="h-64 bg-gradient-to-br from-teal-400 to-slate-700 flex items-center justify-center text-8xl text-white">
        📘
    </div>
    <div class="p-6">
        <h3 class="font-semibold text-2xl mb-2">{{ $title }}</h3>
        <p class="text-slate-500 mb-1">{{ $author }}</p>
        <p class="text-teal-600 text-sm mb-6">{{ $category }}</p>

        <div class="flex items-center justify-between">
            <span class="px-5 py-2 bg-teal-100 text-teal-700 rounded-3xl text-sm">{{ $year }}</span>

            <div class="flex gap-5 font-medium">
                <a href="{{ $viewUrl }}" class="text-teal-600 hover:text-teal-700">{{ __('messages.show') }}</a>
                <a href="{{ $editUrl }}" class="text-amber-600 hover:text-amber-700">{{ __('messages.edit') }}</a>
                <form action="{{ $deleteUrl }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this book?')">
                    @csrf
                    @method('DELETE')
                    <x-button type="submit" class="text-red-700 hover:text-red-800">{{ __('messages.delete') }}</x-button>
                </form>
            </div>
        </div>
    </div>
</div>
