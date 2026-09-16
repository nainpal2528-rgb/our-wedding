<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEARCH ENGINE PROTECTION -->
    <meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noimageindex">
    <meta name="googlebot" content="noindex, nofollow, noarchive, nosnippet, noimageindex">
    <meta name="bingbot" content="noindex, nofollow, noarchive, nosnippet, noimageindex">

    <title>For Kittu ❤️</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>

        /* =========================================
           RESET
        ========================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
        }

        body {
            min-height: 100vh;
            overflow: hidden;
            background: #08070c;
            color: #fff;
            font-family: "Poppins", sans-serif;
        }

        button,
        input {
            font: inherit;
        }

        button {
            -webkit-tap-highlight-color: transparent;
        }


        /* =========================================
           BACKGROUND
        ========================================= */

        .background {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 0;
        }

        .glow {
            position: absolute;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            filter: blur(120px);
            opacity: .22;
        }

        .glow.one {
            top: -180px;
            left: -150px;
            background: #ff467d;
        }

        .glow.two {
            right: -180px;
            bottom: -180px;
            background: #914cff;
        }

        .glow.three {
            left: 40%;
            top: 35%;
            width: 280px;
            height: 280px;
            background: #ff477c;
            opacity: .08;
        }

        .stars {
            position: absolute;
            inset: 0;
            opacity: .45;

            background-image:
                radial-gradient(
                    circle,
                    rgba(255,255,255,.7) 1px,
                    transparent 1.5px
                ),
                radial-gradient(
                    circle,
                    rgba(255,255,255,.35) 1px,
                    transparent 1.5px
                );

            background-size: 110px 110px, 170px 170px;
            background-position: 20px 30px, 80px 90px;
        }


        /* =========================================
           APP
        ========================================= */

        .app {
            position: relative;
            z-index: 2;
            width: 100%;
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 30px 20px;
        }


        /* =========================================
           LOCK SCREEN
        ========================================= */

        .lock-screen {
            position: relative;
            z-index: 10;

            width: min(440px, 94vw);

            padding: 42px 32px;

            text-align: center;

            background: rgba(255,255,255,.045);
            border: 1px solid rgba(255,255,255,.10);

            border-radius: 30px;

            backdrop-filter: blur(22px);
            -webkit-backdrop-filter: blur(22px);

            box-shadow:
                0 30px 100px rgba(0,0,0,.45),
                inset 0 1px 0 rgba(255,255,255,.04);

            animation: lockAppear 1s ease forwards;
        }

        @keyframes lockAppear {

            from {
                opacity: 0;
                transform: translateY(25px) scale(.96);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .lock-icon {
            width: 82px;
            height: 82px;

            margin: 0 auto 25px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            font-size: 36px;

            background: rgba(255,255,255,.045);
            border: 1px solid rgba(255,255,255,.10);

            box-shadow:
                0 0 50px rgba(255,70,120,.14);

            animation: softPulse 2.4s infinite ease-in-out;
        }

        @keyframes softPulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.06);
            }
        }

        .lock-label {
            display: block;

            margin-bottom: 10px;

            font-size: 10px;
            letter-spacing: 4px;
            text-transform: uppercase;

            color: #ff9bb6;
        }

        .lock-screen h1 {
            margin-bottom: 12px;

            font-family: "Cormorant Garamond", serif;
            font-size: clamp(45px, 12vw, 65px);
            font-weight: 500;
            line-height: .95;
        }

        .lock-screen p {
            margin: 0 auto 28px;

            max-width: 330px;

            color: rgba(255,255,255,.56);

            font-size: 12px;
            line-height: 1.8;
        }

        .pin-dots {
            display: flex;
            justify-content: center;
            gap: 13px;

            margin: 18px 0 25px;
        }

        .pin-dot {
            width: 10px;
            height: 10px;

            border-radius: 50%;

            background: rgba(255,255,255,.14);

            border: 1px solid rgba(255,255,255,.15);

            transition: .25s ease;
        }

        .pin-dot.active {
            background: #ff779d;
            border-color: #ff779d;

            box-shadow: 0 0 15px rgba(255,119,157,.45);

            transform: scale(1.2);
        }

        .pin-input {
            width: 100%;

            border: 1px solid rgba(255,255,255,.12);
            outline: none;

            background: rgba(255,255,255,.05);

            color: white;

            border-radius: 16px;

            padding: 17px 18px;

            text-align: center;

            letter-spacing: 9px;
            font-size: 21px;

            transition: .3s ease;
        }

        .pin-input::placeholder {
            color: rgba(255,255,255,.25);
            letter-spacing: 4px;
        }

        .pin-input:focus {
            border-color: rgba(255,120,155,.55);

            box-shadow:
                0 0 0 4px rgba(255,100,140,.06),
                0 15px 40px rgba(255,60,110,.08);
        }

        .unlock-button {
            width: 100%;

            margin-top: 16px;

            padding: 16px 20px;

            border: 1px solid rgba(255,255,255,.14);
            border-radius: 50px;

            background: rgba(255,90,130,.10);

            color: white;

            cursor: pointer;

            font-size: 12px;
            letter-spacing: 1px;

            transition: .35s ease;
        }

        .unlock-button:hover {
            transform: translateY(-2px);

            background: rgba(255,90,130,.17);

            border-color: rgba(255,130,160,.45);

            box-shadow:
                0 15px 40px rgba(255,50,110,.13);
        }

        .unlock-button:active {
            transform: scale(.98);
        }

        .error-message {
            min-height: 20px;

            margin-top: 15px;

            color: #ff8fab;

            font-size: 11px;

            opacity: 0;

            transition: .25s ease;
        }

        .error-message.show {
            opacity: 1;
        }

        .shake {
            animation: shake .4s ease;
        }

        @keyframes shake {

            0%, 100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-8px);
            }

            50% {
                transform: translateX(8px);
            }

            75% {
                transform: translateX(-5px);
            }
        }


        /* =========================================
           CONTENT SCREENS
        ========================================= */

        .experience {
            position: absolute;
            inset: 0;

            display: none;

            width: 100%;
            min-height: 100vh;
        }

        .experience.unlocked {
            display: block;
        }

        .screen {
            position: absolute;

            width: min(720px, 92%);

            left: 50%;
            top: 50%;

            transform:
                translate(-50%, -46%)
                scale(.97);

            text-align: center;

            opacity: 0;
            visibility: hidden;

            transition:
                opacity .7s ease,
                transform .7s cubic-bezier(.2,.8,.2,1),
                visibility .7s ease;
        }

        .screen.active {
            opacity: 1;
            visibility: visible;

            transform:
                translate(-50%, -50%)
                scale(1);
        }


        /* =========================================
           TYPOGRAPHY
        ========================================= */

        .small-label {
            display: inline-block;

            margin-bottom: 20px;

            font-size: 10px;

            letter-spacing: 4px;

            text-transform: uppercase;

            color: #ff9bb6;
        }

        .screen h1 {
            margin-bottom: 25px;

            font-family: "Cormorant Garamond", serif;

            font-size: clamp(55px, 9vw, 88px);

            line-height: .9;

            font-weight: 500;
        }

        .screen h2 {
            margin-bottom: 22px;

            font-family: "Cormorant Garamond", serif;

            font-size: clamp(44px, 8vw, 70px);

            line-height: .92;

            font-weight: 500;
        }

        .screen p {
            max-width: 580px;

            margin: auto;

            color: rgba(255,255,255,.65);

            font-size: 14px;

            line-height: 1.9;
        }

        .highlight {
            color: #ff86a7;
        }


        /* =========================================
           HEART
        ========================================= */

        .big-heart {
            width: 100px;
            height: 100px;

            margin: 0 auto 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: rgba(255,255,255,.045);

            border: 1px solid rgba(255,255,255,.10);

            font-size: 52px;

            box-shadow:
                0 0 70px rgba(255,65,120,.16),
                inset 0 0 30px rgba(255,255,255,.03);

            animation: heartbeat 2.2s infinite ease-in-out;
        }

        @keyframes heartbeat {

            0%,
            100% {
                transform: scale(1);
            }

            10% {
                transform: scale(1.08);
            }

            20% {
                transform: scale(1);
            }

            30% {
                transform: scale(1.06);
            }

            40% {
                transform: scale(1);
            }
        }


        /* =========================================
           BUTTON
        ========================================= */

        .next-button {
            position: relative;

            margin-top: 36px;

            padding: 16px 30px;

            border-radius: 50px;

            border: 1px solid rgba(255,255,255,.16);

            background: rgba(255,255,255,.055);

            color: white;

            cursor: pointer;

            font-size: 12px;

            letter-spacing: 1px;

            overflow: hidden;

            transition: .35s ease;

            backdrop-filter: blur(12px);
        }

        .next-button::before {
            content: "";

            position: absolute;

            inset: 0;

            transform: translateX(-110%);

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(255,255,255,.14),
                    transparent
                );

            transition: .7s ease;
        }

        .next-button:hover::before {
            transform: translateX(110%);
        }

        .next-button:hover {
            transform: translateY(-3px);

            border-color: rgba(255,125,155,.45);

            box-shadow:
                0 15px 45px rgba(255,60,110,.13);
        }

        .next-button span {
            position: relative;
            z-index: 2;
        }


        /* =========================================
           CHOICES
        ========================================= */

        .choices {
            max-width: 540px;

            margin: 30px auto 0;

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 14px;
        }

        .choice {
            padding: 21px 15px;

            border-radius: 20px;

            border: 1px solid rgba(255,255,255,.09);

            background: rgba(255,255,255,.04);

            color: white;

            cursor: pointer;

            transition: .35s ease;

            backdrop-filter: blur(12px);
        }

        .choice:hover {
            transform: translateY(-5px);

            border-color: rgba(255,120,150,.4);

            background: rgba(255,70,120,.08);

            box-shadow:
                0 18px 45px rgba(0,0,0,.18);
        }

        .choice-emoji {
            display: block;

            margin-bottom: 9px;

            font-size: 26px;
        }

        .choice-text {
            color: rgba(255,255,255,.7);

            font-size: 11px;
        }


        /* =========================================
           LETTER
        ========================================= */

        .letter {
            position: relative;

            max-width: 600px;

            margin: 27px auto 0;

            padding: 31px;

            border-radius: 25px;

            border: 1px solid rgba(255,255,255,.09);

            background: rgba(255,255,255,.045);

            backdrop-filter: blur(18px);

            text-align: left;

            box-shadow:
                0 25px 70px rgba(0,0,0,.18);
        }

        .letter::before {
            content: "“";

            position: absolute;

            top: -30px;
            left: 18px;

            font-family: Georgia, serif;

            font-size: 100px;

            color: rgba(255,120,150,.18);
        }

        .letter p {
            position: relative;
            z-index: 2;

            font-family: "Cormorant Garamond", serif;

            font-size: 21px;

            line-height: 1.7;

            color: rgba(255,255,255,.82);
        }

        .signature {
            margin-top: 20px;

            text-align: right;

            color: #ff96b1;

            font-family: "Cormorant Garamond", serif;

            font-size: 22px;
        }


        /* =========================================
           FINAL
        ========================================= */

        .final-heart {
            margin-bottom: 15px;

            font-size: 92px;

            filter:
                drop-shadow(
                    0 0 35px rgba(255,60,110,.45)
                );

            animation: finalHeart 1.8s infinite ease-in-out;
        }

        @keyframes finalHeart {

            0%,
            100% {
                transform: scale(1) rotate(-2deg);
            }

            50% {
                transform: scale(1.12) rotate(2deg);
            }
        }

        .final-title {
            font-size: clamp(60px, 11vw, 105px) !important;
        }

        .final-message {
            font-family: "Cormorant Garamond", serif;

            font-size: 23px !important;

            line-height: 1.6 !important;

            color: rgba(255,255,255,.78) !important;
        }


        /* =========================================
           PROGRESS
        ========================================= */

        .progress {
            position: fixed;

            top: 22px;
            left: 50%;

            transform: translateX(-50%);

            display: flex;

            gap: 7px;

            z-index: 50;

            opacity: 0;

            pointer-events: none;

            transition: .5s ease;
        }

        .experience.unlocked .progress {
            opacity: 1;
        }

        .dot {
            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: rgba(255,255,255,.18);

            transition: .4s ease;
        }

        .dot.active {
            width: 22px;

            border-radius: 20px;

            background: #ff769c;

            box-shadow:
                0 0 12px rgba(255,118,156,.3);
        }


        /* =========================================
           FLOATING HEARTS
        ========================================= */

        .floating-heart {
            position: fixed;

            bottom: -40px;

            z-index: 100;

            pointer-events: none;

            opacity: 0;

            animation:
                floatHeart linear forwards;
        }

        @keyframes floatHeart {

            0% {
                transform:
                    translateY(0)
                    rotate(0deg)
                    scale(.7);

                opacity: 0;
            }

            10% {
                opacity: .75;
            }

            80% {
                opacity: .4;
            }

            100% {
                transform:
                    translateY(-110vh)
                    rotate(30deg)
                    scale(1.25);

                opacity: 0;
            }
        }


        /* =========================================
           SUCCESS FLASH
        ========================================= */

        .unlock-flash {
            position: fixed;

            inset: 0;

            z-index: 200;

            pointer-events: none;

            background:
                radial-gradient(
                    circle,
                    rgba(255,110,150,.18),
                    transparent 55%
                );

            opacity: 0;

            transition: opacity .5s ease;
        }

        .unlock-flash.show {
            opacity: 1;
        }


        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 600px) {

            .app {
                padding: 20px;
            }

            .lock-screen {
                width: 92vw;

                padding:
                    35px 22px;
            }

            .lock-icon {
                width: 74px;
                height: 74px;

                font-size: 31px;
            }

            .lock-screen h1 {
                font-size: 51px;
            }

            .lock-screen p {
                font-size: 11px;
            }

            .pin-input {
                padding: 16px;

                font-size: 20px;

                letter-spacing: 8px;
            }

            .screen {
                width: 90%;
            }

            .screen h1 {
                font-size: clamp(49px, 15vw, 72px);
            }

            .screen h2 {
                font-size: clamp(42px, 13vw, 60px);
            }

            .screen p {
                font-size: 13px;

                line-height: 1.8;
            }

            .big-heart {
                width: 82px;
                height: 82px;

                font-size: 42px;

                margin-bottom: 25px;
            }

            .next-button {
                margin-top: 29px;

                padding:
                    15px 25px;
            }

            .choices {
                grid-template-columns: 1fr;

                gap: 10px;

                margin-top: 25px;
            }

            .choice {
                padding: 16px;
            }

            .letter {
                padding: 24px 20px;

                margin-top: 23px;
            }

            .letter p {
                font-size: 19px;
            }

            .signature {
                font-size: 20px;
            }

            .final-heart {
                font-size: 70px;
            }

            .final-message {
                font-size: 20px !important;
            }

            .progress {
                top: 16px;
            }
        }


        /* =========================================
           VERY SMALL PHONES
        ========================================= */

        @media (max-height: 680px) and (max-width: 600px) {

            .screen h2 {
                font-size: 38px;
            }

            .screen p {
                font-size: 12px;
            }

            .big-heart {
                width: 65px;
                height: 65px;

                font-size: 32px;

                margin-bottom: 18px;
            }

            .letter {
                padding: 19px;
            }

            .letter p {
                font-size: 17px;
            }

            .next-button {
                margin-top: 20px;
            }
        }

    </style>
