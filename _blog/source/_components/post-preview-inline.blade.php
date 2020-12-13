<div class="flex flex-col mb-4">
    <p class="my-2 font-medium text-gray-700 text-gray-900 dark:text-gray-400">
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2 class="mt-0 text-3xl">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="font-extrabold text-gray-900 dark:underline dark:text-blue-400"
        >{{ $post->title }}</a>
    </h2>

    <p class="mt-0 mb-4">{!! $post->getExcerpt(200) !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="mb-2 font-semibold tracking-wide uppercase dark:underline"
    >Read</a>
</div>
