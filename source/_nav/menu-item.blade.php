<li class="pl-4 list-reset">
    @if ($url = is_string($item) ? $item : $item->url)
        {{-- Menu item with URL--}}
        {{-- TODO: /docs shouldn't be here --}}
        <a href="/docs{{ $page->isUrl($url) ? $url : $page->link($url) }}"
            class="{{ 'lvl' . $level }} {{ $page->isActiveParent($item) ? 'lvl' . $level . '-active' : '' }} {{ $page->isActive($url) ? 'active font-semibold text-indigo-700' : '' }} nav-menu__item hover:text-indigo-700"
        >
            {{ $label }}
        </a>
    @else
        {{-- Menu item without URL--}}
        <p class="nav-menu__item text-grey-dark">{{ $label }}</p>
    @endif

    @if (! is_string($item) && $item->children)
        {{-- Recursively handle children --}}
        @include('_nav.menu', ['items' => $item->children, 'level' => ++$level])
    @endif
</li>
