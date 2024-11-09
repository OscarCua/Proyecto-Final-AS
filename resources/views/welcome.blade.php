<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Bienvenido</title>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    min-height: 100vh;
                    background: linear-gradient(135deg, #6e8efb, #a777e3);
                    color: #fff;
                    text-align: center;
                }
                header {
                    width: 100%;
                    background: rgba(0, 0, 0, 0.8);
                    padding: 10px 0;
                    position: fixed;
                    top: 0;
                }
                nav a {
                    color: #fff;
                    margin: 0 10px;
                    text-decoration: none;
                    font-weight: 600;
                }
                nav a:hover {
                    text-decoration: underline;
                }
                .container {
                    margin-top: 80px;
                    background: rgba(0, 0, 0, 0.2);
                    padding: 40px;
                    border-radius: 10px;
                    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
                }
                h1 {
                    font-size: 2.5em;
                    margin-bottom: 10px;
                }
                p {
                    font-size: 1.2em;
                }
                .btn {
                    margin-top: 20px;
                    padding: 10px 20px;
                    background: #fff;
                    color: #6e8efb;
                    text-decoration: none;
                    border-radius: 5px;
                    transition: background 0.3s;
                }
                .btn:hover {
                    background: #ddd;
                }
            </style>
        </head>
        <body>
            <header>
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ url('home') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Iniciar Sesión</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Registarse</a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>
            <div class="container">
                <h1>Bienvenido a Mi Proyecto</h1>
                <p>¡Vamos a crear algo increíble!</p>
            </div>
                    </body>
    <script type="text/javascript">
        (function(d, t) {
            var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
            v.onload = function() {
              window.voiceflow.chat.load({
                verify: { projectID: '671c4016e2ac9085e8c71d21' },
                url: 'https://general-runtime.voiceflow.com',
                versionID: 'production'
              });
            }
            v.src = "https://cdn.voiceflow.com/widget/bundle.mjs"; v.type = "text/javascript"; s.parentNode.insertBefore(v, s);
        })(document, 'script');
      </script>
</html>
