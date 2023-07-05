<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0">
{{--    <meta name="description" content="Paggy is a revolutionary budgeting mobile app that helps you save, reach your financial goals, and live below your means. With powerful features, insightful analytics, and personalized recommendations, Paggy empowers you to take control of your finances and achieve financial freedom. Subscribe to our mailing list for exclusive updates, early access to the app, and expert financial tips. Start your journey to a brighter financial future today with Paggy!">--}}
{{--    <meta name="keywords" content="budgeting app, personal finance, financial goals, savings, budget management, financial freedom, money management, financial tips, financial insights, financial app, budgeting tool, financial planning, money-saving app, financial empowerment, budget tracking, financial discipline, financial wellness, budgeting strategies, financial success, financial independence">--}}

    <title>UniversePapers</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @livewireStyles
</head>
<body class="antialiased light">
<div class="max-w-7xl mx-auto p-6 lg:p-8 font-sans">
    {{ $slot }}
    @livewireScripts
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</div>
<script defer>
    AOS.init();
</script>
</body>
</html>
