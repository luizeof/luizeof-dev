@extends('_layouts.master-br')

@php
$page->type = 'article';
$category = "article";
$cover = "/assets/img/og-image.png";
if ($page->cover_image){
    $cover = $page->cover_image;
}
@endphp

@if ($page->categories)
    @foreach ($page->categories as $i => $cat)
        @php $category = $cat @endphp
    @endforeach
@endif

@push('schemaorg')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://luizeof.dev{{ $page->getUrl() }}/"
            },
            "headline": "{{ $page->title }}",
            "image": [
                "https://luizeof.dev{{ $cover }}"
            ],
            "datePublished": "{{ $page->date }}",
            "dateModified": "{{ $page->date }}",
            "author": {
                "@type": "Person",
                "name": "luizeof"
            },
            "publisher": {
                "@type": "Organization",
                "name": "luizeof.dev",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://luizeof.dev/android-icon-192x192.png"
                }
            }
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "blog",
                "item": "https://luizeof.dev/posts/"
            }, {
                "@type": "ListItem",
                "position": 2,
                "name": "{{ $category }}"
            }]
        }

    </script>
@endpush

@section('body')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <h1 class="mb-2 font-black leading-none text-gray-900 dark:text-gray-400">{{ $page->title }}</h1>

    <p class="text-xl text-gray-700 dark:text-blue-200 md:mt-0">{{ $page->author }}  •  {{ date('F j, Y', $page->date) }}</p>

    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}/"
                title="View posts in {{ $category }}"
                class="inline-block px-3 pt-px mr-4 text-xs font-semibold leading-loose tracking-wide text-gray-800 uppercase bg-gray-300 rounded hover:bg-blue-200"
            >{{ $category }}</a>
        @endforeach
    @endif

    <article class="pb-4 my-10 border-b border-blue-200" v-pre>
        @yield('content')
    </article>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}/" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}/" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
