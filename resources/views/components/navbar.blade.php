<style>
    :root {
        --orange: #f4a64e;
        --black: #3e4242;
        --bg: #fffcef;
        --blue: #7eacb5;
        --red: #c96868;
        --yellow: #fadfa1;
        --shadow-color: #FF9E9E;
        --shadow-color-light: white;
    }


    .navbar {
        z-index: 2;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 25px;
        background: var(--yellow);
        position: fixed;
        top: 0;
        width: 100%;
        font-family: 'Handy', sans-serif;
    }

    .nav-title {
        font-size: 28px;
        margin-left: 8px;
        font-weight: bold;
        color: var(--blue);
        animation: neon 3s infinite;
    }

    .nav-links {
        display: flex;
        gap: 50px;
    }

    .nav-links {
        display: flex;
        gap: 50px;
    }

    .nav-links a {
        text-decoration: none;
        color: var(--blue);
        font-size: 22px;
        font-weight: bold;
        position: relative;
        transition: color 0.3s ease;
    }

    .nav-links a:hover {
        color: var(--red);
    }

    .nav-links a::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 100%;
        height: 3px;
        background-color: var(--red);
        transform: scaleX(0);
        transition: transform 0.3s ease-in-out;
    }

    .nav-links a:hover::after {
        transform: scaleX(1);
    }

    .navbar:hover {
        background: var(--yellow);
        transition: 0.3s ease-in-out;
    }

    /* hamburger Menu */
    .hamburger {
        display: none;
        flex-direction: column;
        gap: 5px;
        cursor: pointer;
    }

    .hamburger div {
        width: 30px;
        height: 3px;
        background-color: var(--black);
        transition: all 0.3s ease;
    }

    /* responsive */
    @media (max-width: 768px) {
        .navbar {
            justify-content: space-between;
        }

        .nav-links {
            position: absolute;
            top: 60px;
            left: 0;
            width: 100%;
            background-color: var(--yellow);
            flex-direction: column;
            align-items: center;
            gap: 15px;
            padding: 20px 0;
            transform: translateY(-200%);
            transition: transform 0.3s ease-in-out;
        }

        .nav-links.show {
            transform: translateY(0);
        }

        .hamburger {
            display: flex;
        }

        .hamburger.active div:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger.active div:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active div:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }
    }

    @keyframes neon {
        0% {
            text-shadow: -1px -1px 1px var(--shadow-color-light), -1px 1px 1px var(--shadow-color-light), 1px -1px 1px var(--shadow-color-light), 1px 1px 1px var(--shadow-color-light),
                0 0 3px var(--shadow-color-light), 0 0 10px var(--shadow-color-light), 0 0 20px var(--shadow-color-light),
                0 0 30px var(--shadow-color), 0 0 40px var(--shadow-color), 0 0 50px var(--shadow-color), 0 0 70px var(--shadow-color), 0 0 100px var(--shadow-color), 0 0 200px var(--shadow-color);
        }

        50% {
            text-shadow: -1px -1px 1px var(--shadow-color-light), -1px 1px 1px var(--shadow-color-light), 1px -1px 1px var(--shadow-color-light), 1px 1px 1px var(--shadow-color-light),
                0 0 5px var(--shadow-color-light), 0 0 15px var(--shadow-color-light), 0 0 25px var(--shadow-color-light),
                0 0 40px var(--shadow-color), 0 0 50px var(--shadow-color), 0 0 60px var(--shadow-color), 0 0 80px var(--shadow-color), 0 0 110px var(--shadow-color), 0 0 210px var(--shadow-color);
        }

        100% {
            text-shadow: -1px -1px 1px var(--shadow-color-light), -1px 1px 1px var(--shadow-color-light), 1px -1px 1px var(--shadow-color-light), 1px 1px 1px var(--shadow-color-light),
                0 0 3px var(--shadow-color-light), 0 0 10px var(--shadow-color-light), 0 0 20px var(--shadow-color-light),
                0 0 30px var(--shadow-color), 0 0 40px var(--shadow-color), 0 0 50px var(--shadow-color), 0 0 70px var(--shadow-color), 0 0 100px var(--shadow-color), 0 0 200px var(--shadow-color);
        }
    }
</style>

<nav class="navbar">
    <div class="nav-title">Bon AppéTreat</div> 

    <div class="hamburger" id="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="nav-links" id="nav-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about-us') }}">About</a>
        <a href="{{ route('catalogue') }}">Catalogue</a>
    </div>
</nav>

<script>
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('show');
        hamburger.classList.toggle('active');
    });

    // Close menu when clicking outside
    document.addEventListener('click', (event) => {
        if (!navLinks.contains(event.target) && !hamburger.contains(event.target)) {
            navLinks.classList.remove('show');
            hamburger.classList.remove('active');
        }
    });
</script>
