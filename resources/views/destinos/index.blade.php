
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Destinos turísticos de El Salvador</title>

    <link rel="stylesheet" href="{{ asset('css/destinos.css') }}">
</head>
<body>

    <header class="site-header">
        <div class="site-header__inner">
<nav class="header-nav">
    <a href="{{ route('destinos.index') }}" class="nav-link">
        Destinos
    </a>

    <a href="{{ route('contacto.create') }}" class="nav-link">
        Contacto
    </a>
</nav>
        </div>
    </header>

    <main class="container">

        <section class="hero">
            <span class="hero__eyebrow">Un pequeño país, grandes experiencias</span>

            <h1>Descubre El Salvador</h1>

            <p>
                Guarda en tu memoria paisajes inolvidables, playas encantadoras
                y rincones llenos de historia. Tu próxima aventura comienza aquí.
            </p>
        </section>

        <section class="postcard-grid">

            @forelse ($destinos as $destino)

                <article class="postcard">

                    <div class="postcard__image-wrap">

                        <img
                            class="postcard__image"
                            src="{{ asset('images/destinos/' . $destino['imagen']) }}"
                            alt="Fotografía de {{ $destino['nombre'] }}"
                            onerror="this.hidden=true; this.nextElementSibling.hidden=false;"
                        >

                        <div class="postcard__placeholder" hidden>
                            <strong>Postal de El Salvador</strong>
                            <span>{{ $destino['nombre'] }}</span>
                        </div>

                    </div>

                    <div class="postcard__body">

                        <span class="postcard__category">
                            {{ $destino['categoria'] }}
                        </span>

                        <h2 class="postcard__title">
                            {{ $destino['nombre'] }}
                        </h2>

                        <div class="postcard__location">
                            {{ $destino['departamento'] }}, El Salvador
                        </div>

                        <p class="postcard__description">
                            {{ $destino['descripcion'] }}
                        </p>

                        <div class="postcard__footer">

                            <span class="postcard__price">
                                Precio de referencia:
                                ${{ number_format((float) $destino['precio'], 2) }}
                            </span>

                            <a
                                class="button"
                                href="{{ route('destinos.show', $destino['id']) }}"
                            >
                                Explorar destino →
                            </a>

                        </div>

                    </div>

                </article>

            @empty

                <p>No hay destinos turísticos disponibles por el momento.</p>

            @endforelse

        </section>

    </main>

    <footer class="site-footer">
        Hecho con cariño para descubrir los rincones de El Salvador.
    </footer>

</body>
</html>
