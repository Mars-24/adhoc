@if ($paginator->hasPages())
    <div class="col-12">
        <div class="pagination wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
            <ul>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <a href="javascript:void(0);" class="arrow" title="Previous">
                            <img src="{{ asset('frontend/images/right-arrow.svg') }}" alt="Arrow" />
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}" class="arrow" rel="prev" aria-label="@lang('pagination.previous')" title="Previous">
                            <img src="{{ asset('frontend/images/right-arrow.svg') }}" alt="Arrow" />
                        </a>
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
                                <li class="active" aria-current="page"><a href="javascript:void(0);">{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}" class="arrow" rel="next" aria-label="@lang('pagination.next')" title="Next">
                            <img src="{{ asset('frontend/images/right-arrow.svg') }}" alt="Arrow" />
                        </a>
                    </li>
                @else
                    <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <a href="javascript:void(0);" class="arrow" title="Next">
                            <img src="{{ asset('frontend/images/right-arrow.svg') }}" alt="Arrow" />
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
@endif
