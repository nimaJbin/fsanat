<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'fsanat') }}</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Tahoma, Arial, sans-serif;
            --border: #d9dee8;
            --surface: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --primary: #2563eb;
            --page: #f6f8fb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--page);
            color: var(--text);
            min-height: 100vh;
        }

        a {
            color: inherit;
        }

        .page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 16px;
        }

        .panel {
            width: min(100%, 520px);
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 32px;
        }

        .title {
            margin: 0 0 8px;
            font-size: 28px;
            font-weight: 700;
        }

        .subtitle {
            margin: 0;
            color: var(--muted);
            font-size: 16px;
        }
    </style>
</head>
<body>
    @yield('body')
</body>
</html>
