
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $destino['nombre'] }} | Rutas de El Salvador</title>

    <link rel="stylesheet" href="{{ asset('css/destinos.css') }}">
</head>
<body>

    <header class="site-header">
        <div class="site-header__inner">
            <a href="{{ route('destinos.index') }}" class="logo">
                Rutas de El Salvador
            </a>

            <a href="{{ route('destinos.index') }}" class="nav-link">
                Todos los destinos
            </a>
        </div>
    </header>

    <main class="container detail-page">

        <a class="back-link" href="{{ route('destinos.index') }}">
            ← Volver al catálogo
        </a>

        <article class="detail-card">

            <div class="detail-image-wrap">

                <img
                    class="detail-image"
                    src="{{ asset('images/destinos/' . $destino['imagen']) }}"
                    alt="Fotografía de {{ $destino['nombre'] }}"
                    onerror="this.hidden=true; this.nextElementSibling.hidden=false;"
                >

                <div class="detail-image-placeholder" hidden>
                    <strong>Postal de El Salvador</strong>
                    <span>{{ $destino['nombre'] }}</span>
                </div>

            </div>

            <div class="detail-content">

                <span class="postcard__category">
                    {{ $destino['categoria'] }}
                </span>

                <h1>{{ $destino['nombre'] }}</h1>

                <p class="detail-location">
                    <span aria-hidden="true">📍</span>
                    {{ $destino['departamento'] }}, El Salvador
                </p>

                <div class="detail-divider"></div>

                <h2>Conoce este lugar</h2>

                <p class="detail-description">
                    {{ $destino['descripcion'] }}
                </p>

                <div class="detail-info">

                    <div class="detail-info__item">
                        <span class="detail-info__label">Precio de referencia</span>
                        <strong>
                            ${{ number_format((float) $destino['precio'], 2) }}
                        </strong>
                    </div>

                    <div class="detail-info__item">
                        <span class="detail-info__label">Horario</span>
                        <strong>{{ $destino['horario'] }}</strong>
                    </div>

                </div>

                <a class="button detail-button"
                   href="{{ route('destinos.index') }}">
                    Explorar otros destinos
                </a>

            </div>

        </article>

    </main>

    <footer class="site-footer">
        Hecho con cariño para descubrir los rincones de El Salvador.
    </footer>

</body>
</html>
