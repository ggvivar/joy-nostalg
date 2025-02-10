@if ($paginator->hasPages())
    <nav style="display: flex; justify-content: center;">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled page-arrow" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true"><i class="bi bi-arrow-left-circle-fill"></i></span>
                </li>
            @else
                <li class="page-arrow">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="bi bi-arrow-left-circle-fill"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active px-1 page-number m" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="px-1 page-number"><a href="{{ $url }}" style="text-decoration: none ;color:white"> {{ $page }} </a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-arrow">
                    <a  href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="bi bi-arrow-right-circle-fill"></i></a>
                </li>
            @else
                <li class="disabled page-arrow" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true"><i class="bi bi-arrow-right-circle-fill"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
<style>
    .page-number {
        color:white!important;
        margin-right: 2px;
        margin-left: 2px;
        text-decoration: none;
        text-align: center;
        width: 25px;
        border-radius: 25px;
        background-color: yellow;
    }
    .page-arrow {
        color:white!important;
        margin-right: 2px;
        margin-left: 2px;
        text-decoration: none;
        text-align: center;
        width: 25px;
    }

    }
</style>

