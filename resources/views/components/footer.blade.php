@extends('layout')

<style>
    .arrow {
        stroke-width: .3px;
        stroke: white;
    }

    .topball {
        animation: ball 1.5s ease-in-out;
        animation-iteration-count: infinite;
        animation-direction: alternate;
        animation-delay: 0.3s;
        cursor: pointer;
        fill: var(--blue);

    }


    .wave {
        animation: wave 3s linear;
        animation-iteration-count: infinite;
        fill: var(--blue);
        opacity: 0.7;

    }

    .drop {
        fill: transparent;
        animation: drop 5s ease infinite normal;
        stroke: var(--red);
        stroke-width: 0.5;
        opacity: 0.5;
        transform: translateY(80%);
    }

    .drop1 {
        transform-origin: 20px 3px;
    }

    .drop2 {
        animation-delay: 3s;
        animation-duration: 3s;
        transform-origin: 25px 3px;
    }

    .drop3 {
        animation-delay: -2s;
        animation-duration: 3.4s;
        transform-origin: 16px 3px;
    }

    #wave2 {
        animation-duration: 5s;
        animation-direction: reverse;
        opacity: .6
    }

    #wave3 {
        animation-duration: 7s;
        opacity: .3;
    }

    @keyframes drop {
        0% {
            transform: translateY(80%);
            opacity: .6;
        }

        80% {
            transform: translateY(80%);
            opacity: 0.4;
        }

        90% {
            transform: translateY(10%);
            opacity: .6;
        }

        100% {
            transform: translateY(0%) scale(1.5);
            stroke-width: 0.2;
            opacity: 0;
        }
    }

    @keyframes wave {
        to {
            transform: translateX(-100%);
        }
    }

    @keyframes ball {
        to {
            transform: translateY(20%);
        }
    }

    .footer-content {
        background-color: var(--red);
        padding-top: 30px;
    }

    .footer-rights {
        text-align: center;
        padding-bottom: 15px;
        font-size: 20px;
        /* color: var(--black); */
        opacity: 0.9;
        font-family: 'Handy';
        background-color: var(--blue);

    }

    svg {
        width: 100%;
    }


    /* contact us */
    .footer-col {
        text-align: center;
        color: #fff;
        padding-bottom: 25px;
        background-color: var(--blue);
        opacity: 0.9;
        font-family: 'Winkle';

    }

    .footer-col h4 {
        font-size: 40px;
        font-weight: bold;
        margin-bottom: 10px;
        color: var(--bg);
        position: relative;
        top: -5px;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 20px;
        padding-bottom: 10px;

    }

    .social-links a {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 65px;
        height: 65px;
        border-radius: 50%;
        color: #fff;
        font-size: 30px;
        text-align: center;
        background-image: linear-gradient(120deg, #fccb90 0%, #d57eeb 100%);
        animation: gradient 15s ease infinite;
    }

    .social-links a:hover {
        background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
        transform: scale(1.1);
        text-decoration: none;
    }

    .social-links a i {
        vertical-align: middle;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .wrap {
        margin-top: 25px;
        margin-bottom: 0;
    }

    h4 {
        font-size: 30px;
        text-decoration: none;
        text-align: center;
        text-transform: uppercase;
        line-height: 1;
        color: transparent;

        text-shadow:
            0 0 10px var(--yellow),
            0 0 20px var(--yellow);
        /* 0 0 30px var(--yellow)   */
        /* 0 0 40px var(--yellow),
      0 0 50px var(--yellow),
      0 0 80px var(--yellow);   */

    }
</style>

<svg viewBox="0 0 120 20">
    <defs>
        <mask id="xxx">
            <circle cx="7" cy="12" r="40" fill="#fff" />
        </mask>

        <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
            <feColorMatrix in="blur" mode="matrix"
                values="
            1 0 0 0 0  
            0 1 0 0 0  
            0 0 1 0 0  
           0 0 0 13 -9"
                result="goo" />
            <feBlend in="SourceGraphic" in2="goo" />
        </filter>
        <path id="wave"
            d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
    </defs>

    <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2"></use>
    <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0"></use>

    <g class="topball" id="scroll-top-button">
        <circle class="ball" cx="110" cy="8" r="4" stroke="none" stroke-width="1" />

        <g class="arrow">
            <polyline class="" points="108,8 110,6 112,8" fill="none" />
            <polyline class="" points="110,6 110,10.5" fill="none" />
        </g>

    </g>
    <g class="gooeff">
        {{-- <circle class="drop drop1" cx="20" cy="2" r="1.8" />
      <circle class="drop drop2" cx="25" cy="2.5" r="1.5" />
      <circle class="drop drop3" cx="16" cy="2.8" r="1.2" /> --}}
        <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />

</svg>


{{-- <footer> --}}
<div id="contact" class="footer-col">
    <div class="wrapper">
        <h4>Contact Us</h4>
    </div>

    {{-- <h4>Contact Us</h4> --}}
    <div class="social-links">
        <a href="https://www.instagram.com/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://www.whatsapp.com/" aria-label="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
</div>
</div>

{{-- footer content end --}}

<div class="footer-rights"> ©2025 Bon AppéTreat. All rights reserved.</div>
{{-- </footer> --}}

{{-- text script --}}
<script>
    window.addEventListener('mousemove', handleMouseMove);
    window.addEventListener('resize', handleWindowResize);

    const spansSlow = document.querySelectorAll('.spanSlow');
    const spansFast = document.querySelectorAll('.spanFast');

    let width = window.innerWidth;

    function handleMouseMove(e) {
        let normalizedPosition = e.pageX / (width / 2) - 1;
        let speedSlow = 100 * normalizedPosition;
        let speedFast = 200 * normalizedPosition;
        spansSlow.forEach((span) => {
            span.style.transform = `translate(${speedSlow}px)`;
        });
        spansFast.forEach((span) => {
            span.style.transform = `translate(${speedFast}px)`
        })
    }

    function handleWindowResize() {
        width = window.innerWidth;
    }
</script>

{{-- arrow --}}
<script>
    document.getElementById('scroll-top-button').addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
