
<header class="header" >
	<!-- Ícono del menú -->
	<svg class="header_icon" viewBox="0 0 448 512">
        <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
    </svg>
			
	<!-- Logotipo -->
	<img src="/public/assets/pictures/iconSystem.png" alt="Logotipo" class="header__logo">

	<form action="" class="form">

        <input type="text" placeholder="Buscar..." class="form__input">

        <button type="submit" class="form__button">
            <svg class="icono icono--buscar" viewBox="0 0 512 512">
                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
        	</svg>
        </button>
    </form>

			
	<!-- Menú de navegación -->
	<nav class="header__menu" id="menu">
		<button onclick="location.href='index.html'" class="header__button">Home</button>
		<button onclick="location.href='proyectos.html'" class="header__button">Certifications</button>
		<button onclick="location.href='proyectos.html'" class="header__button">Explore</button>
	</nav>
</header>