</head>

<body>

    <!-- =========================================
         BACKGROUND
    ========================================= -->

    <div class="background">

        <div class="glow one"></div>
        <div class="glow two"></div>
        <div class="glow three"></div>

        <div class="stars"></div>

    </div>


    <!-- =========================================
         UNLOCK FLASH
    ========================================= -->

    <div class="unlock-flash" id="unlockFlash"></div>


    <!-- =========================================
         MAIN APP
    ========================================= -->

    <main class="app">


        <!-- =====================================
             LOCK SCREEN
        ====================================== -->

        <section class="lock-screen" id="lockScreen">

            <div class="lock-icon">
                🔐
            </div>

            <span class="lock-label">
                Private surprise
            </span>

            <h1>
                For Kittu
            </h1>

            <p>
                There's something waiting for you inside...
                but you'll need a little secret to unlock it.
            </p>


            <!-- PIN DOTS -->

            <div class="pin-dots">

                <span class="pin-dot"></span>
                <span class="pin-dot"></span>
                <span class="pin-dot"></span>
                <span class="pin-dot"></span>

            </div>


            <!-- PIN INPUT -->

            <input
                type="password"
                id="pinInput"
                class="pin-input"
                maxlength="4"
                inputmode="numeric"
                autocomplete="off"
                placeholder="••••"
                aria-label="Enter secret PIN"
            >


            <!-- UNLOCK -->

            <button
                type="button"
                class="unlock-button"
                id="unlockButton"
            >
                Unlock my surprise ❤️
            </button>


            <div
                class="error-message"
                id="errorMessage"
            >
                Hmm... that's not the secret. Try again. ❤️
            </div>

        </section>


        <!-- =====================================
             SURPRISE EXPERIENCE
        ====================================== -->

        <div
            class="experience"
            id="experience"
        >

            <!-- PROGRESS -->

            <div class="progress">

                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>

            </div>


            <!-- =================================
                 SCREEN 1
            ================================== -->

            <section
                class="screen active"
                data-screen="0"
            >

                <div class="big-heart">
                    ♡
                </div>

                <span class="small-label">
                    A little something
                </span>

                <h1>
                    Kittu,<br>
                    I made<br>
                    <span class="highlight">
                        something
                    </span><br>
                    for you.
                </h1>

                <p>
                    This isn't just another webpage.
                    So don't rush through it...
                    there's a little story waiting for you. ❤️
                </p>

                <button
                    type="button"
                    class="next-button next"
                >
                    <span>
                        I'm curious →
                    </span>
                </button>

            </section>


            <!-- =================================
                 SCREEN 2
            ================================== -->

            <section
                class="screen"
                data-screen="1"
            >

                <span class="small-label">
                    First question
                </span>

                <h2>
                    If you could<br>
                    relive one moment...
                </h2>

                <p>
                    Which one would you choose?
                    Don't think too much. Just pick what
                    your heart says. 💗
                </p>


                <div class="choices">

                    <button
                        type="button"
                        class="choice next"
                    >
                        <span class="choice-emoji">
                            🌙
                        </span>

                        <span class="choice-text">
                            Our late night talks
                        </span>
                    </button>


                    <button
                        type="button"
                        class="choice next"
                    >
                        <span class="choice-emoji">
                            😂
                        </span>

                        <span class="choice-text">
                            The moments we laughed
                        </span>
                    </button>


                    <button
                        type="button"
                        class="choice next"
                    >
                        <span class="choice-emoji">
                            🥺
                        </span>

                        <span class="choice-text">
                            The quiet moments
                        </span>
                    </button>


                    <button
                        type="button"
                        class="choice next"
                    >
                        <span class="choice-emoji">
                            ❤️
                        </span>

                        <span class="choice-text">
                            Every moment
                        </span>
                    </button>

                </div>

            </section>


            <!-- =================================
                 SCREEN 3
            ================================== -->

            <section
                class="screen"
                data-screen="2"
            >

                <div class="big-heart">
                    ✨
                </div>

                <span class="small-label">
                    My answer
                </span>

                <h2>
                    I'd choose<br>
                    <span class="highlight">
                        all of them.
                    </span>
                </h2>

                <p>
                    Because I don't think it's one particular
                    moment that makes you special to me.
                    <br><br>
                    It's all the tiny things.
                    The random conversations.
                    The laughs. The silence.
                    The little moments we don't even realise
                    we'll remember someday.
                </p>

                <button
                    type="button"
                    class="next-button next"
                >
                    <span>
                        There's more? →
                    </span>
                </button>

            </section>


            <!-- =================================
                 SCREEN 4
            ================================== -->

            <section
                class="screen"
                data-screen="3"
            >

                <span class="small-label">
                    A tiny confession
                </span>

                <h2>
                    Kittu,<br>
                    you're my<br>
                    <span class="highlight">
                        favourite person.
                    </span>
                </h2>


                <div class="letter">

                    <p>
                        I know I don't always say everything
                        perfectly.
                        Sometimes I probably don't say it
                        enough either.
                        <br><br>

                        But having you in my life is one of
                        those things I never want to take
                        for granted.
                        <br><br>

                        You have this weird little ability
                        to make ordinary days feel special.
                        And somehow, even the smallest moments
                        with you become memories I want to keep.
                    </p>

                    <div class="signature">
                        — someone who loves you ❤️
                    </div>

                </div>


                <button
                    type="button"
                    class="next-button next"
                >
                    <span>
                        One last thing... →
                    </span>
                </button>

            </section>


            <!-- =================================
                 SCREEN 5
            ================================== -->

            <section
                class="screen"
                data-screen="4"
            >

                <div class="big-heart">
                    🔐
                </div>

                <span class="small-label">
                    Final level
                </span>

                <h2>
                    You made it<br>
                    this far.
                </h2>

                <p>
                    So I guess you deserve to know
                    what this whole little surprise
                    was really about...
                </p>

                <button
                    type="button"
                    class="next-button next"
                >
                    <span>
                        Reveal it ❤️
                    </span>
                </button>

            </section>


            <!-- =================================
                 FINAL SCREEN
            ================================== -->

            <section
                class="screen"
                data-screen="5"
            >

                <div class="final-heart">
                    ❤️
                </div>

                <span class="small-label">
                    You found it
                </span>

                <h1 class="final-title">
                    It's<br>
                    <span class="highlight">
                        you, Kittu.
                    </span>
                </h1>

                <p class="final-message">
                    If I had to choose one person
                    to keep beside me through all the
                    random, beautiful, messy and
                    unexpected moments life brings...
                    <br><br>

                    I'd choose you.
                    <br><br>

                    Today.
                    Tomorrow.
                    And all the little days in between.
                    ❤️
                </p>

                <button
                    type="button"
                    class="next-button"
                    id="heartButton"
                >
                    <span>
                        One more surprise ✨
                    </span>
                </button>

            </section>

        </div>

    </main>


    <script>

        /* =========================================
           SETTINGS
        ========================================= */

        const SECRET_PIN = "1607";


        /* =========================================
           ELEMENTS
        ========================================= */

        const lockScreen =
            document.getElementById("lockScreen");

        const pinInput =
            document.getElementById("pinInput");

        const unlockButton =
            document.getElementById("unlockButton");

        const errorMessage =
            document.getElementById("errorMessage");

        const experience =
            document.getElementById("experience");

        const unlockFlash =
            document.getElementById("unlockFlash");

        const pinDots =
            document.querySelectorAll(".pin-dot");

        const screens =
            document.querySelectorAll(".screen");

        const dots =
            document.querySelectorAll(".progress .dot");


        /* =========================================
           PIN DOT UPDATE
        ========================================= */

        pinInput.addEventListener("input", function () {

            this.value =
                this.value.replace(/\D/g, "").slice(0, 4);

            pinDots.forEach((dot, index) => {

                dot.classList.toggle(
                    "active",
                    index < this.value.length
                );

            });

            errorMessage.classList.remove("show");

        });


        /* =========================================
           ENTER KEY
        ========================================= */

        pinInput.addEventListener("keydown", function (event) {

            if (event.key === "Enter") {
                unlock();
            }

        });


        /* =========================================
           UNLOCK
        ========================================= */

        unlockButton.addEventListener(
            "click",
            unlock
        );


        function unlock() {

            const enteredPin =
                pinInput.value.trim();


            /* WRONG PIN */

            if (enteredPin !== SECRET_PIN) {

                errorMessage.classList.add("show");

                lockScreen.classList.remove("shake");

                void lockScreen.offsetWidth;

                lockScreen.classList.add("shake");

                pinInput.value = "";

                pinDots.forEach(dot => {
                    dot.classList.remove("active");
                });

                pinInput.focus();

                return;
            }


            /* CORRECT PIN */

            errorMessage.classList.remove("show");

            createHearts(25);

            unlockFlash.classList.add("show");


            setTimeout(() => {

                lockScreen.style.opacity = "0";
                lockScreen.style.transform =
                    "translateY(-20px) scale(.96)";

            }, 250);


            setTimeout(() => {

                lockScreen.style.display = "none";

                experience.classList.add("unlocked");

                unlockFlash.classList.remove("show");

            }, 750);

        }


        /* =========================================
           SCREEN NAVIGATION
        ========================================= */

        let currentScreen = 0;


        function showScreen(index) {

            if (
                index < 0 ||
                index >= screens.length
            ) {
                return;
            }


            screens[currentScreen]
                .classList
                .remove("active");


            currentScreen = index;


            setTimeout(() => {

                screens[currentScreen]
                    .classList
                    .add("active");

            }, 100);


            dots.forEach((dot, index) => {

                dot.classList.toggle(
                    "active",
                    index === currentScreen
                );

            });


            createHearts(6);

        }


        /* =========================================
           NEXT BUTTONS
        ========================================= */

        document
            .querySelectorAll(".next")
            .forEach(button => {

                button.addEventListener(
                    "click",
                    function () {

                        createHearts(8);

                        setTimeout(() => {

                            showScreen(
                                currentScreen + 1
                            );

                        }, 180);

                    }
                );

            });


        /* =========================================
           FINAL HEART BUTTON
        ========================================= */

        document
            .getElementById("heartButton")
            .addEventListener("click", function () {

                createHearts(45);

                this.innerHTML =
                    "<span>❤️ Kittu ❤️</span>";

                this.style.transform =
                    "scale(1.05)";

                setTimeout(() => {

                    this.innerHTML =
                        "<span>You're my favourite ❤️</span>";

                }, 1200);

            });


        /* =========================================
           FLOATING HEARTS
        ========================================= */

        function createHearts(amount = 5) {

            const heartCharacters = [
                "♡",
                "♥",
                "❤",
                "💕",
                "💗",
                "✨"
            ];


            for (
                let i = 0;
                i < amount;
                i++
            ) {

                const heart =
                    document.createElement("div");


                heart.className =
                    "floating-heart";


                heart.innerHTML =
                    heartCharacters[
                        Math.floor(
                            Math.random() *
                            heartCharacters.length
                        )
                    ];


                heart.style.left =
                    Math.random() * 100 + "vw";


                heart.style.fontSize =
                    12 +
                    Math.random() * 18 +
                    "px";


                heart.style.animationDuration =
                    5 +
                    Math.random() * 5 +
                    "s";


                heart.style.animationDelay =
                    Math.random() * .8 +
                    "s";


                document.body.appendChild(
                    heart
                );


                setTimeout(() => {

                    heart.remove();

                }, 11000);

            }

        }


        /* =========================================
           BACKGROUND HEART AMBIENCE
        ========================================= */

        setInterval(() => {

            if (
                experience.classList.contains(
                    "unlocked"
                )
            ) {

                if (
                    Math.random() > .45
                ) {
                    createHearts(1);
                }

            }

        }, 1800);


        /* =========================================
           CLICK HEART EFFECT
        ========================================= */

        document.addEventListener(
            "click",
            function (event) {

                if (
                    event.target.closest("button") ||
                    event.target.closest("input")
                ) {
                    return;
                }


                if (
                    !experience.classList.contains(
                        "unlocked"
                    )
                ) {
                    return;
                }


                const heart =
                    document.createElement("div");


                heart.innerHTML = "♡";


                heart.style.position = "fixed";

                heart.style.left =
                    event.clientX + "px";

                heart.style.top =
                    event.clientY + "px";

                heart.style.color =
                    "#ff86a7";

                heart.style.fontSize =
                    "19px";

                heart.style.pointerEvents =
                    "none";

                heart.style.zIndex =
                    "500";


                document.body.appendChild(
                    heart
                );


                heart.animate(
                    [
                        {
                            transform:
                                "translate(-50%, -50%) scale(.5)",
                            opacity: 1
                        },
                        {
                            transform:
                                "translate(-50%, -110px) scale(1.4)",
                            opacity: 0
                        }
                    ],
                    {
                        duration: 900,
                        easing: "ease-out"
                    }
                );


                setTimeout(() => {

                    heart.remove();

                }, 900);

            }
        );


        /* =========================================
           INITIAL FOCUS
        ========================================= */

        setTimeout(() => {

            pinInput.focus();

        }, 600);

    </script>

</body>
</html>