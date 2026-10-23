
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacto  |  Rutas de El Salvador</title>

    <link rel="stylesheet" href="{{ asset('css/destinos.css') }}">
</head>
<body>

    <header class="site-header">
        <div class="site-header__inner">
            <a href="{{ route('destinos.index') }}" class="logo">
                Rutas de El Salvador
            </a>

            <a href="{{ route('destinos.index') }}" class="nav-link">
                Ver destinos
            </a>
        </div>
    </header>

    <main class="container contact-page">

        <a class="back-link" href="{{ route('destinos.index') }}">
            ← Volver al catálogo
        </a>

        <section class="contact-card">

            <div class="contact-intro">
                <span class="hero__eyebrow">Estamos para ayudarte</span>

                <h1>Hablemos de tu próxima aventura</h1>

                <p>
                    ¿Quieres conocer más sobre alguno de nuestros destinos?
                    Envíanos tu consulta y registra tu solicitud.
                </p>
            </div>

            @if (session('success'))
                <div class="message-success" role="status">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="message-error" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="message-error" role="alert">
                    <p>Por favor, revisa los siguientes datos:</p>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form
                action="{{ route('contacto.store') }}"
                method="POST"
                class="contact-form"
            >
                @csrf

                <div class="form-field">
                    <label for="nombre">Nombre completo</label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        value="{{ old('nombre') }}"
                        maxlength="100"
                        autocomplete="name"
                        required
                    >
                </div>

                <div class="form-field">
                    <label for="correo">Correo electrónico</label>

                    <input
                        type="email"
                        id="correo"
                        name="correo"
                        value="{{ old('correo') }}"
                        maxlength="150"
                        autocomplete="email"
                        required
                    >
                </div>

                <div class="form-field">
                    <label for="mensaje">¿En qué podemos ayudarte?</label>

                    <textarea
                        id="mensaje"
                        name="mensaje"
                        rows="6"
                        minlength="10"
                        maxlength="2000"
                        required
                    >{{ old('mensaje') }}</textarea>
                </div>

                <button type="submit" class="button contact-submit">
                    Enviar mensaje
                </button>
            </form>

        </section>

    </main>

    <footer class="site-footer">
        Hecho con cariño para descubrir los rincones de El Salvador.
    </footer>

</body>
</html>
