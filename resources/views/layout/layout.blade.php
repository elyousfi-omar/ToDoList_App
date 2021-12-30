<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="css/style.css"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
</head>
<body>
    <header >
        <!-- Navigation -->
        <nav class="top-menu-container" style="background-color: white">
            <div class="logo-header">
                <a href="#">
                    <img
                    src="{{ asset('/images/logo.png') }}"
                    alt="Logo"
                    title="Logo"
                    />
                </a>
            </div>

            <ul>
                <li>
                    <a href="/tasks">Home</a>
                </li>
                <li>
                    <a href="/tasks/create">Add a task</a>
                </li>

            </ul>
        </nav>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer style="background-color: white">
        <div class="container-footer">
            <img
                src="{{ asset('/images/icon.png') }}"
                alt="Logo personal portfolio"
                title="Logo personal portfolio"
                />
            <p>
                Omar El Yousfi
            </p>
        </div>
    </footer>
</body>
</html>
