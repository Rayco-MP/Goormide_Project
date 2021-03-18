<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background-image: url(https://i.blogs.es/9e444c/img_4842/1366_2000.jpg); background-size:cover;">
    <div style="z-index: 2;">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="z-index: 0; margin-top:-1rem;">
        {{ $slot }}
    </div>
</div>
