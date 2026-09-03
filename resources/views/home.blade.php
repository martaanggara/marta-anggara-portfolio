<x-layouts.app title="Work — Marta Anggara">
    <div id="top" class="columns-1 md:columns-2 gap-0">
        @foreach ($projects as $project)
            <a href="{{ route('project.show', $project) }}" class="group relative block mb-0 overflow-hidden bg-neutral-900 break-inside-avoid">
                <img src="{{ asset('storage/' . $project->cover_image) }}"
                     alt="{{ $project->title }}"
                     class="w-full h-auto object-cover transition duration-700 ease-out group-hover:scale-105">

                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition duration-300"></div>

                <div class="absolute bottom-0 left-0 p-6 text-white opacity-0 group-hover:opacity-100 transition duration-300">
                    <h2 class="text-lg font-medium">{{ $project->title }}</h2>
                    <p class="text-xs uppercase tracking-widest text-white/80 mt-1">{{ $project->category }}</p>
                </div>
            </a>
        @endforeach
    </div>
</x-layouts.app>