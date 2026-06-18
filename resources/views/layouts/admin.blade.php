<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Admin' }} - {{ config('app.name', 'fsanat') }}</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Tahoma, Arial, sans-serif;
            --border: #d9dee8;
            --surface: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --danger: #b91c1c;
            --page: #f6f8fb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: var(--page);
            color: var(--text);
        }

        .admin-shell {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .admin-header {
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 24px;
            background: var(--surface);
            border-bottom: 1px solid var(--border);
        }

        .admin-brand {
            font-weight: 700;
        }

        .admin-main {
            width: min(100%, 1120px);
            margin: 0 auto;
            padding: 32px 16px;
        }

        .auth-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 16px;
        }

        .panel {
            width: min(100%, 420px);
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 28px;
        }

        .content-panel {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 28px;
        }

        h1 {
            margin: 0 0 8px;
            font-size: 24px;
        }

        p {
            margin: 0;
            color: var(--muted);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 700;
        }

        input {
            width: 100%;
            height: 42px;
            border: 1px solid var(--border);
            border-radius: 6px;
            padding: 8px 12px;
            font: inherit;
            color: var(--text);
            background: #fff;
        }

        .field {
            margin-top: 18px;
        }

        .error {
            margin-top: 6px;
            color: var(--danger);
            font-size: 13px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 42px;
            border: 0;
            border-radius: 6px;
            padding: 0 16px;
            font: inherit;
            font-weight: 700;
            cursor: pointer;
            background: var(--primary);
            color: #fff;
            text-decoration: none;
        }

        .button:hover {
            background: var(--primary-dark);
        }

        .button.secondary {
            background: transparent;
            color: var(--text);
            border: 1px solid var(--border);
        }

        .actions {
            margin-top: 24px;
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>
<body>
    @yield('body')
</body>
</html>
