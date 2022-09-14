<!doctype html>
<html lang="en">

<head>
    <title>Voucher</title>
    <style>
        .fa {
            font-family: var(--fa-style-family, "Font Awesome 6 Free");
            font-weight: var(--fa-style, 900)
        }

        .fa,
        .fa-brands,
        .fa-duotone,
        .fa-light,
        .fa-regular,
        .fa-solid,
        .fa-thin,
        .fab,
        .fad,
        .fal,
        .far,
        .fas,
        .fat {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: var(--fa-display, inline-block);
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto
        }

        .fa-1x {
            font-size: 1em
        }

        .fa-2x {
            font-size: 2em
        }

        .fa-3x {
            font-size: 3em
        }

        .fa-4x {
            font-size: 4em
        }

        .fa-5x {
            font-size: 5em
        }

        .fa-6x {
            font-size: 6em
        }

        .fa-7x {
            font-size: 7em
        }

        .fa-8x {
            font-size: 8em
        }

        .fa-9x {
            font-size: 9em
        }

        .fa-10x {
            font-size: 10em
        }

        .fa-2xs {
            font-size: .625em;
            line-height: .1em;
            vertical-align: .225em
        }

        .fa-xs {
            font-size: .75em;
            line-height: .08333em;
            vertical-align: .125em
        }

        .fa-sm {
            font-size: .875em;
            line-height: .07143em;
            vertical-align: .05357em
        }

        .fa-lg {
            font-size: 1.25em;
            line-height: .05em;
            vertical-align: -.075em
        }

        .fa-xl {
            font-size: 1.5em;
            line-height: .04167em;
            vertical-align: -.125em
        }

        .fa-2xl {
            font-size: 2em;
            line-height: .03125em;
            vertical-align: -.1875em
        }

        .fa-fw {
            text-align: center;
            width: 1.25em
        }

        .fa-ul {
            list-style-type: none;
            margin-left: var(--fa-li-margin, 2.5em);
            padding-left: 0
        }

        .fa-ul>li {
            position: relative
        }

        .fa-li {
            left: calc(var(--fa-li-width, 2em)*-1);
            position: absolute;
            text-align: center;
            width: var(--fa-li-width, 2em);
            line-height: inherit
        }

        .fa-border {
            border-radius: var(--fa-border-radius, .1em);
            border: var(--fa-border-width, .08em) var(--fa-border-style, solid) var(--fa-border-color, #eee);
            padding: var(--fa-border-padding, .2em .25em .15em)
        }

        .fa-pull-left {
            float: left;
            margin-right: var(--fa-pull-margin, .3em)
        }

        .fa-pull-right {
            float: right;
            margin-left: var(--fa-pull-margin, .3em)
        }

        .fa-beat {
            -webkit-animation-name: fa-beat;
            animation-name: fa-beat;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out)
        }

        .fa-bounce {
            -webkit-animation-name: fa-bounce;
            animation-name: fa-bounce;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(.28, .84, .42, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(.28, .84, .42, 1))
        }

        .fa-fade {
            -webkit-animation-name: fa-fade;
            animation-name: fa-fade;
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1))
        }

        .fa-beat-fade,
        .fa-fade {
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s)
        }

        .fa-beat-fade {
            -webkit-animation-name: fa-beat-fade;
            animation-name: fa-beat-fade;
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1))
        }

        .fa-flip {
            -webkit-animation-name: fa-flip;
            animation-name: fa-flip;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out)
        }

        .fa-shake {
            -webkit-animation-name: fa-shake;
            animation-name: fa-shake;
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear)
        }

        .fa-shake,
        .fa-spin {
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal)
        }

        .fa-spin {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-duration: var(--fa-animation-duration, 2s);
            animation-duration: var(--fa-animation-duration, 2s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear)
        }

        .fa-spin-reverse {
            --fa-animation-direction: reverse
        }

        .fa-pulse,
        .fa-spin-pulse {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
            animation-timing-function: var(--fa-animation-timing, steps(8))
        }

        @media (prefers-reduced-motion:reduce) {

            .fa-beat,
            .fa-beat-fade,
            .fa-bounce,
            .fa-fade,
            .fa-flip,
            .fa-pulse,
            .fa-shake,
            .fa-spin,
            .fa-spin-pulse {
                -webkit-animation-delay: -1ms;
                animation-delay: -1ms;
                -webkit-animation-duration: 1ms;
                animation-duration: 1ms;
                -webkit-animation-iteration-count: 1;
                animation-iteration-count: 1;
                transition-delay: 0s;
                transition-duration: 0s
            }
        }

        @-webkit-keyframes fa-beat {

            0%,
            90% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25))
            }
        }

        @keyframes fa-beat {

            0%,
            90% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25))
            }
        }

        @-webkit-keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1) translateY(0);
                transform: scale(1) translateY(0)
            }

            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0)
            }

            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em))
            }

            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0)
            }

            57% {
                -webkit-transform: scale(1) translateY(var(--fa-bounce-rebound, -.125em));
                transform: scale(1) translateY(var(--fa-bounce-rebound, -.125em))
            }

            64% {
                -webkit-transform: scale(1) translateY(0);
                transform: scale(1) translateY(0)
            }

            to {
                -webkit-transform: scale(1) translateY(0);
                transform: scale(1) translateY(0)
            }
        }

        @keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1) translateY(0);
                transform: scale(1) translateY(0)
            }

            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0)
            }

            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em))
            }

            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0)
            }

            57% {
                -webkit-transform: scale(1) translateY(var(--fa-bounce-rebound, -.125em));
                transform: scale(1) translateY(var(--fa-bounce-rebound, -.125em))
            }

            64% {
                -webkit-transform: scale(1) translateY(0);
                transform: scale(1) translateY(0)
            }

            to {
                -webkit-transform: scale(1) translateY(0);
                transform: scale(1) translateY(0)
            }
        }

        @-webkit-keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, .4)
            }
        }

        @keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, .4)
            }
        }

        @-webkit-keyframes fa-beat-fade {

            0%,
            to {
                opacity: var(--fa-beat-fade-opacity, .4);
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125))
            }
        }

        @keyframes fa-beat-fade {

            0%,
            to {
                opacity: var(--fa-beat-fade-opacity, .4);
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125))
            }
        }

        @-webkit-keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg))
            }
        }

        @keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg))
            }
        }

        @-webkit-keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg)
            }

            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg)
            }

            8%,
            24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg)
            }

            12%,
            28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg)
            }

            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg)
            }

            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg)
            }

            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg)
            }

            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg)
            }

            40%,
            to {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }
        }

        @keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg)
            }

            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg)
            }

            8%,
            24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg)
            }

            12%,
            28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg)
            }

            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg)
            }

            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg)
            }

            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg)
            }

            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg)
            }

            40%,
            to {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        .fa-rotate-90 {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .fa-rotate-180 {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .fa-rotate-270 {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg)
        }

        .fa-flip-horizontal {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1)
        }

        .fa-flip-vertical {
            -webkit-transform: scaleY(-1);
            transform: scaleY(-1)
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1);
            transform: scale(-1)
        }

        .fa-rotate-by {
            -webkit-transform: rotate(var(--fa-rotate-angle, none));
            transform: rotate(var(--fa-rotate-angle, none))
        }

        .fa-stack {
            display: inline-block;
            height: 2em;
            line-height: 2em;
            position: relative;
            vertical-align: middle;
            width: 2.5em
        }

        .fa-stack-1x,
        .fa-stack-2x {
            left: 0;
            position: absolute;
            text-align: center;
            width: 100%;
            z-index: var(--fa-stack-z-index, auto)
        }

        .fa-stack-1x {
            line-height: inherit
        }

        .fa-stack-2x {
            font-size: 2em
        }

        .fa-inverse {
            color: var(--fa-inverse, #fff)
        }

        .fa-0:before {
            content: "\30"
        }

        .fa-1:before {
            content: "\31"
        }

        .fa-2:before {
            content: "\32"
        }

        .fa-3:before {
            content: "\33"
        }

        .fa-4:before {
            content: "\34"
        }

        .fa-5:before {
            content: "\35"
        }

        .fa-6:before {
            content: "\36"
        }

        .fa-7:before {
            content: "\37"
        }

        .fa-8:before {
            content: "\38"
        }

        .fa-9:before {
            content: "\39"
        }

        .fa-a:before {
            content: "\41"
        }

        .fa-address-book:before,
        .fa-contact-book:before {
            content: "\f2b9"
        }

        .fa-address-card:before,
        .fa-contact-card:before,
        .fa-vcard:before {
            content: "\f2bb"
        }

        .fa-align-center:before {
            content: "\f037"
        }

        .fa-align-justify:before {
            content: "\f039"
        }

        .fa-align-left:before {
            content: "\f036"
        }

        .fa-align-right:before {
            content: "\f038"
        }

        .fa-anchor:before {
            content: "\f13d"
        }

        .fa-anchor-circle-check:before {
            content: "\e4aa"
        }

        .fa-anchor-circle-exclamation:before {
            content: "\e4ab"
        }

        .fa-anchor-circle-xmark:before {
            content: "\e4ac"
        }

        .fa-anchor-lock:before {
            content: "\e4ad"
        }

        .fa-angle-down:before {
            content: "\f107"
        }

        .fa-angle-left:before {
            content: "\f104"
        }

        .fa-angle-right:before {
            content: "\f105"
        }

        .fa-angle-up:before {
            content: "\f106"
        }

        .fa-angle-double-down:before,
        .fa-angles-down:before {
            content: "\f103"
        }

        .fa-angle-double-left:before,
        .fa-angles-left:before {
            content: "\f100"
        }

        .fa-angle-double-right:before,
        .fa-angles-right:before {
            content: "\f101"
        }

        .fa-angle-double-up:before,
        .fa-angles-up:before {
            content: "\f102"
        }

        .fa-ankh:before {
            content: "\f644"
        }

        .fa-apple-alt:before,
        .fa-apple-whole:before {
            content: "\f5d1"
        }

        .fa-archway:before {
            content: "\f557"
        }

        .fa-arrow-down:before {
            content: "\f063"
        }

        .fa-arrow-down-1-9:before,
        .fa-sort-numeric-asc:before,
        .fa-sort-numeric-down:before {
            content: "\f162"
        }

        .fa-arrow-down-9-1:before,
        .fa-sort-numeric-desc:before,
        .fa-sort-numeric-down-alt:before {
            content: "\f886"
        }

        .fa-arrow-down-a-z:before,
        .fa-sort-alpha-asc:before,
        .fa-sort-alpha-down:before {
            content: "\f15d"
        }

        .fa-arrow-down-long:before,
        .fa-long-arrow-down:before {
            content: "\f175"
        }

        .fa-arrow-down-short-wide:before,
        .fa-sort-amount-desc:before,
        .fa-sort-amount-down-alt:before {
            content: "\f884"
        }

        .fa-arrow-down-up-across-line:before {
            content: "\e4af"
        }

        .fa-arrow-down-up-lock:before {
            content: "\e4b0"
        }

        .fa-arrow-down-wide-short:before,
        .fa-sort-amount-asc:before,
        .fa-sort-amount-down:before {
            content: "\f160"
        }

        .fa-arrow-down-z-a:before,
        .fa-sort-alpha-desc:before,
        .fa-sort-alpha-down-alt:before {
            content: "\f881"
        }

        .fa-arrow-left:before {
            content: "\f060"
        }

        .fa-arrow-left-long:before,
        .fa-long-arrow-left:before {
            content: "\f177"
        }

        .fa-arrow-pointer:before,
        .fa-mouse-pointer:before {
            content: "\f245"
        }

        .fa-arrow-right:before {
            content: "\f061"
        }

        .fa-arrow-right-arrow-left:before,
        .fa-exchange:before {
            content: "\f0ec"
        }

        .fa-arrow-right-from-bracket:before,
        .fa-sign-out:before {
            content: "\f08b"
        }

        .fa-arrow-right-long:before,
        .fa-long-arrow-right:before {
            content: "\f178"
        }

        .fa-arrow-right-to-bracket:before,
        .fa-sign-in:before {
            content: "\f090"
        }

        .fa-arrow-right-to-city:before {
            content: "\e4b3"
        }

        .fa-arrow-left-rotate:before,
        .fa-arrow-rotate-back:before,
        .fa-arrow-rotate-backward:before,
        .fa-arrow-rotate-left:before,
        .fa-undo:before {
            content: "\f0e2"
        }

        .fa-arrow-right-rotate:before,
        .fa-arrow-rotate-forward:before,
        .fa-arrow-rotate-right:before,
        .fa-redo:before {
            content: "\f01e"
        }

        .fa-arrow-trend-down:before {
            content: "\e097"
        }

        .fa-arrow-trend-up:before {
            content: "\e098"
        }

        .fa-arrow-turn-down:before,
        .fa-level-down:before {
            content: "\f149"
        }

        .fa-arrow-turn-up:before,
        .fa-level-up:before {
            content: "\f148"
        }

        .fa-arrow-up:before {
            content: "\f062"
        }

        .fa-arrow-up-1-9:before,
        .fa-sort-numeric-up:before {
            content: "\f163"
        }

        .fa-arrow-up-9-1:before,
        .fa-sort-numeric-up-alt:before {
            content: "\f887"
        }

        .fa-arrow-up-a-z:before,
        .fa-sort-alpha-up:before {
            content: "\f15e"
        }

        .fa-arrow-up-from-bracket:before {
            content: "\e09a"
        }

        .fa-arrow-up-from-ground-water:before {
            content: "\e4b5"
        }

        .fa-arrow-up-from-water-pump:before {
            content: "\e4b6"
        }

        .fa-arrow-up-long:before,
        .fa-long-arrow-up:before {
            content: "\f176"
        }

        .fa-arrow-up-right-dots:before {
            content: "\e4b7"
        }

        .fa-arrow-up-right-from-square:before,
        .fa-external-link:before {
            content: "\f08e"
        }

        .fa-arrow-up-short-wide:before,
        .fa-sort-amount-up-alt:before {
            content: "\f885"
        }

        .fa-arrow-up-wide-short:before,
        .fa-sort-amount-up:before {
            content: "\f161"
        }

        .fa-arrow-up-z-a:before,
        .fa-sort-alpha-up-alt:before {
            content: "\f882"
        }

        .fa-arrows-down-to-line:before {
            content: "\e4b8"
        }

        .fa-arrows-down-to-people:before {
            content: "\e4b9"
        }

        .fa-arrows-h:before,
        .fa-arrows-left-right:before {
            content: "\f07e"
        }

        .fa-arrows-left-right-to-line:before {
            content: "\e4ba"
        }

        .fa-arrows-rotate:before,
        .fa-refresh:before,
        .fa-sync:before {
            content: "\f021"
        }

        .fa-arrows-spin:before {
            content: "\e4bb"
        }

        .fa-arrows-split-up-and-left:before {
            content: "\e4bc"
        }

        .fa-arrows-to-circle:before {
            content: "\e4bd"
        }

        .fa-arrows-to-dot:before {
            content: "\e4be"
        }

        .fa-arrows-to-eye:before {
            content: "\e4bf"
        }

        .fa-arrows-turn-right:before {
            content: "\e4c0"
        }

        .fa-arrows-turn-to-dots:before {
            content: "\e4c1"
        }

        .fa-arrows-up-down:before,
        .fa-arrows-v:before {
            content: "\f07d"
        }

        .fa-arrows-up-down-left-right:before,
        .fa-arrows:before {
            content: "\f047"
        }

        .fa-arrows-up-to-line:before {
            content: "\e4c2"
        }

        .fa-asterisk:before {
            content: "\2a"
        }

        .fa-at:before {
            content: "\40"
        }

        .fa-atom:before {
            content: "\f5d2"
        }

        .fa-audio-description:before {
            content: "\f29e"
        }

        .fa-austral-sign:before {
            content: "\e0a9"
        }

        .fa-award:before {
            content: "\f559"
        }

        .fa-b:before {
            content: "\42"
        }

        .fa-baby:before {
            content: "\f77c"
        }

        .fa-baby-carriage:before,
        .fa-carriage-baby:before {
            content: "\f77d"
        }

        .fa-backward:before {
            content: "\f04a"
        }

        .fa-backward-fast:before,
        .fa-fast-backward:before {
            content: "\f049"
        }

        .fa-backward-step:before,
        .fa-step-backward:before {
            content: "\f048"
        }

        .fa-bacon:before {
            content: "\f7e5"
        }

        .fa-bacteria:before {
            content: "\e059"
        }

        .fa-bacterium:before {
            content: "\e05a"
        }

        .fa-bag-shopping:before,
        .fa-shopping-bag:before {
            content: "\f290"
        }

        .fa-bahai:before {
            content: "\f666"
        }

        .fa-baht-sign:before {
            content: "\e0ac"
        }

        .fa-ban:before,
        .fa-cancel:before {
            content: "\f05e"
        }

        .fa-ban-smoking:before,
        .fa-smoking-ban:before {
            content: "\f54d"
        }

        .fa-band-aid:before,
        .fa-bandage:before {
            content: "\f462"
        }

        .fa-barcode:before {
            content: "\f02a"
        }

        .fa-bars:before,
        .fa-navicon:before {
            content: "\f0c9"
        }

        .fa-bars-progress:before,
        .fa-tasks-alt:before {
            content: "\f828"
        }

        .fa-bars-staggered:before,
        .fa-reorder:before,
        .fa-stream:before {
            content: "\f550"
        }

        .fa-baseball-ball:before,
        .fa-baseball:before {
            content: "\f433"
        }

        .fa-baseball-bat-ball:before {
            content: "\f432"
        }

        .fa-basket-shopping:before,
        .fa-shopping-basket:before {
            content: "\f291"
        }

        .fa-basketball-ball:before,
        .fa-basketball:before {
            content: "\f434"
        }

        .fa-bath:before,
        .fa-bathtub:before {
            content: "\f2cd"
        }

        .fa-battery-0:before,
        .fa-battery-empty:before {
            content: "\f244"
        }

        .fa-battery-5:before,
        .fa-battery-full:before,
        .fa-battery:before {
            content: "\f240"
        }

        .fa-battery-3:before,
        .fa-battery-half:before {
            content: "\f242"
        }

        .fa-battery-2:before,
        .fa-battery-quarter:before {
            content: "\f243"
        }

        .fa-battery-4:before,
        .fa-battery-three-quarters:before {
            content: "\f241"
        }

        .fa-bed:before {
            content: "\f236"
        }

        .fa-bed-pulse:before,
        .fa-procedures:before {
            content: "\f487"
        }

        .fa-beer-mug-empty:before,
        .fa-beer:before {
            content: "\f0fc"
        }

        .fa-bell:before {
            content: "\f0f3"
        }

        .fa-bell-concierge:before,
        .fa-concierge-bell:before {
            content: "\f562"
        }

        .fa-bell-slash:before {
            content: "\f1f6"
        }

        .fa-bezier-curve:before {
            content: "\f55b"
        }

        .fa-bicycle:before {
            content: "\f206"
        }

        .fa-binoculars:before {
            content: "\f1e5"
        }

        .fa-biohazard:before {
            content: "\f780"
        }

        .fa-bitcoin-sign:before {
            content: "\e0b4"
        }

        .fa-blender:before {
            content: "\f517"
        }

        .fa-blender-phone:before {
            content: "\f6b6"
        }

        .fa-blog:before {
            content: "\f781"
        }

        .fa-bold:before {
            content: "\f032"
        }

        .fa-bolt:before,
        .fa-zap:before {
            content: "\f0e7"
        }

        .fa-bolt-lightning:before {
            content: "\e0b7"
        }

        .fa-bomb:before {
            content: "\f1e2"
        }

        .fa-bone:before {
            content: "\f5d7"
        }

        .fa-bong:before {
            content: "\f55c"
        }

        .fa-book:before {
            content: "\f02d"
        }

        .fa-atlas:before,
        .fa-book-atlas:before {
            content: "\f558"
        }

        .fa-bible:before,
        .fa-book-bible:before {
            content: "\f647"
        }

        .fa-book-bookmark:before {
            content: "\e0bb"
        }

        .fa-book-journal-whills:before,
        .fa-journal-whills:before {
            content: "\f66a"
        }

        .fa-book-medical:before {
            content: "\f7e6"
        }

        .fa-book-open:before {
            content: "\f518"
        }

        .fa-book-open-reader:before,
        .fa-book-reader:before {
            content: "\f5da"
        }

        .fa-book-quran:before,
        .fa-quran:before {
            content: "\f687"
        }

        .fa-book-dead:before,
        .fa-book-skull:before {
            content: "\f6b7"
        }

        .fa-bookmark:before {
            content: "\f02e"
        }

        .fa-border-all:before {
            content: "\f84c"
        }

        .fa-border-none:before {
            content: "\f850"
        }

        .fa-border-style:before,
        .fa-border-top-left:before {
            content: "\f853"
        }

        .fa-bore-hole:before {
            content: "\e4c3"
        }

        .fa-bottle-droplet:before {
            content: "\e4c4"
        }

        .fa-bottle-water:before {
            content: "\e4c5"
        }

        .fa-bowl-food:before {
            content: "\e4c6"
        }

        .fa-bowl-rice:before {
            content: "\e2eb"
        }

        .fa-bowling-ball:before {
            content: "\f436"
        }

        .fa-box:before {
            content: "\f466"
        }

        .fa-archive:before,
        .fa-box-archive:before {
            content: "\f187"
        }

        .fa-box-open:before {
            content: "\f49e"
        }

        .fa-box-tissue:before {
            content: "\e05b"
        }

        .fa-boxes-packing:before {
            content: "\e4c7"
        }

        .fa-boxes-alt:before,
        .fa-boxes-stacked:before,
        .fa-boxes:before {
            content: "\f468"
        }

        .fa-braille:before {
            content: "\f2a1"
        }

        .fa-brain:before {
            content: "\f5dc"
        }

        .fa-brazilian-real-sign:before {
            content: "\e46c"
        }

        .fa-bread-slice:before {
            content: "\f7ec"
        }

        .fa-bridge:before {
            content: "\e4c8"
        }

        .fa-bridge-circle-check:before {
            content: "\e4c9"
        }

        .fa-bridge-circle-exclamation:before {
            content: "\e4ca"
        }

        .fa-bridge-circle-xmark:before {
            content: "\e4cb"
        }

        .fa-bridge-lock:before {
            content: "\e4cc"
        }

        .fa-bridge-water:before {
            content: "\e4ce"
        }

        .fa-briefcase:before {
            content: "\f0b1"
        }

        .fa-briefcase-medical:before {
            content: "\f469"
        }

        .fa-broom:before {
            content: "\f51a"
        }

        .fa-broom-ball:before,
        .fa-quidditch-broom-ball:before,
        .fa-quidditch:before {
            content: "\f458"
        }

        .fa-brush:before {
            content: "\f55d"
        }

        .fa-bucket:before {
            content: "\e4cf"
        }

        .fa-bug:before {
            content: "\f188"
        }

        .fa-bug-slash:before {
            content: "\e490"
        }

        .fa-bugs:before {
            content: "\e4d0"
        }

        .fa-building:before {
            content: "\f1ad"
        }

        .fa-building-circle-arrow-right:before {
            content: "\e4d1"
        }

        .fa-building-circle-check:before {
            content: "\e4d2"
        }

        .fa-building-circle-exclamation:before {
            content: "\e4d3"
        }

        .fa-building-circle-xmark:before {
            content: "\e4d4"
        }

        .fa-bank:before,
        .fa-building-columns:before,
        .fa-institution:before,
        .fa-museum:before,
        .fa-university:before {
            content: "\f19c"
        }

        .fa-building-flag:before {
            content: "\e4d5"
        }

        .fa-building-lock:before {
            content: "\e4d6"
        }

        .fa-building-ngo:before {
            content: "\e4d7"
        }

        .fa-building-shield:before {
            content: "\e4d8"
        }

        .fa-building-un:before {
            content: "\e4d9"
        }

        .fa-building-user:before {
            content: "\e4da"
        }

        .fa-building-wheat:before {
            content: "\e4db"
        }

        .fa-bullhorn:before {
            content: "\f0a1"
        }

        .fa-bullseye:before {
            content: "\f140"
        }

        .fa-burger:before,
        .fa-hamburger:before {
            content: "\f805"
        }

        .fa-burst:before {
            content: "\e4dc"
        }

        .fa-bus:before {
            content: "\f207"
        }

        .fa-bus-alt:before,
        .fa-bus-simple:before {
            content: "\f55e"
        }

        .fa-briefcase-clock:before,
        .fa-business-time:before {
            content: "\f64a"
        }

        .fa-c:before {
            content: "\43"
        }

        .fa-birthday-cake:before,
        .fa-cake-candles:before,
        .fa-cake:before {
            content: "\f1fd"
        }

        .fa-calculator:before {
            content: "\f1ec"
        }

        .fa-calendar:before {
            content: "\f133"
        }

        .fa-calendar-check:before {
            content: "\f274"
        }

        .fa-calendar-day:before {
            content: "\f783"
        }

        .fa-calendar-alt:before,
        .fa-calendar-days:before {
            content: "\f073"
        }

        .fa-calendar-minus:before {
            content: "\f272"
        }

        .fa-calendar-plus:before {
            content: "\f271"
        }

        .fa-calendar-week:before {
            content: "\f784"
        }

        .fa-calendar-times:before,
        .fa-calendar-xmark:before {
            content: "\f273"
        }

        .fa-camera-alt:before,
        .fa-camera:before {
            content: "\f030"
        }

        .fa-camera-retro:before {
            content: "\f083"
        }

        .fa-camera-rotate:before {
            content: "\e0d8"
        }

        .fa-campground:before {
            content: "\f6bb"
        }

        .fa-candy-cane:before {
            content: "\f786"
        }

        .fa-cannabis:before {
            content: "\f55f"
        }

        .fa-capsules:before {
            content: "\f46b"
        }

        .fa-automobile:before,
        .fa-car:before {
            content: "\f1b9"
        }

        .fa-battery-car:before,
        .fa-car-battery:before {
            content: "\f5df"
        }

        .fa-car-burst:before,
        .fa-car-crash:before {
            content: "\f5e1"
        }

        .fa-car-on:before {
            content: "\e4dd"
        }

        .fa-car-alt:before,
        .fa-car-rear:before {
            content: "\f5de"
        }

        .fa-car-side:before {
            content: "\f5e4"
        }

        .fa-car-tunnel:before {
            content: "\e4de"
        }

        .fa-caravan:before {
            content: "\f8ff"
        }

        .fa-caret-down:before {
            content: "\f0d7"
        }

        .fa-caret-left:before {
            content: "\f0d9"
        }

        .fa-caret-right:before {
            content: "\f0da"
        }

        .fa-caret-up:before {
            content: "\f0d8"
        }

        .fa-carrot:before {
            content: "\f787"
        }

        .fa-cart-arrow-down:before {
            content: "\f218"
        }

        .fa-cart-flatbed:before,
        .fa-dolly-flatbed:before {
            content: "\f474"
        }

        .fa-cart-flatbed-suitcase:before,
        .fa-luggage-cart:before {
            content: "\f59d"
        }

        .fa-cart-plus:before {
            content: "\f217"
        }

        .fa-cart-shopping:before,
        .fa-shopping-cart:before {
            content: "\f07a"
        }

        .fa-cash-register:before {
            content: "\f788"
        }

        .fa-cat:before {
            content: "\f6be"
        }

        .fa-cedi-sign:before {
            content: "\e0df"
        }

        .fa-cent-sign:before {
            content: "\e3f5"
        }

        .fa-certificate:before {
            content: "\f0a3"
        }

        .fa-chair:before {
            content: "\f6c0"
        }

        .fa-blackboard:before,
        .fa-chalkboard:before {
            content: "\f51b"
        }

        .fa-chalkboard-teacher:before,
        .fa-chalkboard-user:before {
            content: "\f51c"
        }

        .fa-champagne-glasses:before,
        .fa-glass-cheers:before {
            content: "\f79f"
        }

        .fa-charging-station:before {
            content: "\f5e7"
        }

        .fa-area-chart:before,
        .fa-chart-area:before {
            content: "\f1fe"
        }

        .fa-bar-chart:before,
        .fa-chart-bar:before {
            content: "\f080"
        }

        .fa-chart-column:before {
            content: "\e0e3"
        }

        .fa-chart-gantt:before {
            content: "\e0e4"
        }

        .fa-chart-line:before,
        .fa-line-chart:before {
            content: "\f201"
        }

        .fa-chart-pie:before,
        .fa-pie-chart:before {
            content: "\f200"
        }

        .fa-chart-simple:before {
            content: "\e473"
        }

        .fa-check:before {
            content: "\f00c"
        }

        .fa-check-double:before {
            content: "\f560"
        }

        .fa-check-to-slot:before,
        .fa-vote-yea:before {
            content: "\f772"
        }

        .fa-cheese:before {
            content: "\f7ef"
        }

        .fa-chess:before {
            content: "\f439"
        }

        .fa-chess-bishop:before {
            content: "\f43a"
        }

        .fa-chess-board:before {
            content: "\f43c"
        }

        .fa-chess-king:before {
            content: "\f43f"
        }

        .fa-chess-knight:before {
            content: "\f441"
        }

        .fa-chess-pawn:before {
            content: "\f443"
        }

        .fa-chess-queen:before {
            content: "\f445"
        }

        .fa-chess-rook:before {
            content: "\f447"
        }

        .fa-chevron-down:before {
            content: "\f078"
        }

        .fa-chevron-left:before {
            content: "\f053"
        }

        .fa-chevron-right:before {
            content: "\f054"
        }

        .fa-chevron-up:before {
            content: "\f077"
        }

        .fa-child:before {
            content: "\f1ae"
        }

        .fa-child-dress:before {
            content: "\e59c"
        }

        .fa-child-reaching:before {
            content: "\e59d"
        }

        .fa-child-rifle:before {
            content: "\e4e0"
        }

        .fa-children:before {
            content: "\e4e1"
        }

        .fa-church:before {
            content: "\f51d"
        }

        .fa-circle:before {
            content: "\f111"
        }

        .fa-arrow-circle-down:before,
        .fa-circle-arrow-down:before {
            content: "\f0ab"
        }

        .fa-arrow-circle-left:before,
        .fa-circle-arrow-left:before {
            content: "\f0a8"
        }

        .fa-arrow-circle-right:before,
        .fa-circle-arrow-right:before {
            content: "\f0a9"
        }

        .fa-arrow-circle-up:before,
        .fa-circle-arrow-up:before {
            content: "\f0aa"
        }

        .fa-check-circle:before,
        .fa-circle-check:before {
            content: "\f058"
        }

        .fa-chevron-circle-down:before,
        .fa-circle-chevron-down:before {
            content: "\f13a"
        }

        .fa-chevron-circle-left:before,
        .fa-circle-chevron-left:before {
            content: "\f137"
        }

        .fa-chevron-circle-right:before,
        .fa-circle-chevron-right:before {
            content: "\f138"
        }

        .fa-chevron-circle-up:before,
        .fa-circle-chevron-up:before {
            content: "\f139"
        }

        .fa-circle-dollar-to-slot:before,
        .fa-donate:before {
            content: "\f4b9"
        }

        .fa-circle-dot:before,
        .fa-dot-circle:before {
            content: "\f192"
        }

        .fa-arrow-alt-circle-down:before,
        .fa-circle-down:before {
            content: "\f358"
        }

        .fa-circle-exclamation:before,
        .fa-exclamation-circle:before {
            content: "\f06a"
        }

        .fa-circle-h:before,
        .fa-hospital-symbol:before {
            content: "\f47e"
        }

        .fa-adjust:before,
        .fa-circle-half-stroke:before {
            content: "\f042"
        }

        .fa-circle-info:before,
        .fa-info-circle:before {
            content: "\f05a"
        }

        .fa-arrow-alt-circle-left:before,
        .fa-circle-left:before {
            content: "\f359"
        }

        .fa-circle-minus:before,
        .fa-minus-circle:before {
            content: "\f056"
        }

        .fa-circle-nodes:before {
            content: "\e4e2"
        }

        .fa-circle-notch:before {
            content: "\f1ce"
        }

        .fa-circle-pause:before,
        .fa-pause-circle:before {
            content: "\f28b"
        }

        .fa-circle-play:before,
        .fa-play-circle:before {
            content: "\f144"
        }

        .fa-circle-plus:before,
        .fa-plus-circle:before {
            content: "\f055"
        }

        .fa-circle-question:before,
        .fa-question-circle:before {
            content: "\f059"
        }

        .fa-circle-radiation:before,
        .fa-radiation-alt:before {
            content: "\f7ba"
        }

        .fa-arrow-alt-circle-right:before,
        .fa-circle-right:before {
            content: "\f35a"
        }

        .fa-circle-stop:before,
        .fa-stop-circle:before {
            content: "\f28d"
        }

        .fa-arrow-alt-circle-up:before,
        .fa-circle-up:before {
            content: "\f35b"
        }

        .fa-circle-user:before,
        .fa-user-circle:before {
            content: "\f2bd"
        }

        .fa-circle-xmark:before,
        .fa-times-circle:before,
        .fa-xmark-circle:before {
            content: "\f057"
        }

        .fa-city:before {
            content: "\f64f"
        }

        .fa-clapperboard:before {
            content: "\e131"
        }

        .fa-clipboard:before {
            content: "\f328"
        }

        .fa-clipboard-check:before {
            content: "\f46c"
        }

        .fa-clipboard-list:before {
            content: "\f46d"
        }

        .fa-clipboard-question:before {
            content: "\e4e3"
        }

        .fa-clipboard-user:before {
            content: "\f7f3"
        }

        .fa-clock-four:before,
        .fa-clock:before {
            content: "\f017"
        }

        .fa-clock-rotate-left:before,
        .fa-history:before {
            content: "\f1da"
        }

        .fa-clone:before {
            content: "\f24d"
        }

        .fa-closed-captioning:before {
            content: "\f20a"
        }

        .fa-cloud:before {
            content: "\f0c2"
        }

        .fa-cloud-arrow-down:before,
        .fa-cloud-download-alt:before,
        .fa-cloud-download:before {
            content: "\f0ed"
        }

        .fa-cloud-arrow-up:before,
        .fa-cloud-upload-alt:before,
        .fa-cloud-upload:before {
            content: "\f0ee"
        }

        .fa-cloud-bolt:before,
        .fa-thunderstorm:before {
            content: "\f76c"
        }

        .fa-cloud-meatball:before {
            content: "\f73b"
        }

        .fa-cloud-moon:before {
            content: "\f6c3"
        }

        .fa-cloud-moon-rain:before {
            content: "\f73c"
        }

        .fa-cloud-rain:before {
            content: "\f73d"
        }

        .fa-cloud-showers-heavy:before {
            content: "\f740"
        }

        .fa-cloud-showers-water:before {
            content: "\e4e4"
        }

        .fa-cloud-sun:before {
            content: "\f6c4"
        }

        .fa-cloud-sun-rain:before {
            content: "\f743"
        }

        .fa-clover:before {
            content: "\e139"
        }

        .fa-code:before {
            content: "\f121"
        }

        .fa-code-branch:before {
            content: "\f126"
        }

        .fa-code-commit:before {
            content: "\f386"
        }

        .fa-code-compare:before {
            content: "\e13a"
        }

        .fa-code-fork:before {
            content: "\e13b"
        }

        .fa-code-merge:before {
            content: "\f387"
        }

        .fa-code-pull-request:before {
            content: "\e13c"
        }

        .fa-coins:before {
            content: "\f51e"
        }

        .fa-colon-sign:before {
            content: "\e140"
        }

        .fa-comment:before {
            content: "\f075"
        }

        .fa-comment-dollar:before {
            content: "\f651"
        }

        .fa-comment-dots:before,
        .fa-commenting:before {
            content: "\f4ad"
        }

        .fa-comment-medical:before {
            content: "\f7f5"
        }

        .fa-comment-slash:before {
            content: "\f4b3"
        }

        .fa-comment-sms:before,
        .fa-sms:before {
            content: "\f7cd"
        }

        .fa-comments:before {
            content: "\f086"
        }

        .fa-comments-dollar:before {
            content: "\f653"
        }

        .fa-compact-disc:before {
            content: "\f51f"
        }

        .fa-compass:before {
            content: "\f14e"
        }

        .fa-compass-drafting:before,
        .fa-drafting-compass:before {
            content: "\f568"
        }

        .fa-compress:before {
            content: "\f066"
        }

        .fa-computer:before {
            content: "\e4e5"
        }

        .fa-computer-mouse:before,
        .fa-mouse:before {
            content: "\f8cc"
        }

        .fa-cookie:before {
            content: "\f563"
        }

        .fa-cookie-bite:before {
            content: "\f564"
        }

        .fa-copy:before {
            content: "\f0c5"
        }

        .fa-copyright:before {
            content: "\f1f9"
        }

        .fa-couch:before {
            content: "\f4b8"
        }

        .fa-cow:before {
            content: "\f6c8"
        }

        .fa-credit-card-alt:before,
        .fa-credit-card:before {
            content: "\f09d"
        }

        .fa-crop:before {
            content: "\f125"
        }

        .fa-crop-alt:before,
        .fa-crop-simple:before {
            content: "\f565"
        }

        .fa-cross:before {
            content: "\f654"
        }

        .fa-crosshairs:before {
            content: "\f05b"
        }

        .fa-crow:before {
            content: "\f520"
        }

        .fa-crown:before {
            content: "\f521"
        }

        .fa-crutch:before {
            content: "\f7f7"
        }

        .fa-cruzeiro-sign:before {
            content: "\e152"
        }

        .fa-cube:before {
            content: "\f1b2"
        }

        .fa-cubes:before {
            content: "\f1b3"
        }

        .fa-cubes-stacked:before {
            content: "\e4e6"
        }

        .fa-d:before {
            content: "\44"
        }

        .fa-database:before {
            content: "\f1c0"
        }

        .fa-backspace:before,
        .fa-delete-left:before {
            content: "\f55a"
        }

        .fa-democrat:before {
            content: "\f747"
        }

        .fa-desktop-alt:before,
        .fa-desktop:before {
            content: "\f390"
        }

        .fa-dharmachakra:before {
            content: "\f655"
        }

        .fa-diagram-next:before {
            content: "\e476"
        }

        .fa-diagram-predecessor:before {
            content: "\e477"
        }

        .fa-diagram-project:before,
        .fa-project-diagram:before {
            content: "\f542"
        }

        .fa-diagram-successor:before {
            content: "\e47a"
        }

        .fa-diamond:before {
            content: "\f219"
        }

        .fa-diamond-turn-right:before,
        .fa-directions:before {
            content: "\f5eb"
        }

        .fa-dice:before {
            content: "\f522"
        }

        .fa-dice-d20:before {
            content: "\f6cf"
        }

        .fa-dice-d6:before {
            content: "\f6d1"
        }

        .fa-dice-five:before {
            content: "\f523"
        }

        .fa-dice-four:before {
            content: "\f524"
        }

        .fa-dice-one:before {
            content: "\f525"
        }

        .fa-dice-six:before {
            content: "\f526"
        }

        .fa-dice-three:before {
            content: "\f527"
        }

        .fa-dice-two:before {
            content: "\f528"
        }

        .fa-disease:before {
            content: "\f7fa"
        }

        .fa-display:before {
            content: "\e163"
        }

        .fa-divide:before {
            content: "\f529"
        }

        .fa-dna:before {
            content: "\f471"
        }

        .fa-dog:before {
            content: "\f6d3"
        }

        .fa-dollar-sign:before,
        .fa-dollar:before,
        .fa-usd:before {
            content: "\24"
        }

        .fa-dolly-box:before,
        .fa-dolly:before {
            content: "\f472"
        }

        .fa-dong-sign:before {
            content: "\e169"
        }

        .fa-door-closed:before {
            content: "\f52a"
        }

        .fa-door-open:before {
            content: "\f52b"
        }

        .fa-dove:before {
            content: "\f4ba"
        }

        .fa-compress-alt:before,
        .fa-down-left-and-up-right-to-center:before {
            content: "\f422"
        }

        .fa-down-long:before,
        .fa-long-arrow-alt-down:before {
            content: "\f309"
        }

        .fa-download:before {
            content: "\f019"
        }

        .fa-dragon:before {
            content: "\f6d5"
        }

        .fa-draw-polygon:before {
            content: "\f5ee"
        }

        .fa-droplet:before,
        .fa-tint:before {
            content: "\f043"
        }

        .fa-droplet-slash:before,
        .fa-tint-slash:before {
            content: "\f5c7"
        }

        .fa-drum:before {
            content: "\f569"
        }

        .fa-drum-steelpan:before {
            content: "\f56a"
        }

        .fa-drumstick-bite:before {
            content: "\f6d7"
        }

        .fa-dumbbell:before {
            content: "\f44b"
        }

        .fa-dumpster:before {
            content: "\f793"
        }

        .fa-dumpster-fire:before {
            content: "\f794"
        }

        .fa-dungeon:before {
            content: "\f6d9"
        }

        .fa-e:before {
            content: "\45"
        }

        .fa-deaf:before,
        .fa-deafness:before,
        .fa-ear-deaf:before,
        .fa-hard-of-hearing:before {
            content: "\f2a4"
        }

        .fa-assistive-listening-systems:before,
        .fa-ear-listen:before {
            content: "\f2a2"
        }

        .fa-earth-africa:before,
        .fa-globe-africa:before {
            content: "\f57c"
        }

        .fa-earth-america:before,
        .fa-earth-americas:before,
        .fa-earth:before,
        .fa-globe-americas:before {
            content: "\f57d"
        }

        .fa-earth-asia:before,
        .fa-globe-asia:before {
            content: "\f57e"
        }

        .fa-earth-europe:before,
        .fa-globe-europe:before {
            content: "\f7a2"
        }

        .fa-earth-oceania:before,
        .fa-globe-oceania:before {
            content: "\e47b"
        }

        .fa-egg:before {
            content: "\f7fb"
        }

        .fa-eject:before {
            content: "\f052"
        }

        .fa-elevator:before {
            content: "\e16d"
        }

        .fa-ellipsis-h:before,
        .fa-ellipsis:before {
            content: "\f141"
        }

        .fa-ellipsis-v:before,
        .fa-ellipsis-vertical:before {
            content: "\f142"
        }

        .fa-envelope:before {
            content: "\f0e0"
        }

        .fa-envelope-circle-check:before {
            content: "\e4e8"
        }

        .fa-envelope-open:before {
            content: "\f2b6"
        }

        .fa-envelope-open-text:before {
            content: "\f658"
        }

        .fa-envelopes-bulk:before,
        .fa-mail-bulk:before {
            content: "\f674"
        }

        .fa-equals:before {
            content: "\3d"
        }

        .fa-eraser:before {
            content: "\f12d"
        }

        .fa-ethernet:before {
            content: "\f796"
        }

        .fa-eur:before,
        .fa-euro-sign:before,
        .fa-euro:before {
            content: "\f153"
        }

        .fa-exclamation:before {
            content: "\21"
        }

        .fa-expand:before {
            content: "\f065"
        }

        .fa-explosion:before {
            content: "\e4e9"
        }

        .fa-eye:before {
            content: "\f06e"
        }

        .fa-eye-dropper-empty:before,
        .fa-eye-dropper:before,
        .fa-eyedropper:before {
            content: "\f1fb"
        }

        .fa-eye-low-vision:before,
        .fa-low-vision:before {
            content: "\f2a8"
        }

        .fa-eye-slash:before {
            content: "\f070"
        }

        .fa-f:before {
            content: "\46"
        }

        .fa-angry:before,
        .fa-face-angry:before {
            content: "\f556"
        }

        .fa-dizzy:before,
        .fa-face-dizzy:before {
            content: "\f567"
        }

        .fa-face-flushed:before,
        .fa-flushed:before {
            content: "\f579"
        }

        .fa-face-frown:before,
        .fa-frown:before {
            content: "\f119"
        }

        .fa-face-frown-open:before,
        .fa-frown-open:before {
            content: "\f57a"
        }

        .fa-face-grimace:before,
        .fa-grimace:before {
            content: "\f57f"
        }

        .fa-face-grin:before,
        .fa-grin:before {
            content: "\f580"
        }

        .fa-face-grin-beam:before,
        .fa-grin-beam:before {
            content: "\f582"
        }

        .fa-face-grin-beam-sweat:before,
        .fa-grin-beam-sweat:before {
            content: "\f583"
        }

        .fa-face-grin-hearts:before,
        .fa-grin-hearts:before {
            content: "\f584"
        }

        .fa-face-grin-squint:before,
        .fa-grin-squint:before {
            content: "\f585"
        }

        .fa-face-grin-squint-tears:before,
        .fa-grin-squint-tears:before {
            content: "\f586"
        }

        .fa-face-grin-stars:before,
        .fa-grin-stars:before {
            content: "\f587"
        }

        .fa-face-grin-tears:before,
        .fa-grin-tears:before {
            content: "\f588"
        }

        .fa-face-grin-tongue:before,
        .fa-grin-tongue:before {
            content: "\f589"
        }

        .fa-face-grin-tongue-squint:before,
        .fa-grin-tongue-squint:before {
            content: "\f58a"
        }

        .fa-face-grin-tongue-wink:before,
        .fa-grin-tongue-wink:before {
            content: "\f58b"
        }

        .fa-face-grin-wide:before,
        .fa-grin-alt:before {
            content: "\f581"
        }

        .fa-face-grin-wink:before,
        .fa-grin-wink:before {
            content: "\f58c"
        }

        .fa-face-kiss:before,
        .fa-kiss:before {
            content: "\f596"
        }

        .fa-face-kiss-beam:before,
        .fa-kiss-beam:before {
            content: "\f597"
        }

        .fa-face-kiss-wink-heart:before,
        .fa-kiss-wink-heart:before {
            content: "\f598"
        }

        .fa-face-laugh:before,
        .fa-laugh:before {
            content: "\f599"
        }

        .fa-face-laugh-beam:before,
        .fa-laugh-beam:before {
            content: "\f59a"
        }

        .fa-face-laugh-squint:before,
        .fa-laugh-squint:before {
            content: "\f59b"
        }

        .fa-face-laugh-wink:before,
        .fa-laugh-wink:before {
            content: "\f59c"
        }

        .fa-face-meh:before,
        .fa-meh:before {
            content: "\f11a"
        }

        .fa-face-meh-blank:before,
        .fa-meh-blank:before {
            content: "\f5a4"
        }

        .fa-face-rolling-eyes:before,
        .fa-meh-rolling-eyes:before {
            content: "\f5a5"
        }

        .fa-face-sad-cry:before,
        .fa-sad-cry:before {
            content: "\f5b3"
        }

        .fa-face-sad-tear:before,
        .fa-sad-tear:before {
            content: "\f5b4"
        }

        .fa-face-smile:before,
        .fa-smile:before {
            content: "\f118"
        }

        .fa-face-smile-beam:before,
        .fa-smile-beam:before {
            content: "\f5b8"
        }

        .fa-face-smile-wink:before,
        .fa-smile-wink:before {
            content: "\f4da"
        }

        .fa-face-surprise:before,
        .fa-surprise:before {
            content: "\f5c2"
        }

        .fa-face-tired:before,
        .fa-tired:before {
            content: "\f5c8"
        }

        .fa-fan:before {
            content: "\f863"
        }

        .fa-faucet:before {
            content: "\e005"
        }

        .fa-faucet-drip:before {
            content: "\e006"
        }

        .fa-fax:before {
            content: "\f1ac"
        }

        .fa-feather:before {
            content: "\f52d"
        }

        .fa-feather-alt:before,
        .fa-feather-pointed:before {
            content: "\f56b"
        }

        .fa-ferry:before {
            content: "\e4ea"
        }

        .fa-file:before {
            content: "\f15b"
        }

        .fa-file-arrow-down:before,
        .fa-file-download:before {
            content: "\f56d"
        }

        .fa-file-arrow-up:before,
        .fa-file-upload:before {
            content: "\f574"
        }

        .fa-file-audio:before {
            content: "\f1c7"
        }

        .fa-file-circle-check:before {
            content: "\e493"
        }

        .fa-file-circle-exclamation:before {
            content: "\e4eb"
        }

        .fa-file-circle-minus:before {
            content: "\e4ed"
        }

        .fa-file-circle-plus:before {
            content: "\e4ee"
        }

        .fa-file-circle-question:before {
            content: "\e4ef"
        }

        .fa-file-circle-xmark:before {
            content: "\e494"
        }

        .fa-file-code:before {
            content: "\f1c9"
        }

        .fa-file-contract:before {
            content: "\f56c"
        }

        .fa-file-csv:before {
            content: "\f6dd"
        }

        .fa-file-excel:before {
            content: "\f1c3"
        }

        .fa-arrow-right-from-file:before,
        .fa-file-export:before {
            content: "\f56e"
        }

        .fa-file-image:before {
            content: "\f1c5"
        }

        .fa-arrow-right-to-file:before,
        .fa-file-import:before {
            content: "\f56f"
        }

        .fa-file-invoice:before {
            content: "\f570"
        }

        .fa-file-invoice-dollar:before {
            content: "\f571"
        }

        .fa-file-alt:before,
        .fa-file-lines:before,
        .fa-file-text:before {
            content: "\f15c"
        }

        .fa-file-medical:before {
            content: "\f477"
        }

        .fa-file-pdf:before {
            content: "\f1c1"
        }

        .fa-file-edit:before,
        .fa-file-pen:before {
            content: "\f31c"
        }

        .fa-file-powerpoint:before {
            content: "\f1c4"
        }

        .fa-file-prescription:before {
            content: "\f572"
        }

        .fa-file-shield:before {
            content: "\e4f0"
        }

        .fa-file-signature:before {
            content: "\f573"
        }

        .fa-file-video:before {
            content: "\f1c8"
        }

        .fa-file-medical-alt:before,
        .fa-file-waveform:before {
            content: "\f478"
        }

        .fa-file-word:before {
            content: "\f1c2"
        }

        .fa-file-archive:before,
        .fa-file-zipper:before {
            content: "\f1c6"
        }

        .fa-fill:before {
            content: "\f575"
        }

        .fa-fill-drip:before {
            content: "\f576"
        }

        .fa-film:before {
            content: "\f008"
        }

        .fa-filter:before {
            content: "\f0b0"
        }

        .fa-filter-circle-dollar:before,
        .fa-funnel-dollar:before {
            content: "\f662"
        }

        .fa-filter-circle-xmark:before {
            content: "\e17b"
        }

        .fa-fingerprint:before {
            content: "\f577"
        }

        .fa-fire:before {
            content: "\f06d"
        }

        .fa-fire-burner:before {
            content: "\e4f1"
        }

        .fa-fire-extinguisher:before {
            content: "\f134"
        }

        .fa-fire-alt:before,
        .fa-fire-flame-curved:before {
            content: "\f7e4"
        }

        .fa-burn:before,
        .fa-fire-flame-simple:before {
            content: "\f46a"
        }

        .fa-fish:before {
            content: "\f578"
        }

        .fa-fish-fins:before {
            content: "\e4f2"
        }

        .fa-flag:before {
            content: "\f024"
        }

        .fa-flag-checkered:before {
            content: "\f11e"
        }

        .fa-flag-usa:before {
            content: "\f74d"
        }

        .fa-flask:before {
            content: "\f0c3"
        }

        .fa-flask-vial:before {
            content: "\e4f3"
        }

        .fa-floppy-disk:before,
        .fa-save:before {
            content: "\f0c7"
        }

        .fa-florin-sign:before {
            content: "\e184"
        }

        .fa-folder-blank:before,
        .fa-folder:before {
            content: "\f07b"
        }

        .fa-folder-closed:before {
            content: "\e185"
        }

        .fa-folder-minus:before {
            content: "\f65d"
        }

        .fa-folder-open:before {
            content: "\f07c"
        }

        .fa-folder-plus:before {
            content: "\f65e"
        }

        .fa-folder-tree:before {
            content: "\f802"
        }

        .fa-font:before {
            content: "\f031"
        }

        .fa-football-ball:before,
        .fa-football:before {
            content: "\f44e"
        }

        .fa-forward:before {
            content: "\f04e"
        }

        .fa-fast-forward:before,
        .fa-forward-fast:before {
            content: "\f050"
        }

        .fa-forward-step:before,
        .fa-step-forward:before {
            content: "\f051"
        }

        .fa-franc-sign:before {
            content: "\e18f"
        }

        .fa-frog:before {
            content: "\f52e"
        }

        .fa-futbol-ball:before,
        .fa-futbol:before,
        .fa-soccer-ball:before {
            content: "\f1e3"
        }

        .fa-g:before {
            content: "\47"
        }

        .fa-gamepad:before {
            content: "\f11b"
        }

        .fa-gas-pump:before {
            content: "\f52f"
        }

        .fa-dashboard:before,
        .fa-gauge-med:before,
        .fa-gauge:before,
        .fa-tachometer-alt-average:before {
            content: "\f624"
        }

        .fa-gauge-high:before,
        .fa-tachometer-alt-fast:before,
        .fa-tachometer-alt:before {
            content: "\f625"
        }

        .fa-gauge-simple-med:before,
        .fa-gauge-simple:before,
        .fa-tachometer-average:before {
            content: "\f629"
        }

        .fa-gauge-simple-high:before,
        .fa-tachometer-fast:before,
        .fa-tachometer:before {
            content: "\f62a"
        }

        .fa-gavel:before,
        .fa-legal:before {
            content: "\f0e3"
        }

        .fa-cog:before,
        .fa-gear:before {
            content: "\f013"
        }

        .fa-cogs:before,
        .fa-gears:before {
            content: "\f085"
        }

        .fa-gem:before {
            content: "\f3a5"
        }

        .fa-genderless:before {
            content: "\f22d"
        }

        .fa-ghost:before {
            content: "\f6e2"
        }

        .fa-gift:before {
            content: "\f06b"
        }

        .fa-gifts:before {
            content: "\f79c"
        }

        .fa-glass-water:before {
            content: "\e4f4"
        }

        .fa-glass-water-droplet:before {
            content: "\e4f5"
        }

        .fa-glasses:before {
            content: "\f530"
        }

        .fa-globe:before {
            content: "\f0ac"
        }

        .fa-golf-ball-tee:before,
        .fa-golf-ball:before {
            content: "\f450"
        }

        .fa-gopuram:before {
            content: "\f664"
        }

        .fa-graduation-cap:before,
        .fa-mortar-board:before {
            content: "\f19d"
        }

        .fa-greater-than:before {
            content: "\3e"
        }

        .fa-greater-than-equal:before {
            content: "\f532"
        }

        .fa-grip-horizontal:before,
        .fa-grip:before {
            content: "\f58d"
        }

        .fa-grip-lines:before {
            content: "\f7a4"
        }

        .fa-grip-lines-vertical:before {
            content: "\f7a5"
        }

        .fa-grip-vertical:before {
            content: "\f58e"
        }

        .fa-group-arrows-rotate:before {
            content: "\e4f6"
        }

        .fa-guarani-sign:before {
            content: "\e19a"
        }

        .fa-guitar:before {
            content: "\f7a6"
        }

        .fa-gun:before {
            content: "\e19b"
        }

        .fa-h:before {
            content: "\48"
        }

        .fa-hammer:before {
            content: "\f6e3"
        }

        .fa-hamsa:before {
            content: "\f665"
        }

        .fa-hand-paper:before,
        .fa-hand:before {
            content: "\f256"
        }

        .fa-hand-back-fist:before,
        .fa-hand-rock:before {
            content: "\f255"
        }

        .fa-allergies:before,
        .fa-hand-dots:before {
            content: "\f461"
        }

        .fa-fist-raised:before,
        .fa-hand-fist:before {
            content: "\f6de"
        }

        .fa-hand-holding:before {
            content: "\f4bd"
        }

        .fa-hand-holding-dollar:before,
        .fa-hand-holding-usd:before {
            content: "\f4c0"
        }

        .fa-hand-holding-droplet:before,
        .fa-hand-holding-water:before {
            content: "\f4c1"
        }

        .fa-hand-holding-hand:before {
            content: "\e4f7"
        }

        .fa-hand-holding-heart:before {
            content: "\f4be"
        }

        .fa-hand-holding-medical:before {
            content: "\e05c"
        }

        .fa-hand-lizard:before {
            content: "\f258"
        }

        .fa-hand-middle-finger:before {
            content: "\f806"
        }

        .fa-hand-peace:before {
            content: "\f25b"
        }

        .fa-hand-point-down:before {
            content: "\f0a7"
        }

        .fa-hand-point-left:before {
            content: "\f0a5"
        }

        .fa-hand-point-right:before {
            content: "\f0a4"
        }

        .fa-hand-point-up:before {
            content: "\f0a6"
        }

        .fa-hand-pointer:before {
            content: "\f25a"
        }

        .fa-hand-scissors:before {
            content: "\f257"
        }

        .fa-hand-sparkles:before {
            content: "\e05d"
        }

        .fa-hand-spock:before {
            content: "\f259"
        }

        .fa-handcuffs:before {
            content: "\e4f8"
        }

        .fa-hands:before,
        .fa-sign-language:before,
        .fa-signing:before {
            content: "\f2a7"
        }

        .fa-american-sign-language-interpreting:before,
        .fa-asl-interpreting:before,
        .fa-hands-american-sign-language-interpreting:before,
        .fa-hands-asl-interpreting:before {
            content: "\f2a3"
        }

        .fa-hands-bound:before {
            content: "\e4f9"
        }

        .fa-hands-bubbles:before,
        .fa-hands-wash:before {
            content: "\e05e"
        }

        .fa-hands-clapping:before {
            content: "\e1a8"
        }

        .fa-hands-holding:before {
            content: "\f4c2"
        }

        .fa-hands-holding-child:before {
            content: "\e4fa"
        }

        .fa-hands-holding-circle:before {
            content: "\e4fb"
        }

        .fa-hands-praying:before,
        .fa-praying-hands:before {
            content: "\f684"
        }

        .fa-handshake:before {
            content: "\f2b5"
        }

        .fa-hands-helping:before,
        .fa-handshake-angle:before {
            content: "\f4c4"
        }

        .fa-handshake-alt:before,
        .fa-handshake-simple:before {
            content: "\f4c6"
        }

        .fa-handshake-alt-slash:before,
        .fa-handshake-simple-slash:before {
            content: "\e05f"
        }

        .fa-handshake-slash:before {
            content: "\e060"
        }

        .fa-hanukiah:before {
            content: "\f6e6"
        }

        .fa-hard-drive:before,
        .fa-hdd:before {
            content: "\f0a0"
        }

        .fa-hashtag:before {
            content: "\23"
        }

        .fa-hat-cowboy:before {
            content: "\f8c0"
        }

        .fa-hat-cowboy-side:before {
            content: "\f8c1"
        }

        .fa-hat-wizard:before {
            content: "\f6e8"
        }

        .fa-head-side-cough:before {
            content: "\e061"
        }

        .fa-head-side-cough-slash:before {
            content: "\e062"
        }

        .fa-head-side-mask:before {
            content: "\e063"
        }

        .fa-head-side-virus:before {
            content: "\e064"
        }

        .fa-header:before,
        .fa-heading:before {
            content: "\f1dc"
        }

        .fa-headphones:before {
            content: "\f025"
        }

        .fa-headphones-alt:before,
        .fa-headphones-simple:before {
            content: "\f58f"
        }

        .fa-headset:before {
            content: "\f590"
        }

        .fa-heart:before {
            content: "\f004"
        }

        .fa-heart-circle-bolt:before {
            content: "\e4fc"
        }

        .fa-heart-circle-check:before {
            content: "\e4fd"
        }

        .fa-heart-circle-exclamation:before {
            content: "\e4fe"
        }

        .fa-heart-circle-minus:before {
            content: "\e4ff"
        }

        .fa-heart-circle-plus:before {
            content: "\e500"
        }

        .fa-heart-circle-xmark:before {
            content: "\e501"
        }

        .fa-heart-broken:before,
        .fa-heart-crack:before {
            content: "\f7a9"
        }

        .fa-heart-pulse:before,
        .fa-heartbeat:before {
            content: "\f21e"
        }

        .fa-helicopter:before {
            content: "\f533"
        }

        .fa-helicopter-symbol:before {
            content: "\e502"
        }

        .fa-hard-hat:before,
        .fa-hat-hard:before,
        .fa-helmet-safety:before {
            content: "\f807"
        }

        .fa-helmet-un:before {
            content: "\e503"
        }

        .fa-highlighter:before {
            content: "\f591"
        }

        .fa-hill-avalanche:before {
            content: "\e507"
        }

        .fa-hill-rockslide:before {
            content: "\e508"
        }

        .fa-hippo:before {
            content: "\f6ed"
        }

        .fa-hockey-puck:before {
            content: "\f453"
        }

        .fa-holly-berry:before {
            content: "\f7aa"
        }

        .fa-horse:before {
            content: "\f6f0"
        }

        .fa-horse-head:before {
            content: "\f7ab"
        }

        .fa-hospital-alt:before,
        .fa-hospital-wide:before,
        .fa-hospital:before {
            content: "\f0f8"
        }

        .fa-hospital-user:before {
            content: "\f80d"
        }

        .fa-hot-tub-person:before,
        .fa-hot-tub:before {
            content: "\f593"
        }

        .fa-hotdog:before {
            content: "\f80f"
        }

        .fa-hotel:before {
            content: "\f594"
        }

        .fa-hourglass-2:before,
        .fa-hourglass-half:before,
        .fa-hourglass:before {
            content: "\f254"
        }

        .fa-hourglass-empty:before {
            content: "\f252"
        }

        .fa-hourglass-3:before,
        .fa-hourglass-end:before {
            content: "\f253"
        }

        .fa-hourglass-1:before,
        .fa-hourglass-start:before {
            content: "\f251"
        }

        .fa-home-alt:before,
        .fa-home-lg-alt:before,
        .fa-home:before,
        .fa-house:before {
            content: "\f015"
        }

        .fa-home-lg:before,
        .fa-house-chimney:before {
            content: "\e3af"
        }

        .fa-house-chimney-crack:before,
        .fa-house-damage:before {
            content: "\f6f1"
        }

        .fa-clinic-medical:before,
        .fa-house-chimney-medical:before {
            content: "\f7f2"
        }

        .fa-house-chimney-user:before {
            content: "\e065"
        }

        .fa-house-chimney-window:before {
            content: "\e00d"
        }

        .fa-house-circle-check:before {
            content: "\e509"
        }

        .fa-house-circle-exclamation:before {
            content: "\e50a"
        }

        .fa-house-circle-xmark:before {
            content: "\e50b"
        }

        .fa-house-crack:before {
            content: "\e3b1"
        }

        .fa-house-fire:before {
            content: "\e50c"
        }

        .fa-house-flag:before {
            content: "\e50d"
        }

        .fa-house-flood-water:before {
            content: "\e50e"
        }

        .fa-house-flood-water-circle-arrow-right:before {
            content: "\e50f"
        }

        .fa-house-laptop:before,
        .fa-laptop-house:before {
            content: "\e066"
        }

        .fa-house-lock:before {
            content: "\e510"
        }

        .fa-house-medical:before {
            content: "\e3b2"
        }

        .fa-house-medical-circle-check:before {
            content: "\e511"
        }

        .fa-house-medical-circle-exclamation:before {
            content: "\e512"
        }

        .fa-house-medical-circle-xmark:before {
            content: "\e513"
        }

        .fa-house-medical-flag:before {
            content: "\e514"
        }

        .fa-house-signal:before {
            content: "\e012"
        }

        .fa-house-tsunami:before {
            content: "\e515"
        }

        .fa-home-user:before,
        .fa-house-user:before {
            content: "\e1b0"
        }

        .fa-hryvnia-sign:before,
        .fa-hryvnia:before {
            content: "\f6f2"
        }

        .fa-hurricane:before {
            content: "\f751"
        }

        .fa-i:before {
            content: "\49"
        }

        .fa-i-cursor:before {
            content: "\f246"
        }

        .fa-ice-cream:before {
            content: "\f810"
        }

        .fa-icicles:before {
            content: "\f7ad"
        }

        .fa-heart-music-camera-bolt:before,
        .fa-icons:before {
            content: "\f86d"
        }

        .fa-id-badge:before {
            content: "\f2c1"
        }

        .fa-drivers-license:before,
        .fa-id-card:before {
            content: "\f2c2"
        }

        .fa-id-card-alt:before,
        .fa-id-card-clip:before {
            content: "\f47f"
        }

        .fa-igloo:before {
            content: "\f7ae"
        }

        .fa-image:before {
            content: "\f03e"
        }

        .fa-image-portrait:before,
        .fa-portrait:before {
            content: "\f3e0"
        }

        .fa-images:before {
            content: "\f302"
        }

        .fa-inbox:before {
            content: "\f01c"
        }

        .fa-indent:before {
            content: "\f03c"
        }

        .fa-indian-rupee-sign:before,
        .fa-indian-rupee:before,
        .fa-inr:before {
            content: "\e1bc"
        }

        .fa-industry:before {
            content: "\f275"
        }

        .fa-infinity:before {
            content: "\f534"
        }

        .fa-info:before {
            content: "\f129"
        }

        .fa-italic:before {
            content: "\f033"
        }

        .fa-j:before {
            content: "\4a"
        }

        .fa-jar:before {
            content: "\e516"
        }

        .fa-jar-wheat:before {
            content: "\e517"
        }

        .fa-jedi:before {
            content: "\f669"
        }

        .fa-fighter-jet:before,
        .fa-jet-fighter:before {
            content: "\f0fb"
        }

        .fa-jet-fighter-up:before {
            content: "\e518"
        }

        .fa-joint:before {
            content: "\f595"
        }

        .fa-jug-detergent:before {
            content: "\e519"
        }

        .fa-k:before {
            content: "\4b"
        }

        .fa-kaaba:before {
            content: "\f66b"
        }

        .fa-key:before {
            content: "\f084"
        }

        .fa-keyboard:before {
            content: "\f11c"
        }

        .fa-khanda:before {
            content: "\f66d"
        }

        .fa-kip-sign:before {
            content: "\e1c4"
        }

        .fa-first-aid:before,
        .fa-kit-medical:before {
            content: "\f479"
        }

        .fa-kitchen-set:before {
            content: "\e51a"
        }

        .fa-kiwi-bird:before {
            content: "\f535"
        }

        .fa-l:before {
            content: "\4c"
        }

        .fa-land-mine-on:before {
            content: "\e51b"
        }

        .fa-landmark:before {
            content: "\f66f"
        }

        .fa-landmark-alt:before,
        .fa-landmark-dome:before {
            content: "\f752"
        }

        .fa-landmark-flag:before {
            content: "\e51c"
        }

        .fa-language:before {
            content: "\f1ab"
        }

        .fa-laptop:before {
            content: "\f109"
        }

        .fa-laptop-code:before {
            content: "\f5fc"
        }

        .fa-laptop-file:before {
            content: "\e51d"
        }

        .fa-laptop-medical:before {
            content: "\f812"
        }

        .fa-lari-sign:before {
            content: "\e1c8"
        }

        .fa-layer-group:before {
            content: "\f5fd"
        }

        .fa-leaf:before {
            content: "\f06c"
        }

        .fa-left-long:before,
        .fa-long-arrow-alt-left:before {
            content: "\f30a"
        }

        .fa-arrows-alt-h:before,
        .fa-left-right:before {
            content: "\f337"
        }

        .fa-lemon:before {
            content: "\f094"
        }

        .fa-less-than:before {
            content: "\3c"
        }

        .fa-less-than-equal:before {
            content: "\f537"
        }

        .fa-life-ring:before {
            content: "\f1cd"
        }

        .fa-lightbulb:before {
            content: "\f0eb"
        }

        .fa-lines-leaning:before {
            content: "\e51e"
        }

        .fa-chain:before,
        .fa-link:before {
            content: "\f0c1"
        }

        .fa-chain-broken:before,
        .fa-chain-slash:before,
        .fa-link-slash:before,
        .fa-unlink:before {
            content: "\f127"
        }

        .fa-lira-sign:before {
            content: "\f195"
        }

        .fa-list-squares:before,
        .fa-list:before {
            content: "\f03a"
        }

        .fa-list-check:before,
        .fa-tasks:before {
            content: "\f0ae"
        }

        .fa-list-1-2:before,
        .fa-list-numeric:before,
        .fa-list-ol:before {
            content: "\f0cb"
        }

        .fa-list-dots:before,
        .fa-list-ul:before {
            content: "\f0ca"
        }

        .fa-litecoin-sign:before {
            content: "\e1d3"
        }

        .fa-location-arrow:before {
            content: "\f124"
        }

        .fa-location-crosshairs:before,
        .fa-location:before {
            content: "\f601"
        }

        .fa-location-dot:before,
        .fa-map-marker-alt:before {
            content: "\f3c5"
        }

        .fa-location-pin:before,
        .fa-map-marker:before {
            content: "\f041"
        }

        .fa-location-pin-lock:before {
            content: "\e51f"
        }

        .fa-lock:before {
            content: "\f023"
        }

        .fa-lock-open:before {
            content: "\f3c1"
        }

        .fa-locust:before {
            content: "\e520"
        }

        .fa-lungs:before {
            content: "\f604"
        }

        .fa-lungs-virus:before {
            content: "\e067"
        }

        .fa-m:before {
            content: "\4d"
        }

        .fa-magnet:before {
            content: "\f076"
        }

        .fa-magnifying-glass:before,
        .fa-search:before {
            content: "\f002"
        }

        .fa-magnifying-glass-arrow-right:before {
            content: "\e521"
        }

        .fa-magnifying-glass-chart:before {
            content: "\e522"
        }

        .fa-magnifying-glass-dollar:before,
        .fa-search-dollar:before {
            content: "\f688"
        }

        .fa-magnifying-glass-location:before,
        .fa-search-location:before {
            content: "\f689"
        }

        .fa-magnifying-glass-minus:before,
        .fa-search-minus:before {
            content: "\f010"
        }

        .fa-magnifying-glass-plus:before,
        .fa-search-plus:before {
            content: "\f00e"
        }

        .fa-manat-sign:before {
            content: "\e1d5"
        }

        .fa-map:before {
            content: "\f279"
        }

        .fa-map-location:before,
        .fa-map-marked:before {
            content: "\f59f"
        }

        .fa-map-location-dot:before,
        .fa-map-marked-alt:before {
            content: "\f5a0"
        }

        .fa-map-pin:before {
            content: "\f276"
        }

        .fa-marker:before {
            content: "\f5a1"
        }

        .fa-mars:before {
            content: "\f222"
        }

        .fa-mars-and-venus:before {
            content: "\f224"
        }

        .fa-mars-and-venus-burst:before {
            content: "\e523"
        }

        .fa-mars-double:before {
            content: "\f227"
        }

        .fa-mars-stroke:before {
            content: "\f229"
        }

        .fa-mars-stroke-h:before,
        .fa-mars-stroke-right:before {
            content: "\f22b"
        }

        .fa-mars-stroke-up:before,
        .fa-mars-stroke-v:before {
            content: "\f22a"
        }

        .fa-glass-martini-alt:before,
        .fa-martini-glass:before {
            content: "\f57b"
        }

        .fa-cocktail:before,
        .fa-martini-glass-citrus:before {
            content: "\f561"
        }

        .fa-glass-martini:before,
        .fa-martini-glass-empty:before {
            content: "\f000"
        }

        .fa-mask:before {
            content: "\f6fa"
        }

        .fa-mask-face:before {
            content: "\e1d7"
        }

        .fa-mask-ventilator:before {
            content: "\e524"
        }

        .fa-masks-theater:before,
        .fa-theater-masks:before {
            content: "\f630"
        }

        .fa-mattress-pillow:before {
            content: "\e525"
        }

        .fa-expand-arrows-alt:before,
        .fa-maximize:before {
            content: "\f31e"
        }

        .fa-medal:before {
            content: "\f5a2"
        }

        .fa-memory:before {
            content: "\f538"
        }

        .fa-menorah:before {
            content: "\f676"
        }

        .fa-mercury:before {
            content: "\f223"
        }

        .fa-comment-alt:before,
        .fa-message:before {
            content: "\f27a"
        }

        .fa-meteor:before {
            content: "\f753"
        }

        .fa-microchip:before {
            content: "\f2db"
        }

        .fa-microphone:before {
            content: "\f130"
        }

        .fa-microphone-alt:before,
        .fa-microphone-lines:before {
            content: "\f3c9"
        }

        .fa-microphone-alt-slash:before,
        .fa-microphone-lines-slash:before {
            content: "\f539"
        }

        .fa-microphone-slash:before {
            content: "\f131"
        }

        .fa-microscope:before {
            content: "\f610"
        }

        .fa-mill-sign:before {
            content: "\e1ed"
        }

        .fa-compress-arrows-alt:before,
        .fa-minimize:before {
            content: "\f78c"
        }

        .fa-minus:before,
        .fa-subtract:before {
            content: "\f068"
        }

        .fa-mitten:before {
            content: "\f7b5"
        }

        .fa-mobile-android:before,
        .fa-mobile-phone:before,
        .fa-mobile:before {
            content: "\f3ce"
        }

        .fa-mobile-button:before {
            content: "\f10b"
        }

        .fa-mobile-retro:before {
            content: "\e527"
        }

        .fa-mobile-android-alt:before,
        .fa-mobile-screen:before {
            content: "\f3cf"
        }

        .fa-mobile-alt:before,
        .fa-mobile-screen-button:before {
            content: "\f3cd"
        }

        .fa-money-bill:before {
            content: "\f0d6"
        }

        .fa-money-bill-1:before,
        .fa-money-bill-alt:before {
            content: "\f3d1"
        }

        .fa-money-bill-1-wave:before,
        .fa-money-bill-wave-alt:before {
            content: "\f53b"
        }

        .fa-money-bill-transfer:before {
            content: "\e528"
        }

        .fa-money-bill-trend-up:before {
            content: "\e529"
        }

        .fa-money-bill-wave:before {
            content: "\f53a"
        }

        .fa-money-bill-wheat:before {
            content: "\e52a"
        }

        .fa-money-bills:before {
            content: "\e1f3"
        }

        .fa-money-check:before {
            content: "\f53c"
        }

        .fa-money-check-alt:before,
        .fa-money-check-dollar:before {
            content: "\f53d"
        }

        .fa-monument:before {
            content: "\f5a6"
        }

        .fa-moon:before {
            content: "\f186"
        }

        .fa-mortar-pestle:before {
            content: "\f5a7"
        }

        .fa-mosque:before {
            content: "\f678"
        }

        .fa-mosquito:before {
            content: "\e52b"
        }

        .fa-mosquito-net:before {
            content: "\e52c"
        }

        .fa-motorcycle:before {
            content: "\f21c"
        }

        .fa-mound:before {
            content: "\e52d"
        }

        .fa-mountain:before {
            content: "\f6fc"
        }

        .fa-mountain-city:before {
            content: "\e52e"
        }

        .fa-mountain-sun:before {
            content: "\e52f"
        }

        .fa-mug-hot:before {
            content: "\f7b6"
        }

        .fa-coffee:before,
        .fa-mug-saucer:before {
            content: "\f0f4"
        }

        .fa-music:before {
            content: "\f001"
        }

        .fa-n:before {
            content: "\4e"
        }

        .fa-naira-sign:before {
            content: "\e1f6"
        }

        .fa-network-wired:before {
            content: "\f6ff"
        }

        .fa-neuter:before {
            content: "\f22c"
        }

        .fa-newspaper:before {
            content: "\f1ea"
        }

        .fa-not-equal:before {
            content: "\f53e"
        }

        .fa-note-sticky:before,
        .fa-sticky-note:before {
            content: "\f249"
        }

        .fa-notes-medical:before {
            content: "\f481"
        }

        .fa-o:before {
            content: "\4f"
        }

        .fa-object-group:before {
            content: "\f247"
        }

        .fa-object-ungroup:before {
            content: "\f248"
        }

        .fa-oil-can:before {
            content: "\f613"
        }

        .fa-oil-well:before {
            content: "\e532"
        }

        .fa-om:before {
            content: "\f679"
        }

        .fa-otter:before {
            content: "\f700"
        }

        .fa-dedent:before,
        .fa-outdent:before {
            content: "\f03b"
        }

        .fa-p:before {
            content: "\50"
        }

        .fa-pager:before {
            content: "\f815"
        }

        .fa-paint-roller:before {
            content: "\f5aa"
        }

        .fa-paint-brush:before,
        .fa-paintbrush:before {
            content: "\f1fc"
        }

        .fa-palette:before {
            content: "\f53f"
        }

        .fa-pallet:before {
            content: "\f482"
        }

        .fa-panorama:before {
            content: "\e209"
        }

        .fa-paper-plane:before {
            content: "\f1d8"
        }

        .fa-paperclip:before {
            content: "\f0c6"
        }

        .fa-parachute-box:before {
            content: "\f4cd"
        }

        .fa-paragraph:before {
            content: "\f1dd"
        }

        .fa-passport:before {
            content: "\f5ab"
        }

        .fa-file-clipboard:before,
        .fa-paste:before {
            content: "\f0ea"
        }

        .fa-pause:before {
            content: "\f04c"
        }

        .fa-paw:before {
            content: "\f1b0"
        }

        .fa-peace:before {
            content: "\f67c"
        }

        .fa-pen:before {
            content: "\f304"
        }

        .fa-pen-alt:before,
        .fa-pen-clip:before {
            content: "\f305"
        }

        .fa-pen-fancy:before {
            content: "\f5ac"
        }

        .fa-pen-nib:before {
            content: "\f5ad"
        }

        .fa-pen-ruler:before,
        .fa-pencil-ruler:before {
            content: "\f5ae"
        }

        .fa-edit:before,
        .fa-pen-to-square:before {
            content: "\f044"
        }

        .fa-pencil-alt:before,
        .fa-pencil:before {
            content: "\f303"
        }

        .fa-people-arrows-left-right:before,
        .fa-people-arrows:before {
            content: "\e068"
        }

        .fa-people-carry-box:before,
        .fa-people-carry:before {
            content: "\f4ce"
        }

        .fa-people-group:before {
            content: "\e533"
        }

        .fa-people-line:before {
            content: "\e534"
        }

        .fa-people-pulling:before {
            content: "\e535"
        }

        .fa-people-robbery:before {
            content: "\e536"
        }

        .fa-people-roof:before {
            content: "\e537"
        }

        .fa-pepper-hot:before {
            content: "\f816"
        }

        .fa-percent:before,
        .fa-percentage:before {
            content: "\25"
        }

        .fa-male:before,
        .fa-person:before {
            content: "\f183"
        }

        .fa-person-arrow-down-to-line:before {
            content: "\e538"
        }

        .fa-person-arrow-up-from-line:before {
            content: "\e539"
        }

        .fa-biking:before,
        .fa-person-biking:before {
            content: "\f84a"
        }

        .fa-person-booth:before {
            content: "\f756"
        }

        .fa-person-breastfeeding:before {
            content: "\e53a"
        }

        .fa-person-burst:before {
            content: "\e53b"
        }

        .fa-person-cane:before {
            content: "\e53c"
        }

        .fa-person-chalkboard:before {
            content: "\e53d"
        }

        .fa-person-circle-check:before {
            content: "\e53e"
        }

        .fa-person-circle-exclamation:before {
            content: "\e53f"
        }

        .fa-person-circle-minus:before {
            content: "\e540"
        }

        .fa-person-circle-plus:before {
            content: "\e541"
        }

        .fa-person-circle-question:before {
            content: "\e542"
        }

        .fa-person-circle-xmark:before {
            content: "\e543"
        }

        .fa-digging:before,
        .fa-person-digging:before {
            content: "\f85e"
        }

        .fa-diagnoses:before,
        .fa-person-dots-from-line:before {
            content: "\f470"
        }

        .fa-female:before,
        .fa-person-dress:before {
            content: "\f182"
        }

        .fa-person-dress-burst:before {
            content: "\e544"
        }

        .fa-person-drowning:before {
            content: "\e545"
        }

        .fa-person-falling:before {
            content: "\e546"
        }

        .fa-person-falling-burst:before {
            content: "\e547"
        }

        .fa-person-half-dress:before {
            content: "\e548"
        }

        .fa-person-harassing:before {
            content: "\e549"
        }

        .fa-hiking:before,
        .fa-person-hiking:before {
            content: "\f6ec"
        }

        .fa-person-military-pointing:before {
            content: "\e54a"
        }

        .fa-person-military-rifle:before {
            content: "\e54b"
        }

        .fa-person-military-to-person:before {
            content: "\e54c"
        }

        .fa-person-praying:before,
        .fa-pray:before {
            content: "\f683"
        }

        .fa-person-pregnant:before {
            content: "\e31e"
        }

        .fa-person-rays:before {
            content: "\e54d"
        }

        .fa-person-rifle:before {
            content: "\e54e"
        }

        .fa-person-running:before,
        .fa-running:before {
            content: "\f70c"
        }

        .fa-person-shelter:before {
            content: "\e54f"
        }

        .fa-person-skating:before,
        .fa-skating:before {
            content: "\f7c5"
        }

        .fa-person-skiing:before,
        .fa-skiing:before {
            content: "\f7c9"
        }

        .fa-person-skiing-nordic:before,
        .fa-skiing-nordic:before {
            content: "\f7ca"
        }

        .fa-person-snowboarding:before,
        .fa-snowboarding:before {
            content: "\f7ce"
        }

        .fa-person-swimming:before,
        .fa-swimmer:before {
            content: "\f5c4"
        }

        .fa-person-through-window:before {
            content: "\e433"
        }

        .fa-person-walking:before,
        .fa-walking:before {
            content: "\f554"
        }

        .fa-person-walking-arrow-loop-left:before {
            content: "\e551"
        }

        .fa-person-walking-arrow-right:before {
            content: "\e552"
        }

        .fa-person-walking-dashed-line-arrow-right:before {
            content: "\e553"
        }

        .fa-person-walking-luggage:before {
            content: "\e554"
        }

        .fa-blind:before,
        .fa-person-walking-with-cane:before {
            content: "\f29d"
        }

        .fa-peseta-sign:before {
            content: "\e221"
        }

        .fa-peso-sign:before {
            content: "\e222"
        }

        .fa-phone:before {
            content: "\f095"
        }

        .fa-phone-alt:before,
        .fa-phone-flip:before {
            content: "\f879"
        }

        .fa-phone-slash:before {
            content: "\f3dd"
        }

        .fa-phone-volume:before,
        .fa-volume-control-phone:before {
            content: "\f2a0"
        }

        .fa-photo-film:before,
        .fa-photo-video:before {
            content: "\f87c"
        }

        .fa-piggy-bank:before {
            content: "\f4d3"
        }

        .fa-pills:before {
            content: "\f484"
        }

        .fa-pizza-slice:before {
            content: "\f818"
        }

        .fa-place-of-worship:before {
            content: "\f67f"
        }

        .fa-plane:before {
            content: "\f072"
        }

        .fa-plane-arrival:before {
            content: "\f5af"
        }

        .fa-plane-circle-check:before {
            content: "\e555"
        }

        .fa-plane-circle-exclamation:before {
            content: "\e556"
        }

        .fa-plane-circle-xmark:before {
            content: "\e557"
        }

        .fa-plane-departure:before {
            content: "\f5b0"
        }

        .fa-plane-lock:before {
            content: "\e558"
        }

        .fa-plane-slash:before {
            content: "\e069"
        }

        .fa-plane-up:before {
            content: "\e22d"
        }

        .fa-plant-wilt:before {
            content: "\e43b"
        }

        .fa-plate-wheat:before {
            content: "\e55a"
        }

        .fa-play:before {
            content: "\f04b"
        }

        .fa-plug:before {
            content: "\f1e6"
        }

        .fa-plug-circle-bolt:before {
            content: "\e55b"
        }

        .fa-plug-circle-check:before {
            content: "\e55c"
        }

        .fa-plug-circle-exclamation:before {
            content: "\e55d"
        }

        .fa-plug-circle-minus:before {
            content: "\e55e"
        }

        .fa-plug-circle-plus:before {
            content: "\e55f"
        }

        .fa-plug-circle-xmark:before {
            content: "\e560"
        }

        .fa-add:before,
        .fa-plus:before {
            content: "\2b"
        }

        .fa-plus-minus:before {
            content: "\e43c"
        }

        .fa-podcast:before {
            content: "\f2ce"
        }

        .fa-poo:before {
            content: "\f2fe"
        }

        .fa-poo-bolt:before,
        .fa-poo-storm:before {
            content: "\f75a"
        }

        .fa-poop:before {
            content: "\f619"
        }

        .fa-power-off:before {
            content: "\f011"
        }

        .fa-prescription:before {
            content: "\f5b1"
        }

        .fa-prescription-bottle:before {
            content: "\f485"
        }

        .fa-prescription-bottle-alt:before,
        .fa-prescription-bottle-medical:before {
            content: "\f486"
        }

        .fa-print:before {
            content: "\f02f"
        }

        .fa-pump-medical:before {
            content: "\e06a"
        }

        .fa-pump-soap:before {
            content: "\e06b"
        }

        .fa-puzzle-piece:before {
            content: "\f12e"
        }

        .fa-q:before {
            content: "\51"
        }

        .fa-qrcode:before {
            content: "\f029"
        }

        .fa-question:before {
            content: "\3f"
        }

        .fa-quote-left-alt:before,
        .fa-quote-left:before {
            content: "\f10d"
        }

        .fa-quote-right-alt:before,
        .fa-quote-right:before {
            content: "\f10e"
        }

        .fa-r:before {
            content: "\52"
        }

        .fa-radiation:before {
            content: "\f7b9"
        }

        .fa-radio:before {
            content: "\f8d7"
        }

        .fa-rainbow:before {
            content: "\f75b"
        }

        .fa-ranking-star:before {
            content: "\e561"
        }

        .fa-receipt:before {
            content: "\f543"
        }

        .fa-record-vinyl:before {
            content: "\f8d9"
        }

        .fa-ad:before,
        .fa-rectangle-ad:before {
            content: "\f641"
        }

        .fa-list-alt:before,
        .fa-rectangle-list:before {
            content: "\f022"
        }

        .fa-rectangle-times:before,
        .fa-rectangle-xmark:before,
        .fa-times-rectangle:before,
        .fa-window-close:before {
            content: "\f410"
        }

        .fa-recycle:before {
            content: "\f1b8"
        }

        .fa-registered:before {
            content: "\f25d"
        }

        .fa-repeat:before {
            content: "\f363"
        }

        .fa-mail-reply:before,
        .fa-reply:before {
            content: "\f3e5"
        }

        .fa-mail-reply-all:before,
        .fa-reply-all:before {
            content: "\f122"
        }

        .fa-republican:before {
            content: "\f75e"
        }

        .fa-restroom:before {
            content: "\f7bd"
        }

        .fa-retweet:before {
            content: "\f079"
        }

        .fa-ribbon:before {
            content: "\f4d6"
        }

        .fa-right-from-bracket:before,
        .fa-sign-out-alt:before {
            content: "\f2f5"
        }

        .fa-exchange-alt:before,
        .fa-right-left:before {
            content: "\f362"
        }

        .fa-long-arrow-alt-right:before,
        .fa-right-long:before {
            content: "\f30b"
        }

        .fa-right-to-bracket:before,
        .fa-sign-in-alt:before {
            content: "\f2f6"
        }

        .fa-ring:before {
            content: "\f70b"
        }

        .fa-road:before {
            content: "\f018"
        }

        .fa-road-barrier:before {
            content: "\e562"
        }

        .fa-road-bridge:before {
            content: "\e563"
        }

        .fa-road-circle-check:before {
            content: "\e564"
        }

        .fa-road-circle-exclamation:before {
            content: "\e565"
        }

        .fa-road-circle-xmark:before {
            content: "\e566"
        }

        .fa-road-lock:before {
            content: "\e567"
        }

        .fa-road-spikes:before {
            content: "\e568"
        }

        .fa-robot:before {
            content: "\f544"
        }

        .fa-rocket:before {
            content: "\f135"
        }

        .fa-rotate:before,
        .fa-sync-alt:before {
            content: "\f2f1"
        }

        .fa-rotate-back:before,
        .fa-rotate-backward:before,
        .fa-rotate-left:before,
        .fa-undo-alt:before {
            content: "\f2ea"
        }

        .fa-redo-alt:before,
        .fa-rotate-forward:before,
        .fa-rotate-right:before {
            content: "\f2f9"
        }

        .fa-route:before {
            content: "\f4d7"
        }

        .fa-feed:before,
        .fa-rss:before {
            content: "\f09e"
        }

        .fa-rouble:before,
        .fa-rub:before,
        .fa-ruble-sign:before,
        .fa-ruble:before {
            content: "\f158"
        }

        .fa-rug:before {
            content: "\e569"
        }

        .fa-ruler:before {
            content: "\f545"
        }

        .fa-ruler-combined:before {
            content: "\f546"
        }

        .fa-ruler-horizontal:before {
            content: "\f547"
        }

        .fa-ruler-vertical:before {
            content: "\f548"
        }

        .fa-rupee-sign:before,
        .fa-rupee:before {
            content: "\f156"
        }

        .fa-rupiah-sign:before {
            content: "\e23d"
        }

        .fa-s:before {
            content: "\53"
        }

        .fa-sack-dollar:before {
            content: "\f81d"
        }

        .fa-sack-xmark:before {
            content: "\e56a"
        }

        .fa-sailboat:before {
            content: "\e445"
        }

        .fa-satellite:before {
            content: "\f7bf"
        }

        .fa-satellite-dish:before {
            content: "\f7c0"
        }

        .fa-balance-scale:before,
        .fa-scale-balanced:before {
            content: "\f24e"
        }

        .fa-balance-scale-left:before,
        .fa-scale-unbalanced:before {
            content: "\f515"
        }

        .fa-balance-scale-right:before,
        .fa-scale-unbalanced-flip:before {
            content: "\f516"
        }

        .fa-school:before {
            content: "\f549"
        }

        .fa-school-circle-check:before {
            content: "\e56b"
        }

        .fa-school-circle-exclamation:before {
            content: "\e56c"
        }

        .fa-school-circle-xmark:before {
            content: "\e56d"
        }

        .fa-school-flag:before {
            content: "\e56e"
        }

        .fa-school-lock:before {
            content: "\e56f"
        }

        .fa-cut:before,
        .fa-scissors:before {
            content: "\f0c4"
        }

        .fa-screwdriver:before {
            content: "\f54a"
        }

        .fa-screwdriver-wrench:before,
        .fa-tools:before {
            content: "\f7d9"
        }

        .fa-scroll:before {
            content: "\f70e"
        }

        .fa-scroll-torah:before,
        .fa-torah:before {
            content: "\f6a0"
        }

        .fa-sd-card:before {
            content: "\f7c2"
        }

        .fa-section:before {
            content: "\e447"
        }

        .fa-seedling:before,
        .fa-sprout:before {
            content: "\f4d8"
        }

        .fa-server:before {
            content: "\f233"
        }

        .fa-shapes:before,
        .fa-triangle-circle-square:before {
            content: "\f61f"
        }

        .fa-arrow-turn-right:before,
        .fa-mail-forward:before,
        .fa-share:before {
            content: "\f064"
        }

        .fa-share-from-square:before,
        .fa-share-square:before {
            content: "\f14d"
        }

        .fa-share-alt:before,
        .fa-share-nodes:before {
            content: "\f1e0"
        }

        .fa-sheet-plastic:before {
            content: "\e571"
        }

        .fa-ils:before,
        .fa-shekel-sign:before,
        .fa-shekel:before,
        .fa-sheqel-sign:before,
        .fa-sheqel:before {
            content: "\f20b"
        }

        .fa-shield-blank:before,
        .fa-shield:before {
            content: "\f132"
        }

        .fa-shield-cat:before {
            content: "\e572"
        }

        .fa-shield-dog:before {
            content: "\e573"
        }

        .fa-shield-alt:before,
        .fa-shield-halved:before {
            content: "\f3ed"
        }

        .fa-shield-heart:before {
            content: "\e574"
        }

        .fa-shield-virus:before {
            content: "\e06c"
        }

        .fa-ship:before {
            content: "\f21a"
        }

        .fa-shirt:before,
        .fa-t-shirt:before,
        .fa-tshirt:before {
            content: "\f553"
        }

        .fa-shoe-prints:before {
            content: "\f54b"
        }

        .fa-shop:before,
        .fa-store-alt:before {
            content: "\f54f"
        }

        .fa-shop-lock:before {
            content: "\e4a5"
        }

        .fa-shop-slash:before,
        .fa-store-alt-slash:before {
            content: "\e070"
        }

        .fa-shower:before {
            content: "\f2cc"
        }

        .fa-shrimp:before {
            content: "\e448"
        }

        .fa-random:before,
        .fa-shuffle:before {
            content: "\f074"
        }

        .fa-shuttle-space:before,
        .fa-space-shuttle:before {
            content: "\f197"
        }

        .fa-sign-hanging:before,
        .fa-sign:before {
            content: "\f4d9"
        }

        .fa-signal-5:before,
        .fa-signal-perfect:before,
        .fa-signal:before {
            content: "\f012"
        }

        .fa-signature:before {
            content: "\f5b7"
        }

        .fa-map-signs:before,
        .fa-signs-post:before {
            content: "\f277"
        }

        .fa-sim-card:before {
            content: "\f7c4"
        }

        .fa-sink:before {
            content: "\e06d"
        }

        .fa-sitemap:before {
            content: "\f0e8"
        }

        .fa-skull:before {
            content: "\f54c"
        }

        .fa-skull-crossbones:before {
            content: "\f714"
        }

        .fa-slash:before {
            content: "\f715"
        }

        .fa-sleigh:before {
            content: "\f7cc"
        }

        .fa-sliders-h:before,
        .fa-sliders:before {
            content: "\f1de"
        }

        .fa-smog:before {
            content: "\f75f"
        }

        .fa-smoking:before {
            content: "\f48d"
        }

        .fa-snowflake:before {
            content: "\f2dc"
        }

        .fa-snowman:before {
            content: "\f7d0"
        }

        .fa-snowplow:before {
            content: "\f7d2"
        }

        .fa-soap:before {
            content: "\e06e"
        }

        .fa-socks:before {
            content: "\f696"
        }

        .fa-solar-panel:before {
            content: "\f5ba"
        }

        .fa-sort:before,
        .fa-unsorted:before {
            content: "\f0dc"
        }

        .fa-sort-desc:before,
        .fa-sort-down:before {
            content: "\f0dd"
        }

        .fa-sort-asc:before,
        .fa-sort-up:before {
            content: "\f0de"
        }

        .fa-spa:before {
            content: "\f5bb"
        }

        .fa-pastafarianism:before,
        .fa-spaghetti-monster-flying:before {
            content: "\f67b"
        }

        .fa-spell-check:before {
            content: "\f891"
        }

        .fa-spider:before {
            content: "\f717"
        }

        .fa-spinner:before {
            content: "\f110"
        }

        .fa-splotch:before {
            content: "\f5bc"
        }

        .fa-spoon:before,
        .fa-utensil-spoon:before {
            content: "\f2e5"
        }

        .fa-spray-can:before {
            content: "\f5bd"
        }

        .fa-air-freshener:before,
        .fa-spray-can-sparkles:before {
            content: "\f5d0"
        }

        .fa-square:before {
            content: "\f0c8"
        }

        .fa-external-link-square:before,
        .fa-square-arrow-up-right:before {
            content: "\f14c"
        }

        .fa-caret-square-down:before,
        .fa-square-caret-down:before {
            content: "\f150"
        }

        .fa-caret-square-left:before,
        .fa-square-caret-left:before {
            content: "\f191"
        }

        .fa-caret-square-right:before,
        .fa-square-caret-right:before {
            content: "\f152"
        }

        .fa-caret-square-up:before,
        .fa-square-caret-up:before {
            content: "\f151"
        }

        .fa-check-square:before,
        .fa-square-check:before {
            content: "\f14a"
        }

        .fa-envelope-square:before,
        .fa-square-envelope:before {
            content: "\f199"
        }

        .fa-square-full:before {
            content: "\f45c"
        }

        .fa-h-square:before,
        .fa-square-h:before {
            content: "\f0fd"
        }

        .fa-minus-square:before,
        .fa-square-minus:before {
            content: "\f146"
        }

        .fa-square-nfi:before {
            content: "\e576"
        }

        .fa-parking:before,
        .fa-square-parking:before {
            content: "\f540"
        }

        .fa-pen-square:before,
        .fa-pencil-square:before,
        .fa-square-pen:before {
            content: "\f14b"
        }

        .fa-square-person-confined:before {
            content: "\e577"
        }

        .fa-phone-square:before,
        .fa-square-phone:before {
            content: "\f098"
        }

        .fa-phone-square-alt:before,
        .fa-square-phone-flip:before {
            content: "\f87b"
        }

        .fa-plus-square:before,
        .fa-square-plus:before {
            content: "\f0fe"
        }

        .fa-poll-h:before,
        .fa-square-poll-horizontal:before {
            content: "\f682"
        }

        .fa-poll:before,
        .fa-square-poll-vertical:before {
            content: "\f681"
        }

        .fa-square-root-alt:before,
        .fa-square-root-variable:before {
            content: "\f698"
        }

        .fa-rss-square:before,
        .fa-square-rss:before {
            content: "\f143"
        }

        .fa-share-alt-square:before,
        .fa-square-share-nodes:before {
            content: "\f1e1"
        }

        .fa-external-link-square-alt:before,
        .fa-square-up-right:before {
            content: "\f360"
        }

        .fa-square-virus:before {
            content: "\e578"
        }

        .fa-square-xmark:before,
        .fa-times-square:before,
        .fa-xmark-square:before {
            content: "\f2d3"
        }

        .fa-rod-asclepius:before,
        .fa-rod-snake:before,
        .fa-staff-aesculapius:before,
        .fa-staff-snake:before {
            content: "\e579"
        }

        .fa-stairs:before {
            content: "\e289"
        }

        .fa-stamp:before {
            content: "\f5bf"
        }

        .fa-star:before {
            content: "\f005"
        }

        .fa-star-and-crescent:before {
            content: "\f699"
        }

        .fa-star-half:before {
            content: "\f089"
        }

        .fa-star-half-alt:before,
        .fa-star-half-stroke:before {
            content: "\f5c0"
        }

        .fa-star-of-david:before {
            content: "\f69a"
        }

        .fa-star-of-life:before {
            content: "\f621"
        }

        .fa-gbp:before,
        .fa-pound-sign:before,
        .fa-sterling-sign:before {
            content: "\f154"
        }

        .fa-stethoscope:before {
            content: "\f0f1"
        }

        .fa-stop:before {
            content: "\f04d"
        }

        .fa-stopwatch:before {
            content: "\f2f2"
        }

        .fa-stopwatch-20:before {
            content: "\e06f"
        }

        .fa-store:before {
            content: "\f54e"
        }

        .fa-store-slash:before {
            content: "\e071"
        }

        .fa-street-view:before {
            content: "\f21d"
        }

        .fa-strikethrough:before {
            content: "\f0cc"
        }

        .fa-stroopwafel:before {
            content: "\f551"
        }

        .fa-subscript:before {
            content: "\f12c"
        }

        .fa-suitcase:before {
            content: "\f0f2"
        }

        .fa-medkit:before,
        .fa-suitcase-medical:before {
            content: "\f0fa"
        }

        .fa-suitcase-rolling:before {
            content: "\f5c1"
        }

        .fa-sun:before {
            content: "\f185"
        }

        .fa-sun-plant-wilt:before {
            content: "\e57a"
        }

        .fa-superscript:before {
            content: "\f12b"
        }

        .fa-swatchbook:before {
            content: "\f5c3"
        }

        .fa-synagogue:before {
            content: "\f69b"
        }

        .fa-syringe:before {
            content: "\f48e"
        }

        .fa-t:before {
            content: "\54"
        }

        .fa-table:before {
            content: "\f0ce"
        }

        .fa-table-cells:before,
        .fa-th:before {
            content: "\f00a"
        }

        .fa-table-cells-large:before,
        .fa-th-large:before {
            content: "\f009"
        }

        .fa-columns:before,
        .fa-table-columns:before {
            content: "\f0db"
        }

        .fa-table-list:before,
        .fa-th-list:before {
            content: "\f00b"
        }

        .fa-ping-pong-paddle-ball:before,
        .fa-table-tennis-paddle-ball:before,
        .fa-table-tennis:before {
            content: "\f45d"
        }

        .fa-tablet-android:before,
        .fa-tablet:before {
            content: "\f3fb"
        }

        .fa-tablet-button:before {
            content: "\f10a"
        }

        .fa-tablet-alt:before,
        .fa-tablet-screen-button:before {
            content: "\f3fa"
        }

        .fa-tablets:before {
            content: "\f490"
        }

        .fa-digital-tachograph:before,
        .fa-tachograph-digital:before {
            content: "\f566"
        }

        .fa-tag:before {
            content: "\f02b"
        }

        .fa-tags:before {
            content: "\f02c"
        }

        .fa-tape:before {
            content: "\f4db"
        }

        .fa-tarp:before {
            content: "\e57b"
        }

        .fa-tarp-droplet:before {
            content: "\e57c"
        }

        .fa-cab:before,
        .fa-taxi:before {
            content: "\f1ba"
        }

        .fa-teeth:before {
            content: "\f62e"
        }

        .fa-teeth-open:before {
            content: "\f62f"
        }

        .fa-temperature-arrow-down:before,
        .fa-temperature-down:before {
            content: "\e03f"
        }

        .fa-temperature-arrow-up:before,
        .fa-temperature-up:before {
            content: "\e040"
        }

        .fa-temperature-0:before,
        .fa-temperature-empty:before,
        .fa-thermometer-0:before,
        .fa-thermometer-empty:before {
            content: "\f2cb"
        }

        .fa-temperature-4:before,
        .fa-temperature-full:before,
        .fa-thermometer-4:before,
        .fa-thermometer-full:before {
            content: "\f2c7"
        }

        .fa-temperature-2:before,
        .fa-temperature-half:before,
        .fa-thermometer-2:before,
        .fa-thermometer-half:before {
            content: "\f2c9"
        }

        .fa-temperature-high:before {
            content: "\f769"
        }

        .fa-temperature-low:before {
            content: "\f76b"
        }

        .fa-temperature-1:before,
        .fa-temperature-quarter:before,
        .fa-thermometer-1:before,
        .fa-thermometer-quarter:before {
            content: "\f2ca"
        }

        .fa-temperature-3:before,
        .fa-temperature-three-quarters:before,
        .fa-thermometer-3:before,
        .fa-thermometer-three-quarters:before {
            content: "\f2c8"
        }

        .fa-tenge-sign:before,
        .fa-tenge:before {
            content: "\f7d7"
        }

        .fa-tent:before {
            content: "\e57d"
        }

        .fa-tent-arrow-down-to-line:before {
            content: "\e57e"
        }

        .fa-tent-arrow-left-right:before {
            content: "\e57f"
        }

        .fa-tent-arrow-turn-left:before {
            content: "\e580"
        }

        .fa-tent-arrows-down:before {
            content: "\e581"
        }

        .fa-tents:before {
            content: "\e582"
        }

        .fa-terminal:before {
            content: "\f120"
        }

        .fa-text-height:before {
            content: "\f034"
        }

        .fa-remove-format:before,
        .fa-text-slash:before {
            content: "\f87d"
        }

        .fa-text-width:before {
            content: "\f035"
        }

        .fa-thermometer:before {
            content: "\f491"
        }

        .fa-thumbs-down:before {
            content: "\f165"
        }

        .fa-thumbs-up:before {
            content: "\f164"
        }

        .fa-thumb-tack:before,
        .fa-thumbtack:before {
            content: "\f08d"
        }

        .fa-ticket:before {
            content: "\f145"
        }

        .fa-ticket-alt:before,
        .fa-ticket-simple:before {
            content: "\f3ff"
        }

        .fa-timeline:before {
            content: "\e29c"
        }

        .fa-toggle-off:before {
            content: "\f204"
        }

        .fa-toggle-on:before {
            content: "\f205"
        }

        .fa-toilet:before {
            content: "\f7d8"
        }

        .fa-toilet-paper:before {
            content: "\f71e"
        }

        .fa-toilet-paper-slash:before {
            content: "\e072"
        }

        .fa-toilet-portable:before {
            content: "\e583"
        }

        .fa-toilets-portable:before {
            content: "\e584"
        }

        .fa-toolbox:before {
            content: "\f552"
        }

        .fa-tooth:before {
            content: "\f5c9"
        }

        .fa-torii-gate:before {
            content: "\f6a1"
        }

        .fa-tornado:before {
            content: "\f76f"
        }

        .fa-broadcast-tower:before,
        .fa-tower-broadcast:before {
            content: "\f519"
        }

        .fa-tower-cell:before {
            content: "\e585"
        }

        .fa-tower-observation:before {
            content: "\e586"
        }

        .fa-tractor:before {
            content: "\f722"
        }

        .fa-trademark:before {
            content: "\f25c"
        }

        .fa-traffic-light:before {
            content: "\f637"
        }

        .fa-trailer:before {
            content: "\e041"
        }

        .fa-train:before {
            content: "\f238"
        }

        .fa-subway:before,
        .fa-train-subway:before {
            content: "\f239"
        }

        .fa-train-tram:before,
        .fa-tram:before {
            content: "\f7da"
        }

        .fa-transgender-alt:before,
        .fa-transgender:before {
            content: "\f225"
        }

        .fa-trash:before {
            content: "\f1f8"
        }

        .fa-trash-arrow-up:before,
        .fa-trash-restore:before {
            content: "\f829"
        }

        .fa-trash-alt:before,
        .fa-trash-can:before {
            content: "\f2ed"
        }

        .fa-trash-can-arrow-up:before,
        .fa-trash-restore-alt:before {
            content: "\f82a"
        }

        .fa-tree:before {
            content: "\f1bb"
        }

        .fa-tree-city:before {
            content: "\e587"
        }

        .fa-exclamation-triangle:before,
        .fa-triangle-exclamation:before,
        .fa-warning:before {
            content: "\f071"
        }

        .fa-trophy:before {
            content: "\f091"
        }

        .fa-trowel:before {
            content: "\e589"
        }

        .fa-trowel-bricks:before {
            content: "\e58a"
        }

        .fa-truck:before {
            content: "\f0d1"
        }

        .fa-truck-arrow-right:before {
            content: "\e58b"
        }

        .fa-truck-droplet:before {
            content: "\e58c"
        }

        .fa-shipping-fast:before,
        .fa-truck-fast:before {
            content: "\f48b"
        }

        .fa-truck-field:before {
            content: "\e58d"
        }

        .fa-truck-field-un:before {
            content: "\e58e"
        }

        .fa-truck-front:before {
            content: "\e2b7"
        }

        .fa-ambulance:before,
        .fa-truck-medical:before {
            content: "\f0f9"
        }

        .fa-truck-monster:before {
            content: "\f63b"
        }

        .fa-truck-moving:before {
            content: "\f4df"
        }

        .fa-truck-pickup:before {
            content: "\f63c"
        }

        .fa-truck-plane:before {
            content: "\e58f"
        }

        .fa-truck-loading:before,
        .fa-truck-ramp-box:before {
            content: "\f4de"
        }

        .fa-teletype:before,
        .fa-tty:before {
            content: "\f1e4"
        }

        .fa-try:before,
        .fa-turkish-lira-sign:before,
        .fa-turkish-lira:before {
            content: "\e2bb"
        }

        .fa-level-down-alt:before,
        .fa-turn-down:before {
            content: "\f3be"
        }

        .fa-level-up-alt:before,
        .fa-turn-up:before {
            content: "\f3bf"
        }

        .fa-television:before,
        .fa-tv-alt:before,
        .fa-tv:before {
            content: "\f26c"
        }

        .fa-u:before {
            content: "\55"
        }

        .fa-umbrella:before {
            content: "\f0e9"
        }

        .fa-umbrella-beach:before {
            content: "\f5ca"
        }

        .fa-underline:before {
            content: "\f0cd"
        }

        .fa-universal-access:before {
            content: "\f29a"
        }

        .fa-unlock:before {
            content: "\f09c"
        }

        .fa-unlock-alt:before,
        .fa-unlock-keyhole:before {
            content: "\f13e"
        }

        .fa-arrows-alt-v:before,
        .fa-up-down:before {
            content: "\f338"
        }

        .fa-arrows-alt:before,
        .fa-up-down-left-right:before {
            content: "\f0b2"
        }

        .fa-long-arrow-alt-up:before,
        .fa-up-long:before {
            content: "\f30c"
        }

        .fa-expand-alt:before,
        .fa-up-right-and-down-left-from-center:before {
            content: "\f424"
        }

        .fa-external-link-alt:before,
        .fa-up-right-from-square:before {
            content: "\f35d"
        }

        .fa-upload:before {
            content: "\f093"
        }

        .fa-user:before {
            content: "\f007"
        }

        .fa-user-astronaut:before {
            content: "\f4fb"
        }

        .fa-user-check:before {
            content: "\f4fc"
        }

        .fa-user-clock:before {
            content: "\f4fd"
        }

        .fa-user-doctor:before,
        .fa-user-md:before {
            content: "\f0f0"
        }

        .fa-user-cog:before,
        .fa-user-gear:before {
            content: "\f4fe"
        }

        .fa-user-graduate:before {
            content: "\f501"
        }

        .fa-user-friends:before,
        .fa-user-group:before {
            content: "\f500"
        }

        .fa-user-injured:before {
            content: "\f728"
        }

        .fa-user-alt:before,
        .fa-user-large:before {
            content: "\f406"
        }

        .fa-user-alt-slash:before,
        .fa-user-large-slash:before {
            content: "\f4fa"
        }

        .fa-user-lock:before {
            content: "\f502"
        }

        .fa-user-minus:before {
            content: "\f503"
        }

        .fa-user-ninja:before {
            content: "\f504"
        }

        .fa-user-nurse:before {
            content: "\f82f"
        }

        .fa-user-edit:before,
        .fa-user-pen:before {
            content: "\f4ff"
        }

        .fa-user-plus:before {
            content: "\f234"
        }

        .fa-user-secret:before {
            content: "\f21b"
        }

        .fa-user-shield:before {
            content: "\f505"
        }

        .fa-user-slash:before {
            content: "\f506"
        }

        .fa-user-tag:before {
            content: "\f507"
        }

        .fa-user-tie:before {
            content: "\f508"
        }

        .fa-user-times:before,
        .fa-user-xmark:before {
            content: "\f235"
        }

        .fa-users:before {
            content: "\f0c0"
        }

        .fa-users-between-lines:before {
            content: "\e591"
        }

        .fa-users-cog:before,
        .fa-users-gear:before {
            content: "\f509"
        }

        .fa-users-line:before {
            content: "\e592"
        }

        .fa-users-rays:before {
            content: "\e593"
        }

        .fa-users-rectangle:before {
            content: "\e594"
        }

        .fa-users-slash:before {
            content: "\e073"
        }

        .fa-users-viewfinder:before {
            content: "\e595"
        }

        .fa-cutlery:before,
        .fa-utensils:before {
            content: "\f2e7"
        }

        .fa-v:before {
            content: "\56"
        }

        .fa-shuttle-van:before,
        .fa-van-shuttle:before {
            content: "\f5b6"
        }

        .fa-vault:before {
            content: "\e2c5"
        }

        .fa-vector-square:before {
            content: "\f5cb"
        }

        .fa-venus:before {
            content: "\f221"
        }

        .fa-venus-double:before {
            content: "\f226"
        }

        .fa-venus-mars:before {
            content: "\f228"
        }

        .fa-vest:before {
            content: "\e085"
        }

        .fa-vest-patches:before {
            content: "\e086"
        }

        .fa-vial:before {
            content: "\f492"
        }

        .fa-vial-circle-check:before {
            content: "\e596"
        }

        .fa-vial-virus:before {
            content: "\e597"
        }

        .fa-vials:before {
            content: "\f493"
        }

        .fa-video-camera:before,
        .fa-video:before {
            content: "\f03d"
        }

        .fa-video-slash:before {
            content: "\f4e2"
        }

        .fa-vihara:before {
            content: "\f6a7"
        }

        .fa-virus:before {
            content: "\e074"
        }

        .fa-virus-covid:before {
            content: "\e4a8"
        }

        .fa-virus-covid-slash:before {
            content: "\e4a9"
        }

        .fa-virus-slash:before {
            content: "\e075"
        }

        .fa-viruses:before {
            content: "\e076"
        }

        .fa-voicemail:before {
            content: "\f897"
        }

        .fa-volcano:before {
            content: "\f770"
        }

        .fa-volleyball-ball:before,
        .fa-volleyball:before {
            content: "\f45f"
        }

        .fa-volume-high:before,
        .fa-volume-up:before {
            content: "\f028"
        }

        .fa-volume-down:before,
        .fa-volume-low:before {
            content: "\f027"
        }

        .fa-volume-off:before {
            content: "\f026"
        }

        .fa-volume-mute:before,
        .fa-volume-times:before,
        .fa-volume-xmark:before {
            content: "\f6a9"
        }

        .fa-vr-cardboard:before {
            content: "\f729"
        }

        .fa-w:before {
            content: "\57"
        }

        .fa-walkie-talkie:before {
            content: "\f8ef"
        }

        .fa-wallet:before {
            content: "\f555"
        }

        .fa-magic:before,
        .fa-wand-magic:before {
            content: "\f0d0"
        }

        .fa-magic-wand-sparkles:before,
        .fa-wand-magic-sparkles:before {
            content: "\e2ca"
        }

        .fa-wand-sparkles:before {
            content: "\f72b"
        }

        .fa-warehouse:before {
            content: "\f494"
        }

        .fa-water:before {
            content: "\f773"
        }

        .fa-ladder-water:before,
        .fa-swimming-pool:before,
        .fa-water-ladder:before {
            content: "\f5c5"
        }

        .fa-wave-square:before {
            content: "\f83e"
        }

        .fa-weight-hanging:before {
            content: "\f5cd"
        }

        .fa-weight-scale:before,
        .fa-weight:before {
            content: "\f496"
        }

        .fa-wheat-alt:before,
        .fa-wheat-awn:before {
            content: "\e2cd"
        }

        .fa-wheat-awn-circle-exclamation:before {
            content: "\e598"
        }

        .fa-wheelchair:before {
            content: "\f193"
        }

        .fa-wheelchair-alt:before,
        .fa-wheelchair-move:before {
            content: "\e2ce"
        }

        .fa-glass-whiskey:before,
        .fa-whiskey-glass:before {
            content: "\f7a0"
        }

        .fa-wifi-3:before,
        .fa-wifi-strong:before,
        .fa-wifi:before {
            content: "\f1eb"
        }

        .fa-wind:before {
            content: "\f72e"
        }

        .fa-window-maximize:before {
            content: "\f2d0"
        }

        .fa-window-minimize:before {
            content: "\f2d1"
        }

        .fa-window-restore:before {
            content: "\f2d2"
        }

        .fa-wine-bottle:before {
            content: "\f72f"
        }

        .fa-wine-glass:before {
            content: "\f4e3"
        }

        .fa-wine-glass-alt:before,
        .fa-wine-glass-empty:before {
            content: "\f5ce"
        }

        .fa-krw:before,
        .fa-won-sign:before,
        .fa-won:before {
            content: "\f159"
        }

        .fa-worm:before {
            content: "\e599"
        }

        .fa-wrench:before {
            content: "\f0ad"
        }

        .fa-x:before {
            content: "\58"
        }

        .fa-x-ray:before {
            content: "\f497"
        }

        .fa-close:before,
        .fa-multiply:before,
        .fa-remove:before,
        .fa-times:before,
        .fa-xmark:before {
            content: "\f00d"
        }

        .fa-xmarks-lines:before {
            content: "\e59a"
        }

        .fa-y:before {
            content: "\59"
        }

        .fa-cny:before,
        .fa-jpy:before,
        .fa-rmb:before,
        .fa-yen-sign:before,
        .fa-yen:before {
            content: "\f157"
        }

        .fa-yin-yang:before {
            content: "\f6ad"
        }

        .fa-z:before {
            content: "\5a"
        }

        .fa-sr-only,
        .fa-sr-only-focusable:not(:focus),
        .sr-only,
        .sr-only-focusable:not(:focus) {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0
        }

        :host,
        :root {
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands"
        }

        @font-face {
            font-family: "Font Awesome 6 Brands";
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(../webfonts/fa-brands-400.woff2) format("woff2"), url(../webfonts/fa-brands-400.ttf) format("truetype")
        }

        .fa-brands,
        .fab {
            font-family: "Font Awesome 6 Brands";
            font-weight: 400
        }

        .fa-42-group:before,
        .fa-innosoft:before {
            content: "\e080"
        }

        .fa-500px:before {
            content: "\f26e"
        }

        .fa-accessible-icon:before {
            content: "\f368"
        }

        .fa-accusoft:before {
            content: "\f369"
        }

        .fa-adn:before {
            content: "\f170"
        }

        .fa-adversal:before {
            content: "\f36a"
        }

        .fa-affiliatetheme:before {
            content: "\f36b"
        }

        .fa-airbnb:before {
            content: "\f834"
        }

        .fa-algolia:before {
            content: "\f36c"
        }

        .fa-alipay:before {
            content: "\f642"
        }

        .fa-amazon:before {
            content: "\f270"
        }

        .fa-amazon-pay:before {
            content: "\f42c"
        }

        .fa-amilia:before {
            content: "\f36d"
        }

        .fa-android:before {
            content: "\f17b"
        }

        .fa-angellist:before {
            content: "\f209"
        }

        .fa-angrycreative:before {
            content: "\f36e"
        }

        .fa-angular:before {
            content: "\f420"
        }

        .fa-app-store:before {
            content: "\f36f"
        }

        .fa-app-store-ios:before {
            content: "\f370"
        }

        .fa-apper:before {
            content: "\f371"
        }

        .fa-apple:before {
            content: "\f179"
        }

        .fa-apple-pay:before {
            content: "\f415"
        }

        .fa-artstation:before {
            content: "\f77a"
        }

        .fa-asymmetrik:before {
            content: "\f372"
        }

        .fa-atlassian:before {
            content: "\f77b"
        }

        .fa-audible:before {
            content: "\f373"
        }

        .fa-autoprefixer:before {
            content: "\f41c"
        }

        .fa-avianex:before {
            content: "\f374"
        }

        .fa-aviato:before {
            content: "\f421"
        }

        .fa-aws:before {
            content: "\f375"
        }

        .fa-bandcamp:before {
            content: "\f2d5"
        }

        .fa-battle-net:before {
            content: "\f835"
        }

        .fa-behance:before {
            content: "\f1b4"
        }

        .fa-behance-square:before {
            content: "\f1b5"
        }

        .fa-bilibili:before {
            content: "\e3d9"
        }

        .fa-bimobject:before {
            content: "\f378"
        }

        .fa-bitbucket:before {
            content: "\f171"
        }

        .fa-bitcoin:before {
            content: "\f379"
        }

        .fa-bity:before {
            content: "\f37a"
        }

        .fa-black-tie:before {
            content: "\f27e"
        }

        .fa-blackberry:before {
            content: "\f37b"
        }

        .fa-blogger:before {
            content: "\f37c"
        }

        .fa-blogger-b:before {
            content: "\f37d"
        }

        .fa-bluetooth:before {
            content: "\f293"
        }

        .fa-bluetooth-b:before {
            content: "\f294"
        }

        .fa-bootstrap:before {
            content: "\f836"
        }

        .fa-bots:before {
            content: "\e340"
        }

        .fa-btc:before {
            content: "\f15a"
        }

        .fa-buffer:before {
            content: "\f837"
        }

        .fa-buromobelexperte:before {
            content: "\f37f"
        }

        .fa-buy-n-large:before {
            content: "\f8a6"
        }

        .fa-buysellads:before {
            content: "\f20d"
        }

        .fa-canadian-maple-leaf:before {
            content: "\f785"
        }

        .fa-cc-amazon-pay:before {
            content: "\f42d"
        }

        .fa-cc-amex:before {
            content: "\f1f3"
        }

        .fa-cc-apple-pay:before {
            content: "\f416"
        }

        .fa-cc-diners-club:before {
            content: "\f24c"
        }

        .fa-cc-discover:before {
            content: "\f1f2"
        }

        .fa-cc-jcb:before {
            content: "\f24b"
        }

        .fa-cc-mastercard:before {
            content: "\f1f1"
        }

        .fa-cc-paypal:before {
            content: "\f1f4"
        }

        .fa-cc-stripe:before {
            content: "\f1f5"
        }

        .fa-cc-visa:before {
            content: "\f1f0"
        }

        .fa-centercode:before {
            content: "\f380"
        }

        .fa-centos:before {
            content: "\f789"
        }

        .fa-chrome:before {
            content: "\f268"
        }

        .fa-chromecast:before {
            content: "\f838"
        }

        .fa-cloudflare:before {
            content: "\e07d"
        }

        .fa-cloudscale:before {
            content: "\f383"
        }

        .fa-cloudsmith:before {
            content: "\f384"
        }

        .fa-cloudversify:before {
            content: "\f385"
        }

        .fa-cmplid:before {
            content: "\e360"
        }

        .fa-codepen:before {
            content: "\f1cb"
        }

        .fa-codiepie:before {
            content: "\f284"
        }

        .fa-confluence:before {
            content: "\f78d"
        }

        .fa-connectdevelop:before {
            content: "\f20e"
        }

        .fa-contao:before {
            content: "\f26d"
        }

        .fa-cotton-bureau:before {
            content: "\f89e"
        }

        .fa-cpanel:before {
            content: "\f388"
        }

        .fa-creative-commons:before {
            content: "\f25e"
        }

        .fa-creative-commons-by:before {
            content: "\f4e7"
        }

        .fa-creative-commons-nc:before {
            content: "\f4e8"
        }

        .fa-creative-commons-nc-eu:before {
            content: "\f4e9"
        }

        .fa-creative-commons-nc-jp:before {
            content: "\f4ea"
        }

        .fa-creative-commons-nd:before {
            content: "\f4eb"
        }

        .fa-creative-commons-pd:before {
            content: "\f4ec"
        }

        .fa-creative-commons-pd-alt:before {
            content: "\f4ed"
        }

        .fa-creative-commons-remix:before {
            content: "\f4ee"
        }

        .fa-creative-commons-sa:before {
            content: "\f4ef"
        }

        .fa-creative-commons-sampling:before {
            content: "\f4f0"
        }

        .fa-creative-commons-sampling-plus:before {
            content: "\f4f1"
        }

        .fa-creative-commons-share:before {
            content: "\f4f2"
        }

        .fa-creative-commons-zero:before {
            content: "\f4f3"
        }

        .fa-critical-role:before {
            content: "\f6c9"
        }

        .fa-css3:before {
            content: "\f13c"
        }

        .fa-css3-alt:before {
            content: "\f38b"
        }

        .fa-cuttlefish:before {
            content: "\f38c"
        }

        .fa-d-and-d:before {
            content: "\f38d"
        }

        .fa-d-and-d-beyond:before {
            content: "\f6ca"
        }

        .fa-dailymotion:before {
            content: "\e052"
        }

        .fa-dashcube:before {
            content: "\f210"
        }

        .fa-deezer:before {
            content: "\e077"
        }

        .fa-delicious:before {
            content: "\f1a5"
        }

        .fa-deploydog:before {
            content: "\f38e"
        }

        .fa-deskpro:before {
            content: "\f38f"
        }

        .fa-dev:before {
            content: "\f6cc"
        }

        .fa-deviantart:before {
            content: "\f1bd"
        }

        .fa-dhl:before {
            content: "\f790"
        }

        .fa-diaspora:before {
            content: "\f791"
        }

        .fa-digg:before {
            content: "\f1a6"
        }

        .fa-digital-ocean:before {
            content: "\f391"
        }

        .fa-discord:before {
            content: "\f392"
        }

        .fa-discourse:before {
            content: "\f393"
        }

        .fa-dochub:before {
            content: "\f394"
        }

        .fa-docker:before {
            content: "\f395"
        }

        .fa-draft2digital:before {
            content: "\f396"
        }

        .fa-dribbble:before {
            content: "\f17d"
        }

        .fa-dribbble-square:before {
            content: "\f397"
        }

        .fa-dropbox:before {
            content: "\f16b"
        }

        .fa-drupal:before {
            content: "\f1a9"
        }

        .fa-dyalog:before {
            content: "\f399"
        }

        .fa-earlybirds:before {
            content: "\f39a"
        }

        .fa-ebay:before {
            content: "\f4f4"
        }

        .fa-edge:before {
            content: "\f282"
        }

        .fa-edge-legacy:before {
            content: "\e078"
        }

        .fa-elementor:before {
            content: "\f430"
        }

        .fa-ello:before {
            content: "\f5f1"
        }

        .fa-ember:before {
            content: "\f423"
        }

        .fa-empire:before {
            content: "\f1d1"
        }

        .fa-envira:before {
            content: "\f299"
        }

        .fa-erlang:before {
            content: "\f39d"
        }

        .fa-ethereum:before {
            content: "\f42e"
        }

        .fa-etsy:before {
            content: "\f2d7"
        }

        .fa-evernote:before {
            content: "\f839"
        }

        .fa-expeditedssl:before {
            content: "\f23e"
        }

        .fa-facebook:before {
            content: "\f09a"
        }

        .fa-facebook-f:before {
            content: "\f39e"
        }

        .fa-facebook-messenger:before {
            content: "\f39f"
        }

        .fa-facebook-square:before {
            content: "\f082"
        }

        .fa-fantasy-flight-games:before {
            content: "\f6dc"
        }

        .fa-fedex:before {
            content: "\f797"
        }

        .fa-fedora:before {
            content: "\f798"
        }

        .fa-figma:before {
            content: "\f799"
        }

        .fa-firefox:before {
            content: "\f269"
        }

        .fa-firefox-browser:before {
            content: "\e007"
        }

        .fa-first-order:before {
            content: "\f2b0"
        }

        .fa-first-order-alt:before {
            content: "\f50a"
        }

        .fa-firstdraft:before {
            content: "\f3a1"
        }

        .fa-flickr:before {
            content: "\f16e"
        }

        .fa-flipboard:before {
            content: "\f44d"
        }

        .fa-fly:before {
            content: "\f417"
        }

        .fa-font-awesome-flag:before,
        .fa-font-awesome-logo-full:before,
        .fa-font-awesome:before {
            content: "\f2b4"
        }

        .fa-fonticons:before {
            content: "\f280"
        }

        .fa-fonticons-fi:before {
            content: "\f3a2"
        }

        .fa-fort-awesome:before {
            content: "\f286"
        }

        .fa-fort-awesome-alt:before {
            content: "\f3a3"
        }

        .fa-forumbee:before {
            content: "\f211"
        }

        .fa-foursquare:before {
            content: "\f180"
        }

        .fa-free-code-camp:before {
            content: "\f2c5"
        }

        .fa-freebsd:before {
            content: "\f3a4"
        }

        .fa-fulcrum:before {
            content: "\f50b"
        }

        .fa-galactic-republic:before {
            content: "\f50c"
        }

        .fa-galactic-senate:before {
            content: "\f50d"
        }

        .fa-get-pocket:before {
            content: "\f265"
        }

        .fa-gg:before {
            content: "\f260"
        }

        .fa-gg-circle:before {
            content: "\f261"
        }

        .fa-git:before {
            content: "\f1d3"
        }

        .fa-git-alt:before {
            content: "\f841"
        }

        .fa-git-square:before {
            content: "\f1d2"
        }

        .fa-github:before {
            content: "\f09b"
        }

        .fa-github-alt:before {
            content: "\f113"
        }

        .fa-github-square:before {
            content: "\f092"
        }

        .fa-gitkraken:before {
            content: "\f3a6"
        }

        .fa-gitlab:before {
            content: "\f296"
        }

        .fa-gitter:before {
            content: "\f426"
        }

        .fa-glide:before {
            content: "\f2a5"
        }

        .fa-glide-g:before {
            content: "\f2a6"
        }

        .fa-gofore:before {
            content: "\f3a7"
        }

        .fa-golang:before {
            content: "\e40f"
        }

        .fa-goodreads:before {
            content: "\f3a8"
        }

        .fa-goodreads-g:before {
            content: "\f3a9"
        }

        .fa-google:before {
            content: "\f1a0"
        }

        .fa-google-drive:before {
            content: "\f3aa"
        }

        .fa-google-pay:before {
            content: "\e079"
        }

        .fa-google-play:before {
            content: "\f3ab"
        }

        .fa-google-plus:before {
            content: "\f2b3"
        }

        .fa-google-plus-g:before {
            content: "\f0d5"
        }

        .fa-google-plus-square:before {
            content: "\f0d4"
        }

        .fa-google-wallet:before {
            content: "\f1ee"
        }

        .fa-gratipay:before {
            content: "\f184"
        }

        .fa-grav:before {
            content: "\f2d6"
        }

        .fa-gripfire:before {
            content: "\f3ac"
        }

        .fa-grunt:before {
            content: "\f3ad"
        }

        .fa-guilded:before {
            content: "\e07e"
        }

        .fa-gulp:before {
            content: "\f3ae"
        }

        .fa-hacker-news:before {
            content: "\f1d4"
        }

        .fa-hacker-news-square:before {
            content: "\f3af"
        }

        .fa-hackerrank:before {
            content: "\f5f7"
        }

        .fa-hashnode:before {
            content: "\e499"
        }

        .fa-hips:before {
            content: "\f452"
        }

        .fa-hire-a-helper:before {
            content: "\f3b0"
        }

        .fa-hive:before {
            content: "\e07f"
        }

        .fa-hooli:before {
            content: "\f427"
        }

        .fa-hornbill:before {
            content: "\f592"
        }

        .fa-hotjar:before {
            content: "\f3b1"
        }

        .fa-houzz:before {
            content: "\f27c"
        }

        .fa-html5:before {
            content: "\f13b"
        }

        .fa-hubspot:before {
            content: "\f3b2"
        }

        .fa-ideal:before {
            content: "\e013"
        }

        .fa-imdb:before {
            content: "\f2d8"
        }

        .fa-instagram:before {
            content: "\f16d"
        }

        .fa-instagram-square:before {
            content: "\e055"
        }

        .fa-instalod:before {
            content: "\e081"
        }

        .fa-intercom:before {
            content: "\f7af"
        }

        .fa-internet-explorer:before {
            content: "\f26b"
        }

        .fa-invision:before {
            content: "\f7b0"
        }

        .fa-ioxhost:before {
            content: "\f208"
        }

        .fa-itch-io:before {
            content: "\f83a"
        }

        .fa-itunes:before {
            content: "\f3b4"
        }

        .fa-itunes-note:before {
            content: "\f3b5"
        }

        .fa-java:before {
            content: "\f4e4"
        }

        .fa-jedi-order:before {
            content: "\f50e"
        }

        .fa-jenkins:before {
            content: "\f3b6"
        }

        .fa-jira:before {
            content: "\f7b1"
        }

        .fa-joget:before {
            content: "\f3b7"
        }

        .fa-joomla:before {
            content: "\f1aa"
        }

        .fa-js:before {
            content: "\f3b8"
        }

        .fa-js-square:before {
            content: "\f3b9"
        }

        .fa-jsfiddle:before {
            content: "\f1cc"
        }

        .fa-kaggle:before {
            content: "\f5fa"
        }

        .fa-keybase:before {
            content: "\f4f5"
        }

        .fa-keycdn:before {
            content: "\f3ba"
        }

        .fa-kickstarter:before {
            content: "\f3bb"
        }

        .fa-kickstarter-k:before {
            content: "\f3bc"
        }

        .fa-korvue:before {
            content: "\f42f"
        }

        .fa-laravel:before {
            content: "\f3bd"
        }

        .fa-lastfm:before {
            content: "\f202"
        }

        .fa-lastfm-square:before {
            content: "\f203"
        }

        .fa-leanpub:before {
            content: "\f212"
        }

        .fa-less:before {
            content: "\f41d"
        }

        .fa-line:before {
            content: "\f3c0"
        }

        .fa-linkedin:before {
            content: "\f08c"
        }

        .fa-linkedin-in:before {
            content: "\f0e1"
        }

        .fa-linode:before {
            content: "\f2b8"
        }

        .fa-linux:before {
            content: "\f17c"
        }

        .fa-lyft:before {
            content: "\f3c3"
        }

        .fa-magento:before {
            content: "\f3c4"
        }

        .fa-mailchimp:before {
            content: "\f59e"
        }

        .fa-mandalorian:before {
            content: "\f50f"
        }

        .fa-markdown:before {
            content: "\f60f"
        }

        .fa-mastodon:before {
            content: "\f4f6"
        }

        .fa-maxcdn:before {
            content: "\f136"
        }

        .fa-mdb:before {
            content: "\f8ca"
        }

        .fa-medapps:before {
            content: "\f3c6"
        }

        .fa-medium-m:before,
        .fa-medium:before {
            content: "\f23a"
        }

        .fa-medrt:before {
            content: "\f3c8"
        }

        .fa-meetup:before {
            content: "\f2e0"
        }

        .fa-megaport:before {
            content: "\f5a3"
        }

        .fa-mendeley:before {
            content: "\f7b3"
        }

        .fa-microblog:before {
            content: "\e01a"
        }

        .fa-microsoft:before {
            content: "\f3ca"
        }

        .fa-mix:before {
            content: "\f3cb"
        }

        .fa-mixcloud:before {
            content: "\f289"
        }

        .fa-mixer:before {
            content: "\e056"
        }

        .fa-mizuni:before {
            content: "\f3cc"
        }

        .fa-modx:before {
            content: "\f285"
        }

        .fa-monero:before {
            content: "\f3d0"
        }

        .fa-napster:before {
            content: "\f3d2"
        }

        .fa-neos:before {
            content: "\f612"
        }

        .fa-nfc-directional:before {
            content: "\e530"
        }

        .fa-nfc-symbol:before {
            content: "\e531"
        }

        .fa-nimblr:before {
            content: "\f5a8"
        }

        .fa-node:before {
            content: "\f419"
        }

        .fa-node-js:before {
            content: "\f3d3"
        }

        .fa-npm:before {
            content: "\f3d4"
        }

        .fa-ns8:before {
            content: "\f3d5"
        }

        .fa-nutritionix:before {
            content: "\f3d6"
        }

        .fa-octopus-deploy:before {
            content: "\e082"
        }

        .fa-odnoklassniki:before {
            content: "\f263"
        }

        .fa-odnoklassniki-square:before {
            content: "\f264"
        }

        .fa-old-republic:before {
            content: "\f510"
        }

        .fa-opencart:before {
            content: "\f23d"
        }

        .fa-openid:before {
            content: "\f19b"
        }

        .fa-opera:before {
            content: "\f26a"
        }

        .fa-optin-monster:before {
            content: "\f23c"
        }

        .fa-orcid:before {
            content: "\f8d2"
        }

        .fa-osi:before {
            content: "\f41a"
        }

        .fa-padlet:before {
            content: "\e4a0"
        }

        .fa-page4:before {
            content: "\f3d7"
        }

        .fa-pagelines:before {
            content: "\f18c"
        }

        .fa-palfed:before {
            content: "\f3d8"
        }

        .fa-patreon:before {
            content: "\f3d9"
        }

        .fa-paypal:before {
            content: "\f1ed"
        }

        .fa-perbyte:before {
            content: "\e083"
        }

        .fa-periscope:before {
            content: "\f3da"
        }

        .fa-phabricator:before {
            content: "\f3db"
        }

        .fa-phoenix-framework:before {
            content: "\f3dc"
        }

        .fa-phoenix-squadron:before {
            content: "\f511"
        }

        .fa-php:before {
            content: "\f457"
        }

        .fa-pied-piper:before {
            content: "\f2ae"
        }

        .fa-pied-piper-alt:before {
            content: "\f1a8"
        }

        .fa-pied-piper-hat:before {
            content: "\f4e5"
        }

        .fa-pied-piper-pp:before {
            content: "\f1a7"
        }

        .fa-pied-piper-square:before {
            content: "\e01e"
        }

        .fa-pinterest:before {
            content: "\f0d2"
        }

        .fa-pinterest-p:before {
            content: "\f231"
        }

        .fa-pinterest-square:before {
            content: "\f0d3"
        }

        .fa-pix:before {
            content: "\e43a"
        }

        .fa-playstation:before {
            content: "\f3df"
        }

        .fa-product-hunt:before {
            content: "\f288"
        }

        .fa-pushed:before {
            content: "\f3e1"
        }

        .fa-python:before {
            content: "\f3e2"
        }

        .fa-qq:before {
            content: "\f1d6"
        }

        .fa-quinscape:before {
            content: "\f459"
        }

        .fa-quora:before {
            content: "\f2c4"
        }

        .fa-r-project:before {
            content: "\f4f7"
        }

        .fa-raspberry-pi:before {
            content: "\f7bb"
        }

        .fa-ravelry:before {
            content: "\f2d9"
        }

        .fa-react:before {
            content: "\f41b"
        }

        .fa-reacteurope:before {
            content: "\f75d"
        }

        .fa-readme:before {
            content: "\f4d5"
        }

        .fa-rebel:before {
            content: "\f1d0"
        }

        .fa-red-river:before {
            content: "\f3e3"
        }

        .fa-reddit:before {
            content: "\f1a1"
        }

        .fa-reddit-alien:before {
            content: "\f281"
        }

        .fa-reddit-square:before {
            content: "\f1a2"
        }

        .fa-redhat:before {
            content: "\f7bc"
        }

        .fa-renren:before {
            content: "\f18b"
        }

        .fa-replyd:before {
            content: "\f3e6"
        }

        .fa-researchgate:before {
            content: "\f4f8"
        }

        .fa-resolving:before {
            content: "\f3e7"
        }

        .fa-rev:before {
            content: "\f5b2"
        }

        .fa-rocketchat:before {
            content: "\f3e8"
        }

        .fa-rockrms:before {
            content: "\f3e9"
        }

        .fa-rust:before {
            content: "\e07a"
        }

        .fa-safari:before {
            content: "\f267"
        }

        .fa-salesforce:before {
            content: "\f83b"
        }

        .fa-sass:before {
            content: "\f41e"
        }

        .fa-schlix:before {
            content: "\f3ea"
        }

        .fa-screenpal:before {
            content: "\e570"
        }

        .fa-scribd:before {
            content: "\f28a"
        }

        .fa-searchengin:before {
            content: "\f3eb"
        }

        .fa-sellcast:before {
            content: "\f2da"
        }

        .fa-sellsy:before {
            content: "\f213"
        }

        .fa-servicestack:before {
            content: "\f3ec"
        }

        .fa-shirtsinbulk:before {
            content: "\f214"
        }

        .fa-shopify:before {
            content: "\e057"
        }

        .fa-shopware:before {
            content: "\f5b5"
        }

        .fa-simplybuilt:before {
            content: "\f215"
        }

        .fa-sistrix:before {
            content: "\f3ee"
        }

        .fa-sith:before {
            content: "\f512"
        }

        .fa-sitrox:before {
            content: "\e44a"
        }

        .fa-sketch:before {
            content: "\f7c6"
        }

        .fa-skyatlas:before {
            content: "\f216"
        }

        .fa-skype:before {
            content: "\f17e"
        }

        .fa-slack-hash:before,
        .fa-slack:before {
            content: "\f198"
        }

        .fa-slideshare:before {
            content: "\f1e7"
        }

        .fa-snapchat-ghost:before,
        .fa-snapchat:before {
            content: "\f2ab"
        }

        .fa-snapchat-square:before {
            content: "\f2ad"
        }

        .fa-soundcloud:before {
            content: "\f1be"
        }

        .fa-sourcetree:before {
            content: "\f7d3"
        }

        .fa-speakap:before {
            content: "\f3f3"
        }

        .fa-speaker-deck:before {
            content: "\f83c"
        }

        .fa-spotify:before {
            content: "\f1bc"
        }

        .fa-square-font-awesome:before {
            content: "\f425"
        }

        .fa-font-awesome-alt:before,
        .fa-square-font-awesome-stroke:before {
            content: "\f35c"
        }

        .fa-squarespace:before {
            content: "\f5be"
        }

        .fa-stack-exchange:before {
            content: "\f18d"
        }

        .fa-stack-overflow:before {
            content: "\f16c"
        }

        .fa-stackpath:before {
            content: "\f842"
        }

        .fa-staylinked:before {
            content: "\f3f5"
        }

        .fa-steam:before {
            content: "\f1b6"
        }

        .fa-steam-square:before {
            content: "\f1b7"
        }

        .fa-steam-symbol:before {
            content: "\f3f6"
        }

        .fa-sticker-mule:before {
            content: "\f3f7"
        }

        .fa-strava:before {
            content: "\f428"
        }

        .fa-stripe:before {
            content: "\f429"
        }

        .fa-stripe-s:before {
            content: "\f42a"
        }

        .fa-studiovinari:before {
            content: "\f3f8"
        }

        .fa-stumbleupon:before {
            content: "\f1a4"
        }

        .fa-stumbleupon-circle:before {
            content: "\f1a3"
        }

        .fa-superpowers:before {
            content: "\f2dd"
        }

        .fa-supple:before {
            content: "\f3f9"
        }

        .fa-suse:before {
            content: "\f7d6"
        }

        .fa-swift:before {
            content: "\f8e1"
        }

        .fa-symfony:before {
            content: "\f83d"
        }

        .fa-teamspeak:before {
            content: "\f4f9"
        }

        .fa-telegram-plane:before,
        .fa-telegram:before {
            content: "\f2c6"
        }

        .fa-tencent-weibo:before {
            content: "\f1d5"
        }

        .fa-the-red-yeti:before {
            content: "\f69d"
        }

        .fa-themeco:before {
            content: "\f5c6"
        }

        .fa-themeisle:before {
            content: "\f2b2"
        }

        .fa-think-peaks:before {
            content: "\f731"
        }

        .fa-tiktok:before {
            content: "\e07b"
        }

        .fa-trade-federation:before {
            content: "\f513"
        }

        .fa-trello:before {
            content: "\f181"
        }

        .fa-tumblr:before {
            content: "\f173"
        }

        .fa-tumblr-square:before {
            content: "\f174"
        }

        .fa-twitch:before {
            content: "\f1e8"
        }

        .fa-twitter:before {
            content: "\f099"
        }

        .fa-twitter-square:before {
            content: "\f081"
        }

        .fa-typo3:before {
            content: "\f42b"
        }

        .fa-uber:before {
            content: "\f402"
        }

        .fa-ubuntu:before {
            content: "\f7df"
        }

        .fa-uikit:before {
            content: "\f403"
        }

        .fa-umbraco:before {
            content: "\f8e8"
        }

        .fa-uncharted:before {
            content: "\e084"
        }

        .fa-uniregistry:before {
            content: "\f404"
        }

        .fa-unity:before {
            content: "\e049"
        }

        .fa-unsplash:before {
            content: "\e07c"
        }

        .fa-untappd:before {
            content: "\f405"
        }

        .fa-ups:before {
            content: "\f7e0"
        }

        .fa-usb:before {
            content: "\f287"
        }

        .fa-usps:before {
            content: "\f7e1"
        }

        .fa-ussunnah:before {
            content: "\f407"
        }

        .fa-vaadin:before {
            content: "\f408"
        }

        .fa-viacoin:before {
            content: "\f237"
        }

        .fa-viadeo:before {
            content: "\f2a9"
        }

        .fa-viadeo-square:before {
            content: "\f2aa"
        }

        .fa-viber:before {
            content: "\f409"
        }

        .fa-vimeo:before {
            content: "\f40a"
        }

        .fa-vimeo-square:before {
            content: "\f194"
        }

        .fa-vimeo-v:before {
            content: "\f27d"
        }

        .fa-vine:before {
            content: "\f1ca"
        }

        .fa-vk:before {
            content: "\f189"
        }

        .fa-vnv:before {
            content: "\f40b"
        }

        .fa-vuejs:before {
            content: "\f41f"
        }

        .fa-watchman-monitoring:before {
            content: "\e087"
        }

        .fa-waze:before {
            content: "\f83f"
        }

        .fa-weebly:before {
            content: "\f5cc"
        }

        .fa-weibo:before {
            content: "\f18a"
        }

        .fa-weixin:before {
            content: "\f1d7"
        }

        .fa-whatsapp:before {
            content: "\f232"
        }

        .fa-whatsapp-square:before {
            content: "\f40c"
        }

        .fa-whmcs:before {
            content: "\f40d"
        }

        .fa-wikipedia-w:before {
            content: "\f266"
        }

        .fa-windows:before {
            content: "\f17a"
        }

        .fa-wirsindhandwerk:before,
        .fa-wsh:before {
            content: "\e2d0"
        }

        .fa-wix:before {
            content: "\f5cf"
        }

        .fa-wizards-of-the-coast:before {
            content: "\f730"
        }

        .fa-wodu:before {
            content: "\e088"
        }

        .fa-wolf-pack-battalion:before {
            content: "\f514"
        }

        .fa-wordpress:before {
            content: "\f19a"
        }

        .fa-wordpress-simple:before {
            content: "\f411"
        }

        .fa-wpbeginner:before {
            content: "\f297"
        }

        .fa-wpexplorer:before {
            content: "\f2de"
        }

        .fa-wpforms:before {
            content: "\f298"
        }

        .fa-wpressr:before {
            content: "\f3e4"
        }

        .fa-xbox:before {
            content: "\f412"
        }

        .fa-xing:before {
            content: "\f168"
        }

        .fa-xing-square:before {
            content: "\f169"
        }

        .fa-y-combinator:before {
            content: "\f23b"
        }

        .fa-yahoo:before {
            content: "\f19e"
        }

        .fa-yammer:before {
            content: "\f840"
        }

        .fa-yandex:before {
            content: "\f413"
        }

        .fa-yandex-international:before {
            content: "\f414"
        }

        .fa-yarn:before {
            content: "\f7e3"
        }

        .fa-yelp:before {
            content: "\f1e9"
        }

        .fa-yoast:before {
            content: "\f2b1"
        }

        .fa-youtube:before {
            content: "\f167"
        }

        .fa-youtube-square:before {
            content: "\f431"
        }

        .fa-zhihu:before {
            content: "\f63f"
        }

        :host,
        :root {
            --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Free"
        }

        @font-face {
            font-family: "Font Awesome 6 Free";
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(../webfonts/fa-regular-400.woff2) format("woff2"), url(../webfonts/fa-regular-400.ttf) format("truetype")
        }

        .fa-regular,
        .far {
            font-family: "Font Awesome 6 Free";
            font-weight: 400
        }

        :host,
        :root {
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Free"
        }

        @font-face {
            font-family: "Font Awesome 6 Free";
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(../webfonts/fa-solid-900.woff2) format("woff2"), url(../webfonts/fa-solid-900.ttf) format("truetype")
        }

        .fa-solid,
        .fas {
            font-family: "Font Awesome 6 Free";
            font-weight: 900
        }

        @font-face {
            font-family: "Font Awesome 5 Brands";
            font-display: block;
            font-weight: 400;
            src: url(../webfonts/fa-brands-400.woff2) format("woff2"), url(../webfonts/fa-brands-400.ttf) format("truetype")
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-display: block;
            font-weight: 900;
            src: url(../webfonts/fa-solid-900.woff2) format("woff2"), url(../webfonts/fa-solid-900.ttf) format("truetype")
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-display: block;
            font-weight: 400;
            src: url(../webfonts/fa-regular-400.woff2) format("woff2"), url(../webfonts/fa-regular-400.ttf) format("truetype")
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url(../webfonts/fa-solid-900.woff2) format("woff2"), url(../webfonts/fa-solid-900.ttf) format("truetype")
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url(../webfonts/fa-brands-400.woff2) format("woff2"), url(../webfonts/fa-brands-400.ttf) format("truetype")
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url(../webfonts/fa-regular-400.woff2) format("woff2"), url(../webfonts/fa-regular-400.ttf) format("truetype");
            unicode-range: u+f003, u+f006, u+f014, u+f016-f017, u+f01a-f01b, u+f01d, u+f022, u+f03e, u+f044, u+f046, u+f05c-f05d, u+f06e, u+f070, u+f087-f088, u+f08a, u+f094, u+f096-f097, u+f09d, u+f0a0, u+f0a2, u+f0a4-f0a7, u+f0c5, u+f0c7, u+f0e5-f0e6, u+f0eb, u+f0f6-f0f8, u+f10c, u+f114-f115, u+f118-f11a, u+f11c-f11d, u+f133, u+f147, u+f14e, u+f150-f152, u+f185-f186, u+f18e, u+f190-f192, u+f196, u+f1c1-f1c9, u+f1d9, u+f1db, u+f1e3, u+f1ea, u+f1f7, u+f1f9, u+f20a, u+f247-f248, u+f24a, u+f24d, u+f255-f25b, u+f25d, u+f271-f274, u+f278, u+f27b, u+f28c, u+f28e, u+f29c, u+f2b5, u+f2b7, u+f2ba, u+f2bc, u+f2be, u+f2c0-f2c1, u+f2c3, u+f2d0, u+f2d2, u+f2d4, u+f2dc
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url(../webfonts/fa-v4compatibility.woff2) format("woff2"), url(../webfonts/fa-v4compatibility.ttf) format("truetype");
            unicode-range: u+f041, u+f047, u+f065-f066, u+f07d-f07e, u+f080, u+f08b, u+f08e, u+f090, u+f09a, u+f0ac, u+f0ae, u+f0b2, u+f0d0, u+f0d6, u+f0e4, u+f0ec, u+f10a-f10b, u+f123, u+f13e, u+f148-f149, u+f14c, u+f156, u+f15e, u+f160-f161, u+f163, u+f175-f178, u+f195, u+f1f8, u+f219, u+f250, u+f252, u+f27a
        }

        */:root {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-black: #000;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-gray-100: #f8f9fa;
            --bs-gray-200: #e9ecef;
            --bs-gray-300: #dee2e6;
            --bs-gray-400: #ced4da;
            --bs-gray-500: #adb5bd;
            --bs-gray-600: #6c757d;
            --bs-gray-700: #495057;
            --bs-gray-800: #343a40;
            --bs-gray-900: #212529;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-primary-rgb: 13, 110, 253;
            --bs-secondary-rgb: 108, 117, 125;
            --bs-success-rgb: 25, 135, 84;
            --bs-info-rgb: 13, 202, 240;
            --bs-warning-rgb: 255, 193, 7;
            --bs-danger-rgb: 220, 53, 69;
            --bs-light-rgb: 248, 249, 250;
            --bs-dark-rgb: 33, 37, 41;
            --bs-white-rgb: 255, 255, 255;
            --bs-black-rgb: 0, 0, 0;
            --bs-body-color-rgb: 33, 37, 41;
            --bs-body-bg-rgb: 255, 255, 255;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --bs-body-font-family: var(--bs-font-sans-serif);
            --bs-body-font-size: 1rem;
            --bs-body-font-weight: 400;
            --bs-body-line-height: 1.5;
            --bs-body-color: #212529;
            --bs-body-bg: #fff;
            --bs-border-width: 1px;
            --bs-border-style: solid;
            --bs-border-color: #dee2e6;
            --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
            --bs-border-radius: 0.375rem;
            --bs-border-radius-sm: 0.25rem;
            --bs-border-radius-lg: 0.5rem;
            --bs-border-radius-xl: 1rem;
            --bs-border-radius-2xl: 2rem;
            --bs-border-radius-pill: 50rem;
            --bs-heading-color: ;
            --bs-link-color: #0d6efd;
            --bs-link-hover-color: #0a58ca;
            --bs-code-color: #d63384;
            --bs-highlight-bg: #fff3cd
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        @media (prefers-reduced-motion:no-preference) {
            :root {
                scroll-behavior: smooth
            }
        }

        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent
        }

        hr {
            margin: 1rem 0;
            color: inherit;
            border: 0;
            border-top: 1px solid;
            opacity: .25
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
            color: var(--bs-heading-color)
        }

        .h1,
        h1 {
            font-size: calc(1.375rem + 1.5vw)
        }

        @media (min-width:1200px) {

            .h1,
            h1 {
                font-size: 2.5rem
            }
        }

        .h2,
        h2 {
            font-size: calc(1.325rem + .9vw)
        }

        @media (min-width:1200px) {

            .h2,
            h2 {
                font-size: 2rem
            }
        }

        .h3,
        h3 {
            font-size: calc(1.3rem + .6vw)
        }

        @media (min-width:1200px) {

            .h3,
            h3 {
                font-size: 1.75rem
            }
        }

        .h4,
        h4 {
            font-size: calc(1.275rem + .3vw)
        }

        @media (min-width:1200px) {

            .h4,
            h4 {
                font-size: 1.5rem
            }
        }

        .h5,
        h5 {
            font-size: 1.25rem
        }

        .h6,
        h6 {
            font-size: 1rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        abbr[title] {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit
        }

        ol,
        ul {
            padding-left: 2rem
        }

        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ol ol,
        ol ul,
        ul ol,
        ul ul {
            margin-bottom: 0
        }

        dt {
            font-weight: 700
        }

        dd {
            margin-bottom: .5rem;
            margin-left: 0
        }

        blockquote {
            margin: 0 0 1rem
        }

        b,
        strong {
            font-weight: bolder
        }

        .small,
        small {
            font-size: .875em
        }

        .mark,
        mark {
            padding: .1875em;
            background-color: var(--bs-highlight-bg)
        }

        sub,
        sup {
            position: relative;
            font-size: .75em;
            line-height: 0;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        a {
            color: var(--bs-link-color);
            text-decoration: underline
        }

        a:hover {
            color: var(--bs-link-hover-color)
        }

        a:not([href]):not([class]),
        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none
        }

        code,
        kbd,
        pre,
        samp {
            font-family: var(--bs-font-monospace);
            font-size: 1em
        }

        pre {
            display: block;
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            font-size: .875em
        }

        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal
        }

        code {
            font-size: .875em;
            color: var(--bs-code-color);
            word-wrap: break-word
        }

        a>code {
            color: inherit
        }

        kbd {
            padding: .1875rem .375rem;
            font-size: .875em;
            color: var(--bs-body-bg);
            background-color: var(--bs-body-color);
            border-radius: .25rem
        }

        kbd kbd {
            padding: 0;
            font-size: 1em
        }

        figure {
            margin: 0 0 1rem
        }

        img,
        svg {
            vertical-align: middle
        }

        table {
            caption-side: bottom;
            border-collapse: collapse
        }

        caption {
            padding-top: .5rem;
            padding-bottom: .5rem;
            color: rgba(var(--bs-body-color-rgb), .75);
            text-align: left
        }

        th {
            text-align: inherit;
            text-align: -webkit-match-parent
        }

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: inherit;
            border-style: solid;
            border-width: 0
        }

        label {
            display: inline-block
        }

        button {
            border-radius: 0
        }

        button:focus:not(:focus-visible) {
            outline: 0
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button,
        select {
            text-transform: none
        }

        [role=button] {
            cursor: pointer
        }

        select {
            word-wrap: normal
        }

        select:disabled {
            opacity: 1
        }

        [list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
            display: none !important
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button
        }

        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        textarea {
            resize: vertical
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0
        }

        legend {
            float: left;
            width: 100%;
            padding: 0;
            margin-bottom: .5rem;
            font-size: calc(1.275rem + .3vw);
            line-height: inherit
        }

        @media (min-width:1200px) {
            legend {
                font-size: 1.5rem
            }
        }

        legend+* {
            clear: left
        }

        ::-webkit-datetime-edit-day-field,
        ::-webkit-datetime-edit-fields-wrapper,
        ::-webkit-datetime-edit-hour-field,
        ::-webkit-datetime-edit-minute,
        ::-webkit-datetime-edit-month-field,
        ::-webkit-datetime-edit-text,
        ::-webkit-datetime-edit-year-field {
            padding: 0
        }

        ::-webkit-inner-spin-button {
            height: auto
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: textfield
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-color-swatch-wrapper {
            padding: 0
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }

        ::file-selector-button {
            font: inherit;
            -webkit-appearance: button
        }

        output {
            display: inline-block
        }

        iframe {
            border: 0
        }

        summary {
            display: list-item;
            cursor: pointer
        }

        progress {
            vertical-align: baseline
        }

        [hidden] {
            display: none !important
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 300
        }

        .display-1 {
            font-size: calc(1.625rem + 4.5vw);
            font-weight: 300;
            line-height: 1.2
        }

        @media (min-width:1200px) {
            .display-1 {
                font-size: 5rem
            }
        }

        .display-2 {
            font-size: calc(1.575rem + 3.9vw);
            font-weight: 300;
            line-height: 1.2
        }

        @media (min-width:1200px) {
            .display-2 {
                font-size: 4.5rem
            }
        }

        .display-3 {
            font-size: calc(1.525rem + 3.3vw);
            font-weight: 300;
            line-height: 1.2
        }

        @media (min-width:1200px) {
            .display-3 {
                font-size: 4rem
            }
        }

        .display-4 {
            font-size: calc(1.475rem + 2.7vw);
            font-weight: 300;
            line-height: 1.2
        }

        @media (min-width:1200px) {
            .display-4 {
                font-size: 3.5rem
            }
        }

        .display-5 {
            font-size: calc(1.425rem + 2.1vw);
            font-weight: 300;
            line-height: 1.2
        }

        @media (min-width:1200px) {
            .display-5 {
                font-size: 3rem
            }
        }

        .display-6 {
            font-size: calc(1.375rem + 1.5vw);
            font-weight: 300;
            line-height: 1.2
        }

        @media (min-width:1200px) {
            .display-6 {
                font-size: 2.5rem
            }
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .list-inline {
            padding-left: 0;
            list-style: none
        }

        .list-inline-item {
            display: inline-block
        }

        .list-inline-item:not(:last-child) {
            margin-right: .5rem
        }

        .initialism {
            font-size: .875em;
            text-transform: uppercase
        }

        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem
        }

        .blockquote>:last-child {
            margin-bottom: 0
        }

        .blockquote-footer {
            margin-top: -1rem;
            margin-bottom: 1rem;
            font-size: .875em;
            color: #6c757d
        }

        .blockquote-footer::before {
            content: "— "
        }

        .img-fluid {
            max-width: 100%;
            height: auto
        }

        .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid var(--bs-border-color);
            border-radius: .375rem;
            max-width: 100%;
            height: auto
        }

        .figure {
            display: inline-block
        }

        .figure-img {
            margin-bottom: .5rem;
            line-height: 1
        }

        .figure-caption {
            font-size: .875em;
            color: #6c757d
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width:576px) {

            .container,
            .container-sm {
                max-width: 540px
            }
        }

        @media (min-width:768px) {

            .container,
            .container-md,
            .container-sm {
                max-width: 720px
            }
        }

        @media (min-width:992px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm {
                max-width: 960px
            }
        }

        @media (min-width:1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1140px
            }
        }

        @media (min-width:1400px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl,
            .container-xxl {
                max-width: 1320px
            }
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x))
        }

        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-top: var(--bs-gutter-y)
        }

        .col {
            flex: 1 0 0%
        }

        .row-cols-auto>* {
            flex: 0 0 auto;
            width: auto
        }

        .row-cols-1>* {
            flex: 0 0 auto;
            width: 100%
        }

        .row-cols-2>* {
            flex: 0 0 auto;
            width: 50%
        }

        .row-cols-3>* {
            flex: 0 0 auto;
            width: 33.3333333333%
        }

        .row-cols-4>* {
            flex: 0 0 auto;
            width: 25%
        }

        .row-cols-5>* {
            flex: 0 0 auto;
            width: 20%
        }

        .row-cols-6>* {
            flex: 0 0 auto;
            width: 16.6666666667%
        }

        .col-auto {
            flex: 0 0 auto;
            width: auto
        }

        .col-1 {
            flex: 0 0 auto;
            width: 8.33333333%
        }

        .col-2 {
            flex: 0 0 auto;
            width: 16.66666667%
        }

        .col-3 {
            flex: 0 0 auto;
            width: 25%
        }

        .col-4 {
            flex: 0 0 auto;
            width: 33.33333333%
        }

        .col-5 {
            flex: 0 0 auto;
            width: 41.66666667%
        }

        .col-6 {
            flex: 0 0 auto;
            width: 50%
        }

        .col-7 {
            flex: 0 0 auto;
            width: 58.33333333%
        }

        .col-8 {
            flex: 0 0 auto;
            width: 66.66666667%
        }

        .col-9 {
            flex: 0 0 auto;
            width: 75%
        }

        .col-10 {
            flex: 0 0 auto;
            width: 83.33333333%
        }

        .col-11 {
            flex: 0 0 auto;
            width: 91.66666667%
        }

        .col-12 {
            flex: 0 0 auto;
            width: 100%
        }

        .offset-1 {
            margin-left: 8.33333333%
        }

        .offset-2 {
            margin-left: 16.66666667%
        }

        .offset-3 {
            margin-left: 25%
        }

        .offset-4 {
            margin-left: 33.33333333%
        }

        .offset-5 {
            margin-left: 41.66666667%
        }

        .offset-6 {
            margin-left: 50%
        }

        .offset-7 {
            margin-left: 58.33333333%
        }

        .offset-8 {
            margin-left: 66.66666667%
        }

        .offset-9 {
            margin-left: 75%
        }

        .offset-10 {
            margin-left: 83.33333333%
        }

        .offset-11 {
            margin-left: 91.66666667%
        }

        .g-0,
        .gx-0 {
            --bs-gutter-x: 0
        }

        .g-0,
        .gy-0 {
            --bs-gutter-y: 0
        }

        .g-1,
        .gx-1 {
            --bs-gutter-x: 0.25rem
        }

        .g-1,
        .gy-1 {
            --bs-gutter-y: 0.25rem
        }

        .g-2,
        .gx-2 {
            --bs-gutter-x: 0.5rem
        }

        .g-2,
        .gy-2 {
            --bs-gutter-y: 0.5rem
        }

        .g-3,
        .gx-3 {
            --bs-gutter-x: 1rem
        }

        .g-3,
        .gy-3 {
            --bs-gutter-y: 1rem
        }

        .g-4,
        .gx-4 {
            --bs-gutter-x: 1.5rem
        }

        .g-4,
        .gy-4 {
            --bs-gutter-y: 1.5rem
        }

        .g-5,
        .gx-5 {
            --bs-gutter-x: 3rem
        }

        .g-5,
        .gy-5 {
            --bs-gutter-y: 3rem
        }

        @media (min-width:576px) {
            .col-sm {
                flex: 1 0 0%
            }

            .row-cols-sm-auto>* {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-sm-1>* {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-sm-2>* {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-sm-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-sm-4>* {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-sm-5>* {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-sm-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%
            }

            .col-sm-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-sm-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-sm-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-sm-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-sm-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-sm-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-sm-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-sm-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-sm-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-sm-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-sm-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-sm-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-sm-0 {
                margin-left: 0
            }

            .offset-sm-1 {
                margin-left: 8.33333333%
            }

            .offset-sm-2 {
                margin-left: 16.66666667%
            }

            .offset-sm-3 {
                margin-left: 25%
            }

            .offset-sm-4 {
                margin-left: 33.33333333%
            }

            .offset-sm-5 {
                margin-left: 41.66666667%
            }

            .offset-sm-6 {
                margin-left: 50%
            }

            .offset-sm-7 {
                margin-left: 58.33333333%
            }

            .offset-sm-8 {
                margin-left: 66.66666667%
            }

            .offset-sm-9 {
                margin-left: 75%
            }

            .offset-sm-10 {
                margin-left: 83.33333333%
            }

            .offset-sm-11 {
                margin-left: 91.66666667%
            }

            .g-sm-0,
            .gx-sm-0 {
                --bs-gutter-x: 0
            }

            .g-sm-0,
            .gy-sm-0 {
                --bs-gutter-y: 0
            }

            .g-sm-1,
            .gx-sm-1 {
                --bs-gutter-x: 0.25rem
            }

            .g-sm-1,
            .gy-sm-1 {
                --bs-gutter-y: 0.25rem
            }

            .g-sm-2,
            .gx-sm-2 {
                --bs-gutter-x: 0.5rem
            }

            .g-sm-2,
            .gy-sm-2 {
                --bs-gutter-y: 0.5rem
            }

            .g-sm-3,
            .gx-sm-3 {
                --bs-gutter-x: 1rem
            }

            .g-sm-3,
            .gy-sm-3 {
                --bs-gutter-y: 1rem
            }

            .g-sm-4,
            .gx-sm-4 {
                --bs-gutter-x: 1.5rem
            }

            .g-sm-4,
            .gy-sm-4 {
                --bs-gutter-y: 1.5rem
            }

            .g-sm-5,
            .gx-sm-5 {
                --bs-gutter-x: 3rem
            }

            .g-sm-5,
            .gy-sm-5 {
                --bs-gutter-y: 3rem
            }
        }

        @media (min-width:768px) {
            .col-md {
                flex: 1 0 0%
            }

            .row-cols-md-auto>* {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-md-1>* {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-md-2>* {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-md-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-md-4>* {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-md-5>* {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-md-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%
            }

            .col-md-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-md-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-md-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-md-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-md-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-md-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-md-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-md-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-md-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-md-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-md-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-md-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-md-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-md-0 {
                margin-left: 0
            }

            .offset-md-1 {
                margin-left: 8.33333333%
            }

            .offset-md-2 {
                margin-left: 16.66666667%
            }

            .offset-md-3 {
                margin-left: 25%
            }

            .offset-md-4 {
                margin-left: 33.33333333%
            }

            .offset-md-5 {
                margin-left: 41.66666667%
            }

            .offset-md-6 {
                margin-left: 50%
            }

            .offset-md-7 {
                margin-left: 58.33333333%
            }

            .offset-md-8 {
                margin-left: 66.66666667%
            }

            .offset-md-9 {
                margin-left: 75%
            }

            .offset-md-10 {
                margin-left: 83.33333333%
            }

            .offset-md-11 {
                margin-left: 91.66666667%
            }

            .g-md-0,
            .gx-md-0 {
                --bs-gutter-x: 0
            }

            .g-md-0,
            .gy-md-0 {
                --bs-gutter-y: 0
            }

            .g-md-1,
            .gx-md-1 {
                --bs-gutter-x: 0.25rem
            }

            .g-md-1,
            .gy-md-1 {
                --bs-gutter-y: 0.25rem
            }

            .g-md-2,
            .gx-md-2 {
                --bs-gutter-x: 0.5rem
            }

            .g-md-2,
            .gy-md-2 {
                --bs-gutter-y: 0.5rem
            }

            .g-md-3,
            .gx-md-3 {
                --bs-gutter-x: 1rem
            }

            .g-md-3,
            .gy-md-3 {
                --bs-gutter-y: 1rem
            }

            .g-md-4,
            .gx-md-4 {
                --bs-gutter-x: 1.5rem
            }

            .g-md-4,
            .gy-md-4 {
                --bs-gutter-y: 1.5rem
            }

            .g-md-5,
            .gx-md-5 {
                --bs-gutter-x: 3rem
            }

            .g-md-5,
            .gy-md-5 {
                --bs-gutter-y: 3rem
            }
        }

        @media (min-width:992px) {
            .col-lg {
                flex: 1 0 0%
            }

            .row-cols-lg-auto>* {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-lg-1>* {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-lg-2>* {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-lg-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-lg-4>* {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-lg-5>* {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-lg-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%
            }

            .col-lg-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-lg-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-lg-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-lg-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-lg-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-lg-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-lg-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-lg-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-lg-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-lg-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-lg-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-lg-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-lg-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-lg-0 {
                margin-left: 0
            }

            .offset-lg-1 {
                margin-left: 8.33333333%
            }

            .offset-lg-2 {
                margin-left: 16.66666667%
            }

            .offset-lg-3 {
                margin-left: 25%
            }

            .offset-lg-4 {
                margin-left: 33.33333333%
            }

            .offset-lg-5 {
                margin-left: 41.66666667%
            }

            .offset-lg-6 {
                margin-left: 50%
            }

            .offset-lg-7 {
                margin-left: 58.33333333%
            }

            .offset-lg-8 {
                margin-left: 66.66666667%
            }

            .offset-lg-9 {
                margin-left: 75%
            }

            .offset-lg-10 {
                margin-left: 83.33333333%
            }

            .offset-lg-11 {
                margin-left: 91.66666667%
            }

            .g-lg-0,
            .gx-lg-0 {
                --bs-gutter-x: 0
            }

            .g-lg-0,
            .gy-lg-0 {
                --bs-gutter-y: 0
            }

            .g-lg-1,
            .gx-lg-1 {
                --bs-gutter-x: 0.25rem
            }

            .g-lg-1,
            .gy-lg-1 {
                --bs-gutter-y: 0.25rem
            }

            .g-lg-2,
            .gx-lg-2 {
                --bs-gutter-x: 0.5rem
            }

            .g-lg-2,
            .gy-lg-2 {
                --bs-gutter-y: 0.5rem
            }

            .g-lg-3,
            .gx-lg-3 {
                --bs-gutter-x: 1rem
            }

            .g-lg-3,
            .gy-lg-3 {
                --bs-gutter-y: 1rem
            }

            .g-lg-4,
            .gx-lg-4 {
                --bs-gutter-x: 1.5rem
            }

            .g-lg-4,
            .gy-lg-4 {
                --bs-gutter-y: 1.5rem
            }

            .g-lg-5,
            .gx-lg-5 {
                --bs-gutter-x: 3rem
            }

            .g-lg-5,
            .gy-lg-5 {
                --bs-gutter-y: 3rem
            }
        }

        @media (min-width:1200px) {
            .col-xl {
                flex: 1 0 0%
            }

            .row-cols-xl-auto>* {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-xl-1>* {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-xl-2>* {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-xl-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-xl-4>* {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-xl-5>* {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-xl-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%
            }

            .col-xl-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-xl-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-xl-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-xl-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-xl-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-xl-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-xl-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-xl-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-xl-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-xl-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-xl-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-xl-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-xl-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-xl-0 {
                margin-left: 0
            }

            .offset-xl-1 {
                margin-left: 8.33333333%
            }

            .offset-xl-2 {
                margin-left: 16.66666667%
            }

            .offset-xl-3 {
                margin-left: 25%
            }

            .offset-xl-4 {
                margin-left: 33.33333333%
            }

            .offset-xl-5 {
                margin-left: 41.66666667%
            }

            .offset-xl-6 {
                margin-left: 50%
            }

            .offset-xl-7 {
                margin-left: 58.33333333%
            }

            .offset-xl-8 {
                margin-left: 66.66666667%
            }

            .offset-xl-9 {
                margin-left: 75%
            }

            .offset-xl-10 {
                margin-left: 83.33333333%
            }

            .offset-xl-11 {
                margin-left: 91.66666667%
            }

            .g-xl-0,
            .gx-xl-0 {
                --bs-gutter-x: 0
            }

            .g-xl-0,
            .gy-xl-0 {
                --bs-gutter-y: 0
            }

            .g-xl-1,
            .gx-xl-1 {
                --bs-gutter-x: 0.25rem
            }

            .g-xl-1,
            .gy-xl-1 {
                --bs-gutter-y: 0.25rem
            }

            .g-xl-2,
            .gx-xl-2 {
                --bs-gutter-x: 0.5rem
            }

            .g-xl-2,
            .gy-xl-2 {
                --bs-gutter-y: 0.5rem
            }

            .g-xl-3,
            .gx-xl-3 {
                --bs-gutter-x: 1rem
            }

            .g-xl-3,
            .gy-xl-3 {
                --bs-gutter-y: 1rem
            }

            .g-xl-4,
            .gx-xl-4 {
                --bs-gutter-x: 1.5rem
            }

            .g-xl-4,
            .gy-xl-4 {
                --bs-gutter-y: 1.5rem
            }

            .g-xl-5,
            .gx-xl-5 {
                --bs-gutter-x: 3rem
            }

            .g-xl-5,
            .gy-xl-5 {
                --bs-gutter-y: 3rem
            }
        }

        @media (min-width:1400px) {
            .col-xxl {
                flex: 1 0 0%
            }

            .row-cols-xxl-auto>* {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-xxl-1>* {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-xxl-2>* {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-xxl-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-xxl-4>* {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-xxl-5>* {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-xxl-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%
            }

            .col-xxl-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-xxl-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-xxl-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-xxl-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-xxl-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-xxl-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-xxl-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-xxl-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-xxl-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-xxl-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-xxl-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-xxl-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-xxl-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-xxl-0 {
                margin-left: 0
            }

            .offset-xxl-1 {
                margin-left: 8.33333333%
            }

            .offset-xxl-2 {
                margin-left: 16.66666667%
            }

            .offset-xxl-3 {
                margin-left: 25%
            }

            .offset-xxl-4 {
                margin-left: 33.33333333%
            }

            .offset-xxl-5 {
                margin-left: 41.66666667%
            }

            .offset-xxl-6 {
                margin-left: 50%
            }

            .offset-xxl-7 {
                margin-left: 58.33333333%
            }

            .offset-xxl-8 {
                margin-left: 66.66666667%
            }

            .offset-xxl-9 {
                margin-left: 75%
            }

            .offset-xxl-10 {
                margin-left: 83.33333333%
            }

            .offset-xxl-11 {
                margin-left: 91.66666667%
            }

            .g-xxl-0,
            .gx-xxl-0 {
                --bs-gutter-x: 0
            }

            .g-xxl-0,
            .gy-xxl-0 {
                --bs-gutter-y: 0
            }

            .g-xxl-1,
            .gx-xxl-1 {
                --bs-gutter-x: 0.25rem
            }

            .g-xxl-1,
            .gy-xxl-1 {
                --bs-gutter-y: 0.25rem
            }

            .g-xxl-2,
            .gx-xxl-2 {
                --bs-gutter-x: 0.5rem
            }

            .g-xxl-2,
            .gy-xxl-2 {
                --bs-gutter-y: 0.5rem
            }

            .g-xxl-3,
            .gx-xxl-3 {
                --bs-gutter-x: 1rem
            }

            .g-xxl-3,
            .gy-xxl-3 {
                --bs-gutter-y: 1rem
            }

            .g-xxl-4,
            .gx-xxl-4 {
                --bs-gutter-x: 1.5rem
            }

            .g-xxl-4,
            .gy-xxl-4 {
                --bs-gutter-y: 1.5rem
            }

            .g-xxl-5,
            .gx-xxl-5 {
                --bs-gutter-x: 3rem
            }

            .g-xxl-5,
            .gy-xxl-5 {
                --bs-gutter-y: 3rem
            }
        }

        .table {
            --bs-table-color: var(--bs-body-color);
            --bs-table-bg: transparent;
            --bs-table-border-color: var(--bs-border-color);
            --bs-table-accent-bg: transparent;
            --bs-table-striped-color: var(--bs-body-color);
            --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
            --bs-table-active-color: var(--bs-body-color);
            --bs-table-active-bg: rgba(0, 0, 0, 0.1);
            --bs-table-hover-color: var(--bs-body-color);
            --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
            width: 100%;
            margin-bottom: 1rem;
            color: var(--bs-table-color);
            vertical-align: top;
            border-color: var(--bs-table-border-color)
        }

        .table>:not(caption)>*>* {
            padding: .5rem .5rem;
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg)
        }

        .table>tbody {
            vertical-align: inherit
        }

        .table>thead {
            vertical-align: bottom
        }

        .table-group-divider {
            border-top: 2px solid currentcolor
        }

        .caption-top {
            caption-side: top
        }

        .table-sm>:not(caption)>*>* {
            padding: .25rem .25rem
        }

        .table-bordered>:not(caption)>* {
            border-width: 1px 0
        }

        .table-bordered>:not(caption)>*>* {
            border-width: 0 1px
        }

        .table-borderless>:not(caption)>*>* {
            border-bottom-width: 0
        }

        .table-borderless>:not(:first-child) {
            border-top-width: 0
        }

        .table-striped>tbody>tr:nth-of-type(odd)>* {
            --bs-table-accent-bg: var(--bs-table-striped-bg);
            color: var(--bs-table-striped-color)
        }

        .table-striped-columns>:not(caption)>tr>:nth-child(2n) {
            --bs-table-accent-bg: var(--bs-table-striped-bg);
            color: var(--bs-table-striped-color)
        }

        .table-active {
            --bs-table-accent-bg: var(--bs-table-active-bg);
            color: var(--bs-table-active-color)
        }

        .table-hover>tbody>tr:hover>* {
            --bs-table-accent-bg: var(--bs-table-hover-bg);
            color: var(--bs-table-hover-color)
        }

        .table-primary {
            --bs-table-color: #000;
            --bs-table-bg: #cfe2ff;
            --bs-table-border-color: #bacbe6;
            --bs-table-striped-bg: #c5d7f2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #bacbe6;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bfd1ec;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color)
        }

        .table-secondary {
            --bs-table-color: #000;
            --bs-table-bg: #e2e3e5;
            --bs-table-border-color: #cbccce;
            --bs-table-striped-bg: #d7d8da;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #cbccce;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #d1d2d4;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color)
        }

        .table-success {
            --bs-table-color: #000;
            --bs-table-bg: #d1e7dd;
            --bs-table-border-color: #bcd0c7;
            --bs-table-striped-bg: #c7dbd2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #bcd0c7;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #c1d6cc;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color)
        }

        .table-info {
            --bs-table-color: #000;
            --bs-table-bg: #cff4fc;
            --bs-table-border-color: #badce3;
            --bs-table-striped-bg: #c5e8ef;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #badce3;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bfe2e9;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color)
        }

        .table-warning {
            --bs-table-color: #000;
            --bs-table-bg: #fff3cd;
            --bs-table-border-color: #e6dbb9;
            --bs-table-striped-bg: #f2e7c3;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #e6dbb9;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #ece1be;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color)
        }

        .table-danger {
            --bs-table-color: #000;
            --bs-table-bg: #f8d7da;
            --bs-table-border-color: #dfc2c4;
            --bs-table-striped-bg: #eccccf;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #dfc2c4;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e5c7ca;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color)
        }

        .table-light {
            --bs-table-color: #000;
            --bs-table-bg: #f8f9fa;
            --bs-table-border-color: #dfe0e1;
            --bs-table-striped-bg: #ecedee;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #dfe0e1;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e5e6e7;
            --bs-table-hover-color: #000;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color)
        }

        .table-dark {
            --bs-table-color: #fff;
            --bs-table-bg: #212529;
            --bs-table-border-color: #373b3e;
            --bs-table-striped-bg: #2c3034;
            --bs-table-striped-color: #fff;
            --bs-table-active-bg: #373b3e;
            --bs-table-active-color: #fff;
            --bs-table-hover-bg: #323539;
            --bs-table-hover-color: #fff;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color)
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }

        @media (max-width:575.98px) {
            .table-responsive-sm {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }
        }

        @media (max-width:767.98px) {
            .table-responsive-md {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }
        }

        @media (max-width:991.98px) {
            .table-responsive-lg {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }
        }

        @media (max-width:1199.98px) {
            .table-responsive-xl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }
        }

        @media (max-width:1399.98px) {
            .table-responsive-xxl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }
        }

        .form-label {
            margin-bottom: .5rem
        }

        .col-form-label {
            padding-top: calc(.375rem + 1px);
            padding-bottom: calc(.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5
        }

        .col-form-label-lg {
            padding-top: calc(.5rem + 1px);
            padding-bottom: calc(.5rem + 1px);
            font-size: 1.25rem
        }

        .col-form-label-sm {
            padding-top: calc(.25rem + 1px);
            padding-bottom: calc(.25rem + 1px);
            font-size: .875rem
        }

        .form-text {
            margin-top: .25rem;
            font-size: .875em;
            color: rgba(var(--bs-body-color-rgb), .75)
        }

        .form-control {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: .375rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .form-control {
                transition: none
            }
        }

        .form-control[type=file] {
            overflow: hidden
        }

        .form-control[type=file]:not(:disabled):not([readonly]) {
            cursor: pointer
        }

        .form-control:focus {
            color: #212529;
            background-color: #fff;
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25)
        }

        .form-control::-webkit-date-and-time-value {
            height: 1.5em
        }

        .form-control::-moz-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #e9ecef;
            opacity: 1
        }

        .form-control::-webkit-file-upload-button {
            padding: .375rem .75rem;
            margin: -.375rem -.75rem;
            -webkit-margin-end: .75rem;
            margin-inline-end: .75rem;
            color: #212529;
            background-color: #e9ecef;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .form-control::file-selector-button {
            padding: .375rem .75rem;
            margin: -.375rem -.75rem;
            -webkit-margin-end: .75rem;
            margin-inline-end: .75rem;
            color: #212529;
            background-color: #e9ecef;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .form-control::-webkit-file-upload-button {
                -webkit-transition: none;
                transition: none
            }

            .form-control::file-selector-button {
                transition: none
            }
        }

        .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
            background-color: #dde0e3
        }

        .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
            background-color: #dde0e3
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: .375rem 0;
            margin-bottom: 0;
            line-height: 1.5;
            color: #212529;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0
        }

        .form-control-plaintext.form-control-lg,
        .form-control-plaintext.form-control-sm {
            padding-right: 0;
            padding-left: 0
        }

        .form-control-sm {
            min-height: calc(1.5em + .5rem + 2px);
            padding: .25rem .5rem;
            font-size: .875rem;
            border-radius: .25rem
        }

        .form-control-sm::-webkit-file-upload-button {
            padding: .25rem .5rem;
            margin: -.25rem -.5rem;
            -webkit-margin-end: .5rem;
            margin-inline-end: .5rem
        }

        .form-control-sm::file-selector-button {
            padding: .25rem .5rem;
            margin: -.25rem -.5rem;
            -webkit-margin-end: .5rem;
            margin-inline-end: .5rem
        }

        .form-control-lg {
            min-height: calc(1.5em + 1rem + 2px);
            padding: .5rem 1rem;
            font-size: 1.25rem;
            border-radius: .5rem
        }

        .form-control-lg::-webkit-file-upload-button {
            padding: .5rem 1rem;
            margin: -.5rem -1rem;
            -webkit-margin-end: 1rem;
            margin-inline-end: 1rem
        }

        .form-control-lg::file-selector-button {
            padding: .5rem 1rem;
            margin: -.5rem -1rem;
            -webkit-margin-end: 1rem;
            margin-inline-end: 1rem
        }

        textarea.form-control {
            min-height: calc(1.5em + .75rem + 2px)
        }

        textarea.form-control-sm {
            min-height: calc(1.5em + .5rem + 2px)
        }

        textarea.form-control-lg {
            min-height: calc(1.5em + 1rem + 2px)
        }

        .form-control-color {
            width: 3rem;
            height: auto;
            padding: .375rem
        }

        .form-control-color:not(:disabled):not([readonly]) {
            cursor: pointer
        }

        .form-control-color::-moz-color-swatch {
            height: 1.5em;
            border-radius: .375rem
        }

        .form-control-color::-webkit-color-swatch {
            height: 1.5em;
            border-radius: .375rem
        }

        .form-select {
            display: block;
            width: 100%;
            padding: .375rem 2.25rem .375rem .75rem;
            -moz-padding-start: calc(0.75rem - 3px);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right .75rem center;
            background-size: 16px 12px;
            border: 1px solid #ced4da;
            border-radius: .375rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        @media (prefers-reduced-motion:reduce) {
            .form-select {
                transition: none
            }
        }

        .form-select:focus {
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25)
        }

        .form-select[multiple],
        .form-select[size]:not([size="1"]) {
            padding-right: .75rem;
            background-image: none
        }

        .form-select:disabled {
            background-color: #e9ecef
        }

        .form-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #212529
        }

        .form-select-sm {
            padding-top: .25rem;
            padding-bottom: .25rem;
            padding-left: .5rem;
            font-size: .875rem;
            border-radius: .25rem
        }

        .form-select-lg {
            padding-top: .5rem;
            padding-bottom: .5rem;
            padding-left: 1rem;
            font-size: 1.25rem;
            border-radius: .5rem
        }

        .form-check {
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5em;
            margin-bottom: .125rem
        }

        .form-check .form-check-input {
            float: left;
            margin-left: -1.5em
        }

        .form-check-reverse {
            padding-right: 1.5em;
            padding-left: 0;
            text-align: right
        }

        .form-check-reverse .form-check-input {
            float: right;
            margin-right: -1.5em;
            margin-left: 0
        }

        .form-check-input {
            width: 1em;
            height: 1em;
            margin-top: .25em;
            vertical-align: top;
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            border: 1px solid rgba(0, 0, 0, .25);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            print-color-adjust: exact
        }

        .form-check-input[type=checkbox] {
            border-radius: .25em
        }

        .form-check-input[type=radio] {
            border-radius: 50%
        }

        .form-check-input:active {
            filter: brightness(90%)
        }

        .form-check-input:focus {
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25)
        }

        .form-check-input:checked {
            background-color: #0d6efd;
            border-color: #0d6efd
        }

        .form-check-input:checked[type=checkbox] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e")
        }

        .form-check-input:checked[type=radio] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e")
        }

        .form-check-input[type=checkbox]:indeterminate {
            background-color: #0d6efd;
            border-color: #0d6efd;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e")
        }

        .form-check-input:disabled {
            pointer-events: none;
            filter: none;
            opacity: .5
        }

        .form-check-input:disabled~.form-check-label,
        .form-check-input[disabled]~.form-check-label {
            cursor: default;
            opacity: .5
        }

        .form-switch {
            padding-left: 2.5em
        }

        .form-switch .form-check-input {
            width: 2em;
            margin-left: -2.5em;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
            background-position: left center;
            border-radius: 2em;
            transition: background-position .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .form-switch .form-check-input {
                transition: none
            }
        }

        .form-switch .form-check-input:focus {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e")
        }

        .form-switch .form-check-input:checked {
            background-position: right center;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
        }

        .form-switch.form-check-reverse {
            padding-right: 2.5em;
            padding-left: 0
        }

        .form-switch.form-check-reverse .form-check-input {
            margin-right: -2.5em;
            margin-left: 0
        }

        .form-check-inline {
            display: inline-block;
            margin-right: 1rem
        }

        .btn-check {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none
        }

        .btn-check:disabled+.btn,
        .btn-check[disabled]+.btn {
            pointer-events: none;
            filter: none;
            opacity: .65
        }

        .form-range {
            width: 100%;
            height: 1.5rem;
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .form-range:focus {
            outline: 0
        }

        .form-range:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .25rem rgba(13, 110, 253, .25)
        }

        .form-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .25rem rgba(13, 110, 253, .25)
        }

        .form-range::-moz-focus-outer {
            border: 0
        }

        .form-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -.25rem;
            background-color: #0d6efd;
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -webkit-appearance: none;
            appearance: none
        }

        @media (prefers-reduced-motion:reduce) {
            .form-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none
            }
        }

        .form-range::-webkit-slider-thumb:active {
            background-color: #b6d4fe
        }

        .form-range::-webkit-slider-runnable-track {
            width: 100%;
            height: .5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem
        }

        .form-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #0d6efd;
            border: 0;
            border-radius: 1rem;
            -moz-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -moz-appearance: none;
            appearance: none
        }

        @media (prefers-reduced-motion:reduce) {
            .form-range::-moz-range-thumb {
                -moz-transition: none;
                transition: none
            }
        }

        .form-range::-moz-range-thumb:active {
            background-color: #b6d4fe
        }

        .form-range::-moz-range-track {
            width: 100%;
            height: .5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem
        }

        .form-range:disabled {
            pointer-events: none
        }

        .form-range:disabled::-webkit-slider-thumb {
            background-color: #adb5bd
        }

        .form-range:disabled::-moz-range-thumb {
            background-color: #adb5bd
        }

        .form-floating {
            position: relative
        }

        .form-floating>.form-control,
        .form-floating>.form-control-plaintext,
        .form-floating>.form-select {
            height: calc(3.5rem + 2px);
            line-height: 1.25
        }

        .form-floating>label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 1rem .75rem;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: opacity .1s ease-in-out, transform .1s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .form-floating>label {
                transition: none
            }
        }

        .form-floating>.form-control,
        .form-floating>.form-control-plaintext {
            padding: 1rem .75rem
        }

        .form-floating>.form-control-plaintext::-moz-placeholder,
        .form-floating>.form-control::-moz-placeholder {
            color: transparent
        }

        .form-floating>.form-control-plaintext::placeholder,
        .form-floating>.form-control::placeholder {
            color: transparent
        }

        .form-floating>.form-control-plaintext:not(:-moz-placeholder-shown),
        .form-floating>.form-control:not(:-moz-placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: .625rem
        }

        .form-floating>.form-control-plaintext:focus,
        .form-floating>.form-control-plaintext:not(:placeholder-shown),
        .form-floating>.form-control:focus,
        .form-floating>.form-control:not(:placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: .625rem
        }

        .form-floating>.form-control-plaintext:-webkit-autofill,
        .form-floating>.form-control:-webkit-autofill {
            padding-top: 1.625rem;
            padding-bottom: .625rem
        }

        .form-floating>.form-select {
            padding-top: 1.625rem;
            padding-bottom: .625rem
        }

        .form-floating>.form-control:not(:-moz-placeholder-shown)~label {
            opacity: .65;
            transform: scale(.85) translateY(-.5rem) translateX(.15rem)
        }

        .form-floating>.form-control-plaintext~label,
        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.form-select~label {
            opacity: .65;
            transform: scale(.85) translateY(-.5rem) translateX(.15rem)
        }

        .form-floating>.form-control:-webkit-autofill~label {
            opacity: .65;
            transform: scale(.85) translateY(-.5rem) translateX(.15rem)
        }

        .form-floating>.form-control-plaintext~label {
            border-width: 1px 0
        }

        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%
        }

        .input-group>.form-control,
        .input-group>.form-select {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0
        }

        .input-group>.form-control:focus,
        .input-group>.form-select:focus {
            z-index: 3
        }

        .input-group .btn {
            position: relative;
            z-index: 2
        }

        .input-group .btn:focus {
            z-index: 3
        }

        .input-group-text {
            display: flex;
            align-items: center;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: .375rem
        }

        .input-group-lg>.btn,
        .input-group-lg>.form-control,
        .input-group-lg>.form-select,
        .input-group-lg>.input-group-text {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            border-radius: .5rem
        }

        .input-group-sm>.btn,
        .input-group-sm>.form-control,
        .input-group-sm>.form-select,
        .input-group-sm>.input-group-text {
            padding: .25rem .5rem;
            font-size: .875rem;
            border-radius: .25rem
        }

        .input-group-lg>.form-select,
        .input-group-sm>.form-select {
            padding-right: 3rem
        }

        .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
        .input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),
        .input-group.has-validation>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-left: -1px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: .25rem;
            font-size: .875em;
            color: #198754
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: .25rem .5rem;
            margin-top: .1rem;
            font-size: .875rem;
            color: #fff;
            background-color: rgba(25, 135, 84, .9);
            border-radius: .375rem
        }

        .is-valid~.valid-feedback,
        .is-valid~.valid-tooltip,
        .was-validated :valid~.valid-feedback,
        .was-validated :valid~.valid-tooltip {
            display: block
        }

        .form-control.is-valid,
        .was-validated .form-control:valid {
            border-color: #198754;
            padding-right: calc(1.5em + .75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(.375em + .1875rem) center;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem)
        }

        .form-control.is-valid:focus,
        .was-validated .form-control:valid:focus {
            border-color: #198754;
            box-shadow: 0 0 0 .25rem rgba(25, 135, 84, .25)
        }

        .was-validated textarea.form-control:valid,
        textarea.form-control.is-valid {
            padding-right: calc(1.5em + .75rem);
            background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
        }

        .form-select.is-valid,
        .was-validated .form-select:valid {
            border-color: #198754
        }

        .form-select.is-valid:not([multiple]):not([size]),
        .form-select.is-valid:not([multiple])[size="1"],
        .was-validated .form-select:valid:not([multiple]):not([size]),
        .was-validated .form-select:valid:not([multiple])[size="1"] {
            padding-right: 4.125rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-position: right .75rem center, center right 2.25rem;
            background-size: 16px 12px, calc(.75em + .375rem) calc(.75em + .375rem)
        }

        .form-select.is-valid:focus,
        .was-validated .form-select:valid:focus {
            border-color: #198754;
            box-shadow: 0 0 0 .25rem rgba(25, 135, 84, .25)
        }

        .form-control-color.is-valid,
        .was-validated .form-control-color:valid {
            width: calc(3rem + calc(1.5em + .75rem))
        }

        .form-check-input.is-valid,
        .was-validated .form-check-input:valid {
            border-color: #198754
        }

        .form-check-input.is-valid:checked,
        .was-validated .form-check-input:valid:checked {
            background-color: #198754
        }

        .form-check-input.is-valid:focus,
        .was-validated .form-check-input:valid:focus {
            box-shadow: 0 0 0 .25rem rgba(25, 135, 84, .25)
        }

        .form-check-input.is-valid~.form-check-label,
        .was-validated .form-check-input:valid~.form-check-label {
            color: #198754
        }

        .form-check-inline .form-check-input~.valid-feedback {
            margin-left: .5em
        }

        .input-group .form-control.is-valid,
        .input-group .form-select.is-valid,
        .was-validated .input-group .form-control:valid,
        .was-validated .input-group .form-select:valid {
            z-index: 1
        }

        .input-group .form-control.is-valid:focus,
        .input-group .form-select.is-valid:focus,
        .was-validated .input-group .form-control:valid:focus,
        .was-validated .input-group .form-select:valid:focus {
            z-index: 3
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: .25rem;
            font-size: .875em;
            color: #dc3545
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: .25rem .5rem;
            margin-top: .1rem;
            font-size: .875rem;
            color: #fff;
            background-color: rgba(220, 53, 69, .9);
            border-radius: .375rem
        }

        .is-invalid~.invalid-feedback,
        .is-invalid~.invalid-tooltip,
        .was-validated :invalid~.invalid-feedback,
        .was-validated :invalid~.invalid-tooltip {
            display: block
        }

        .form-control.is-invalid,
        .was-validated .form-control:invalid {
            border-color: #dc3545;
            padding-right: calc(1.5em + .75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(.375em + .1875rem) center;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem)
        }

        .form-control.is-invalid:focus,
        .was-validated .form-control:invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 .25rem rgba(220, 53, 69, .25)
        }

        .was-validated textarea.form-control:invalid,
        textarea.form-control.is-invalid {
            padding-right: calc(1.5em + .75rem);
            background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
        }

        .form-select.is-invalid,
        .was-validated .form-select:invalid {
            border-color: #dc3545
        }

        .form-select.is-invalid:not([multiple]):not([size]),
        .form-select.is-invalid:not([multiple])[size="1"],
        .was-validated .form-select:invalid:not([multiple]):not([size]),
        .was-validated .form-select:invalid:not([multiple])[size="1"] {
            padding-right: 4.125rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-position: right .75rem center, center right 2.25rem;
            background-size: 16px 12px, calc(.75em + .375rem) calc(.75em + .375rem)
        }

        .form-select.is-invalid:focus,
        .was-validated .form-select:invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 .25rem rgba(220, 53, 69, .25)
        }

        .form-control-color.is-invalid,
        .was-validated .form-control-color:invalid {
            width: calc(3rem + calc(1.5em + .75rem))
        }

        .form-check-input.is-invalid,
        .was-validated .form-check-input:invalid {
            border-color: #dc3545
        }

        .form-check-input.is-invalid:checked,
        .was-validated .form-check-input:invalid:checked {
            background-color: #dc3545
        }

        .form-check-input.is-invalid:focus,
        .was-validated .form-check-input:invalid:focus {
            box-shadow: 0 0 0 .25rem rgba(220, 53, 69, .25)
        }

        .form-check-input.is-invalid~.form-check-label,
        .was-validated .form-check-input:invalid~.form-check-label {
            color: #dc3545
        }

        .form-check-inline .form-check-input~.invalid-feedback {
            margin-left: .5em
        }

        .input-group .form-control.is-invalid,
        .input-group .form-select.is-invalid,
        .was-validated .input-group .form-control:invalid,
        .was-validated .input-group .form-select:invalid {
            z-index: 2
        }

        .input-group .form-control.is-invalid:focus,
        .input-group .form-select.is-invalid:focus,
        .was-validated .input-group .form-control:invalid:focus,
        .was-validated .input-group .form-select:invalid:focus {
            z-index: 3
        }

        .btn {
            --bs-btn-padding-x: 0.75rem;
            --bs-btn-padding-y: 0.375rem;
            --bs-btn-font-family: ;
            --bs-btn-font-size: 1rem;
            --bs-btn-font-weight: 400;
            --bs-btn-line-height: 1.5;
            --bs-btn-color: #212529;
            --bs-btn-bg: transparent;
            --bs-btn-border-width: 1px;
            --bs-btn-border-color: transparent;
            --bs-btn-border-radius: 0.375rem;
            --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
            --bs-btn-disabled-opacity: 0.65;
            --bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
            display: inline-block;
            padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
            font-family: var(--bs-btn-font-family);
            font-size: var(--bs-btn-font-size);
            font-weight: var(--bs-btn-font-weight);
            line-height: var(--bs-btn-line-height);
            color: var(--bs-btn-color);
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
            border-radius: var(--bs-btn-border-radius);
            background-color: var(--bs-btn-bg);
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .btn {
                transition: none
            }
        }

        .btn:hover {
            color: var(--bs-btn-hover-color);
            background-color: var(--bs-btn-hover-bg);
            border-color: var(--bs-btn-hover-border-color)
        }

        .btn-check:focus+.btn,
        .btn:focus {
            color: var(--bs-btn-hover-color);
            background-color: var(--bs-btn-hover-bg);
            border-color: var(--bs-btn-hover-border-color);
            outline: 0;
            box-shadow: var(--bs-btn-focus-box-shadow)
        }

        .btn-check:active+.btn,
        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:active {
            color: var(--bs-btn-active-color);
            background-color: var(--bs-btn-active-bg);
            border-color: var(--bs-btn-active-border-color)
        }

        .btn-check:active+.btn:focus,
        .btn-check:checked+.btn:focus,
        .btn.active:focus,
        .btn.show:focus,
        .btn:active:focus {
            box-shadow: var(--bs-btn-focus-box-shadow)
        }

        .btn.disabled,
        .btn:disabled,
        fieldset:disabled .btn {
            color: var(--bs-btn-disabled-color);
            pointer-events: none;
            background-color: var(--bs-btn-disabled-bg);
            border-color: var(--bs-btn-disabled-border-color);
            opacity: var(--bs-btn-disabled-opacity)
        }

        .btn-primary {
            --bs-btn-color: #fff;
            --bs-btn-bg: #0d6efd;
            --bs-btn-border-color: #0d6efd;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #0b5ed7;
            --bs-btn-hover-border-color: #0a58ca;
            --bs-btn-focus-shadow-rgb: 49, 132, 253;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #0a58ca;
            --bs-btn-active-border-color: #0a53be;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #0d6efd;
            --bs-btn-disabled-border-color: #0d6efd
        }

        .btn-secondary {
            --bs-btn-color: #fff;
            --bs-btn-bg: #6c757d;
            --bs-btn-border-color: #6c757d;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #5c636a;
            --bs-btn-hover-border-color: #565e64;
            --bs-btn-focus-shadow-rgb: 130, 138, 145;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #565e64;
            --bs-btn-active-border-color: #51585e;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #6c757d;
            --bs-btn-disabled-border-color: #6c757d
        }

        .btn-success {
            --bs-btn-color: #fff;
            --bs-btn-bg: #198754;
            --bs-btn-border-color: #198754;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #157347;
            --bs-btn-hover-border-color: #146c43;
            --bs-btn-focus-shadow-rgb: 60, 153, 110;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #146c43;
            --bs-btn-active-border-color: #13653f;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #198754;
            --bs-btn-disabled-border-color: #198754
        }

        .btn-info {
            --bs-btn-color: #000;
            --bs-btn-bg: #0dcaf0;
            --bs-btn-border-color: #0dcaf0;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: #31d2f2;
            --bs-btn-hover-border-color: #25cff2;
            --bs-btn-focus-shadow-rgb: 11, 172, 204;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: #3dd5f3;
            --bs-btn-active-border-color: #25cff2;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #000;
            --bs-btn-disabled-bg: #0dcaf0;
            --bs-btn-disabled-border-color: #0dcaf0
        }

        .btn-warning {
            --bs-btn-color: #000;
            --bs-btn-bg: #ffc107;
            --bs-btn-border-color: #ffc107;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: #ffca2c;
            --bs-btn-hover-border-color: #ffc720;
            --bs-btn-focus-shadow-rgb: 217, 164, 6;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: #ffcd39;
            --bs-btn-active-border-color: #ffc720;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #000;
            --bs-btn-disabled-bg: #ffc107;
            --bs-btn-disabled-border-color: #ffc107
        }

        .btn-danger {
            --bs-btn-color: #fff;
            --bs-btn-bg: #dc3545;
            --bs-btn-border-color: #dc3545;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #bb2d3b;
            --bs-btn-hover-border-color: #b02a37;
            --bs-btn-focus-shadow-rgb: 225, 83, 97;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #b02a37;
            --bs-btn-active-border-color: #a52834;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #dc3545;
            --bs-btn-disabled-border-color: #dc3545
        }

        .btn-light {
            --bs-btn-color: #000;
            --bs-btn-bg: #f8f9fa;
            --bs-btn-border-color: #f8f9fa;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: #f9fafb;
            --bs-btn-hover-border-color: #f9fafb;
            --bs-btn-focus-shadow-rgb: 211, 212, 213;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: #f9fafb;
            --bs-btn-active-border-color: #f9fafb;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #000;
            --bs-btn-disabled-bg: #f8f9fa;
            --bs-btn-disabled-border-color: #f8f9fa
        }

        .btn-dark {
            --bs-btn-color: #fff;
            --bs-btn-bg: #212529;
            --bs-btn-border-color: #212529;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #1c1f23;
            --bs-btn-hover-border-color: #1a1e21;
            --bs-btn-focus-shadow-rgb: 66, 70, 73;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #1a1e21;
            --bs-btn-active-border-color: #191c1f;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #212529;
            --bs-btn-disabled-border-color: #212529
        }

        .btn-outline-primary {
            --bs-btn-color: #0d6efd;
            --bs-btn-border-color: #0d6efd;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #0d6efd;
            --bs-btn-hover-border-color: #0d6efd;
            --bs-btn-focus-shadow-rgb: 13, 110, 253;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #0d6efd;
            --bs-btn-active-border-color: #0d6efd;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #0d6efd;
            --bs-btn-disabled-bg: transparent;
            --bs-gradient: none
        }

        .btn-outline-secondary {
            --bs-btn-color: #6c757d;
            --bs-btn-border-color: #6c757d;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #6c757d;
            --bs-btn-hover-border-color: #6c757d;
            --bs-btn-focus-shadow-rgb: 108, 117, 125;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #6c757d;
            --bs-btn-active-border-color: #6c757d;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #6c757d;
            --bs-btn-disabled-bg: transparent;
            --bs-gradient: none
        }

        .btn-outline-success {
            --bs-btn-color: #198754;
            --bs-btn-border-color: #198754;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #198754;
            --bs-btn-hover-border-color: #198754;
            --bs-btn-focus-shadow-rgb: 25, 135, 84;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #198754;
            --bs-btn-active-border-color: #198754;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #198754;
            --bs-btn-disabled-bg: transparent;
            --bs-gradient: none
        }

        .btn-outline-info {
            --bs-btn-color: #0dcaf0;
            --bs-btn-border-color: #0dcaf0;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: #0dcaf0;
            --bs-btn-hover-border-color: #0dcaf0;
            --bs-btn-focus-shadow-rgb: 13, 202, 240;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: #0dcaf0;
            --bs-btn-active-border-color: #0dcaf0;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #0dcaf0;
            --bs-btn-disabled-bg: transparent;
            --bs-gradient: none
        }

        .btn-outline-warning {
            --bs-btn-color: #ffc107;
            --bs-btn-border-color: #ffc107;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: #ffc107;
            --bs-btn-hover-border-color: #ffc107;
            --bs-btn-focus-shadow-rgb: 255, 193, 7;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: #ffc107;
            --bs-btn-active-border-color: #ffc107;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #ffc107;
            --bs-btn-disabled-bg: transparent;
            --bs-gradient: none
        }

        .btn-outline-danger {
            --bs-btn-color: #dc3545;
            --bs-btn-border-color: #dc3545;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #dc3545;
            --bs-btn-hover-border-color: #dc3545;
            --bs-btn-focus-shadow-rgb: 220, 53, 69;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #dc3545;
            --bs-btn-active-border-color: #dc3545;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #dc3545;
            --bs-btn-disabled-bg: transparent;
            --bs-gradient: none
        }

        .btn-outline-light {
            --bs-btn-color: #f8f9fa;
            --bs-btn-border-color: #f8f9fa;
            --bs-btn-hover-color: #000;
            --bs-btn-hover-bg: #f8f9fa;
            --bs-btn-hover-border-color: #f8f9fa;
            --bs-btn-focus-shadow-rgb: 248, 249, 250;
            --bs-btn-active-color: #000;
            --bs-btn-active-bg: #f8f9fa;
            --bs-btn-active-border-color: #f8f9fa;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #f8f9fa;
            --bs-btn-disabled-bg: transparent;
            --bs-gradient: none
        }

        .btn-outline-dark {
            --bs-btn-color: #212529;
            --bs-btn-border-color: #212529;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #212529;
            --bs-btn-hover-border-color: #212529;
            --bs-btn-focus-shadow-rgb: 33, 37, 41;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #212529;
            --bs-btn-active-border-color: #212529;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #212529;
            --bs-btn-disabled-bg: transparent;
            --bs-gradient: none
        }

        .btn-link {
            --bs-btn-font-weight: 400;
            --bs-btn-color: var(--bs-link-color);
            --bs-btn-bg: transparent;
            --bs-btn-border-color: transparent;
            --bs-btn-hover-color: var(--bs-link-hover-color);
            --bs-btn-hover-border-color: transparent;
            --bs-btn-active-border-color: transparent;
            --bs-btn-disabled-color: #6c757d;
            --bs-btn-disabled-border-color: transparent;
            --bs-btn-box-shadow: none;
            text-decoration: underline
        }

        .btn-group-lg>.btn,
        .btn-lg {
            --bs-btn-padding-y: 0.5rem;
            --bs-btn-padding-x: 1rem;
            --bs-btn-font-size: 1.25rem;
            --bs-btn-border-radius: 0.5rem
        }

        .btn-group-sm>.btn,
        .btn-sm {
            --bs-btn-padding-y: 0.25rem;
            --bs-btn-padding-x: 0.5rem;
            --bs-btn-font-size: 0.875rem;
            --bs-btn-border-radius: 0.25rem
        }

        .fade {
            transition: opacity .15s linear
        }

        @media (prefers-reduced-motion:reduce) {
            .fade {
                transition: none
            }
        }

        .fade:not(.show) {
            opacity: 0
        }

        .collapse:not(.show) {
            display: none
        }

        .collapsing {
            height: 0;
            overflow: hidden;
            transition: height .35s ease
        }

        @media (prefers-reduced-motion:reduce) {
            .collapsing {
                transition: none
            }
        }

        .collapsing.collapse-horizontal {
            width: 0;
            height: auto;
            transition: width .35s ease
        }

        @media (prefers-reduced-motion:reduce) {
            .collapsing.collapse-horizontal {
                transition: none
            }
        }

        .dropdown,
        .dropdown-center,
        .dropend,
        .dropstart,
        .dropup,
        .dropup-center {
            position: relative
        }

        .dropdown-toggle {
            white-space: nowrap
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent
        }

        .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropdown-menu {
            --bs-dropdown-min-width: 10rem;
            --bs-dropdown-padding-x: 0;
            --bs-dropdown-padding-y: 0.5rem;
            --bs-dropdown-spacer: 0.125rem;
            --bs-dropdown-font-size: 1rem;
            --bs-dropdown-color: #212529;
            --bs-dropdown-bg: #fff;
            --bs-dropdown-border-color: var(--bs-border-color-translucent);
            --bs-dropdown-border-radius: 0.375rem;
            --bs-dropdown-border-width: 1px;
            --bs-dropdown-inner-border-radius: calc(0.375rem - 1px);
            --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
            --bs-dropdown-divider-margin-y: 0.5rem;
            --bs-dropdown-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --bs-dropdown-link-color: #212529;
            --bs-dropdown-link-hover-color: #1e2125;
            --bs-dropdown-link-hover-bg: #e9ecef;
            --bs-dropdown-link-active-color: #fff;
            --bs-dropdown-link-active-bg: #0d6efd;
            --bs-dropdown-link-disabled-color: #adb5bd;
            --bs-dropdown-item-padding-x: 1rem;
            --bs-dropdown-item-padding-y: 0.25rem;
            --bs-dropdown-header-color: #6c757d;
            --bs-dropdown-header-padding-x: 1rem;
            --bs-dropdown-header-padding-y: 0.5rem;
            position: absolute;
            z-index: 1000;
            display: none;
            min-width: var(--bs-dropdown-min-width);
            padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
            margin: 0;
            font-size: var(--bs-dropdown-font-size);
            color: var(--bs-dropdown-color);
            text-align: left;
            list-style: none;
            background-color: var(--bs-dropdown-bg);
            background-clip: padding-box;
            border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
            border-radius: var(--bs-dropdown-border-radius)
        }

        .dropdown-menu[data-bs-popper] {
            top: 100%;
            left: 0;
            margin-top: var(--bs-dropdown-spacer)
        }

        .dropdown-menu-start {
            --bs-position: start
        }

        .dropdown-menu-start[data-bs-popper] {
            right: auto;
            left: 0
        }

        .dropdown-menu-end {
            --bs-position: end
        }

        .dropdown-menu-end[data-bs-popper] {
            right: 0;
            left: auto
        }

        @media (min-width:576px) {
            .dropdown-menu-sm-start {
                --bs-position: start
            }

            .dropdown-menu-sm-start[data-bs-popper] {
                right: auto;
                left: 0
            }

            .dropdown-menu-sm-end {
                --bs-position: end
            }

            .dropdown-menu-sm-end[data-bs-popper] {
                right: 0;
                left: auto
            }
        }

        @media (min-width:768px) {
            .dropdown-menu-md-start {
                --bs-position: start
            }

            .dropdown-menu-md-start[data-bs-popper] {
                right: auto;
                left: 0
            }

            .dropdown-menu-md-end {
                --bs-position: end
            }

            .dropdown-menu-md-end[data-bs-popper] {
                right: 0;
                left: auto
            }
        }

        @media (min-width:992px) {
            .dropdown-menu-lg-start {
                --bs-position: start
            }

            .dropdown-menu-lg-start[data-bs-popper] {
                right: auto;
                left: 0
            }

            .dropdown-menu-lg-end {
                --bs-position: end
            }

            .dropdown-menu-lg-end[data-bs-popper] {
                right: 0;
                left: auto
            }
        }

        @media (min-width:1200px) {
            .dropdown-menu-xl-start {
                --bs-position: start
            }

            .dropdown-menu-xl-start[data-bs-popper] {
                right: auto;
                left: 0
            }

            .dropdown-menu-xl-end {
                --bs-position: end
            }

            .dropdown-menu-xl-end[data-bs-popper] {
                right: 0;
                left: auto
            }
        }

        @media (min-width:1400px) {
            .dropdown-menu-xxl-start {
                --bs-position: start
            }

            .dropdown-menu-xxl-start[data-bs-popper] {
                right: auto;
                left: 0
            }

            .dropdown-menu-xxl-end {
                --bs-position: end
            }

            .dropdown-menu-xxl-end[data-bs-popper] {
                right: 0;
                left: auto
            }
        }

        .dropup .dropdown-menu[data-bs-popper] {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: var(--bs-dropdown-spacer)
        }

        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: 0;
            border-right: .3em solid transparent;
            border-bottom: .3em solid;
            border-left: .3em solid transparent
        }

        .dropup .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropend .dropdown-menu[data-bs-popper] {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: var(--bs-dropdown-spacer)
        }

        .dropend .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid transparent;
            border-right: 0;
            border-bottom: .3em solid transparent;
            border-left: .3em solid
        }

        .dropend .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropend .dropdown-toggle::after {
            vertical-align: 0
        }

        .dropstart .dropdown-menu[data-bs-popper] {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: var(--bs-dropdown-spacer)
        }

        .dropstart .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: ""
        }

        .dropstart .dropdown-toggle::after {
            display: none
        }

        .dropstart .dropdown-toggle::before {
            display: inline-block;
            margin-right: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid transparent;
            border-right: .3em solid;
            border-bottom: .3em solid transparent
        }

        .dropstart .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropstart .dropdown-toggle::before {
            vertical-align: 0
        }

        .dropdown-divider {
            height: 0;
            margin: var(--bs-dropdown-divider-margin-y) 0;
            overflow: hidden;
            border-top: 1px solid var(--bs-dropdown-divider-bg);
            opacity: 1
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
            clear: both;
            font-weight: 400;
            color: var(--bs-dropdown-link-color);
            text-align: inherit;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border: 0
        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            color: var(--bs-dropdown-link-hover-color);
            background-color: var(--bs-dropdown-link-hover-bg)
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: var(--bs-dropdown-link-active-color);
            text-decoration: none;
            background-color: var(--bs-dropdown-link-active-bg)
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            color: var(--bs-dropdown-link-disabled-color);
            pointer-events: none;
            background-color: transparent
        }

        .dropdown-menu.show {
            display: block
        }

        .dropdown-header {
            display: block;
            padding: var(--bs-dropdown-header-padding-y) var(--bs-dropdown-header-padding-x);
            margin-bottom: 0;
            font-size: .875rem;
            color: var(--bs-dropdown-header-color);
            white-space: nowrap
        }

        .dropdown-item-text {
            display: block;
            padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
            color: var(--bs-dropdown-link-color)
        }

        .dropdown-menu-dark {
            --bs-dropdown-color: #dee2e6;
            --bs-dropdown-bg: #343a40;
            --bs-dropdown-border-color: var(--bs-border-color-translucent);
            --bs-dropdown-box-shadow: ;
            --bs-dropdown-link-color: #dee2e6;
            --bs-dropdown-link-hover-color: #fff;
            --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
            --bs-dropdown-link-hover-bg: rgba(255, 255, 255, 0.15);
            --bs-dropdown-link-active-color: #fff;
            --bs-dropdown-link-active-bg: #0d6efd;
            --bs-dropdown-link-disabled-color: #adb5bd;
            --bs-dropdown-header-color: #adb5bd
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-flex;
            vertical-align: middle
        }

        .btn-group-vertical>.btn,
        .btn-group>.btn {
            position: relative;
            flex: 1 1 auto
        }

        .btn-group-vertical>.btn-check:checked+.btn,
        .btn-group-vertical>.btn-check:focus+.btn,
        .btn-group-vertical>.btn.active,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn:focus,
        .btn-group-vertical>.btn:hover,
        .btn-group>.btn-check:checked+.btn,
        .btn-group>.btn-check:focus+.btn,
        .btn-group>.btn.active,
        .btn-group>.btn:active,
        .btn-group>.btn:focus,
        .btn-group>.btn:hover {
            z-index: 1
        }

        .btn-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start
        }

        .btn-toolbar .input-group {
            width: auto
        }

        .btn-group {
            border-radius: .375rem
        }

        .btn-group>.btn-group:not(:first-child),
        .btn-group>.btn:not(:first-child) {
            margin-left: -1px
        }

        .btn-group>.btn-group:not(:last-child)>.btn,
        .btn-group>.btn.dropdown-toggle-split:first-child,
        .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn-group:not(:first-child)>.btn,
        .btn-group>.btn:nth-child(n+3),
        .btn-group>:not(.btn-check)+.btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .dropdown-toggle-split {
            padding-right: .5625rem;
            padding-left: .5625rem
        }

        .dropdown-toggle-split::after,
        .dropend .dropdown-toggle-split::after,
        .dropup .dropdown-toggle-split::after {
            margin-left: 0
        }

        .dropstart .dropdown-toggle-split::before {
            margin-right: 0
        }

        .btn-group-sm>.btn+.dropdown-toggle-split,
        .btn-sm+.dropdown-toggle-split {
            padding-right: .375rem;
            padding-left: .375rem
        }

        .btn-group-lg>.btn+.dropdown-toggle-split,
        .btn-lg+.dropdown-toggle-split {
            padding-right: .75rem;
            padding-left: .75rem
        }

        .btn-group-vertical {
            flex-direction: column;
            align-items: flex-start;
            justify-content: center
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group {
            width: 100%
        }

        .btn-group-vertical>.btn-group:not(:first-child),
        .btn-group-vertical>.btn:not(:first-child) {
            margin-top: -1px
        }

        .btn-group-vertical>.btn-group:not(:last-child)>.btn,
        .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn-group:not(:first-child)>.btn,
        .btn-group-vertical>.btn~.btn {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .nav {
            --bs-nav-link-padding-x: 1rem;
            --bs-nav-link-padding-y: 0.5rem;
            --bs-nav-link-font-weight: ;
            --bs-nav-link-color: var(--bs-link-color);
            --bs-nav-link-hover-color: var(--bs-link-hover-color);
            --bs-nav-link-disabled-color: #6c757d;
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .nav-link {
            display: block;
            padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
            font-size: var(--bs-nav-link-font-size);
            font-weight: var(--bs-nav-link-font-weight);
            color: var(--bs-nav-link-color);
            text-decoration: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .nav-link {
                transition: none
            }
        }

        .nav-link:focus,
        .nav-link:hover {
            color: var(--bs-nav-link-hover-color)
        }

        .nav-link.disabled {
            color: var(--bs-nav-link-disabled-color);
            pointer-events: none;
            cursor: default
        }

        .nav-tabs {
            --bs-nav-tabs-border-width: 1px;
            --bs-nav-tabs-border-color: #dee2e6;
            --bs-nav-tabs-border-radius: 0.375rem;
            --bs-nav-tabs-link-hover-border-color: #e9ecef #e9ecef #dee2e6;
            --bs-nav-tabs-link-active-color: #495057;
            --bs-nav-tabs-link-active-bg: #fff;
            --bs-nav-tabs-link-active-border-color: #dee2e6 #dee2e6 #fff;
            border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color)
        }

        .nav-tabs .nav-link {
            margin-bottom: calc(var(--bs-nav-tabs-border-width) * -1);
            background: 0 0;
            border: var(--bs-nav-tabs-border-width) solid transparent;
            border-top-left-radius: var(--bs-nav-tabs-border-radius);
            border-top-right-radius: var(--bs-nav-tabs-border-radius)
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            isolation: isolate;
            border-color: var(--bs-nav-tabs-link-hover-border-color)
        }

        .nav-tabs .nav-link.disabled,
        .nav-tabs .nav-link:disabled {
            color: var(--bs-nav-link-disabled-color);
            background-color: transparent;
            border-color: transparent
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: var(--bs-nav-tabs-link-active-color);
            background-color: var(--bs-nav-tabs-link-active-bg);
            border-color: var(--bs-nav-tabs-link-active-border-color)
        }

        .nav-tabs .dropdown-menu {
            margin-top: calc(var(--bs-nav-tabs-border-width) * -1);
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .nav-pills {
            --bs-nav-pills-border-radius: 0.375rem;
            --bs-nav-pills-link-active-color: #fff;
            --bs-nav-pills-link-active-bg: #0d6efd
        }

        .nav-pills .nav-link {
            background: 0 0;
            border: 0;
            border-radius: var(--bs-nav-pills-border-radius)
        }

        .nav-pills .nav-link:disabled {
            color: var(--bs-nav-link-disabled-color);
            background-color: transparent;
            border-color: transparent
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: var(--bs-nav-pills-link-active-color);
            background-color: var(--bs-nav-pills-link-active-bg)
        }

        .nav-fill .nav-item,
        .nav-fill>.nav-link {
            flex: 1 1 auto;
            text-align: center
        }

        .nav-justified .nav-item,
        .nav-justified>.nav-link {
            flex-basis: 0;
            flex-grow: 1;
            text-align: center
        }

        .nav-fill .nav-item .nav-link,
        .nav-justified .nav-item .nav-link {
            width: 100%
        }

        .tab-content>.tab-pane {
            display: none
        }

        .tab-content>.active {
            display: block
        }

        .navbar {
            --bs-navbar-padding-x: 0;
            --bs-navbar-padding-y: 0.5rem;
            --bs-navbar-color: rgba(0, 0, 0, 0.55);
            --bs-navbar-hover-color: rgba(0, 0, 0, 0.7);
            --bs-navbar-disabled-color: rgba(0, 0, 0, 0.3);
            --bs-navbar-active-color: rgba(0, 0, 0, 0.9);
            --bs-navbar-brand-padding-y: 0.3125rem;
            --bs-navbar-brand-margin-end: 1rem;
            --bs-navbar-brand-font-size: 1.25rem;
            --bs-navbar-brand-color: rgba(0, 0, 0, 0.9);
            --bs-navbar-brand-hover-color: rgba(0, 0, 0, 0.9);
            --bs-navbar-nav-link-padding-x: 0.5rem;
            --bs-navbar-toggler-padding-y: 0.25rem;
            --bs-navbar-toggler-padding-x: 0.75rem;
            --bs-navbar-toggler-font-size: 1.25rem;
            --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            --bs-navbar-toggler-border-color: rgba(0, 0, 0, 0.1);
            --bs-navbar-toggler-border-radius: 0.375rem;
            --bs-navbar-toggler-focus-width: 0.25rem;
            --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x)
        }

        .navbar>.container,
        .navbar>.container-fluid,
        .navbar>.container-lg,
        .navbar>.container-md,
        .navbar>.container-sm,
        .navbar>.container-xl,
        .navbar>.container-xxl {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between
        }

        .navbar-brand {
            padding-top: var(--bs-navbar-brand-padding-y);
            padding-bottom: var(--bs-navbar-brand-padding-y);
            margin-right: var(--bs-navbar-brand-margin-end);
            font-size: var(--bs-navbar-brand-font-size);
            color: var(--bs-navbar-brand-color);
            text-decoration: none;
            white-space: nowrap
        }

        .navbar-brand:focus,
        .navbar-brand:hover {
            color: var(--bs-navbar-brand-hover-color)
        }

        .navbar-nav {
            --bs-nav-link-padding-x: 0;
            --bs-nav-link-padding-y: 0.5rem;
            --bs-nav-link-color: var(--bs-navbar-color);
            --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
            --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .navbar-nav .nav-link.active,
        .navbar-nav .show>.nav-link {
            color: var(--bs-navbar-active-color)
        }

        .navbar-nav .dropdown-menu {
            position: static
        }

        .navbar-text {
            padding-top: .5rem;
            padding-bottom: .5rem;
            color: var(--bs-navbar-color)
        }

        .navbar-text a,
        .navbar-text a:focus,
        .navbar-text a:hover {
            color: var(--bs-navbar-active-color)
        }

        .navbar-collapse {
            flex-basis: 100%;
            flex-grow: 1;
            align-items: center
        }

        .navbar-toggler {
            padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
            font-size: var(--bs-navbar-toggler-font-size);
            line-height: 1;
            color: var(--bs-navbar-color);
            background-color: transparent;
            border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
            border-radius: var(--bs-navbar-toggler-border-radius);
            transition: var(--bs-navbar-toggler-transition)
        }

        @media (prefers-reduced-motion:reduce) {
            .navbar-toggler {
                transition: none
            }
        }

        .navbar-toggler:hover {
            text-decoration: none
        }

        .navbar-toggler:focus {
            text-decoration: none;
            outline: 0;
            box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width)
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            background-image: var(--bs-navbar-toggler-icon-bg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%
        }

        .navbar-nav-scroll {
            max-height: var(--bs-scroll-height, 75vh);
            overflow-y: auto
        }

        @media (min-width:576px) {
            .navbar-expand-sm {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-sm .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: var(--bs-navbar-nav-link-padding-x);
                padding-left: var(--bs-navbar-nav-link-padding-x)
            }

            .navbar-expand-sm .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-sm .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-sm .navbar-toggler {
                display: none
            }

            .navbar-expand-sm .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                transform: none !important;
                transition: none
            }

            .navbar-expand-sm .offcanvas .offcanvas-header {
                display: none
            }

            .navbar-expand-sm .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible
            }
        }

        @media (min-width:768px) {
            .navbar-expand-md {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-md .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: var(--bs-navbar-nav-link-padding-x);
                padding-left: var(--bs-navbar-nav-link-padding-x)
            }

            .navbar-expand-md .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-md .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-md .navbar-toggler {
                display: none
            }

            .navbar-expand-md .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                transform: none !important;
                transition: none
            }

            .navbar-expand-md .offcanvas .offcanvas-header {
                display: none
            }

            .navbar-expand-md .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible
            }
        }

        @media (min-width:992px) {
            .navbar-expand-lg {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-lg .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: var(--bs-navbar-nav-link-padding-x);
                padding-left: var(--bs-navbar-nav-link-padding-x)
            }

            .navbar-expand-lg .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-lg .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-lg .navbar-toggler {
                display: none
            }

            .navbar-expand-lg .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                transform: none !important;
                transition: none
            }

            .navbar-expand-lg .offcanvas .offcanvas-header {
                display: none
            }

            .navbar-expand-lg .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible
            }
        }

        @media (min-width:1200px) {
            .navbar-expand-xl {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-xl .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: var(--bs-navbar-nav-link-padding-x);
                padding-left: var(--bs-navbar-nav-link-padding-x)
            }

            .navbar-expand-xl .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-xl .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-xl .navbar-toggler {
                display: none
            }

            .navbar-expand-xl .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                transform: none !important;
                transition: none
            }

            .navbar-expand-xl .offcanvas .offcanvas-header {
                display: none
            }

            .navbar-expand-xl .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible
            }
        }

        @media (min-width:1400px) {
            .navbar-expand-xxl {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-xxl .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-xxl .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-xxl .navbar-nav .nav-link {
                padding-right: var(--bs-navbar-nav-link-padding-x);
                padding-left: var(--bs-navbar-nav-link-padding-x)
            }

            .navbar-expand-xxl .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-xxl .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-xxl .navbar-toggler {
                display: none
            }

            .navbar-expand-xxl .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                transform: none !important;
                transition: none
            }

            .navbar-expand-xxl .offcanvas .offcanvas-header {
                display: none
            }

            .navbar-expand-xxl .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible
            }
        }

        .navbar-expand {
            flex-wrap: nowrap;
            justify-content: flex-start
        }

        .navbar-expand .navbar-nav {
            flex-direction: row
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: var(--bs-navbar-nav-link-padding-x);
            padding-left: var(--bs-navbar-nav-link-padding-x)
        }

        .navbar-expand .navbar-nav-scroll {
            overflow: visible
        }

        .navbar-expand .navbar-collapse {
            display: flex !important;
            flex-basis: auto
        }

        .navbar-expand .navbar-toggler {
            display: none
        }

        .navbar-expand .offcanvas {
            position: static;
            z-index: auto;
            flex-grow: 1;
            width: auto !important;
            height: auto !important;
            visibility: visible !important;
            background-color: transparent !important;
            border: 0 !important;
            transform: none !important;
            transition: none
        }

        .navbar-expand .offcanvas .offcanvas-header {
            display: none
        }

        .navbar-expand .offcanvas .offcanvas-body {
            display: flex;
            flex-grow: 0;
            padding: 0;
            overflow-y: visible
        }

        .navbar-dark {
            --bs-navbar-color: rgba(255, 255, 255, 0.55);
            --bs-navbar-hover-color: rgba(255, 255, 255, 0.75);
            --bs-navbar-disabled-color: rgba(255, 255, 255, 0.25);
            --bs-navbar-active-color: #fff;
            --bs-navbar-brand-color: #fff;
            --bs-navbar-brand-hover-color: #fff;
            --bs-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
            --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
        }

        .card {
            --bs-card-spacer-y: 1rem;
            --bs-card-spacer-x: 1rem;
            --bs-card-title-spacer-y: 0.5rem;
            --bs-card-border-width: 1px;
            --bs-card-border-color: var(--bs-border-color-translucent);
            --bs-card-border-radius: 0.375rem;
            --bs-card-box-shadow: ;
            --bs-card-inner-border-radius: calc(0.375rem - 1px);
            --bs-card-cap-padding-y: 0.5rem;
            --bs-card-cap-padding-x: 1rem;
            --bs-card-cap-bg: rgba(0, 0, 0, 0.03);
            --bs-card-cap-color: ;
            --bs-card-height: ;
            --bs-card-color: ;
            --bs-card-bg: #fff;
            --bs-card-img-overlay-padding: 1rem;
            --bs-card-group-margin: 0.75rem;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            height: var(--bs-card-height);
            word-wrap: break-word;
            background-color: var(--bs-card-bg);
            background-clip: border-box;
            border: var(--bs-card-border-width) solid var(--bs-card-border-color);
            border-radius: var(--bs-card-border-radius)
        }

        .card>hr {
            margin-right: 0;
            margin-left: 0
        }

        .card>.list-group {
            border-top: inherit;
            border-bottom: inherit
        }

        .card>.list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: var(--bs-card-inner-border-radius);
            border-top-right-radius: var(--bs-card-inner-border-radius)
        }

        .card>.list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: var(--bs-card-inner-border-radius);
            border-bottom-left-radius: var(--bs-card-inner-border-radius)
        }

        .card>.card-header+.list-group,
        .card>.list-group+.card-footer {
            border-top: 0
        }

        .card-body {
            flex: 1 1 auto;
            padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
            color: var(--bs-card-color)
        }

        .card-title {
            margin-bottom: var(--bs-card-title-spacer-y)
        }

        .card-subtitle {
            margin-top: calc(-.5 * var(--bs-card-title-spacer-y));
            margin-bottom: 0
        }

        .card-text:last-child {
            margin-bottom: 0
        }

        .card-link+.card-link {
            margin-left: var(--bs-card-spacer-x)
        }

        .card-header {
            padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
            margin-bottom: 0;
            color: var(--bs-card-cap-color);
            background-color: var(--bs-card-cap-bg);
            border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color)
        }

        .card-header:first-child {
            border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0
        }

        .card-footer {
            padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
            color: var(--bs-card-cap-color);
            background-color: var(--bs-card-cap-bg);
            border-top: var(--bs-card-border-width) solid var(--bs-card-border-color)
        }

        .card-footer:last-child {
            border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius)
        }

        .card-header-tabs {
            margin-right: calc(-.5 * var(--bs-card-cap-padding-x));
            margin-bottom: calc(-1 * var(--bs-card-cap-padding-y));
            margin-left: calc(-.5 * var(--bs-card-cap-padding-x));
            border-bottom: 0
        }

        .card-header-tabs .nav-link.active {
            background-color: var(--bs-card-bg);
            border-bottom-color: var(--bs-card-bg)
        }

        .card-header-pills {
            margin-right: calc(-.5 * var(--bs-card-cap-padding-x));
            margin-left: calc(-.5 * var(--bs-card-cap-padding-x))
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: var(--bs-card-img-overlay-padding);
            border-radius: var(--bs-card-inner-border-radius)
        }

        .card-img,
        .card-img-bottom,
        .card-img-top {
            width: 100%
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: var(--bs-card-inner-border-radius);
            border-top-right-radius: var(--bs-card-inner-border-radius)
        }

        .card-img,
        .card-img-bottom {
            border-bottom-right-radius: var(--bs-card-inner-border-radius);
            border-bottom-left-radius: var(--bs-card-inner-border-radius)
        }

        .card-group>.card {
            margin-bottom: var(--bs-card-group-margin)
        }

        @media (min-width:576px) {
            .card-group {
                display: flex;
                flex-flow: row wrap
            }

            .card-group>.card {
                flex: 1 0 0%;
                margin-bottom: 0
            }

            .card-group>.card+.card {
                margin-left: 0;
                border-left: 0
            }

            .card-group>.card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }

            .card-group>.card:not(:last-child) .card-header,
            .card-group>.card:not(:last-child) .card-img-top {
                border-top-right-radius: 0
            }

            .card-group>.card:not(:last-child) .card-footer,
            .card-group>.card:not(:last-child) .card-img-bottom {
                border-bottom-right-radius: 0
            }

            .card-group>.card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0
            }

            .card-group>.card:not(:first-child) .card-header,
            .card-group>.card:not(:first-child) .card-img-top {
                border-top-left-radius: 0
            }

            .card-group>.card:not(:first-child) .card-footer,
            .card-group>.card:not(:first-child) .card-img-bottom {
                border-bottom-left-radius: 0
            }
        }

        .accordion {
            --bs-accordion-color: #000;
            --bs-accordion-bg: #fff;
            --bs-accordion-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
            --bs-accordion-border-color: var(--bs-border-color);
            --bs-accordion-border-width: 1px;
            --bs-accordion-border-radius: 0.375rem;
            --bs-accordion-inner-border-radius: calc(0.375rem - 1px);
            --bs-accordion-btn-padding-x: 1.25rem;
            --bs-accordion-btn-padding-y: 1rem;
            --bs-accordion-btn-color: var(--bs-body-color);
            --bs-accordion-btn-bg: var(--bs-accordion-bg);
            --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='var%28--bs-body-color%29'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --bs-accordion-btn-icon-width: 1.25rem;
            --bs-accordion-btn-icon-transform: rotate(-180deg);
            --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
            --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --bs-accordion-btn-focus-border-color: #86b7fe;
            --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            --bs-accordion-body-padding-x: 1.25rem;
            --bs-accordion-body-padding-y: 1rem;
            --bs-accordion-active-color: #0c63e4;
            --bs-accordion-active-bg: #e7f1ff
        }

        .accordion-button {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
            font-size: 1rem;
            color: var(--bs-accordion-btn-color);
            text-align: left;
            background-color: var(--bs-accordion-btn-bg);
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            transition: var(--bs-accordion-transition)
        }

        @media (prefers-reduced-motion:reduce) {
            .accordion-button {
                transition: none
            }
        }

        .accordion-button:not(.collapsed) {
            color: var(--bs-accordion-active-color);
            background-color: var(--bs-accordion-active-bg);
            box-shadow: inset 0 calc(var(--bs-accordion-border-width) * -1) 0 var(--bs-accordion-border-color)
        }

        .accordion-button:not(.collapsed)::after {
            background-image: var(--bs-accordion-btn-active-icon);
            transform: var(--bs-accordion-btn-icon-transform)
        }

        .accordion-button::after {
            flex-shrink: 0;
            width: var(--bs-accordion-btn-icon-width);
            height: var(--bs-accordion-btn-icon-width);
            margin-left: auto;
            content: "";
            background-image: var(--bs-accordion-btn-icon);
            background-repeat: no-repeat;
            background-size: var(--bs-accordion-btn-icon-width);
            transition: var(--bs-accordion-btn-icon-transition)
        }

        @media (prefers-reduced-motion:reduce) {
            .accordion-button::after {
                transition: none
            }
        }

        .accordion-button:hover {
            z-index: 2
        }

        .accordion-button:focus {
            z-index: 3;
            border-color: var(--bs-accordion-btn-focus-border-color);
            outline: 0;
            box-shadow: var(--bs-accordion-btn-focus-box-shadow)
        }

        .accordion-header {
            margin-bottom: 0
        }

        .accordion-item {
            color: var(--bs-accordion-color);
            background-color: var(--bs-accordion-bg);
            border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color)
        }

        .accordion-item:first-of-type {
            border-top-left-radius: var(--bs-accordion-border-radius);
            border-top-right-radius: var(--bs-accordion-border-radius)
        }

        .accordion-item:first-of-type .accordion-button {
            border-top-left-radius: var(--bs-accordion-inner-border-radius);
            border-top-right-radius: var(--bs-accordion-inner-border-radius)
        }

        .accordion-item:not(:first-of-type) {
            border-top: 0
        }

        .accordion-item:last-of-type {
            border-bottom-right-radius: var(--bs-accordion-border-radius);
            border-bottom-left-radius: var(--bs-accordion-border-radius)
        }

        .accordion-item:last-of-type .accordion-button.collapsed {
            border-bottom-right-radius: var(--bs-accordion-inner-border-radius);
            border-bottom-left-radius: var(--bs-accordion-inner-border-radius)
        }

        .accordion-item:last-of-type .accordion-collapse {
            border-bottom-right-radius: var(--bs-accordion-border-radius);
            border-bottom-left-radius: var(--bs-accordion-border-radius)
        }

        .accordion-body {
            padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x)
        }

        .accordion-flush .accordion-collapse {
            border-width: 0
        }

        .accordion-flush .accordion-item {
            border-right: 0;
            border-left: 0;
            border-radius: 0
        }

        .accordion-flush .accordion-item:first-child {
            border-top: 0
        }

        .accordion-flush .accordion-item:last-child {
            border-bottom: 0
        }

        .accordion-flush .accordion-item .accordion-button {
            border-radius: 0
        }

        .breadcrumb {
            --bs-breadcrumb-padding-x: 0;
            --bs-breadcrumb-padding-y: 0;
            --bs-breadcrumb-margin-bottom: 1rem;
            --bs-breadcrumb-bg: ;
            --bs-breadcrumb-border-radius: ;
            --bs-breadcrumb-divider-color: #6c757d;
            --bs-breadcrumb-item-padding-x: 0.5rem;
            --bs-breadcrumb-item-active-color: #6c757d;
            display: flex;
            flex-wrap: wrap;
            padding: var(--bs-breadcrumb-padding-y) var(--bs-breadcrumb-padding-x);
            margin-bottom: var(--bs-breadcrumb-margin-bottom);
            font-size: var(--bs-breadcrumb-font-size);
            list-style: none;
            background-color: var(--bs-breadcrumb-bg);
            border-radius: var(--bs-breadcrumb-border-radius)
        }

        .breadcrumb-item+.breadcrumb-item {
            padding-left: var(--bs-breadcrumb-item-padding-x)
        }

        .breadcrumb-item+.breadcrumb-item::before {
            float: left;
            padding-right: var(--bs-breadcrumb-item-padding-x);
            color: var(--bs-breadcrumb-divider-color);
            content: var(--bs-breadcrumb-divider, "/")
        }

        .breadcrumb-item.active {
            color: var(--bs-breadcrumb-item-active-color)
        }

        .pagination {
            --bs-pagination-padding-x: 0.75rem;
            --bs-pagination-padding-y: 0.375rem;
            --bs-pagination-font-size: 1rem;
            --bs-pagination-color: var(--bs-link-color);
            --bs-pagination-bg: #fff;
            --bs-pagination-border-width: 1px;
            --bs-pagination-border-color: #dee2e6;
            --bs-pagination-border-radius: 0.375rem;
            --bs-pagination-hover-color: var(--bs-link-hover-color);
            --bs-pagination-hover-bg: #e9ecef;
            --bs-pagination-hover-border-color: #dee2e6;
            --bs-pagination-focus-color: var(--bs-link-hover-color);
            --bs-pagination-focus-bg: #e9ecef;
            --bs-pagination-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            --bs-pagination-active-color: #fff;
            --bs-pagination-active-bg: #0d6efd;
            --bs-pagination-active-border-color: #0d6efd;
            --bs-pagination-disabled-color: #6c757d;
            --bs-pagination-disabled-bg: #fff;
            --bs-pagination-disabled-border-color: #dee2e6;
            display: flex;
            padding-left: 0;
            list-style: none
        }

        .page-link {
            position: relative;
            display: block;
            padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
            font-size: var(--bs-pagination-font-size);
            color: var(--bs-pagination-color);
            text-decoration: none;
            background-color: var(--bs-pagination-bg);
            border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .page-link {
                transition: none
            }
        }

        .page-link:hover {
            z-index: 2;
            color: var(--bs-pagination-hover-color);
            background-color: var(--bs-pagination-hover-bg);
            border-color: var(--bs-pagination-hover-border-color)
        }

        .page-link:focus {
            z-index: 3;
            color: var(--bs-pagination-focus-color);
            background-color: var(--bs-pagination-focus-bg);
            outline: 0;
            box-shadow: var(--bs-pagination-focus-box-shadow)
        }

        .active>.page-link,
        .page-link.active {
            z-index: 3;
            color: var(--bs-pagination-active-color);
            background-color: var(--bs-pagination-active-bg);
            border-color: var(--bs-pagination-active-border-color)
        }

        .disabled>.page-link,
        .page-link.disabled {
            color: var(--bs-pagination-disabled-color);
            pointer-events: none;
            background-color: var(--bs-pagination-disabled-bg);
            border-color: var(--bs-pagination-disabled-border-color)
        }

        .page-item:not(:first-child) .page-link {
            margin-left: -1px
        }

        .page-item:first-child .page-link {
            border-top-left-radius: var(--bs-pagination-border-radius);
            border-bottom-left-radius: var(--bs-pagination-border-radius)
        }

        .page-item:last-child .page-link {
            border-top-right-radius: var(--bs-pagination-border-radius);
            border-bottom-right-radius: var(--bs-pagination-border-radius)
        }

        .pagination-lg {
            --bs-pagination-padding-x: 1.5rem;
            --bs-pagination-padding-y: 0.75rem;
            --bs-pagination-font-size: 1.25rem;
            --bs-pagination-border-radius: 0.5rem
        }

        .pagination-sm {
            --bs-pagination-padding-x: 0.5rem;
            --bs-pagination-padding-y: 0.25rem;
            --bs-pagination-font-size: 0.875rem;
            --bs-pagination-border-radius: 0.25rem
        }

        .badge {
            --bs-badge-padding-x: 0.65em;
            --bs-badge-padding-y: 0.35em;
            --bs-badge-font-size: 0.75em;
            --bs-badge-font-weight: 700;
            --bs-badge-color: #fff;
            --bs-badge-border-radius: 0.375rem;
            display: inline-block;
            padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
            font-size: var(--bs-badge-font-size);
            font-weight: var(--bs-badge-font-weight);
            line-height: 1;
            color: var(--bs-badge-color);
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: var(--bs-badge-border-radius, 0)
        }

        .badge:empty {
            display: none
        }

        .btn .badge {
            position: relative;
            top: -1px
        }

        .alert {
            --bs-alert-bg: transparent;
            --bs-alert-padding-x: 1rem;
            --bs-alert-padding-y: 1rem;
            --bs-alert-margin-bottom: 1rem;
            --bs-alert-color: inherit;
            --bs-alert-border-color: transparent;
            --bs-alert-border: 1px solid var(--bs-alert-border-color);
            --bs-alert-border-radius: 0.375rem;
            position: relative;
            padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
            margin-bottom: var(--bs-alert-margin-bottom);
            color: var(--bs-alert-color);
            background-color: var(--bs-alert-bg);
            border: var(--bs-alert-border);
            border-radius: var(--bs-alert-border-radius, 0)
        }

        .alert-heading {
            color: inherit
        }

        .alert-link {
            font-weight: 700
        }

        .alert-dismissible {
            padding-right: 3rem
        }

        .alert-dismissible .btn-close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            padding: 1.25rem 1rem
        }

        .alert-primary {
            --bs-alert-color: #084298;
            --bs-alert-bg: #cfe2ff;
            --bs-alert-border-color: #b6d4fe
        }

        .alert-primary .alert-link {
            color: #06357a
        }

        .alert-secondary {
            --bs-alert-color: #41464b;
            --bs-alert-bg: #e2e3e5;
            --bs-alert-border-color: #d3d6d8
        }

        .alert-secondary .alert-link {
            color: #34383c
        }

        .alert-success {
            --bs-alert-color: #0f5132;
            --bs-alert-bg: #d1e7dd;
            --bs-alert-border-color: #badbcc
        }

        .alert-success .alert-link {
            color: #0c4128
        }

        .alert-info {
            --bs-alert-color: #055160;
            --bs-alert-bg: #cff4fc;
            --bs-alert-border-color: #b6effb
        }

        .alert-info .alert-link {
            color: #04414d
        }

        .alert-warning {
            --bs-alert-color: #664d03;
            --bs-alert-bg: #fff3cd;
            --bs-alert-border-color: #ffecb5
        }

        .alert-warning .alert-link {
            color: #523e02
        }

        .alert-danger {
            --bs-alert-color: #842029;
            --bs-alert-bg: #f8d7da;
            --bs-alert-border-color: #f5c2c7
        }

        .alert-danger .alert-link {
            color: #6a1a21
        }

        .alert-light {
            --bs-alert-color: #636464;
            --bs-alert-bg: #fefefe;
            --bs-alert-border-color: #fdfdfe
        }

        .alert-light .alert-link {
            color: #4f5050
        }

        .alert-dark {
            --bs-alert-color: #141619;
            --bs-alert-bg: #d3d3d4;
            --bs-alert-border-color: #bcbebf
        }

        .alert-dark .alert-link {
            color: #101214
        }

        @-webkit-keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem
            }
        }

        @keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem
            }
        }

        .progress {
            --bs-progress-height: 1rem;
            --bs-progress-font-size: 0.75rem;
            --bs-progress-bg: #e9ecef;
            --bs-progress-border-radius: 0.375rem;
            --bs-progress-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
            --bs-progress-bar-color: #fff;
            --bs-progress-bar-bg: #0d6efd;
            --bs-progress-bar-transition: width 0.6s ease;
            display: flex;
            height: var(--bs-progress-height);
            overflow: hidden;
            font-size: var(--bs-progress-font-size);
            background-color: var(--bs-progress-bg);
            border-radius: var(--bs-progress-border-radius)
        }

        .progress-bar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            color: var(--bs-progress-bar-color);
            text-align: center;
            white-space: nowrap;
            background-color: var(--bs-progress-bar-bg);
            transition: var(--bs-progress-bar-transition)
        }

        @media (prefers-reduced-motion:reduce) {
            .progress-bar {
                transition: none
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-size: var(--bs-progress-height) var(--bs-progress-height)
        }

        .progress-bar-animated {
            -webkit-animation: 1s linear infinite progress-bar-stripes;
            animation: 1s linear infinite progress-bar-stripes
        }

        @media (prefers-reduced-motion:reduce) {
            .progress-bar-animated {
                -webkit-animation: none;
                animation: none
            }
        }

        .list-group {
            --bs-list-group-color: #212529;
            --bs-list-group-bg: #fff;
            --bs-list-group-border-color: rgba(0, 0, 0, 0.125);
            --bs-list-group-border-width: 1px;
            --bs-list-group-border-radius: 0.375rem;
            --bs-list-group-item-padding-x: 1rem;
            --bs-list-group-item-padding-y: 0.5rem;
            --bs-list-group-action-color: #495057;
            --bs-list-group-action-hover-color: #495057;
            --bs-list-group-action-hover-bg: #f8f9fa;
            --bs-list-group-action-active-color: #212529;
            --bs-list-group-action-active-bg: #e9ecef;
            --bs-list-group-disabled-color: #6c757d;
            --bs-list-group-disabled-bg: #fff;
            --bs-list-group-active-color: #fff;
            --bs-list-group-active-bg: #0d6efd;
            --bs-list-group-active-border-color: #0d6efd;
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: var(--bs-list-group-border-radius)
        }

        .list-group-numbered {
            list-style-type: none;
            counter-reset: section
        }

        .list-group-numbered>.list-group-item::before {
            content: counters(section, ".") ". ";
            counter-increment: section
        }

        .list-group-item-action {
            width: 100%;
            color: var(--bs-list-group-action-color);
            text-align: inherit
        }

        .list-group-item-action:focus,
        .list-group-item-action:hover {
            z-index: 1;
            color: var(--bs-list-group-action-hover-color);
            text-decoration: none;
            background-color: var(--bs-list-group-action-hover-bg)
        }

        .list-group-item-action:active {
            color: var(--bs-list-group-action-active-color);
            background-color: var(--bs-list-group-action-active-bg)
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
            color: var(--bs-list-group-color);
            text-decoration: none;
            background-color: var(--bs-list-group-bg);
            border: var(--bs-list-group-border-width) solid var(--bs-list-group-border-color)
        }

        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit
        }

        .list-group-item:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit
        }

        .list-group-item.disabled,
        .list-group-item:disabled {
            color: var(--bs-list-group-disabled-color);
            pointer-events: none;
            background-color: var(--bs-list-group-disabled-bg)
        }

        .list-group-item.active {
            z-index: 2;
            color: var(--bs-list-group-active-color);
            background-color: var(--bs-list-group-active-bg);
            border-color: var(--bs-list-group-active-border-color)
        }

        .list-group-item+.list-group-item {
            border-top-width: 0
        }

        .list-group-item+.list-group-item.active {
            margin-top: calc(var(--bs-list-group-border-width) * -1);
            border-top-width: var(--bs-list-group-border-width)
        }

        .list-group-horizontal {
            flex-direction: row
        }

        .list-group-horizontal>.list-group-item:first-child {
            border-bottom-left-radius: var(--bs-list-group-border-radius);
            border-top-right-radius: 0
        }

        .list-group-horizontal>.list-group-item:last-child {
            border-top-right-radius: var(--bs-list-group-border-radius);
            border-bottom-left-radius: 0
        }

        .list-group-horizontal>.list-group-item.active {
            margin-top: 0
        }

        .list-group-horizontal>.list-group-item+.list-group-item {
            border-top-width: var(--bs-list-group-border-width);
            border-left-width: 0
        }

        .list-group-horizontal>.list-group-item+.list-group-item.active {
            margin-left: calc(var(--bs-list-group-border-width) * -1);
            border-left-width: var(--bs-list-group-border-width)
        }

        @media (min-width:576px) {
            .list-group-horizontal-sm {
                flex-direction: row
            }

            .list-group-horizontal-sm>.list-group-item:first-child {
                border-bottom-left-radius: var(--bs-list-group-border-radius);
                border-top-right-radius: 0
            }

            .list-group-horizontal-sm>.list-group-item:last-child {
                border-top-right-radius: var(--bs-list-group-border-radius);
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-sm>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item {
                border-top-width: var(--bs-list-group-border-width);
                border-left-width: 0
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
                margin-left: calc(var(--bs-list-group-border-width) * -1);
                border-left-width: var(--bs-list-group-border-width)
            }
        }

        @media (min-width:768px) {
            .list-group-horizontal-md {
                flex-direction: row
            }

            .list-group-horizontal-md>.list-group-item:first-child {
                border-bottom-left-radius: var(--bs-list-group-border-radius);
                border-top-right-radius: 0
            }

            .list-group-horizontal-md>.list-group-item:last-child {
                border-top-right-radius: var(--bs-list-group-border-radius);
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-md>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item {
                border-top-width: var(--bs-list-group-border-width);
                border-left-width: 0
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item.active {
                margin-left: calc(var(--bs-list-group-border-width) * -1);
                border-left-width: var(--bs-list-group-border-width)
            }
        }

        @media (min-width:992px) {
            .list-group-horizontal-lg {
                flex-direction: row
            }

            .list-group-horizontal-lg>.list-group-item:first-child {
                border-bottom-left-radius: var(--bs-list-group-border-radius);
                border-top-right-radius: 0
            }

            .list-group-horizontal-lg>.list-group-item:last-child {
                border-top-right-radius: var(--bs-list-group-border-radius);
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-lg>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item {
                border-top-width: var(--bs-list-group-border-width);
                border-left-width: 0
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
                margin-left: calc(var(--bs-list-group-border-width) * -1);
                border-left-width: var(--bs-list-group-border-width)
            }
        }

        @media (min-width:1200px) {
            .list-group-horizontal-xl {
                flex-direction: row
            }

            .list-group-horizontal-xl>.list-group-item:first-child {
                border-bottom-left-radius: var(--bs-list-group-border-radius);
                border-top-right-radius: 0
            }

            .list-group-horizontal-xl>.list-group-item:last-child {
                border-top-right-radius: var(--bs-list-group-border-radius);
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-xl>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item {
                border-top-width: var(--bs-list-group-border-width);
                border-left-width: 0
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
                margin-left: calc(var(--bs-list-group-border-width) * -1);
                border-left-width: var(--bs-list-group-border-width)
            }
        }

        @media (min-width:1400px) {
            .list-group-horizontal-xxl {
                flex-direction: row
            }

            .list-group-horizontal-xxl>.list-group-item:first-child {
                border-bottom-left-radius: var(--bs-list-group-border-radius);
                border-top-right-radius: 0
            }

            .list-group-horizontal-xxl>.list-group-item:last-child {
                border-top-right-radius: var(--bs-list-group-border-radius);
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-xxl>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-xxl>.list-group-item+.list-group-item {
                border-top-width: var(--bs-list-group-border-width);
                border-left-width: 0
            }

            .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
                margin-left: calc(var(--bs-list-group-border-width) * -1);
                border-left-width: var(--bs-list-group-border-width)
            }
        }

        .list-group-flush {
            border-radius: 0
        }

        .list-group-flush>.list-group-item {
            border-width: 0 0 var(--bs-list-group-border-width)
        }

        .list-group-flush>.list-group-item:last-child {
            border-bottom-width: 0
        }

        .list-group-item-primary {
            color: #084298;
            background-color: #cfe2ff
        }

        .list-group-item-primary.list-group-item-action:focus,
        .list-group-item-primary.list-group-item-action:hover {
            color: #084298;
            background-color: #bacbe6
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #084298;
            border-color: #084298
        }

        .list-group-item-secondary {
            color: #41464b;
            background-color: #e2e3e5
        }

        .list-group-item-secondary.list-group-item-action:focus,
        .list-group-item-secondary.list-group-item-action:hover {
            color: #41464b;
            background-color: #cbccce
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #41464b;
            border-color: #41464b
        }

        .list-group-item-success {
            color: #0f5132;
            background-color: #d1e7dd
        }

        .list-group-item-success.list-group-item-action:focus,
        .list-group-item-success.list-group-item-action:hover {
            color: #0f5132;
            background-color: #bcd0c7
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #0f5132;
            border-color: #0f5132
        }

        .list-group-item-info {
            color: #055160;
            background-color: #cff4fc
        }

        .list-group-item-info.list-group-item-action:focus,
        .list-group-item-info.list-group-item-action:hover {
            color: #055160;
            background-color: #badce3
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #055160;
            border-color: #055160
        }

        .list-group-item-warning {
            color: #664d03;
            background-color: #fff3cd
        }

        .list-group-item-warning.list-group-item-action:focus,
        .list-group-item-warning.list-group-item-action:hover {
            color: #664d03;
            background-color: #e6dbb9
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #664d03;
            border-color: #664d03
        }

        .list-group-item-danger {
            color: #842029;
            background-color: #f8d7da
        }

        .list-group-item-danger.list-group-item-action:focus,
        .list-group-item-danger.list-group-item-action:hover {
            color: #842029;
            background-color: #dfc2c4
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #842029;
            border-color: #842029
        }

        .list-group-item-light {
            color: #636464;
            background-color: #fefefe
        }

        .list-group-item-light.list-group-item-action:focus,
        .list-group-item-light.list-group-item-action:hover {
            color: #636464;
            background-color: #e5e5e5
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #636464;
            border-color: #636464
        }

        .list-group-item-dark {
            color: #141619;
            background-color: #d3d3d4
        }

        .list-group-item-dark.list-group-item-action:focus,
        .list-group-item-dark.list-group-item-action:hover {
            color: #141619;
            background-color: #bebebf
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #141619;
            border-color: #141619
        }

        .btn-close {
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: .25em .25em;
            color: #000;
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            border: 0;
            border-radius: .375rem;
            opacity: .5
        }

        .btn-close:hover {
            color: #000;
            text-decoration: none;
            opacity: .75
        }

        .btn-close:focus {
            outline: 0;
            box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25);
            opacity: 1
        }

        .btn-close.disabled,
        .btn-close:disabled {
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            opacity: .25
        }

        .btn-close-white {
            filter: invert(1) grayscale(100%) brightness(200%)
        }

        .toast {
            --bs-toast-padding-x: 0.75rem;
            --bs-toast-padding-y: 0.5rem;
            --bs-toast-spacing: 1.5rem;
            --bs-toast-max-width: 350px;
            --bs-toast-font-size: 0.875rem;
            --bs-toast-color: ;
            --bs-toast-bg: rgba(255, 255, 255, 0.85);
            --bs-toast-border-width: 1px;
            --bs-toast-border-color: var(--bs-border-color-translucent);
            --bs-toast-border-radius: 0.375rem;
            --bs-toast-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --bs-toast-header-color: #6c757d;
            --bs-toast-header-bg: rgba(255, 255, 255, 0.85);
            --bs-toast-header-border-color: rgba(0, 0, 0, 0.05);
            width: var(--bs-toast-max-width);
            max-width: 100%;
            font-size: var(--bs-toast-font-size);
            color: var(--bs-toast-color);
            pointer-events: auto;
            background-color: var(--bs-toast-bg);
            background-clip: padding-box;
            border: var(--bs-toast-border-width) solid var(--bs-toast-border-color);
            box-shadow: var(--bs-toast-box-shadow);
            border-radius: var(--bs-toast-border-radius)
        }

        .toast.showing {
            opacity: 0
        }

        .toast:not(.show) {
            display: none
        }

        .toast-container {
            position: absolute;
            z-index: 1090;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 100%;
            pointer-events: none
        }

        .toast-container>:not(:last-child) {
            margin-bottom: var(--bs-toast-spacing)
        }

        .toast-header {
            display: flex;
            align-items: center;
            padding: var(--bs-toast-padding-y) var(--bs-toast-padding-x);
            color: var(--bs-toast-header-color);
            background-color: var(--bs-toast-header-bg);
            background-clip: padding-box;
            border-bottom: var(--bs-toast-border-width) solid var(--bs-toast-header-border-color);
            border-top-left-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
            border-top-right-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width))
        }

        .toast-header .btn-close {
            margin-right: calc(var(--bs-toast-padding-x) * -.5);
            margin-left: var(--bs-toast-padding-x)
        }

        .toast-body {
            padding: var(--bs-toast-padding-x);
            word-wrap: break-word
        }

        .modal {
            --bs-modal-zindex: 1055;
            --bs-modal-width: 500px;
            --bs-modal-padding: 1rem;
            --bs-modal-margin: 0.5rem;
            --bs-modal-color: ;
            --bs-modal-bg: #fff;
            --bs-modal-border-color: var(--bs-border-color-translucent);
            --bs-modal-border-width: 1px;
            --bs-modal-border-radius: 0.5rem;
            --bs-modal-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            --bs-modal-inner-border-radius: calc(0.5rem - 1px);
            --bs-modal-header-padding-x: 1rem;
            --bs-modal-header-padding-y: 1rem;
            --bs-modal-header-padding: 1rem 1rem;
            --bs-modal-header-border-color: var(--bs-border-color);
            --bs-modal-header-border-width: 1px;
            --bs-modal-title-line-height: 1.5;
            --bs-modal-footer-gap: 0.5rem;
            --bs-modal-footer-bg: ;
            --bs-modal-footer-border-color: var(--bs-border-color);
            --bs-modal-footer-border-width: 1px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: var(--bs-modal-zindex);
            display: none;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: var(--bs-modal-margin);
            pointer-events: none
        }

        .modal.fade .modal-dialog {
            transition: transform .3s ease-out;
            transform: translate(0, -50px)
        }

        @media (prefers-reduced-motion:reduce) {
            .modal.fade .modal-dialog {
                transition: none
            }
        }

        .modal.show .modal-dialog {
            transform: none
        }

        .modal.modal-static .modal-dialog {
            transform: scale(1.02)
        }

        .modal-dialog-scrollable {
            height: calc(100% - var(--bs-modal-margin) * 2)
        }

        .modal-dialog-scrollable .modal-content {
            max-height: 100%;
            overflow: hidden
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto
        }

        .modal-dialog-centered {
            display: flex;
            align-items: center;
            min-height: calc(100% - var(--bs-modal-margin) * 2)
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            color: var(--bs-modal-color);
            pointer-events: auto;
            background-color: var(--bs-modal-bg);
            background-clip: padding-box;
            border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
            border-radius: var(--bs-modal-border-radius);
            outline: 0
        }

        .modal-backdrop {
            --bs-backdrop-zindex: 1050;
            --bs-backdrop-bg: #000;
            --bs-backdrop-opacity: 0.5;
            position: fixed;
            top: 0;
            left: 0;
            z-index: var(--bs-backdrop-zindex);
            width: 100vw;
            height: 100vh;
            background-color: var(--bs-backdrop-bg)
        }

        .modal-backdrop.fade {
            opacity: 0
        }

        .modal-backdrop.show {
            opacity: var(--bs-backdrop-opacity)
        }

        .modal-header {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            justify-content: space-between;
            padding: var(--bs-modal-header-padding);
            border-bottom: var(--bs-modal-header-border-width) solid var(--bs-modal-header-border-color);
            border-top-left-radius: var(--bs-modal-inner-border-radius);
            border-top-right-radius: var(--bs-modal-inner-border-radius)
        }

        .modal-header .btn-close {
            padding: calc(var(--bs-modal-header-padding-y) * .5) calc(var(--bs-modal-header-padding-x) * .5);
            margin: calc(var(--bs-modal-header-padding-y) * -.5) calc(var(--bs-modal-header-padding-x) * -.5) calc(var(--bs-modal-header-padding-y) * -.5) auto
        }

        .modal-title {
            margin-bottom: 0;
            line-height: var(--bs-modal-title-line-height)
        }

        .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: var(--bs-modal-padding)
        }

        .modal-footer {
            display: flex;
            flex-shrink: 0;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * .5);
            background-color: var(--bs-modal-footer-bg);
            border-top: var(--bs-modal-footer-border-width) solid var(--bs-modal-footer-border-color);
            border-bottom-right-radius: var(--bs-modal-inner-border-radius);
            border-bottom-left-radius: var(--bs-modal-inner-border-radius)
        }

        .modal-footer>* {
            margin: calc(var(--bs-modal-footer-gap) * .5)
        }

        @media (min-width:576px) {
            .modal {
                --bs-modal-margin: 1.75rem;
                --bs-modal-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15)
            }

            .modal-dialog {
                max-width: var(--bs-modal-width);
                margin-right: auto;
                margin-left: auto
            }

            .modal-sm {
                --bs-modal-width: 300px
            }
        }

        @media (min-width:992px) {

            .modal-lg,
            .modal-xl {
                --bs-modal-width: 800px
            }
        }

        @media (min-width:1200px) {
            .modal-xl {
                --bs-modal-width: 1140px
            }
        }

        .modal-fullscreen {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0
        }

        .modal-fullscreen .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0
        }

        .modal-fullscreen .modal-footer,
        .modal-fullscreen .modal-header {
            border-radius: 0
        }

        .modal-fullscreen .modal-body {
            overflow-y: auto
        }

        @media (max-width:575.98px) {
            .modal-fullscreen-sm-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-sm-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0
            }

            .modal-fullscreen-sm-down .modal-footer,
            .modal-fullscreen-sm-down .modal-header {
                border-radius: 0
            }

            .modal-fullscreen-sm-down .modal-body {
                overflow-y: auto
            }
        }

        @media (max-width:767.98px) {
            .modal-fullscreen-md-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-md-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0
            }

            .modal-fullscreen-md-down .modal-footer,
            .modal-fullscreen-md-down .modal-header {
                border-radius: 0
            }

            .modal-fullscreen-md-down .modal-body {
                overflow-y: auto
            }
        }

        @media (max-width:991.98px) {
            .modal-fullscreen-lg-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-lg-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0
            }

            .modal-fullscreen-lg-down .modal-footer,
            .modal-fullscreen-lg-down .modal-header {
                border-radius: 0
            }

            .modal-fullscreen-lg-down .modal-body {
                overflow-y: auto
            }
        }

        @media (max-width:1199.98px) {
            .modal-fullscreen-xl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-xl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0
            }

            .modal-fullscreen-xl-down .modal-footer,
            .modal-fullscreen-xl-down .modal-header {
                border-radius: 0
            }

            .modal-fullscreen-xl-down .modal-body {
                overflow-y: auto
            }
        }

        @media (max-width:1399.98px) {
            .modal-fullscreen-xxl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-xxl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0
            }

            .modal-fullscreen-xxl-down .modal-footer,
            .modal-fullscreen-xxl-down .modal-header {
                border-radius: 0
            }

            .modal-fullscreen-xxl-down .modal-body {
                overflow-y: auto
            }
        }

        .tooltip {
            --bs-tooltip-zindex: 1080;
            --bs-tooltip-max-width: 200px;
            --bs-tooltip-padding-x: 0.5rem;
            --bs-tooltip-padding-y: 0.25rem;
            --bs-tooltip-margin: ;
            --bs-tooltip-font-size: 0.875rem;
            --bs-tooltip-color: #fff;
            --bs-tooltip-bg: #000;
            --bs-tooltip-border-radius: 0.375rem;
            --bs-tooltip-opacity: 0.9;
            --bs-tooltip-arrow-width: 0.8rem;
            --bs-tooltip-arrow-height: 0.4rem;
            z-index: var(--bs-tooltip-zindex);
            display: block;
            padding: var(--bs-tooltip-arrow-height);
            margin: var(--bs-tooltip-margin);
            font-family: var(--bs-font-sans-serif);
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            white-space: normal;
            word-spacing: normal;
            line-break: auto;
            font-size: var(--bs-tooltip-font-size);
            word-wrap: break-word;
            opacity: 0
        }

        .tooltip.show {
            opacity: var(--bs-tooltip-opacity)
        }

        .tooltip .tooltip-arrow {
            display: block;
            width: var(--bs-tooltip-arrow-width);
            height: var(--bs-tooltip-arrow-height)
        }

        .tooltip .tooltip-arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid
        }

        .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow,
        .bs-tooltip-top .tooltip-arrow {
            bottom: 0
        }

        .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before,
        .bs-tooltip-top .tooltip-arrow::before {
            top: -1px;
            border-width: var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * .5) 0;
            border-top-color: var(--bs-tooltip-bg)
        }

        .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow,
        .bs-tooltip-end .tooltip-arrow {
            left: 0;
            width: var(--bs-tooltip-arrow-height);
            height: var(--bs-tooltip-arrow-width)
        }

        .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before,
        .bs-tooltip-end .tooltip-arrow::before {
            right: -1px;
            border-width: calc(var(--bs-tooltip-arrow-width) * .5) var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * .5) 0;
            border-right-color: var(--bs-tooltip-bg)
        }

        .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow,
        .bs-tooltip-bottom .tooltip-arrow {
            top: 0
        }

        .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before,
        .bs-tooltip-bottom .tooltip-arrow::before {
            bottom: -1px;
            border-width: 0 calc(var(--bs-tooltip-arrow-width) * .5) var(--bs-tooltip-arrow-height);
            border-bottom-color: var(--bs-tooltip-bg)
        }

        .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow,
        .bs-tooltip-start .tooltip-arrow {
            right: 0;
            width: var(--bs-tooltip-arrow-height);
            height: var(--bs-tooltip-arrow-width)
        }

        .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before,
        .bs-tooltip-start .tooltip-arrow::before {
            left: -1px;
            border-width: calc(var(--bs-tooltip-arrow-width) * .5) 0 calc(var(--bs-tooltip-arrow-width) * .5) var(--bs-tooltip-arrow-height);
            border-left-color: var(--bs-tooltip-bg)
        }

        .tooltip-inner {
            max-width: var(--bs-tooltip-max-width);
            padding: var(--bs-tooltip-padding-y) var(--bs-tooltip-padding-x);
            color: var(--bs-tooltip-color);
            text-align: center;
            background-color: var(--bs-tooltip-bg);
            border-radius: var(--bs-tooltip-border-radius, 0)
        }

        .popover {
            --bs-popover-zindex: 1070;
            --bs-popover-max-width: 276px;
            --bs-popover-font-size: 0.875rem;
            --bs-popover-bg: #fff;
            --bs-popover-border-width: 1px;
            --bs-popover-border-color: var(--bs-border-color-translucent);
            --bs-popover-border-radius: 0.5rem;
            --bs-popover-inner-border-radius: calc(0.5rem - 1px);
            --bs-popover-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --bs-popover-header-padding-x: 1rem;
            --bs-popover-header-padding-y: 0.5rem;
            --bs-popover-header-font-size: 1rem;
            --bs-popover-header-color: var(--bs-heading-color);
            --bs-popover-header-bg: #f0f0f0;
            --bs-popover-body-padding-x: 1rem;
            --bs-popover-body-padding-y: 1rem;
            --bs-popover-body-color: #212529;
            --bs-popover-arrow-width: 1rem;
            --bs-popover-arrow-height: 0.5rem;
            --bs-popover-arrow-border: var(--bs-popover-border-color);
            z-index: var(--bs-popover-zindex);
            display: block;
            max-width: var(--bs-popover-max-width);
            font-family: var(--bs-font-sans-serif);
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            white-space: normal;
            word-spacing: normal;
            line-break: auto;
            font-size: var(--bs-popover-font-size);
            word-wrap: break-word;
            background-color: var(--bs-popover-bg);
            background-clip: padding-box;
            border: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
            border-radius: var(--bs-popover-border-radius)
        }

        .popover .popover-arrow {
            display: block;
            width: var(--bs-popover-arrow-width);
            height: var(--bs-popover-arrow-height)
        }

        .popover .popover-arrow::after,
        .popover .popover-arrow::before {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid;
            border-width: 0
        }

        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow,
        .bs-popover-top>.popover-arrow {
            bottom: calc(var(--bs-popover-arrow-height) * -1 - var(--bs-popover-border-width))
        }

        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,
        .bs-popover-top>.popover-arrow::after,
        .bs-popover-top>.popover-arrow::before {
            border-width: var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * .5) 0
        }

        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,
        .bs-popover-top>.popover-arrow::before {
            bottom: 0;
            border-top-color: var(--bs-popover-arrow-border)
        }

        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after,
        .bs-popover-top>.popover-arrow::after {
            bottom: var(--bs-popover-border-width);
            border-top-color: var(--bs-popover-bg)
        }

        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow,
        .bs-popover-end>.popover-arrow {
            left: calc(var(--bs-popover-arrow-height) * -1 - var(--bs-popover-border-width));
            width: var(--bs-popover-arrow-height);
            height: var(--bs-popover-arrow-width)
        }

        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,
        .bs-popover-end>.popover-arrow::after,
        .bs-popover-end>.popover-arrow::before {
            border-width: calc(var(--bs-popover-arrow-width) * .5) var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * .5) 0
        }

        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,
        .bs-popover-end>.popover-arrow::before {
            left: 0;
            border-right-color: var(--bs-popover-arrow-border)
        }

        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after,
        .bs-popover-end>.popover-arrow::after {
            left: var(--bs-popover-border-width);
            border-right-color: var(--bs-popover-bg)
        }

        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow,
        .bs-popover-bottom>.popover-arrow {
            top: calc(var(--bs-popover-arrow-height) * -1 - var(--bs-popover-border-width))
        }

        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,
        .bs-popover-bottom>.popover-arrow::after,
        .bs-popover-bottom>.popover-arrow::before {
            border-width: 0 calc(var(--bs-popover-arrow-width) * .5) var(--bs-popover-arrow-height)
        }

        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,
        .bs-popover-bottom>.popover-arrow::before {
            top: 0;
            border-bottom-color: var(--bs-popover-arrow-border)
        }

        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after,
        .bs-popover-bottom>.popover-arrow::after {
            top: var(--bs-popover-border-width);
            border-bottom-color: var(--bs-popover-bg)
        }

        .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before,
        .bs-popover-bottom .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: var(--bs-popover-arrow-width);
            margin-left: calc(var(--bs-popover-arrow-width) * -.5);
            content: "";
            border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-header-bg)
        }

        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow,
        .bs-popover-start>.popover-arrow {
            right: calc(var(--bs-popover-arrow-height) * -1 - var(--bs-popover-border-width));
            width: var(--bs-popover-arrow-height);
            height: var(--bs-popover-arrow-width)
        }

        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,
        .bs-popover-start>.popover-arrow::after,
        .bs-popover-start>.popover-arrow::before {
            border-width: calc(var(--bs-popover-arrow-width) * .5) 0 calc(var(--bs-popover-arrow-width) * .5) var(--bs-popover-arrow-height)
        }

        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,
        .bs-popover-start>.popover-arrow::before {
            right: 0;
            border-left-color: var(--bs-popover-arrow-border)
        }

        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after,
        .bs-popover-start>.popover-arrow::after {
            right: var(--bs-popover-border-width);
            border-left-color: var(--bs-popover-bg)
        }

        .popover-header {
            padding: var(--bs-popover-header-padding-y) var(--bs-popover-header-padding-x);
            margin-bottom: 0;
            font-size: var(--bs-popover-header-font-size);
            color: var(--bs-popover-header-color);
            background-color: var(--bs-popover-header-bg);
            border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
            border-top-left-radius: var(--bs-popover-inner-border-radius);
            border-top-right-radius: var(--bs-popover-inner-border-radius)
        }

        .popover-header:empty {
            display: none
        }

        .popover-body {
            padding: var(--bs-popover-body-padding-y) var(--bs-popover-body-padding-x);
            color: var(--bs-popover-body-color)
        }

        .carousel {
            position: relative
        }

        .carousel.pointer-event {
            touch-action: pan-y
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden
        }

        .carousel-inner::after {
            display: block;
            clear: both;
            content: ""
        }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: transform .6s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .carousel-item {
                transition: none
            }
        }

        .carousel-item-next,
        .carousel-item-prev,
        .carousel-item.active {
            display: block
        }

        .active.carousel-item-end,
        .carousel-item-next:not(.carousel-item-start) {
            transform: translateX(100%)
        }

        .active.carousel-item-start,
        .carousel-item-prev:not(.carousel-item-end) {
            transform: translateX(-100%)
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            transition-property: opacity;
            transform: none
        }

        .carousel-fade .carousel-item-next.carousel-item-start,
        .carousel-fade .carousel-item-prev.carousel-item-end,
        .carousel-fade .carousel-item.active {
            z-index: 1;
            opacity: 1
        }

        .carousel-fade .active.carousel-item-end,
        .carousel-fade .active.carousel-item-start {
            z-index: 0;
            opacity: 0;
            transition: opacity 0s .6s
        }

        @media (prefers-reduced-motion:reduce) {

            .carousel-fade .active.carousel-item-end,
            .carousel-fade .active.carousel-item-start {
                transition: none
            }
        }

        .carousel-control-next,
        .carousel-control-prev {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15%;
            padding: 0;
            color: #fff;
            text-align: center;
            background: 0 0;
            border: 0;
            opacity: .5;
            transition: opacity .15s ease
        }

        @media (prefers-reduced-motion:reduce) {

            .carousel-control-next,
            .carousel-control-prev {
                transition: none
            }
        }

        .carousel-control-next:focus,
        .carousel-control-next:hover,
        .carousel-control-prev:focus,
        .carousel-control-prev:hover {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: .9
        }

        .carousel-control-prev {
            left: 0
        }

        .carousel-control-next {
            right: 0
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: 100% 100%
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e")
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 2;
            display: flex;
            justify-content: center;
            padding: 0;
            margin-right: 15%;
            margin-bottom: 1rem;
            margin-left: 15%;
            list-style: none
        }

        .carousel-indicators [data-bs-target] {
            box-sizing: content-box;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            padding: 0;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: .5;
            transition: opacity .6s ease
        }

        @media (prefers-reduced-motion:reduce) {
            .carousel-indicators [data-bs-target] {
                transition: none
            }
        }

        .carousel-indicators .active {
            opacity: 1
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 1.25rem;
            left: 15%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: #fff;
            text-align: center
        }

        .carousel-dark .carousel-control-next-icon,
        .carousel-dark .carousel-control-prev-icon {
            filter: invert(1) grayscale(100)
        }

        .carousel-dark .carousel-indicators [data-bs-target] {
            background-color: #000
        }

        .carousel-dark .carousel-caption {
            color: #000
        }

        .spinner-border,
        .spinner-grow {
            display: inline-block;
            width: var(--bs-spinner-width);
            height: var(--bs-spinner-height);
            vertical-align: var(--bs-spinner-vertical-align);
            border-radius: 50%;
            -webkit-animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name);
            animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name)
        }

        @-webkit-keyframes spinner-border {
            to {
                transform: rotate(360deg)
            }
        }

        @keyframes spinner-border {
            to {
                transform: rotate(360deg)
            }
        }

        .spinner-border {
            --bs-spinner-width: 2rem;
            --bs-spinner-height: 2rem;
            --bs-spinner-vertical-align: -0.125em;
            --bs-spinner-border-width: 0.25em;
            --bs-spinner-animation-speed: 0.75s;
            --bs-spinner-animation-name: spinner-border;
            border: var(--bs-spinner-border-width) solid currentcolor;
            border-right-color: transparent
        }

        .spinner-border-sm {
            --bs-spinner-width: 1rem;
            --bs-spinner-height: 1rem;
            --bs-spinner-border-width: 0.2em
        }

        @-webkit-keyframes spinner-grow {
            0% {
                transform: scale(0)
            }

            50% {
                opacity: 1;
                transform: none
            }
        }

        @keyframes spinner-grow {
            0% {
                transform: scale(0)
            }

            50% {
                opacity: 1;
                transform: none
            }
        }

        .spinner-grow {
            --bs-spinner-width: 2rem;
            --bs-spinner-height: 2rem;
            --bs-spinner-vertical-align: -0.125em;
            --bs-spinner-animation-speed: 0.75s;
            --bs-spinner-animation-name: spinner-grow;
            background-color: currentcolor;
            opacity: 0
        }

        .spinner-grow-sm {
            --bs-spinner-width: 1rem;
            --bs-spinner-height: 1rem
        }

        @media (prefers-reduced-motion:reduce) {

            .spinner-border,
            .spinner-grow {
                --bs-spinner-animation-speed: 1.5s
            }
        }

        .offcanvas,
        .offcanvas-lg,
        .offcanvas-md,
        .offcanvas-sm,
        .offcanvas-xl,
        .offcanvas-xxl {
            --bs-offcanvas-width: 400px;
            --bs-offcanvas-height: 30vh;
            --bs-offcanvas-padding-x: 1rem;
            --bs-offcanvas-padding-y: 1rem;
            --bs-offcanvas-color: ;
            --bs-offcanvas-bg: #fff;
            --bs-offcanvas-border-width: 1px;
            --bs-offcanvas-border-color: var(--bs-border-color-translucent);
            --bs-offcanvas-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075)
        }

        @media (max-width:575.98px) {
            .offcanvas-sm {
                position: fixed;
                bottom: 0;
                z-index: 1045;
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--bs-offcanvas-color);
                visibility: hidden;
                background-color: var(--bs-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform .3s ease-in-out
            }
        }

        @media (max-width:575.98px) and (prefers-reduced-motion:reduce) {
            .offcanvas-sm {
                transition: none
            }
        }

        @media (max-width:575.98px) {

            .offcanvas-sm.show:not(.hiding),
            .offcanvas-sm.showing {
                transform: none
            }
        }

        @media (max-width:575.98px) {

            .offcanvas-sm.hiding,
            .offcanvas-sm.show,
            .offcanvas-sm.showing {
                visibility: visible
            }
        }

        @media (max-width:575.98px) {
            .offcanvas-sm.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--bs-offcanvas-width);
                border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateX(-100%)
            }
        }

        @media (max-width:575.98px) {
            .offcanvas-sm.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--bs-offcanvas-width);
                border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateX(100%)
            }
        }

        @media (max-width:575.98px) {
            .offcanvas-sm.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateY(-100%)
            }
        }

        @media (max-width:575.98px) {
            .offcanvas-sm.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateY(100%)
            }
        }

        @media (min-width:576px) {
            .offcanvas-sm {
                --bs-offcanvas-height: auto;
                --bs-offcanvas-border-width: 0;
                background-color: transparent !important
            }

            .offcanvas-sm .offcanvas-header {
                display: none
            }

            .offcanvas-sm .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important
            }
        }

        @media (max-width:767.98px) {
            .offcanvas-md {
                position: fixed;
                bottom: 0;
                z-index: 1045;
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--bs-offcanvas-color);
                visibility: hidden;
                background-color: var(--bs-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform .3s ease-in-out
            }
        }

        @media (max-width:767.98px) and (prefers-reduced-motion:reduce) {
            .offcanvas-md {
                transition: none
            }
        }

        @media (max-width:767.98px) {

            .offcanvas-md.show:not(.hiding),
            .offcanvas-md.showing {
                transform: none
            }
        }

        @media (max-width:767.98px) {

            .offcanvas-md.hiding,
            .offcanvas-md.show,
            .offcanvas-md.showing {
                visibility: visible
            }
        }

        @media (max-width:767.98px) {
            .offcanvas-md.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--bs-offcanvas-width);
                border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateX(-100%)
            }
        }

        @media (max-width:767.98px) {
            .offcanvas-md.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--bs-offcanvas-width);
                border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateX(100%)
            }
        }

        @media (max-width:767.98px) {
            .offcanvas-md.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateY(-100%)
            }
        }

        @media (max-width:767.98px) {
            .offcanvas-md.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateY(100%)
            }
        }

        @media (min-width:768px) {
            .offcanvas-md {
                --bs-offcanvas-height: auto;
                --bs-offcanvas-border-width: 0;
                background-color: transparent !important
            }

            .offcanvas-md .offcanvas-header {
                display: none
            }

            .offcanvas-md .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important
            }
        }

        @media (max-width:991.98px) {
            .offcanvas-lg {
                position: fixed;
                bottom: 0;
                z-index: 1045;
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--bs-offcanvas-color);
                visibility: hidden;
                background-color: var(--bs-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform .3s ease-in-out
            }
        }

        @media (max-width:991.98px) and (prefers-reduced-motion:reduce) {
            .offcanvas-lg {
                transition: none
            }
        }

        @media (max-width:991.98px) {

            .offcanvas-lg.show:not(.hiding),
            .offcanvas-lg.showing {
                transform: none
            }
        }

        @media (max-width:991.98px) {

            .offcanvas-lg.hiding,
            .offcanvas-lg.show,
            .offcanvas-lg.showing {
                visibility: visible
            }
        }

        @media (max-width:991.98px) {
            .offcanvas-lg.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--bs-offcanvas-width);
                border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateX(-100%)
            }
        }

        @media (max-width:991.98px) {
            .offcanvas-lg.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--bs-offcanvas-width);
                border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateX(100%)
            }
        }

        @media (max-width:991.98px) {
            .offcanvas-lg.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateY(-100%)
            }
        }

        @media (max-width:991.98px) {
            .offcanvas-lg.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateY(100%)
            }
        }

        @media (min-width:992px) {
            .offcanvas-lg {
                --bs-offcanvas-height: auto;
                --bs-offcanvas-border-width: 0;
                background-color: transparent !important
            }

            .offcanvas-lg .offcanvas-header {
                display: none
            }

            .offcanvas-lg .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important
            }
        }

        @media (max-width:1199.98px) {
            .offcanvas-xl {
                position: fixed;
                bottom: 0;
                z-index: 1045;
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--bs-offcanvas-color);
                visibility: hidden;
                background-color: var(--bs-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform .3s ease-in-out
            }
        }

        @media (max-width:1199.98px) and (prefers-reduced-motion:reduce) {
            .offcanvas-xl {
                transition: none
            }
        }

        @media (max-width:1199.98px) {

            .offcanvas-xl.show:not(.hiding),
            .offcanvas-xl.showing {
                transform: none
            }
        }

        @media (max-width:1199.98px) {

            .offcanvas-xl.hiding,
            .offcanvas-xl.show,
            .offcanvas-xl.showing {
                visibility: visible
            }
        }

        @media (max-width:1199.98px) {
            .offcanvas-xl.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--bs-offcanvas-width);
                border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateX(-100%)
            }
        }

        @media (max-width:1199.98px) {
            .offcanvas-xl.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--bs-offcanvas-width);
                border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateX(100%)
            }
        }

        @media (max-width:1199.98px) {
            .offcanvas-xl.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateY(-100%)
            }
        }

        @media (max-width:1199.98px) {
            .offcanvas-xl.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateY(100%)
            }
        }

        @media (min-width:1200px) {
            .offcanvas-xl {
                --bs-offcanvas-height: auto;
                --bs-offcanvas-border-width: 0;
                background-color: transparent !important
            }

            .offcanvas-xl .offcanvas-header {
                display: none
            }

            .offcanvas-xl .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important
            }
        }

        @media (max-width:1399.98px) {
            .offcanvas-xxl {
                position: fixed;
                bottom: 0;
                z-index: 1045;
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--bs-offcanvas-color);
                visibility: hidden;
                background-color: var(--bs-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform .3s ease-in-out
            }
        }

        @media (max-width:1399.98px) and (prefers-reduced-motion:reduce) {
            .offcanvas-xxl {
                transition: none
            }
        }

        @media (max-width:1399.98px) {

            .offcanvas-xxl.show:not(.hiding),
            .offcanvas-xxl.showing {
                transform: none
            }
        }

        @media (max-width:1399.98px) {

            .offcanvas-xxl.hiding,
            .offcanvas-xxl.show,
            .offcanvas-xxl.showing {
                visibility: visible
            }
        }

        @media (max-width:1399.98px) {
            .offcanvas-xxl.offcanvas-start {
                top: 0;
                left: 0;
                width: var(--bs-offcanvas-width);
                border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateX(-100%)
            }
        }

        @media (max-width:1399.98px) {
            .offcanvas-xxl.offcanvas-end {
                top: 0;
                right: 0;
                width: var(--bs-offcanvas-width);
                border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateX(100%)
            }
        }

        @media (max-width:1399.98px) {
            .offcanvas-xxl.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateY(-100%)
            }
        }

        @media (max-width:1399.98px) {
            .offcanvas-xxl.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--bs-offcanvas-height);
                max-height: 100%;
                border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
                transform: translateY(100%)
            }
        }

        @media (min-width:1400px) {
            .offcanvas-xxl {
                --bs-offcanvas-height: auto;
                --bs-offcanvas-border-width: 0;
                background-color: transparent !important
            }

            .offcanvas-xxl .offcanvas-header {
                display: none
            }

            .offcanvas-xxl .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important
            }
        }

        .offcanvas {
            position: fixed;
            bottom: 0;
            z-index: 1045;
            display: flex;
            flex-direction: column;
            max-width: 100%;
            color: var(--bs-offcanvas-color);
            visibility: hidden;
            background-color: var(--bs-offcanvas-bg);
            background-clip: padding-box;
            outline: 0;
            transition: transform .3s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .offcanvas {
                transition: none
            }
        }

        .offcanvas.show:not(.hiding),
        .offcanvas.showing {
            transform: none
        }

        .offcanvas.hiding,
        .offcanvas.show,
        .offcanvas.showing {
            visibility: visible
        }

        .offcanvas.offcanvas-start {
            top: 0;
            left: 0;
            width: var(--bs-offcanvas-width);
            border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
            transform: translateX(-100%)
        }

        .offcanvas.offcanvas-end {
            top: 0;
            right: 0;
            width: var(--bs-offcanvas-width);
            border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
            transform: translateX(100%)
        }

        .offcanvas.offcanvas-top {
            top: 0;
            right: 0;
            left: 0;
            height: var(--bs-offcanvas-height);
            max-height: 100%;
            border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
            transform: translateY(-100%)
        }

        .offcanvas.offcanvas-bottom {
            right: 0;
            left: 0;
            height: var(--bs-offcanvas-height);
            max-height: 100%;
            border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
            transform: translateY(100%)
        }

        .offcanvas-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000
        }

        .offcanvas-backdrop.fade {
            opacity: 0
        }

        .offcanvas-backdrop.show {
            opacity: .5
        }

        .offcanvas-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x)
        }

        .offcanvas-header .btn-close {
            padding: calc(var(--bs-offcanvas-padding-y) * .5) calc(var(--bs-offcanvas-padding-x) * .5);
            margin-top: calc(var(--bs-offcanvas-padding-y) * -.5);
            margin-right: calc(var(--bs-offcanvas-padding-x) * -.5);
            margin-bottom: calc(var(--bs-offcanvas-padding-y) * -.5)
        }

        .offcanvas-title {
            margin-bottom: 0;
            line-height: 1.5
        }

        .offcanvas-body {
            flex-grow: 1;
            padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
            overflow-y: auto
        }

        .placeholder {
            display: inline-block;
            min-height: 1em;
            vertical-align: middle;
            cursor: wait;
            background-color: currentcolor;
            opacity: .5
        }

        .placeholder.btn::before {
            display: inline-block;
            content: ""
        }

        .placeholder-xs {
            min-height: .6em
        }

        .placeholder-sm {
            min-height: .8em
        }

        .placeholder-lg {
            min-height: 1.2em
        }

        .placeholder-glow .placeholder {
            -webkit-animation: placeholder-glow 2s ease-in-out infinite;
            animation: placeholder-glow 2s ease-in-out infinite
        }

        @-webkit-keyframes placeholder-glow {
            50% {
                opacity: .2
            }
        }

        @keyframes placeholder-glow {
            50% {
                opacity: .2
            }
        }

        .placeholder-wave {
            -webkit-mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
            mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
            -webkit-mask-size: 200% 100%;
            mask-size: 200% 100%;
            -webkit-animation: placeholder-wave 2s linear infinite;
            animation: placeholder-wave 2s linear infinite
        }

        @-webkit-keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0%;
                mask-position: -200% 0%
            }
        }

        @keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0%;
                mask-position: -200% 0%
            }
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: ""
        }

        .text-bg-primary {
            color: #fff !important;
            background-color: RGBA(13, 110, 253, var(--bs-bg-opacity, 1)) !important
        }

        .text-bg-secondary {
            color: #fff !important;
            background-color: RGBA(108, 117, 125, var(--bs-bg-opacity, 1)) !important
        }

        .text-bg-success {
            color: #fff !important;
            background-color: RGBA(25, 135, 84, var(--bs-bg-opacity, 1)) !important
        }

        .text-bg-info {
            color: #000 !important;
            background-color: RGBA(13, 202, 240, var(--bs-bg-opacity, 1)) !important
        }

        .text-bg-warning {
            color: #000 !important;
            background-color: RGBA(255, 193, 7, var(--bs-bg-opacity, 1)) !important
        }

        .text-bg-danger {
            color: #fff !important;
            background-color: RGBA(220, 53, 69, var(--bs-bg-opacity, 1)) !important
        }

        .text-bg-light {
            color: #000 !important;
            background-color: RGBA(248, 249, 250, var(--bs-bg-opacity, 1)) !important
        }

        .text-bg-dark {
            color: #fff !important;
            background-color: RGBA(33, 37, 41, var(--bs-bg-opacity, 1)) !important
        }

        .link-primary {
            color: #0d6efd !important
        }

        .link-primary:focus,
        .link-primary:hover {
            color: #0a58ca !important
        }

        .link-secondary {
            color: #6c757d !important
        }

        .link-secondary:focus,
        .link-secondary:hover {
            color: #565e64 !important
        }

        .link-success {
            color: #198754 !important
        }

        .link-success:focus,
        .link-success:hover {
            color: #146c43 !important
        }

        .link-info {
            color: #0dcaf0 !important
        }

        .link-info:focus,
        .link-info:hover {
            color: #3dd5f3 !important
        }

        .link-warning {
            color: #ffc107 !important
        }

        .link-warning:focus,
        .link-warning:hover {
            color: #ffcd39 !important
        }

        .link-danger {
            color: #dc3545 !important
        }

        .link-danger:focus,
        .link-danger:hover {
            color: #b02a37 !important
        }

        .link-light {
            color: #f8f9fa !important
        }

        .link-light:focus,
        .link-light:hover {
            color: #f9fafb !important
        }

        .link-dark {
            color: #212529 !important
        }

        .link-dark:focus,
        .link-dark:hover {
            color: #1a1e21 !important
        }

        .ratio {
            position: relative;
            width: 100%
        }

        .ratio::before {
            display: block;
            padding-top: var(--bs-aspect-ratio);
            content: ""
        }

        .ratio>* {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .ratio-1x1 {
            --bs-aspect-ratio: 100%
        }

        .ratio-4x3 {
            --bs-aspect-ratio: 75%
        }

        .ratio-16x9 {
            --bs-aspect-ratio: 56.25%
        }

        .ratio-21x9 {
            --bs-aspect-ratio: 42.8571428571%
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030
        }

        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }

        .sticky-bottom {
            position: -webkit-sticky;
            position: sticky;
            bottom: 0;
            z-index: 1020
        }

        @media (min-width:576px) {
            .sticky-sm-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }

            .sticky-sm-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020
            }
        }

        @media (min-width:768px) {
            .sticky-md-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }

            .sticky-md-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020
            }
        }

        @media (min-width:992px) {
            .sticky-lg-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }

            .sticky-lg-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020
            }
        }

        @media (min-width:1200px) {
            .sticky-xl-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }

            .sticky-xl-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020
            }
        }

        @media (min-width:1400px) {
            .sticky-xxl-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }

            .sticky-xxl-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020
            }
        }

        .hstack {
            display: flex;
            flex-direction: row;
            align-items: center;
            align-self: stretch
        }

        .vstack {
            display: flex;
            flex: 1 1 auto;
            flex-direction: column;
            align-self: stretch
        }

        .visually-hidden,
        .visually-hidden-focusable:not(:focus):not(:focus-within) {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border: 0 !important
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            content: ""
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .vr {
            display: inline-block;
            align-self: stretch;
            width: 1px;
            min-height: 1em;
            background-color: currentcolor;
            opacity: .25
        }

        .align-baseline {
            vertical-align: baseline !important
        }

        .align-top {
            vertical-align: top !important
        }

        .align-middle {
            vertical-align: middle !important
        }

        .align-bottom {
            vertical-align: bottom !important
        }

        .align-text-bottom {
            vertical-align: text-bottom !important
        }

        .align-text-top {
            vertical-align: text-top !important
        }

        .float-start {
            float: left !important
        }

        .float-end {
            float: right !important
        }

        .float-none {
            float: none !important
        }

        .opacity-0 {
            opacity: 0 !important
        }

        .opacity-25 {
            opacity: .25 !important
        }

        .opacity-50 {
            opacity: .5 !important
        }

        .opacity-75 {
            opacity: .75 !important
        }

        .opacity-100 {
            opacity: 1 !important
        }

        .overflow-auto {
            overflow: auto !important
        }

        .overflow-hidden {
            overflow: hidden !important
        }

        .overflow-visible {
            overflow: visible !important
        }

        .overflow-scroll {
            overflow: scroll !important
        }

        .d-inline {
            display: inline !important
        }

        .d-inline-block {
            display: inline-block !important
        }

        .d-block {
            display: block !important
        }

        .d-grid {
            display: grid !important
        }

        .d-table {
            display: table !important
        }

        .d-table-row {
            display: table-row !important
        }

        .d-table-cell {
            display: table-cell !important
        }

        .d-flex {
            display: flex !important
        }

        .d-inline-flex {
            display: inline-flex !important
        }

        .d-none {
            display: none !important
        }

        .shadow {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important
        }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important
        }

        .shadow-none {
            box-shadow: none !important
        }

        .position-static {
            position: static !important
        }

        .position-relative {
            position: relative !important
        }

        .position-absolute {
            position: absolute !important
        }

        .position-fixed {
            position: fixed !important
        }

        .position-sticky {
            position: -webkit-sticky !important;
            position: sticky !important
        }

        .top-0 {
            top: 0 !important
        }

        .top-50 {
            top: 50% !important
        }

        .top-100 {
            top: 100% !important
        }

        .bottom-0 {
            bottom: 0 !important
        }

        .bottom-50 {
            bottom: 50% !important
        }

        .bottom-100 {
            bottom: 100% !important
        }

        .start-0 {
            left: 0 !important
        }

        .start-50 {
            left: 50% !important
        }

        .start-100 {
            left: 100% !important
        }

        .end-0 {
            right: 0 !important
        }

        .end-50 {
            right: 50% !important
        }

        .end-100 {
            right: 100% !important
        }

        .translate-middle {
            transform: translate(-50%, -50%) !important
        }

        .translate-middle-x {
            transform: translateX(-50%) !important
        }

        .translate-middle-y {
            transform: translateY(-50%) !important
        }

        .border {
            border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important
        }

        .border-0 {
            border: 0 !important
        }

        .border-top {
            border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important
        }

        .border-top-0 {
            border-top: 0 !important
        }

        .border-end {
            border-right: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important
        }

        .border-end-0 {
            border-right: 0 !important
        }

        .border-bottom {
            border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important
        }

        .border-bottom-0 {
            border-bottom: 0 !important
        }

        .border-start {
            border-left: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important
        }

        .border-start-0 {
            border-left: 0 !important
        }

        .border-primary {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-primary-rgb), var(--bs-border-opacity)) !important
        }

        .border-secondary {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-secondary-rgb), var(--bs-border-opacity)) !important
        }

        .border-success {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important
        }

        .border-info {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important
        }

        .border-warning {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-warning-rgb), var(--bs-border-opacity)) !important
        }

        .border-danger {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-danger-rgb), var(--bs-border-opacity)) !important
        }

        .border-light {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-light-rgb), var(--bs-border-opacity)) !important
        }

        .border-dark {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important
        }

        .border-white {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important
        }

        .border-1 {
            --bs-border-width: 1px
        }

        .border-2 {
            --bs-border-width: 2px
        }

        .border-3 {
            --bs-border-width: 3px
        }

        .border-4 {
            --bs-border-width: 4px
        }

        .border-5 {
            --bs-border-width: 5px
        }

        .border-opacity-10 {
            --bs-border-opacity: 0.1
        }

        .border-opacity-25 {
            --bs-border-opacity: 0.25
        }

        .border-opacity-50 {
            --bs-border-opacity: 0.5
        }

        .border-opacity-75 {
            --bs-border-opacity: 0.75
        }

        .border-opacity-100 {
            --bs-border-opacity: 1
        }

        .w-25 {
            width: 25% !important
        }

        .w-50 {
            width: 50% !important
        }

        .w-75 {
            width: 75% !important
        }

        .w-100 {
            width: 100% !important
        }

        .w-auto {
            width: auto !important
        }

        .mw-100 {
            max-width: 100% !important
        }

        .vw-100 {
            width: 100vw !important
        }

        .min-vw-100 {
            min-width: 100vw !important
        }

        .h-25 {
            height: 25% !important
        }

        .h-50 {
            height: 50% !important
        }

        .h-75 {
            height: 75% !important
        }

        .h-100 {
            height: 100% !important
        }

        .h-auto {
            height: auto !important
        }

        .mh-100 {
            max-height: 100% !important
        }

        .vh-100 {
            height: 100vh !important
        }

        .min-vh-100 {
            min-height: 100vh !important
        }

        .flex-fill {
            flex: 1 1 auto !important
        }

        .flex-row {
            flex-direction: row !important
        }

        .flex-column {
            flex-direction: column !important
        }

        .flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-column-reverse {
            flex-direction: column-reverse !important
        }

        .flex-grow-0 {
            flex-grow: 0 !important
        }

        .flex-grow-1 {
            flex-grow: 1 !important
        }

        .flex-shrink-0 {
            flex-shrink: 0 !important
        }

        .flex-shrink-1 {
            flex-shrink: 1 !important
        }

        .flex-wrap {
            flex-wrap: wrap !important
        }

        .flex-nowrap {
            flex-wrap: nowrap !important
        }

        .flex-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .justify-content-start {
            justify-content: flex-start !important
        }

        .justify-content-end {
            justify-content: flex-end !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .justify-content-between {
            justify-content: space-between !important
        }

        .justify-content-around {
            justify-content: space-around !important
        }

        .justify-content-evenly {
            justify-content: space-evenly !important
        }

        .align-items-start {
            align-items: flex-start !important
        }

        .align-items-end {
            align-items: flex-end !important
        }

        .align-items-center {
            align-items: center !important
        }

        .align-items-baseline {
            align-items: baseline !important
        }

        .align-items-stretch {
            align-items: stretch !important
        }

        .align-content-start {
            align-content: flex-start !important
        }

        .align-content-end {
            align-content: flex-end !important
        }

        .align-content-center {
            align-content: center !important
        }

        .align-content-between {
            align-content: space-between !important
        }

        .align-content-around {
            align-content: space-around !important
        }

        .align-content-stretch {
            align-content: stretch !important
        }

        .align-self-auto {
            align-self: auto !important
        }

        .align-self-start {
            align-self: flex-start !important
        }

        .align-self-end {
            align-self: flex-end !important
        }

        .align-self-center {
            align-self: center !important
        }

        .align-self-baseline {
            align-self: baseline !important
        }

        .align-self-stretch {
            align-self: stretch !important
        }

        .order-first {
            order: -1 !important
        }

        .order-0 {
            order: 0 !important
        }

        .order-1 {
            order: 1 !important
        }

        .order-2 {
            order: 2 !important
        }

        .order-3 {
            order: 3 !important
        }

        .order-4 {
            order: 4 !important
        }

        .order-5 {
            order: 5 !important
        }

        .order-last {
            order: 6 !important
        }

        .m-0 {
            margin: 0 !important
        }

        .m-1 {
            margin: .25rem !important
        }

        .m-2 {
            margin: .5rem !important
        }

        .m-3 {
            margin: 1rem !important
        }

        .m-4 {
            margin: 1.5rem !important
        }

        .m-5 {
            margin: 3rem !important
        }

        .m-auto {
            margin: auto !important
        }

        .mx-0 {
            margin-right: 0 !important;
            margin-left: 0 !important
        }

        .mx-1 {
            margin-right: .25rem !important;
            margin-left: .25rem !important
        }

        .mx-2 {
            margin-right: .5rem !important;
            margin-left: .5rem !important
        }

        .mx-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important
        }

        .mx-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important
        }

        .mx-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .my-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .my-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .my-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .my-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .my-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .my-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }

        .mt-0 {
            margin-top: 0 !important
        }

        .mt-1 {
            margin-top: .25rem !important
        }

        .mt-2 {
            margin-top: .5rem !important
        }

        .mt-3 {
            margin-top: 1rem !important
        }

        .mt-4 {
            margin-top: 1.5rem !important
        }

        .mt-5 {
            margin-top: 3rem !important
        }

        .mt-auto {
            margin-top: auto !important
        }

        .me-0 {
            margin-right: 0 !important
        }

        .me-1 {
            margin-right: .25rem !important
        }

        .me-2 {
            margin-right: .5rem !important
        }

        .me-3 {
            margin-right: 1rem !important
        }

        .me-4 {
            margin-right: 1.5rem !important
        }

        .me-5 {
            margin-right: 3rem !important
        }

        .me-auto {
            margin-right: auto !important
        }

        .mb-0 {
            margin-bottom: 0 !important
        }

        .mb-1 {
            margin-bottom: .25rem !important
        }

        .mb-2 {
            margin-bottom: .5rem !important
        }

        .mb-3 {
            margin-bottom: 1rem !important
        }

        .mb-4 {
            margin-bottom: 1.5rem !important
        }

        .mb-5 {
            margin-bottom: 3rem !important
        }

        .mb-auto {
            margin-bottom: auto !important
        }

        .ms-0 {
            margin-left: 0 !important
        }

        .ms-1 {
            margin-left: .25rem !important
        }

        .ms-2 {
            margin-left: .5rem !important
        }

        .ms-3 {
            margin-left: 1rem !important
        }

        .ms-4 {
            margin-left: 1.5rem !important
        }

        .ms-5 {
            margin-left: 3rem !important
        }

        .ms-auto {
            margin-left: auto !important
        }

        .p-0 {
            padding: 0 !important
        }

        .p-1 {
            padding: .25rem !important
        }

        .p-2 {
            padding: .5rem !important
        }

        .p-3 {
            padding: 1rem !important
        }

        .p-4 {
            padding: 1.5rem !important
        }

        .p-5 {
            padding: 3rem !important
        }

        .px-0 {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .px-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important
        }

        .px-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important
        }

        .px-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important
        }

        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important
        }

        .px-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important
        }

        .py-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .py-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .py-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .py-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .pt-0 {
            padding-top: 0 !important
        }

        .pt-1 {
            padding-top: .25rem !important
        }

        .pt-2 {
            padding-top: .5rem !important
        }

        .pt-3 {
            padding-top: 1rem !important
        }

        .pt-4 {
            padding-top: 1.5rem !important
        }

        .pt-5 {
            padding-top: 3rem !important
        }

        .pe-0 {
            padding-right: 0 !important
        }

        .pe-1 {
            padding-right: .25rem !important
        }

        .pe-2 {
            padding-right: .5rem !important
        }

        .pe-3 {
            padding-right: 1rem !important
        }

        .pe-4 {
            padding-right: 1.5rem !important
        }

        .pe-5 {
            padding-right: 3rem !important
        }

        .pb-0 {
            padding-bottom: 0 !important
        }

        .pb-1 {
            padding-bottom: .25rem !important
        }

        .pb-2 {
            padding-bottom: .5rem !important
        }

        .pb-3 {
            padding-bottom: 1rem !important
        }

        .pb-4 {
            padding-bottom: 1.5rem !important
        }

        .pb-5 {
            padding-bottom: 3rem !important
        }

        .ps-0 {
            padding-left: 0 !important
        }

        .ps-1 {
            padding-left: .25rem !important
        }

        .ps-2 {
            padding-left: .5rem !important
        }

        .ps-3 {
            padding-left: 1rem !important
        }

        .ps-4 {
            padding-left: 1.5rem !important
        }

        .ps-5 {
            padding-left: 3rem !important
        }

        .gap-0 {
            gap: 0 !important
        }

        .gap-1 {
            gap: .25rem !important
        }

        .gap-2 {
            gap: .5rem !important
        }

        .gap-3 {
            gap: 1rem !important
        }

        .gap-4 {
            gap: 1.5rem !important
        }

        .gap-5 {
            gap: 3rem !important
        }

        .font-monospace {
            font-family: var(--bs-font-monospace) !important
        }

        .fs-1 {
            font-size: calc(1.375rem + 1.5vw) !important
        }

        .fs-2 {
            font-size: calc(1.325rem + .9vw) !important
        }

        .fs-3 {
            font-size: calc(1.3rem + .6vw) !important
        }

        .fs-4 {
            font-size: calc(1.275rem + .3vw) !important
        }

        .fs-5 {
            font-size: 1.25rem !important
        }

        .fs-6 {
            font-size: 1rem !important
        }

        .fst-italic {
            font-style: italic !important
        }

        .fst-normal {
            font-style: normal !important
        }

        .fw-light {
            font-weight: 300 !important
        }

        .fw-lighter {
            font-weight: lighter !important
        }

        .fw-normal {
            font-weight: 400 !important
        }

        .fw-bold {
            font-weight: 700 !important
        }

        .fw-semibold {
            font-weight: 600 !important
        }

        .fw-bolder {
            font-weight: bolder !important
        }

        .lh-1 {
            line-height: 1 !important
        }

        .lh-sm {
            line-height: 1.25 !important
        }

        .lh-base {
            line-height: 1.5 !important
        }

        .lh-lg {
            line-height: 2 !important
        }

        .text-start {
            text-align: left !important
        }

        .text-end {
            text-align: right !important
        }

        .text-center {
            text-align: center !important
        }

        .text-decoration-none {
            text-decoration: none !important
        }

        .text-decoration-underline {
            text-decoration: underline !important
        }

        .text-decoration-line-through {
            text-decoration: line-through !important
        }

        .text-lowercase {
            text-transform: lowercase !important
        }

        .text-uppercase {
            text-transform: uppercase !important
        }

        .text-capitalize {
            text-transform: capitalize !important
        }

        .text-wrap {
            white-space: normal !important
        }

        .text-nowrap {
            white-space: nowrap !important
        }

        .text-break {
            word-wrap: break-word !important;
            word-break: break-word !important
        }

        .text-primary {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important
        }

        .text-secondary {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important
        }

        .text-success {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important
        }

        .text-info {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important
        }

        .text-warning {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important
        }

        .text-danger {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important
        }

        .text-light {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important
        }

        .text-dark {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important
        }

        .text-black {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important
        }

        .text-white {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important
        }

        .text-body {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important
        }

        .text-muted {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-body-color-rgb), .75) !important
        }

        .text-black-50 {
            --bs-text-opacity: 1;
            color: rgba(0, 0, 0, .5) !important
        }

        .text-white-50 {
            --bs-text-opacity: 1;
            color: rgba(255, 255, 255, .5) !important
        }

        .text-reset {
            --bs-text-opacity: 1;
            color: inherit !important
        }

        .text-opacity-25 {
            --bs-text-opacity: 0.25
        }

        .text-opacity-50 {
            --bs-text-opacity: 0.5
        }

        .text-opacity-75 {
            --bs-text-opacity: 0.75
        }

        .text-opacity-100 {
            --bs-text-opacity: 1
        }

        .bg-primary {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-secondary {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-success {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-info {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-warning {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-danger {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-light {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-dark {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-black {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-white {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-body {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important
        }

        .bg-transparent {
            --bs-bg-opacity: 1;
            background-color: transparent !important
        }

        .bg-opacity-10 {
            --bs-bg-opacity: 0.1
        }

        .bg-opacity-25 {
            --bs-bg-opacity: 0.25
        }

        .bg-opacity-50 {
            --bs-bg-opacity: 0.5
        }

        .bg-opacity-75 {
            --bs-bg-opacity: 0.75
        }

        .bg-opacity-100 {
            --bs-bg-opacity: 1
        }

        .bg-gradient {
            background-image: var(--bs-gradient) !important
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            user-select: all !important
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            user-select: auto !important
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            user-select: none !important
        }

        .pe-none {
            pointer-events: none !important
        }

        .pe-auto {
            pointer-events: auto !important
        }

        .rounded {
            border-radius: var(--bs-border-radius) !important
        }

        .rounded-0 {
            border-radius: 0 !important
        }

        .rounded-1 {
            border-radius: var(--bs-border-radius-sm) !important
        }

        .rounded-2 {
            border-radius: var(--bs-border-radius) !important
        }

        .rounded-3 {
            border-radius: var(--bs-border-radius-lg) !important
        }

        .rounded-4 {
            border-radius: var(--bs-border-radius-xl) !important
        }

        .rounded-5 {
            border-radius: var(--bs-border-radius-2xl) !important
        }

        .rounded-circle {
            border-radius: 50% !important
        }

        .rounded-pill {
            border-radius: var(--bs-border-radius-pill) !important
        }

        .rounded-top {
            border-top-left-radius: var(--bs-border-radius) !important;
            border-top-right-radius: var(--bs-border-radius) !important
        }

        .rounded-end {
            border-top-right-radius: var(--bs-border-radius) !important;
            border-bottom-right-radius: var(--bs-border-radius) !important
        }

        .rounded-bottom {
            border-bottom-right-radius: var(--bs-border-radius) !important;
            border-bottom-left-radius: var(--bs-border-radius) !important
        }

        .rounded-start {
            border-bottom-left-radius: var(--bs-border-radius) !important;
            border-top-left-radius: var(--bs-border-radius) !important
        }

        .visible {
            visibility: visible !important
        }

        .invisible {
            visibility: hidden !important
        }

        @media (min-width:576px) {
            .float-sm-start {
                float: left !important
            }

            .float-sm-end {
                float: right !important
            }

            .float-sm-none {
                float: none !important
            }

            .d-sm-inline {
                display: inline !important
            }

            .d-sm-inline-block {
                display: inline-block !important
            }

            .d-sm-block {
                display: block !important
            }

            .d-sm-grid {
                display: grid !important
            }

            .d-sm-table {
                display: table !important
            }

            .d-sm-table-row {
                display: table-row !important
            }

            .d-sm-table-cell {
                display: table-cell !important
            }

            .d-sm-flex {
                display: flex !important
            }

            .d-sm-inline-flex {
                display: inline-flex !important
            }

            .d-sm-none {
                display: none !important
            }

            .flex-sm-fill {
                flex: 1 1 auto !important
            }

            .flex-sm-row {
                flex-direction: row !important
            }

            .flex-sm-column {
                flex-direction: column !important
            }

            .flex-sm-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-sm-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-sm-grow-0 {
                flex-grow: 0 !important
            }

            .flex-sm-grow-1 {
                flex-grow: 1 !important
            }

            .flex-sm-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-sm-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-sm-wrap {
                flex-wrap: wrap !important
            }

            .flex-sm-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-sm-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .justify-content-sm-start {
                justify-content: flex-start !important
            }

            .justify-content-sm-end {
                justify-content: flex-end !important
            }

            .justify-content-sm-center {
                justify-content: center !important
            }

            .justify-content-sm-between {
                justify-content: space-between !important
            }

            .justify-content-sm-around {
                justify-content: space-around !important
            }

            .justify-content-sm-evenly {
                justify-content: space-evenly !important
            }

            .align-items-sm-start {
                align-items: flex-start !important
            }

            .align-items-sm-end {
                align-items: flex-end !important
            }

            .align-items-sm-center {
                align-items: center !important
            }

            .align-items-sm-baseline {
                align-items: baseline !important
            }

            .align-items-sm-stretch {
                align-items: stretch !important
            }

            .align-content-sm-start {
                align-content: flex-start !important
            }

            .align-content-sm-end {
                align-content: flex-end !important
            }

            .align-content-sm-center {
                align-content: center !important
            }

            .align-content-sm-between {
                align-content: space-between !important
            }

            .align-content-sm-around {
                align-content: space-around !important
            }

            .align-content-sm-stretch {
                align-content: stretch !important
            }

            .align-self-sm-auto {
                align-self: auto !important
            }

            .align-self-sm-start {
                align-self: flex-start !important
            }

            .align-self-sm-end {
                align-self: flex-end !important
            }

            .align-self-sm-center {
                align-self: center !important
            }

            .align-self-sm-baseline {
                align-self: baseline !important
            }

            .align-self-sm-stretch {
                align-self: stretch !important
            }

            .order-sm-first {
                order: -1 !important
            }

            .order-sm-0 {
                order: 0 !important
            }

            .order-sm-1 {
                order: 1 !important
            }

            .order-sm-2 {
                order: 2 !important
            }

            .order-sm-3 {
                order: 3 !important
            }

            .order-sm-4 {
                order: 4 !important
            }

            .order-sm-5 {
                order: 5 !important
            }

            .order-sm-last {
                order: 6 !important
            }

            .m-sm-0 {
                margin: 0 !important
            }

            .m-sm-1 {
                margin: .25rem !important
            }

            .m-sm-2 {
                margin: .5rem !important
            }

            .m-sm-3 {
                margin: 1rem !important
            }

            .m-sm-4 {
                margin: 1.5rem !important
            }

            .m-sm-5 {
                margin: 3rem !important
            }

            .m-sm-auto {
                margin: auto !important
            }

            .mx-sm-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-sm-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-sm-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-sm-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-sm-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-sm-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-sm-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-sm-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-sm-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-sm-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-sm-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-sm-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-sm-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-sm-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-sm-0 {
                margin-top: 0 !important
            }

            .mt-sm-1 {
                margin-top: .25rem !important
            }

            .mt-sm-2 {
                margin-top: .5rem !important
            }

            .mt-sm-3 {
                margin-top: 1rem !important
            }

            .mt-sm-4 {
                margin-top: 1.5rem !important
            }

            .mt-sm-5 {
                margin-top: 3rem !important
            }

            .mt-sm-auto {
                margin-top: auto !important
            }

            .me-sm-0 {
                margin-right: 0 !important
            }

            .me-sm-1 {
                margin-right: .25rem !important
            }

            .me-sm-2 {
                margin-right: .5rem !important
            }

            .me-sm-3 {
                margin-right: 1rem !important
            }

            .me-sm-4 {
                margin-right: 1.5rem !important
            }

            .me-sm-5 {
                margin-right: 3rem !important
            }

            .me-sm-auto {
                margin-right: auto !important
            }

            .mb-sm-0 {
                margin-bottom: 0 !important
            }

            .mb-sm-1 {
                margin-bottom: .25rem !important
            }

            .mb-sm-2 {
                margin-bottom: .5rem !important
            }

            .mb-sm-3 {
                margin-bottom: 1rem !important
            }

            .mb-sm-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-sm-5 {
                margin-bottom: 3rem !important
            }

            .mb-sm-auto {
                margin-bottom: auto !important
            }

            .ms-sm-0 {
                margin-left: 0 !important
            }

            .ms-sm-1 {
                margin-left: .25rem !important
            }

            .ms-sm-2 {
                margin-left: .5rem !important
            }

            .ms-sm-3 {
                margin-left: 1rem !important
            }

            .ms-sm-4 {
                margin-left: 1.5rem !important
            }

            .ms-sm-5 {
                margin-left: 3rem !important
            }

            .ms-sm-auto {
                margin-left: auto !important
            }

            .p-sm-0 {
                padding: 0 !important
            }

            .p-sm-1 {
                padding: .25rem !important
            }

            .p-sm-2 {
                padding: .5rem !important
            }

            .p-sm-3 {
                padding: 1rem !important
            }

            .p-sm-4 {
                padding: 1.5rem !important
            }

            .p-sm-5 {
                padding: 3rem !important
            }

            .px-sm-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-sm-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-sm-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-sm-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-sm-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-sm-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-sm-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-sm-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-sm-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-sm-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-sm-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-sm-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-sm-0 {
                padding-top: 0 !important
            }

            .pt-sm-1 {
                padding-top: .25rem !important
            }

            .pt-sm-2 {
                padding-top: .5rem !important
            }

            .pt-sm-3 {
                padding-top: 1rem !important
            }

            .pt-sm-4 {
                padding-top: 1.5rem !important
            }

            .pt-sm-5 {
                padding-top: 3rem !important
            }

            .pe-sm-0 {
                padding-right: 0 !important
            }

            .pe-sm-1 {
                padding-right: .25rem !important
            }

            .pe-sm-2 {
                padding-right: .5rem !important
            }

            .pe-sm-3 {
                padding-right: 1rem !important
            }

            .pe-sm-4 {
                padding-right: 1.5rem !important
            }

            .pe-sm-5 {
                padding-right: 3rem !important
            }

            .pb-sm-0 {
                padding-bottom: 0 !important
            }

            .pb-sm-1 {
                padding-bottom: .25rem !important
            }

            .pb-sm-2 {
                padding-bottom: .5rem !important
            }

            .pb-sm-3 {
                padding-bottom: 1rem !important
            }

            .pb-sm-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-sm-5 {
                padding-bottom: 3rem !important
            }

            .ps-sm-0 {
                padding-left: 0 !important
            }

            .ps-sm-1 {
                padding-left: .25rem !important
            }

            .ps-sm-2 {
                padding-left: .5rem !important
            }

            .ps-sm-3 {
                padding-left: 1rem !important
            }

            .ps-sm-4 {
                padding-left: 1.5rem !important
            }

            .ps-sm-5 {
                padding-left: 3rem !important
            }

            .gap-sm-0 {
                gap: 0 !important
            }

            .gap-sm-1 {
                gap: .25rem !important
            }

            .gap-sm-2 {
                gap: .5rem !important
            }

            .gap-sm-3 {
                gap: 1rem !important
            }

            .gap-sm-4 {
                gap: 1.5rem !important
            }

            .gap-sm-5 {
                gap: 3rem !important
            }

            .text-sm-start {
                text-align: left !important
            }

            .text-sm-end {
                text-align: right !important
            }

            .text-sm-center {
                text-align: center !important
            }
        }

        @media (min-width:768px) {
            .float-md-start {
                float: left !important
            }

            .float-md-end {
                float: right !important
            }

            .float-md-none {
                float: none !important
            }

            .d-md-inline {
                display: inline !important
            }

            .d-md-inline-block {
                display: inline-block !important
            }

            .d-md-block {
                display: block !important
            }

            .d-md-grid {
                display: grid !important
            }

            .d-md-table {
                display: table !important
            }

            .d-md-table-row {
                display: table-row !important
            }

            .d-md-table-cell {
                display: table-cell !important
            }

            .d-md-flex {
                display: flex !important
            }

            .d-md-inline-flex {
                display: inline-flex !important
            }

            .d-md-none {
                display: none !important
            }

            .flex-md-fill {
                flex: 1 1 auto !important
            }

            .flex-md-row {
                flex-direction: row !important
            }

            .flex-md-column {
                flex-direction: column !important
            }

            .flex-md-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-md-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-md-grow-0 {
                flex-grow: 0 !important
            }

            .flex-md-grow-1 {
                flex-grow: 1 !important
            }

            .flex-md-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-md-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-md-wrap {
                flex-wrap: wrap !important
            }

            .flex-md-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-md-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .justify-content-md-start {
                justify-content: flex-start !important
            }

            .justify-content-md-end {
                justify-content: flex-end !important
            }

            .justify-content-md-center {
                justify-content: center !important
            }

            .justify-content-md-between {
                justify-content: space-between !important
            }

            .justify-content-md-around {
                justify-content: space-around !important
            }

            .justify-content-md-evenly {
                justify-content: space-evenly !important
            }

            .align-items-md-start {
                align-items: flex-start !important
            }

            .align-items-md-end {
                align-items: flex-end !important
            }

            .align-items-md-center {
                align-items: center !important
            }

            .align-items-md-baseline {
                align-items: baseline !important
            }

            .align-items-md-stretch {
                align-items: stretch !important
            }

            .align-content-md-start {
                align-content: flex-start !important
            }

            .align-content-md-end {
                align-content: flex-end !important
            }

            .align-content-md-center {
                align-content: center !important
            }

            .align-content-md-between {
                align-content: space-between !important
            }

            .align-content-md-around {
                align-content: space-around !important
            }

            .align-content-md-stretch {
                align-content: stretch !important
            }

            .align-self-md-auto {
                align-self: auto !important
            }

            .align-self-md-start {
                align-self: flex-start !important
            }

            .align-self-md-end {
                align-self: flex-end !important
            }

            .align-self-md-center {
                align-self: center !important
            }

            .align-self-md-baseline {
                align-self: baseline !important
            }

            .align-self-md-stretch {
                align-self: stretch !important
            }

            .order-md-first {
                order: -1 !important
            }

            .order-md-0 {
                order: 0 !important
            }

            .order-md-1 {
                order: 1 !important
            }

            .order-md-2 {
                order: 2 !important
            }

            .order-md-3 {
                order: 3 !important
            }

            .order-md-4 {
                order: 4 !important
            }

            .order-md-5 {
                order: 5 !important
            }

            .order-md-last {
                order: 6 !important
            }

            .m-md-0 {
                margin: 0 !important
            }

            .m-md-1 {
                margin: .25rem !important
            }

            .m-md-2 {
                margin: .5rem !important
            }

            .m-md-3 {
                margin: 1rem !important
            }

            .m-md-4 {
                margin: 1.5rem !important
            }

            .m-md-5 {
                margin: 3rem !important
            }

            .m-md-auto {
                margin: auto !important
            }

            .mx-md-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-md-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-md-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-md-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-md-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-md-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-md-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-md-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-md-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-md-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-md-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-md-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-md-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-md-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-md-0 {
                margin-top: 0 !important
            }

            .mt-md-1 {
                margin-top: .25rem !important
            }

            .mt-md-2 {
                margin-top: .5rem !important
            }

            .mt-md-3 {
                margin-top: 1rem !important
            }

            .mt-md-4 {
                margin-top: 1.5rem !important
            }

            .mt-md-5 {
                margin-top: 3rem !important
            }

            .mt-md-auto {
                margin-top: auto !important
            }

            .me-md-0 {
                margin-right: 0 !important
            }

            .me-md-1 {
                margin-right: .25rem !important
            }

            .me-md-2 {
                margin-right: .5rem !important
            }

            .me-md-3 {
                margin-right: 1rem !important
            }

            .me-md-4 {
                margin-right: 1.5rem !important
            }

            .me-md-5 {
                margin-right: 3rem !important
            }

            .me-md-auto {
                margin-right: auto !important
            }

            .mb-md-0 {
                margin-bottom: 0 !important
            }

            .mb-md-1 {
                margin-bottom: .25rem !important
            }

            .mb-md-2 {
                margin-bottom: .5rem !important
            }

            .mb-md-3 {
                margin-bottom: 1rem !important
            }

            .mb-md-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-md-5 {
                margin-bottom: 3rem !important
            }

            .mb-md-auto {
                margin-bottom: auto !important
            }

            .ms-md-0 {
                margin-left: 0 !important
            }

            .ms-md-1 {
                margin-left: .25rem !important
            }

            .ms-md-2 {
                margin-left: .5rem !important
            }

            .ms-md-3 {
                margin-left: 1rem !important
            }

            .ms-md-4 {
                margin-left: 1.5rem !important
            }

            .ms-md-5 {
                margin-left: 3rem !important
            }

            .ms-md-auto {
                margin-left: auto !important
            }

            .p-md-0 {
                padding: 0 !important
            }

            .p-md-1 {
                padding: .25rem !important
            }

            .p-md-2 {
                padding: .5rem !important
            }

            .p-md-3 {
                padding: 1rem !important
            }

            .p-md-4 {
                padding: 1.5rem !important
            }

            .p-md-5 {
                padding: 3rem !important
            }

            .px-md-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-md-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-md-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-md-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-md-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-md-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-md-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-md-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-md-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-md-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-md-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-md-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-md-0 {
                padding-top: 0 !important
            }

            .pt-md-1 {
                padding-top: .25rem !important
            }

            .pt-md-2 {
                padding-top: .5rem !important
            }

            .pt-md-3 {
                padding-top: 1rem !important
            }

            .pt-md-4 {
                padding-top: 1.5rem !important
            }

            .pt-md-5 {
                padding-top: 3rem !important
            }

            .pe-md-0 {
                padding-right: 0 !important
            }

            .pe-md-1 {
                padding-right: .25rem !important
            }

            .pe-md-2 {
                padding-right: .5rem !important
            }

            .pe-md-3 {
                padding-right: 1rem !important
            }

            .pe-md-4 {
                padding-right: 1.5rem !important
            }

            .pe-md-5 {
                padding-right: 3rem !important
            }

            .pb-md-0 {
                padding-bottom: 0 !important
            }

            .pb-md-1 {
                padding-bottom: .25rem !important
            }

            .pb-md-2 {
                padding-bottom: .5rem !important
            }

            .pb-md-3 {
                padding-bottom: 1rem !important
            }

            .pb-md-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-md-5 {
                padding-bottom: 3rem !important
            }

            .ps-md-0 {
                padding-left: 0 !important
            }

            .ps-md-1 {
                padding-left: .25rem !important
            }

            .ps-md-2 {
                padding-left: .5rem !important
            }

            .ps-md-3 {
                padding-left: 1rem !important
            }

            .ps-md-4 {
                padding-left: 1.5rem !important
            }

            .ps-md-5 {
                padding-left: 3rem !important
            }

            .gap-md-0 {
                gap: 0 !important
            }

            .gap-md-1 {
                gap: .25rem !important
            }

            .gap-md-2 {
                gap: .5rem !important
            }

            .gap-md-3 {
                gap: 1rem !important
            }

            .gap-md-4 {
                gap: 1.5rem !important
            }

            .gap-md-5 {
                gap: 3rem !important
            }

            .text-md-start {
                text-align: left !important
            }

            .text-md-end {
                text-align: right !important
            }

            .text-md-center {
                text-align: center !important
            }
        }

        @media (min-width:992px) {
            .float-lg-start {
                float: left !important
            }

            .float-lg-end {
                float: right !important
            }

            .float-lg-none {
                float: none !important
            }

            .d-lg-inline {
                display: inline !important
            }

            .d-lg-inline-block {
                display: inline-block !important
            }

            .d-lg-block {
                display: block !important
            }

            .d-lg-grid {
                display: grid !important
            }

            .d-lg-table {
                display: table !important
            }

            .d-lg-table-row {
                display: table-row !important
            }

            .d-lg-table-cell {
                display: table-cell !important
            }

            .d-lg-flex {
                display: flex !important
            }

            .d-lg-inline-flex {
                display: inline-flex !important
            }

            .d-lg-none {
                display: none !important
            }

            .flex-lg-fill {
                flex: 1 1 auto !important
            }

            .flex-lg-row {
                flex-direction: row !important
            }

            .flex-lg-column {
                flex-direction: column !important
            }

            .flex-lg-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-lg-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-lg-grow-0 {
                flex-grow: 0 !important
            }

            .flex-lg-grow-1 {
                flex-grow: 1 !important
            }

            .flex-lg-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-lg-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-lg-wrap {
                flex-wrap: wrap !important
            }

            .flex-lg-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-lg-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .justify-content-lg-start {
                justify-content: flex-start !important
            }

            .justify-content-lg-end {
                justify-content: flex-end !important
            }

            .justify-content-lg-center {
                justify-content: center !important
            }

            .justify-content-lg-between {
                justify-content: space-between !important
            }

            .justify-content-lg-around {
                justify-content: space-around !important
            }

            .justify-content-lg-evenly {
                justify-content: space-evenly !important
            }

            .align-items-lg-start {
                align-items: flex-start !important
            }

            .align-items-lg-end {
                align-items: flex-end !important
            }

            .align-items-lg-center {
                align-items: center !important
            }

            .align-items-lg-baseline {
                align-items: baseline !important
            }

            .align-items-lg-stretch {
                align-items: stretch !important
            }

            .align-content-lg-start {
                align-content: flex-start !important
            }

            .align-content-lg-end {
                align-content: flex-end !important
            }

            .align-content-lg-center {
                align-content: center !important
            }

            .align-content-lg-between {
                align-content: space-between !important
            }

            .align-content-lg-around {
                align-content: space-around !important
            }

            .align-content-lg-stretch {
                align-content: stretch !important
            }

            .align-self-lg-auto {
                align-self: auto !important
            }

            .align-self-lg-start {
                align-self: flex-start !important
            }

            .align-self-lg-end {
                align-self: flex-end !important
            }

            .align-self-lg-center {
                align-self: center !important
            }

            .align-self-lg-baseline {
                align-self: baseline !important
            }

            .align-self-lg-stretch {
                align-self: stretch !important
            }

            .order-lg-first {
                order: -1 !important
            }

            .order-lg-0 {
                order: 0 !important
            }

            .order-lg-1 {
                order: 1 !important
            }

            .order-lg-2 {
                order: 2 !important
            }

            .order-lg-3 {
                order: 3 !important
            }

            .order-lg-4 {
                order: 4 !important
            }

            .order-lg-5 {
                order: 5 !important
            }

            .order-lg-last {
                order: 6 !important
            }

            .m-lg-0 {
                margin: 0 !important
            }

            .m-lg-1 {
                margin: .25rem !important
            }

            .m-lg-2 {
                margin: .5rem !important
            }

            .m-lg-3 {
                margin: 1rem !important
            }

            .m-lg-4 {
                margin: 1.5rem !important
            }

            .m-lg-5 {
                margin: 3rem !important
            }

            .m-lg-auto {
                margin: auto !important
            }

            .mx-lg-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-lg-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-lg-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-lg-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-lg-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-lg-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-lg-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-lg-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-lg-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-lg-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-lg-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-lg-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-lg-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-lg-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-lg-0 {
                margin-top: 0 !important
            }

            .mt-lg-1 {
                margin-top: .25rem !important
            }

            .mt-lg-2 {
                margin-top: .5rem !important
            }

            .mt-lg-3 {
                margin-top: 1rem !important
            }

            .mt-lg-4 {
                margin-top: 1.5rem !important
            }

            .mt-lg-5 {
                margin-top: 3rem !important
            }

            .mt-lg-auto {
                margin-top: auto !important
            }

            .me-lg-0 {
                margin-right: 0 !important
            }

            .me-lg-1 {
                margin-right: .25rem !important
            }

            .me-lg-2 {
                margin-right: .5rem !important
            }

            .me-lg-3 {
                margin-right: 1rem !important
            }

            .me-lg-4 {
                margin-right: 1.5rem !important
            }

            .me-lg-5 {
                margin-right: 3rem !important
            }

            .me-lg-auto {
                margin-right: auto !important
            }

            .mb-lg-0 {
                margin-bottom: 0 !important
            }

            .mb-lg-1 {
                margin-bottom: .25rem !important
            }

            .mb-lg-2 {
                margin-bottom: .5rem !important
            }

            .mb-lg-3 {
                margin-bottom: 1rem !important
            }

            .mb-lg-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-lg-5 {
                margin-bottom: 3rem !important
            }

            .mb-lg-auto {
                margin-bottom: auto !important
            }

            .ms-lg-0 {
                margin-left: 0 !important
            }

            .ms-lg-1 {
                margin-left: .25rem !important
            }

            .ms-lg-2 {
                margin-left: .5rem !important
            }

            .ms-lg-3 {
                margin-left: 1rem !important
            }

            .ms-lg-4 {
                margin-left: 1.5rem !important
            }

            .ms-lg-5 {
                margin-left: 3rem !important
            }

            .ms-lg-auto {
                margin-left: auto !important
            }

            .p-lg-0 {
                padding: 0 !important
            }

            .p-lg-1 {
                padding: .25rem !important
            }

            .p-lg-2 {
                padding: .5rem !important
            }

            .p-lg-3 {
                padding: 1rem !important
            }

            .p-lg-4 {
                padding: 1.5rem !important
            }

            .p-lg-5 {
                padding: 3rem !important
            }

            .px-lg-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-lg-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-lg-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-lg-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-lg-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-lg-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-lg-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-lg-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-lg-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-lg-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-lg-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-lg-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-lg-0 {
                padding-top: 0 !important
            }

            .pt-lg-1 {
                padding-top: .25rem !important
            }

            .pt-lg-2 {
                padding-top: .5rem !important
            }

            .pt-lg-3 {
                padding-top: 1rem !important
            }

            .pt-lg-4 {
                padding-top: 1.5rem !important
            }

            .pt-lg-5 {
                padding-top: 3rem !important
            }

            .pe-lg-0 {
                padding-right: 0 !important
            }

            .pe-lg-1 {
                padding-right: .25rem !important
            }

            .pe-lg-2 {
                padding-right: .5rem !important
            }

            .pe-lg-3 {
                padding-right: 1rem !important
            }

            .pe-lg-4 {
                padding-right: 1.5rem !important
            }

            .pe-lg-5 {
                padding-right: 3rem !important
            }

            .pb-lg-0 {
                padding-bottom: 0 !important
            }

            .pb-lg-1 {
                padding-bottom: .25rem !important
            }

            .pb-lg-2 {
                padding-bottom: .5rem !important
            }

            .pb-lg-3 {
                padding-bottom: 1rem !important
            }

            .pb-lg-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-lg-5 {
                padding-bottom: 3rem !important
            }

            .ps-lg-0 {
                padding-left: 0 !important
            }

            .ps-lg-1 {
                padding-left: .25rem !important
            }

            .ps-lg-2 {
                padding-left: .5rem !important
            }

            .ps-lg-3 {
                padding-left: 1rem !important
            }

            .ps-lg-4 {
                padding-left: 1.5rem !important
            }

            .ps-lg-5 {
                padding-left: 3rem !important
            }

            .gap-lg-0 {
                gap: 0 !important
            }

            .gap-lg-1 {
                gap: .25rem !important
            }

            .gap-lg-2 {
                gap: .5rem !important
            }

            .gap-lg-3 {
                gap: 1rem !important
            }

            .gap-lg-4 {
                gap: 1.5rem !important
            }

            .gap-lg-5 {
                gap: 3rem !important
            }

            .text-lg-start {
                text-align: left !important
            }

            .text-lg-end {
                text-align: right !important
            }

            .text-lg-center {
                text-align: center !important
            }
        }

        @media (min-width:1200px) {
            .float-xl-start {
                float: left !important
            }

            .float-xl-end {
                float: right !important
            }

            .float-xl-none {
                float: none !important
            }

            .d-xl-inline {
                display: inline !important
            }

            .d-xl-inline-block {
                display: inline-block !important
            }

            .d-xl-block {
                display: block !important
            }

            .d-xl-grid {
                display: grid !important
            }

            .d-xl-table {
                display: table !important
            }

            .d-xl-table-row {
                display: table-row !important
            }

            .d-xl-table-cell {
                display: table-cell !important
            }

            .d-xl-flex {
                display: flex !important
            }

            .d-xl-inline-flex {
                display: inline-flex !important
            }

            .d-xl-none {
                display: none !important
            }

            .flex-xl-fill {
                flex: 1 1 auto !important
            }

            .flex-xl-row {
                flex-direction: row !important
            }

            .flex-xl-column {
                flex-direction: column !important
            }

            .flex-xl-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-xl-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-xl-grow-0 {
                flex-grow: 0 !important
            }

            .flex-xl-grow-1 {
                flex-grow: 1 !important
            }

            .flex-xl-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-xl-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-xl-wrap {
                flex-wrap: wrap !important
            }

            .flex-xl-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-xl-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .justify-content-xl-start {
                justify-content: flex-start !important
            }

            .justify-content-xl-end {
                justify-content: flex-end !important
            }

            .justify-content-xl-center {
                justify-content: center !important
            }

            .justify-content-xl-between {
                justify-content: space-between !important
            }

            .justify-content-xl-around {
                justify-content: space-around !important
            }

            .justify-content-xl-evenly {
                justify-content: space-evenly !important
            }

            .align-items-xl-start {
                align-items: flex-start !important
            }

            .align-items-xl-end {
                align-items: flex-end !important
            }

            .align-items-xl-center {
                align-items: center !important
            }

            .align-items-xl-baseline {
                align-items: baseline !important
            }

            .align-items-xl-stretch {
                align-items: stretch !important
            }

            .align-content-xl-start {
                align-content: flex-start !important
            }

            .align-content-xl-end {
                align-content: flex-end !important
            }

            .align-content-xl-center {
                align-content: center !important
            }

            .align-content-xl-between {
                align-content: space-between !important
            }

            .align-content-xl-around {
                align-content: space-around !important
            }

            .align-content-xl-stretch {
                align-content: stretch !important
            }

            .align-self-xl-auto {
                align-self: auto !important
            }

            .align-self-xl-start {
                align-self: flex-start !important
            }

            .align-self-xl-end {
                align-self: flex-end !important
            }

            .align-self-xl-center {
                align-self: center !important
            }

            .align-self-xl-baseline {
                align-self: baseline !important
            }

            .align-self-xl-stretch {
                align-self: stretch !important
            }

            .order-xl-first {
                order: -1 !important
            }

            .order-xl-0 {
                order: 0 !important
            }

            .order-xl-1 {
                order: 1 !important
            }

            .order-xl-2 {
                order: 2 !important
            }

            .order-xl-3 {
                order: 3 !important
            }

            .order-xl-4 {
                order: 4 !important
            }

            .order-xl-5 {
                order: 5 !important
            }

            .order-xl-last {
                order: 6 !important
            }

            .m-xl-0 {
                margin: 0 !important
            }

            .m-xl-1 {
                margin: .25rem !important
            }

            .m-xl-2 {
                margin: .5rem !important
            }

            .m-xl-3 {
                margin: 1rem !important
            }

            .m-xl-4 {
                margin: 1.5rem !important
            }

            .m-xl-5 {
                margin: 3rem !important
            }

            .m-xl-auto {
                margin: auto !important
            }

            .mx-xl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-xl-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-xl-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-xl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-xl-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-xl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-xl-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-xl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-xl-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-xl-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-xl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-xl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-xl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-xl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-xl-0 {
                margin-top: 0 !important
            }

            .mt-xl-1 {
                margin-top: .25rem !important
            }

            .mt-xl-2 {
                margin-top: .5rem !important
            }

            .mt-xl-3 {
                margin-top: 1rem !important
            }

            .mt-xl-4 {
                margin-top: 1.5rem !important
            }

            .mt-xl-5 {
                margin-top: 3rem !important
            }

            .mt-xl-auto {
                margin-top: auto !important
            }

            .me-xl-0 {
                margin-right: 0 !important
            }

            .me-xl-1 {
                margin-right: .25rem !important
            }

            .me-xl-2 {
                margin-right: .5rem !important
            }

            .me-xl-3 {
                margin-right: 1rem !important
            }

            .me-xl-4 {
                margin-right: 1.5rem !important
            }

            .me-xl-5 {
                margin-right: 3rem !important
            }

            .me-xl-auto {
                margin-right: auto !important
            }

            .mb-xl-0 {
                margin-bottom: 0 !important
            }

            .mb-xl-1 {
                margin-bottom: .25rem !important
            }

            .mb-xl-2 {
                margin-bottom: .5rem !important
            }

            .mb-xl-3 {
                margin-bottom: 1rem !important
            }

            .mb-xl-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-xl-5 {
                margin-bottom: 3rem !important
            }

            .mb-xl-auto {
                margin-bottom: auto !important
            }

            .ms-xl-0 {
                margin-left: 0 !important
            }

            .ms-xl-1 {
                margin-left: .25rem !important
            }

            .ms-xl-2 {
                margin-left: .5rem !important
            }

            .ms-xl-3 {
                margin-left: 1rem !important
            }

            .ms-xl-4 {
                margin-left: 1.5rem !important
            }

            .ms-xl-5 {
                margin-left: 3rem !important
            }

            .ms-xl-auto {
                margin-left: auto !important
            }

            .p-xl-0 {
                padding: 0 !important
            }

            .p-xl-1 {
                padding: .25rem !important
            }

            .p-xl-2 {
                padding: .5rem !important
            }

            .p-xl-3 {
                padding: 1rem !important
            }

            .p-xl-4 {
                padding: 1.5rem !important
            }

            .p-xl-5 {
                padding: 3rem !important
            }

            .px-xl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-xl-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-xl-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-xl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-xl-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-xl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-xl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-xl-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-xl-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-xl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-xl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-xl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-xl-0 {
                padding-top: 0 !important
            }

            .pt-xl-1 {
                padding-top: .25rem !important
            }

            .pt-xl-2 {
                padding-top: .5rem !important
            }

            .pt-xl-3 {
                padding-top: 1rem !important
            }

            .pt-xl-4 {
                padding-top: 1.5rem !important
            }

            .pt-xl-5 {
                padding-top: 3rem !important
            }

            .pe-xl-0 {
                padding-right: 0 !important
            }

            .pe-xl-1 {
                padding-right: .25rem !important
            }

            .pe-xl-2 {
                padding-right: .5rem !important
            }

            .pe-xl-3 {
                padding-right: 1rem !important
            }

            .pe-xl-4 {
                padding-right: 1.5rem !important
            }

            .pe-xl-5 {
                padding-right: 3rem !important
            }

            .pb-xl-0 {
                padding-bottom: 0 !important
            }

            .pb-xl-1 {
                padding-bottom: .25rem !important
            }

            .pb-xl-2 {
                padding-bottom: .5rem !important
            }

            .pb-xl-3 {
                padding-bottom: 1rem !important
            }

            .pb-xl-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-xl-5 {
                padding-bottom: 3rem !important
            }

            .ps-xl-0 {
                padding-left: 0 !important
            }

            .ps-xl-1 {
                padding-left: .25rem !important
            }

            .ps-xl-2 {
                padding-left: .5rem !important
            }

            .ps-xl-3 {
                padding-left: 1rem !important
            }

            .ps-xl-4 {
                padding-left: 1.5rem !important
            }

            .ps-xl-5 {
                padding-left: 3rem !important
            }

            .gap-xl-0 {
                gap: 0 !important
            }

            .gap-xl-1 {
                gap: .25rem !important
            }

            .gap-xl-2 {
                gap: .5rem !important
            }

            .gap-xl-3 {
                gap: 1rem !important
            }

            .gap-xl-4 {
                gap: 1.5rem !important
            }

            .gap-xl-5 {
                gap: 3rem !important
            }

            .text-xl-start {
                text-align: left !important
            }

            .text-xl-end {
                text-align: right !important
            }

            .text-xl-center {
                text-align: center !important
            }
        }

        @media (min-width:1400px) {
            .float-xxl-start {
                float: left !important
            }

            .float-xxl-end {
                float: right !important
            }

            .float-xxl-none {
                float: none !important
            }

            .d-xxl-inline {
                display: inline !important
            }

            .d-xxl-inline-block {
                display: inline-block !important
            }

            .d-xxl-block {
                display: block !important
            }

            .d-xxl-grid {
                display: grid !important
            }

            .d-xxl-table {
                display: table !important
            }

            .d-xxl-table-row {
                display: table-row !important
            }

            .d-xxl-table-cell {
                display: table-cell !important
            }

            .d-xxl-flex {
                display: flex !important
            }

            .d-xxl-inline-flex {
                display: inline-flex !important
            }

            .d-xxl-none {
                display: none !important
            }

            .flex-xxl-fill {
                flex: 1 1 auto !important
            }

            .flex-xxl-row {
                flex-direction: row !important
            }

            .flex-xxl-column {
                flex-direction: column !important
            }

            .flex-xxl-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-xxl-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-xxl-grow-0 {
                flex-grow: 0 !important
            }

            .flex-xxl-grow-1 {
                flex-grow: 1 !important
            }

            .flex-xxl-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-xxl-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-xxl-wrap {
                flex-wrap: wrap !important
            }

            .flex-xxl-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-xxl-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .justify-content-xxl-start {
                justify-content: flex-start !important
            }

            .justify-content-xxl-end {
                justify-content: flex-end !important
            }

            .justify-content-xxl-center {
                justify-content: center !important
            }

            .justify-content-xxl-between {
                justify-content: space-between !important
            }

            .justify-content-xxl-around {
                justify-content: space-around !important
            }

            .justify-content-xxl-evenly {
                justify-content: space-evenly !important
            }

            .align-items-xxl-start {
                align-items: flex-start !important
            }

            .align-items-xxl-end {
                align-items: flex-end !important
            }

            .align-items-xxl-center {
                align-items: center !important
            }

            .align-items-xxl-baseline {
                align-items: baseline !important
            }

            .align-items-xxl-stretch {
                align-items: stretch !important
            }

            .align-content-xxl-start {
                align-content: flex-start !important
            }

            .align-content-xxl-end {
                align-content: flex-end !important
            }

            .align-content-xxl-center {
                align-content: center !important
            }

            .align-content-xxl-between {
                align-content: space-between !important
            }

            .align-content-xxl-around {
                align-content: space-around !important
            }

            .align-content-xxl-stretch {
                align-content: stretch !important
            }

            .align-self-xxl-auto {
                align-self: auto !important
            }

            .align-self-xxl-start {
                align-self: flex-start !important
            }

            .align-self-xxl-end {
                align-self: flex-end !important
            }

            .align-self-xxl-center {
                align-self: center !important
            }

            .align-self-xxl-baseline {
                align-self: baseline !important
            }

            .align-self-xxl-stretch {
                align-self: stretch !important
            }

            .order-xxl-first {
                order: -1 !important
            }

            .order-xxl-0 {
                order: 0 !important
            }

            .order-xxl-1 {
                order: 1 !important
            }

            .order-xxl-2 {
                order: 2 !important
            }

            .order-xxl-3 {
                order: 3 !important
            }

            .order-xxl-4 {
                order: 4 !important
            }

            .order-xxl-5 {
                order: 5 !important
            }

            .order-xxl-last {
                order: 6 !important
            }

            .m-xxl-0 {
                margin: 0 !important
            }

            .m-xxl-1 {
                margin: .25rem !important
            }

            .m-xxl-2 {
                margin: .5rem !important
            }

            .m-xxl-3 {
                margin: 1rem !important
            }

            .m-xxl-4 {
                margin: 1.5rem !important
            }

            .m-xxl-5 {
                margin: 3rem !important
            }

            .m-xxl-auto {
                margin: auto !important
            }

            .mx-xxl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-xxl-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-xxl-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-xxl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-xxl-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-xxl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-xxl-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-xxl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-xxl-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-xxl-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-xxl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-xxl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-xxl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-xxl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-xxl-0 {
                margin-top: 0 !important
            }

            .mt-xxl-1 {
                margin-top: .25rem !important
            }

            .mt-xxl-2 {
                margin-top: .5rem !important
            }

            .mt-xxl-3 {
                margin-top: 1rem !important
            }

            .mt-xxl-4 {
                margin-top: 1.5rem !important
            }

            .mt-xxl-5 {
                margin-top: 3rem !important
            }

            .mt-xxl-auto {
                margin-top: auto !important
            }

            .me-xxl-0 {
                margin-right: 0 !important
            }

            .me-xxl-1 {
                margin-right: .25rem !important
            }

            .me-xxl-2 {
                margin-right: .5rem !important
            }

            .me-xxl-3 {
                margin-right: 1rem !important
            }

            .me-xxl-4 {
                margin-right: 1.5rem !important
            }

            .me-xxl-5 {
                margin-right: 3rem !important
            }

            .me-xxl-auto {
                margin-right: auto !important
            }

            .mb-xxl-0 {
                margin-bottom: 0 !important
            }

            .mb-xxl-1 {
                margin-bottom: .25rem !important
            }

            .mb-xxl-2 {
                margin-bottom: .5rem !important
            }

            .mb-xxl-3 {
                margin-bottom: 1rem !important
            }

            .mb-xxl-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-xxl-5 {
                margin-bottom: 3rem !important
            }

            .mb-xxl-auto {
                margin-bottom: auto !important
            }

            .ms-xxl-0 {
                margin-left: 0 !important
            }

            .ms-xxl-1 {
                margin-left: .25rem !important
            }

            .ms-xxl-2 {
                margin-left: .5rem !important
            }

            .ms-xxl-3 {
                margin-left: 1rem !important
            }

            .ms-xxl-4 {
                margin-left: 1.5rem !important
            }

            .ms-xxl-5 {
                margin-left: 3rem !important
            }

            .ms-xxl-auto {
                margin-left: auto !important
            }

            .p-xxl-0 {
                padding: 0 !important
            }

            .p-xxl-1 {
                padding: .25rem !important
            }

            .p-xxl-2 {
                padding: .5rem !important
            }

            .p-xxl-3 {
                padding: 1rem !important
            }

            .p-xxl-4 {
                padding: 1.5rem !important
            }

            .p-xxl-5 {
                padding: 3rem !important
            }

            .px-xxl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-xxl-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-xxl-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-xxl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-xxl-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-xxl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-xxl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-xxl-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-xxl-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-xxl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-xxl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-xxl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-xxl-0 {
                padding-top: 0 !important
            }

            .pt-xxl-1 {
                padding-top: .25rem !important
            }

            .pt-xxl-2 {
                padding-top: .5rem !important
            }

            .pt-xxl-3 {
                padding-top: 1rem !important
            }

            .pt-xxl-4 {
                padding-top: 1.5rem !important
            }

            .pt-xxl-5 {
                padding-top: 3rem !important
            }

            .pe-xxl-0 {
                padding-right: 0 !important
            }

            .pe-xxl-1 {
                padding-right: .25rem !important
            }

            .pe-xxl-2 {
                padding-right: .5rem !important
            }

            .pe-xxl-3 {
                padding-right: 1rem !important
            }

            .pe-xxl-4 {
                padding-right: 1.5rem !important
            }

            .pe-xxl-5 {
                padding-right: 3rem !important
            }

            .pb-xxl-0 {
                padding-bottom: 0 !important
            }

            .pb-xxl-1 {
                padding-bottom: .25rem !important
            }

            .pb-xxl-2 {
                padding-bottom: .5rem !important
            }

            .pb-xxl-3 {
                padding-bottom: 1rem !important
            }

            .pb-xxl-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-xxl-5 {
                padding-bottom: 3rem !important
            }

            .ps-xxl-0 {
                padding-left: 0 !important
            }

            .ps-xxl-1 {
                padding-left: .25rem !important
            }

            .ps-xxl-2 {
                padding-left: .5rem !important
            }

            .ps-xxl-3 {
                padding-left: 1rem !important
            }

            .ps-xxl-4 {
                padding-left: 1.5rem !important
            }

            .ps-xxl-5 {
                padding-left: 3rem !important
            }

            .gap-xxl-0 {
                gap: 0 !important
            }

            .gap-xxl-1 {
                gap: .25rem !important
            }

            .gap-xxl-2 {
                gap: .5rem !important
            }

            .gap-xxl-3 {
                gap: 1rem !important
            }

            .gap-xxl-4 {
                gap: 1.5rem !important
            }

            .gap-xxl-5 {
                gap: 3rem !important
            }

            .text-xxl-start {
                text-align: left !important
            }

            .text-xxl-end {
                text-align: right !important
            }

            .text-xxl-center {
                text-align: center !important
            }
        }

        @media (min-width:1200px) {
            .fs-1 {
                font-size: 2.5rem !important
            }

            .fs-2 {
                font-size: 2rem !important
            }

            .fs-3 {
                font-size: 1.75rem !important
            }

            .fs-4 {
                font-size: 1.5rem !important
            }
        }

        @media print {
            .d-print-inline {
                display: inline !important
            }

            .d-print-inline-block {
                display: inline-block !important
            }

            .d-print-block {
                display: block !important
            }

            .d-print-grid {
                display: grid !important
            }

            .d-print-table {
                display: table !important
            }

            .d-print-table-row {
                display: table-row !important
            }

            .d-print-table-cell {
                display: table-cell !important
            }

            .d-print-flex {
                display: flex !important
            }

            .d-print-inline-flex {
                display: inline-flex !important
            }

            .d-print-none {
                display: none !important
            }
        }

        /*# sourceMappingURL=bootstrap.min.css.map */
    </style>
    <style>
        body {
            box-sizing: border-box;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            actualWidth: 1600;
            actualHeight: 734;
        }

        body .mainDiv {
            background-color: #063251;
            margin: 0 auto;
            width: 95vw;
            color: white;
            text-align: center;
            border-radius: var(--radius);
        }

        h4 {
            box-sizing: border-box;
            margin-bottom: 0.5;
            font-weight: 500;
            line-height: 1.2;
            color: var(--bs-heading-color);
            font-size: calc(1.275rem + 0.3vw);
        }

        body .TravelDiv {
            margin: 0 auto;
            width: 95vw;
            color: var(--clr-primary-10);
            text-align: center;
            margin-bottom: 0.8rem;
            border: 0.1rem solid black;
            color: var(--clr-black);
            text-align: start;
            font-size: 1.2rem;
            font-weight: 600;
            padding: 0.1rem 1.2rem;
        }

        h1,
        h2,
        h3,
        h4 {
            letter-spacing: var(--spacing);
            text-transform: capitalize;
            line-height: 1.25;
            margin-bottom: 0.75rem;
            font-family: var(--ff-primary);
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-right: auto;
            margin-left: auto;
        }


        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x));
        }

        body .units {
            margin: 0 auto;
            width: 95vw;
            color: black;
        }


        body .units table {
            border-color: var(--clr-black);
            text-align: justify;
        }

        .table {
            --bs-table-color: var(--bs-body-color);
            --bs-table-bg: transparent;
            --bs-table-border-color: var(--bs-border-color);
            --bs-table-accent-bg: transparent;
            --bs-table-striped-color: var(--bs-body-color);
            --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
            --bs-table-active-color: var(--bs-body-color);
            --bs-table-active-bg: rgba(0, 0, 0, 0.1);
            --bs-table-hover-color: var(--bs-body-color);
            --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
            width: 100%;
            margin-bottom: 1rem;
            color: var(--bs-table-color);
            vertical-align: top;
            border-color: var(--bs-table-border-color);
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        .icon {
            color: white;
            fill: currentColor;
            margin-right: 10px;
        }

        .border_right {
            margin-right: 20px;
            margin-left: 5em;
            border-right: 2px solid black !important;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        th,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <img src="<?php echo base_url('/public/image/logo_new.png'); ?>" alt="logo" style="margin-bottom: 15px;" width="100" class="my-3 ms-4">
    </div>
    <div class="mainDiv">
        <h4>Voucher</h4>
    </div>
    <div class="mainDiv">
        <h4 class="text-lg-start mx-3" style="text-align: start;margin-left: 20px;"><span class="icon"><svg width="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    
                    <path d="M256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM272 416h-160C103.2 416 96 408.8 96 400C96 391.2 103.2 384 112 384h160c8.836 0 16 7.162 16 16C288 408.8 280.8 416 272 416zM272 352h-160C103.2 352 96 344.8 96 336C96 327.2 103.2 320 112 320h160c8.836 0 16 7.162 16 16C288 344.8 280.8 352 272 352zM288 272C288 280.8 280.8 288 272 288h-160C103.2 288 96 280.8 96 272C96 263.2 103.2 256 112 256h160C280.8 256 288 263.2 288 272z" />
                </svg></span> Hotel Details</h4>
    </div>

    <!-- ?php foreach ($hotel as $key => $value) : ?> -->
    <?php foreach (explode(',',$hotel[0]->nights) as $key => $value) : ?>
    
    <div class="units">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="border: 2px solid #000;">Hotel Name</th>
                <th style="border: 2px solid #000;"><?php print_r(explode(',',$hotel[0]->hotel_name)[$key]) ?></th>
            </tr>
        </thead>
    </table>
    </div>

    <div class="units">
    <table class="table table-bordered">
        <thead>
            <tr>
                
                <th style="border: 2px solid #000;">Check-in</th>
                <?php
                    $date = new DateTime(explode(',',$hotel[0]->checkin)[$key]);
					$check_in = $date->format('d-m-Y');

                    $date->modify('+' . explode(',',$hotel[0]->nights)[$key] . ' day');
                    $checkout =  $date->format('d-m-Y');
                ?>
                 <th style="border: 2px solid #000;"><?php echo $check_in; ?></th>
                <th style="border: 2px solid #000;">Check-out </th>
                <th style="border: 2px solid #000;"><?php echo $checkout; ?></th>
            </tr>
        </thead>
    </table>
    </div>

        <div class="units" style="overflow-x: auto;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Room Type</th>
                        <th>Adults</th>
                        <th>Children</th>
                        <th>Children Ages</th>
                        <th>Meals Board</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php print_r(explode(',',$hotel[0]->room_type)[$key]); ?></td>
                        <td><?php echo $details->adult; ?></td>
                        <td><?php echo $details->child; ?></td>
                        <td>--</td>
                        <?php if ($board_arr[$key] == '') : ?>
                            <td>----</td>
                        <?php else : ?>
                            <td><?php echo $board_arr[$key]; ?></td>
                        <?php endif ?>
                    </tr>
                </tbody>
            </table>

        </div>

    <?php endforeach; ?>

    <div class="mainDiv">
        <h4 class="text-lg-start mx-3" style="text-align: start;margin-left: 20px;"><span class="icon"><svg width="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    
                    <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" />
                </svg></span>Guest Details</h4>
    </div>

    <div class="units" style="overflow-x: auto;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Guest Name:</th>
                    <th>Nationality:</th>
                    <th>Guest Email Id:</th>
                    <th>Guest Mobile No:</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $guest_name ?></td>
                    <td>indian</td>
                    <td><?php echo $guest->b2bEmail ?></td>
                    <td><?php echo $guest->b2bmobileNumber ?></td>
                </tr>
            </tbody>
        </table>
    </div>



    <div class="mainDiv">
        <h4 class="text-lg-start mx-3" style="text-align: start;margin-left: 0px;"><span class="icon" style="text-align: start;margin-left: 20px;"><svg width="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    
                    <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 400c-18 0-32-14-32-32s13.1-32 32-32c17.1 0 32 14 32 32S273.1 400 256 400zM325.1 258L280 286V288c0 13-11 24-24 24S232 301 232 288V272c0-8 4-16 12-21l57-34C308 213 312 206 312 198C312 186 301.1 176 289.1 176h-51.1C225.1 176 216 186 216 198c0 13-11 24-24 24s-24-11-24-24C168 159 199 128 237.1 128h51.1C329 128 360 159 360 198C360 222 347 245 325.1 258z" />
                </svg></span>Important
            Information : Hotel
        </h4>
    </div>


    <div class="information">
        <?php echo $impInfo ?>
        
    </div>
</body>

</html>