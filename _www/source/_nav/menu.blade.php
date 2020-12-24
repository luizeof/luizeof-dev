<nav class="items-center justify-end hidden text-lg lg:flex">
    <a title="{{ $page->siteName }} Blog Index" href="/"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
        Blog
    </a>
    <a title="{{ $page->siteName }} Blog Posts" href="/posts"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/blog/posts') ? 'active text-blue-600' : '' }}">
        Posts
    </a>
</nav>
