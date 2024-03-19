<!-- Page header -->
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Home - <span class="fw-normal">Dashboard</span>
            </h4>

            <a href="#page_header"
                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>

    </div>

    <div class="page-header-content d-lg-flex border-top">
        <div class="d-flex">
            <div class="breadcrumb py-2">
                <a href="{{ url('/') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                @php
                    $path = request()->path(); // Get the current URL path
                    $segments = array_filter(explode('/', $path)); // Split the path into segments and remove empty elements
                    $url = '';
                @endphp

                @foreach ($segments as $index => $segment)
                    @php
                        $url .= '/' . $segment; // Reconstruct the URL for each segment
                        $isLast = $index === count($segments) - 1; // Check if this segment is the last one
                    @endphp

                    @if (!$isLast)
                        <a href="{{ url($url) }}" class="breadcrumb-item">{{ ucfirst($segment) }}</a>
                    @else
                        <span class="breadcrumb-item active">{{ ucfirst($segment) }}</span>
                    @endif
                @endforeach
            </div>

            <a href="#breadcrumb_elements"
                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>
    </div>

</div>
<!-- /page header -->
