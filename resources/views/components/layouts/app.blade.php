<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Marta Anggara — Portfolio' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white antialiased font-sans">

    <header class="flex items-center justify-between px-8 md:px-12 py-6">
        <a href="{{ route('home') }}" class="font-medium tracking-tight text-lg text-white">
            Marta Anggara
        </a>

        <nav class="flex items-center gap-8 text-xs uppercase tracking-widest text-neutral-400">
            <a href="{{ route('home') }}" class="hover:text-white transition">Work</a>
            <a href="{{ route('about') }}" class="hover:text-white transition">About</a>
            <a href="#" class="hover:text-white transition">Newsletter</a>

            <div class="flex items-center gap-4 ml-2">
                <a href="#" aria-label="Instagram" class="hover:text-white transition text-neutral-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.2c3.2 0 3.6 0 4.9.07 3.3.15 4.8 1.7 4.9 4.9.07 1.3.07 1.6.07 4.8s0 3.6-.07 4.9c-.1 3.2-1.7 4.8-4.9 4.9-1.3.07-1.6.07-4.9.07s-3.6 0-4.9-.07c-3.2-.1-4.8-1.7-4.9-4.9C2.13 15.6 2.13 15.3 2.13 12s0-3.6.07-4.9c.1-3.2 1.7-4.75 4.9-4.9C8.4 2.2 8.8 2.2 12 2.2zm0 1.8c-3.14 0-3.5 0-4.75.07-2.27.1-3.33 1.18-3.43 3.43C3.75 8.5 3.75 8.86 3.75 12s0 3.5.07 4.75c.1 2.25 1.16 3.33 3.43 3.43 1.25.06 1.6.07 4.75.07s3.5 0 4.75-.07c2.26-.1 3.33-1.17 3.43-3.43.06-1.25.07-1.6.07-4.75s0-3.5-.07-4.75c-.1-2.25-1.17-3.33-3.43-3.43C15.5 4 15.14 4 12 4zm0 3.4a4.6 4.6 0 1 1 0 9.2 4.6 4.6 0 0 1 0-9.2zm0 1.8a2.8 2.8 0 1 0 0 5.6 2.8 2.8 0 0 0 0-5.6zm5.85-2a1.08 1.08 0 1 1-2.15 0 1.08 1.08 0 0 1 2.15 0z"/></svg>
                </a>
                <a href="#" aria-label="LinkedIn" class="hover:text-white transition text-neutral-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.02-3.03-1.85-3.03-1.85 0-2.14 1.45-2.14 2.94v5.66H9.36V9h3.41v1.56h.05c.47-.9 1.63-1.85 3.36-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45z"/></svg>
                </a>
            </div>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="flex items-center justify-center py-10 text-xs uppercase tracking-widest text-neutral-500">
        <a href="#top" class="hover:text-white transition">&uarr; Back to Top</a>
    </footer>

</body>
</html>