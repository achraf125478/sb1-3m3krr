<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع الأخبار العربية</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-cairo bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="{{ route('home') }}" class="flex items-center py-4">
                            <span class="font-semibold text-gray-500 text-lg">موقع الأخبار</span>
                        </a>
                    </div>
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="{{ route('articles.index') }}" class="py-4 px-2 text-gray-500 hover:text-gray-900">الأخبار</a>
                        <a href="{{ route('categories.index') }}" class="py-4 px-2 text-gray-500 hover:text-gray-900">التصنيفات</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-white shadow-lg mt-8">
        <div class="container mx-auto px-4 py-6 text-center text-gray-600">
            جميع الحقوق محفوظة © {{ date('Y') }}
        </div>
    </footer>
</body>
</html>