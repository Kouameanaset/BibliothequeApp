@props([
    'name',
    'bookCount',
    'showUrl',
    'editUrl',
    'deleteUrl'
])

<div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
    <div class="p-6">
        <h3 class="font-semibold text-2xl mb-2">{{ $name }}</h3>
        <p class="text-teal-600 mb-6">{{ $bookCount }} {{__('messages.books')}}</p>

        <div class="flex gap-3">
            <a href="{{ $showUrl }}" class="flex-1 text-center py-3 bg-teal-100 hover:bg-teal-200 text-teal-700 rounded-3xl font-medium transition">{{ __('messages.show') }}</a>
            <a href="{{ $editUrl }}" class="flex-1 text-center py-3 bg-amber-100 hover:bg-amber-200 text-amber-700 rounded-3xl font-medium transition">{{ __('messages.edit') }}</a>
            <form action="{{ $deleteUrl }}" method="POST" style="display:inline;" onsubmit="return confirm('{{__('messages.confirmation_author_delete')}}')">
                @csrf
                @method('DELETE')
                <x-button type="submit" class="flex-1 w-full py-3 bg-red-100 hover:bg-red-200 text-red-700 rounded-3xl font-medium transition">{{__('messages.delete')}}</x-button>
            </form>
        </div>
    </div>
</div>
