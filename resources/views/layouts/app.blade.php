<!DOCTYPE html>
<html lang="en">
<head>
    <x-partials.head></x-partials.head>
</head>
<body>
    <header>
        <x-partials.header></x-partials.header>
    </header>
    <div style="margin-top:150px" class="container">
        {{$slot}}
    </div>
    <x-partials.footer></x-partials.footer>
</body>
</html>
