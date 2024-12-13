<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>
        <div class="list-group list-group-numbered mt-4">
            {{-- Kode anda selanjutnya letakkan di sini --}}
            <a href="{{ url('/basic_routing') }}" class="list-group-item list-groupitem-action">
                Basic Routing (No View, No Controller)
            </a>
            <a href="{{ url('/view_route') }}" class="list-group-item list-groupitem-action">
                View Route
            </a>
            <a href="{{ url('/controller_route') }}" class="list-group-item listgroup-item-action">
                Controller Route
            </a>
            <a href="{{ url('/') }}" class="list-group-item list-group-item-action">
                Redirect Route
            </a>
            <a href="{{ url('/user/12345') }}" class="list-group-item list-groupitem-action">
                Route Parameter (Required Parameter) - 1
            </a>
            <a href="{{ url('/posts/01/comments/20') }}" class="list-group-item list-
               group-item-action">
                Route Parameter (Required Parameter) - 2
            </a>
            <a href="{{ url('/username') }}" class="list-group-item list-group-itemaction">
                Route Parameter (Optional Parameter)
            </a>
            <a href="{{ url('/title/this-is-my-title') }}" class="list-group-item
list-group-item-action">
                Route With Regular Expression Constraints
            </a>
            <a href="{{ route('profileRouteName', ['profileId' => '123']) }}"
                class="list-group-item list-group-item-action">
                Named Route
            </a>
            <a href="{{ url('/route_priority/user') }}" class="list-group-item listgroup-item-action">
                Route Priority
            </a>
            <a href="{{ url('/asdqwezxc') }}" class="list-group-item list-group-itemaction">
                Fallback Routes
            </a>
        </div>
        {{-- Khusus kode program untuk Route Groups di sini --}}
        <h6 class="mt-4">Route Groups (Route Prefixes & Route Name Prefixes)</h6>
        <div class="list-group list-group-numbered mt-4">
            <a href="{{ route('admin.dashboard') }}" class="list-group-item listgroup-item-action">
                Admin Dashboard
            </a>
            <a href="{{ route('admin.users') }}" class="list-group-item listgroup-item-action">
                Admin Users
            </a>
            <a href="{{ route('admin.items') }}" class="list-group-item listgroup-item-action">
                Admin Items
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
