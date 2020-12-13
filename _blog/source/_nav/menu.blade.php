<nav class="items-center justify-end hidden text-lg lg:flex">
    <a title="{{ $page->siteName }} Blog" href="/posts"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/posts') ? 'active text-blue-600' : '' }}">
        Blog
    </a>
</nav>
