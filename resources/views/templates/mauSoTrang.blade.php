<ul class="pagination">
    @if ($current_page == 1)
        <li><i class="fa fa-angle-left"></i></li>
    @else
        <li><a href="{{ $href . ($current_page - 1) }}"><i class="fa fa-angle-left"></i></a></li>
    @endif

    @for ($i = 1; $i <= $total_page; $i++)
        @if ($i == $current_page)
            <li class="active">{{ $i }}</li>
        @else
            <li><a href="{{ $href . $i }}">{{ $i }}</a></li>
        @endif
    @endfor

    @if ($current_page == $total_page)
        <li><i class="fa fa-angle-right"></i></li>
    @else
        <li><a href="{{ $href . ($current_page + 1) }}"><i class="fa fa-angle-right"></i></a></li>
    @endif
</ul>
