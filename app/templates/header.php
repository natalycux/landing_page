
<header class="header" >

	<!-- Ícono del menú -->
	 <button class="header__button--bar" id="sidebarToggle">
     
		<svg class="header_icon" viewBox="0 0 448 512">
			<path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
		</svg>
	 </button>

			
	<a href="/public/index.php" class="header__logo">
        <img src="/public/assets/pictures/iconSystem.png" alt="Logotipo" class="header__logo--img" id="imgLogo">
    </a>
	

	<form action="" class="form">

        <input type="text" placeholder="search..." class="form__input">

        <button type="submit" class="form__button">
            <svg class="icono icono--search" viewBox="0 0 512 512">
                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
        	</svg>
        </button>
    </form>

    <nav class="header__container--icons">
        <button class="header__button">
            <svg class="header_icon" viewBox="0 0 448 512">
                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
            </svg>
        </button>

        <button class="header__button" onclick="window.location.href='carrito.php'">
            <svg class="header_icon" viewBox="0 0 576 512">
                <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/>
            </svg>
        </button>
    </nav>




	<nav class="footer-menu"> 
    <ul class="footer-menu__list">
        <li class="footer-menu__item footer-menu__item--dropdown">

            <a href="#" class="footer-menu__link footer-menu__link--dropdown">
                <svg class="footer-menu__icon" viewBox="0 0 320 512">
                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                </svg>
                Categories
            </a>
            <ul class="footer-submenu">
                <li class="footer-submenu__item"><a href="index.php?category=Programming" class="footer-submenu__link">Programming</a></li>
                <li class="footer-submenu__item"><a href="index.php?category=Design" class="footer-submenu__link">Design</a></li>
                <li class="footer-submenu__item"><a href="index.php?category=Marketing" class="footer-submenu__link">Marketing</a></li>
            </ul>
        </li>
        <li class="footer-menu__item">
            <a href="#" class="footer-menu__link">New</a>
        </li>
        <li class="footer-menu__item">
            <a href="#" class="footer-menu__link">Sales</a>
        </li>
        <li class="footer-menu__item">
            <a href="#" class="footer-menu__link">Certifications</a>
        </li>
        <li class="footer-menu__item">
            <a href="#" class="footer-menu__link">Explore</a>
        </li>
    </ul>
</nav>



<div id="sidebar" class="sidebar">
    <ul class="list-unstyled">
        <li><a href="#">Categories</a></li>
        <li><a href="#">New</a></li>
        <li><a href="#">Sales</a></li>
        <li><a href="#">Certifications</a></li>
        <li><a href="#">Explore</a></li>
    </ul>
</div>

<div id="overlay" class="overlay"></div>

<script>
    const sidebar = document.getElementById("sidebar");
    const toggleButton = document.getElementById("sidebarToggle");
    const overlay = document.getElementById("overlay");

    
    toggleButton.addEventListener("click", () => {
        sidebar.classList.toggle("active");
        overlay.classList.toggle("active");
    });

    overlay.addEventListener("click", () => {
        sidebar.classList.remove("active");
        overlay.classList.remove("active");
    });

    document.addEventListener("click", (event) => {
        const isClickInside = sidebar.contains(event.target) || toggleButton.contains(event.target);
        if (!isClickInside) {
            sidebar.classList.remove("active");
            overlay.classList.remove("active");
        }
    });
</script>

</header>