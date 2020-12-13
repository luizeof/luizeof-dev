<nav id="js-nav-menu" class="hidden nav-menu lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/posts"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/posts') ? 'active text-blue' : '' }}"
            >Posts</a>
        </li>
    </ul>
</nav>
