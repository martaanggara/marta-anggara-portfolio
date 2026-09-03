<x-layouts.app :title="$project->title . ' — Marta Anggara'">
    <div class="max-w-4xl mx-auto px-6 py-10">
        <p class="text-xs uppercase tracking-widest text-neutral-400 mb-2">{{ $project->category }}</p>
        <h1 class="text-3xl font-semibold mb-6 text-white">{{ $project->title }}</h1>

        <img src="{{ asset('storage/' . $project->cover_image) }}"
             alt="{{ $project->title }}"
             class="w-full rounded-lg mb-8 bg-neutral-900">

        <p class="text-neutral-300 leading-relaxed mb-10">{{ $project->description }}</p>

        @if ($project->images->count() > 0)
            <div class="flex gap-4 overflow-x-auto pb-4 snap-x snap-mandatory">
                @foreach ($project->images as $image)
                    <img src="{{ asset('storage/' . $image->image_path) }}"
                         alt="{{ $project->title }}"
                         class="h-96 w-auto flex-shrink-0 rounded-lg bg-neutral-900 snap-center">
                @endforeach
            </div>
        @endif

        <a href="{{ route('home') }}" class="inline-block mt-10 text-sm underline text-neutral-400 hover:text-white transition">&larr; Kembali ke Work</a>
    </div>
</x-layouts.app>