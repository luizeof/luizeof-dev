<nav id="js-nav-menu" class="hidden nav-menu lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog Index"
                href="/blog"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/blog') ? 'active text-blue' : '' }}"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog Posts"
                href="/blog/posts"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/blog/posts') ? 'active text-blue' : '' }}"
            >Posts</a>
        </li>
    </ul>
</nav>
