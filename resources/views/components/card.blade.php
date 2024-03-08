<div class="w-60 h-auto {{ $color }} rounded-lg pb-4">
    <div class="flex flex-row justify-between">
        <div class="text-white m-2">
            <h1 class="font-bold">{{ $totalCount }}</h1>
            <h2>{{ $totalLabel }}</h2>
        </div>
        <div class="flex items-center justify-center text-white p-2 m-2 bg-gray-400 rounded-md w-8 h-8">
            <i class="{{ $icon }}"></i>
        </div>
    </div>
    @if ($showProgress)
        <div class="flex flex-row justify-between text-white p-2 mx-auto" style="width: 90%">
            <span>{{ $progressStart }}</span>
            <span>{{ $progressEnd }}</span>
        </div>
        <div class="bg-slate-600 mx-auto rounded-sm" style="width: 90%">
            <div class="bg-white h-3 rounded-l-sm" style="width: {{ $progressWidth }}">
            </div>
        </div>
    @endif
</div>
