<script setup lang="ts">
import { onMounted, onBeforeUnmount, ref } from 'vue'
import { gsap } from 'gsap'

const preloader = ref<HTMLElement | null>(null)
const art = ref<HTMLElement | null>(null)
const puzzle = ref<HTMLElement | null>(null)

const imagePath = '/images/municipal-hall.png'

function getPuzzleGrid() {
    const width = window.innerWidth

    if (width >= 1200) {
        return {
            cols: 12,
            rows: 4,
        }
    }

    if (width >= 768) {
        return {
            cols: 10,
            rows: 4,
        }
    }

    if (width >= 480) {
        return {
            cols: 8,
            rows: 3,
        }
    }

    return {
        cols: 6,
        rows: 3,
    }
}

function random(min: number, max: number): number {
    return Math.random() * (max - min) + min
}

function createPuzzle(): HTMLElement[] {
    if (!puzzle.value) {
        return []
    }

    puzzle.value.innerHTML = ''

    const { cols, rows } = getPuzzleGrid()

    const pieces: HTMLElement[] = []

    for (let row = 0; row < rows; row++) {
        for (let col = 0; col < cols; col++) {
            const piece = document.createElement('div')

            piece.className = 'piece'

            piece.style.setProperty('--cols', String(cols))
            piece.style.setProperty('--rows', String(rows))
            piece.style.setProperty('--col', String(col))
            piece.style.setProperty('--row', String(row))

            const x = (col / (cols - 1)) * 100
            const y = (row / (rows - 1)) * 100

            piece.style.backgroundPosition = `${x}% ${y}%`

            puzzle.value.appendChild(piece)

            pieces.push(piece)
        }
    }

    return pieces
}

function startPreloader() {
    const image = new Image()

    image.src = imagePath

    image.onload = () => {
        const pieces = createPuzzle()

        if (!pieces.length) {
            return
        }

        /*
        |--------------------------------------------------------------------------
        | Initial scattered state
        |--------------------------------------------------------------------------
        */

        gsap.set(pieces, {
            x: () =>
                random(
                    -window.innerWidth * 0.55,
                    window.innerWidth * 0.55,
                ),

            y: () =>
                random(
                    -window.innerHeight * 0.55,
                    window.innerHeight * 0.55,
                ),

            rotation: () => random(-55, 55),

            scale: () => random(0.75, 1.1),

            opacity: 1,

            borderColor: 'rgba(255, 255, 255, 0.35)',

            '--seam-opacity': 1,
        })

        /*
        |--------------------------------------------------------------------------
        | Animation
        |--------------------------------------------------------------------------
        */

        const timeline = gsap.timeline()

        // 1. Scatter → assemble
        timeline.to(pieces, {
            x: 0,
            y: 0,
            rotation: 0,
            scale: 1,

            duration: 1.8,

            stagger: {
                each: 0.035,
                from: 'random',
            },

            ease: 'power4.inOut',
        })

        // 2. Remove puzzle borders
        timeline.to(pieces, {
            borderColor: 'rgba(255, 255, 255, 0)',
            '--seam-opacity': 0,

            duration: 0.3,

            ease: 'power2.out',
        })

        // 3. Hold
        timeline.to({}, {
            duration: 0.35,
        })

        // 4. Slight image zoom
        if (art.value) {
            timeline.to(art.value, {
                scale: 1.025,

                duration: 0.65,

                ease: 'power2.inOut',
            })
        }

        // 5. Fade out
        if (preloader.value) {
            timeline.to(preloader.value, {
                opacity: 0,

                duration: 0.8,

                ease: 'power2.inOut',
            })

            // 6. Remove preloader
            timeline.set(preloader.value, {
                display: 'none',
            })
        }
    }

    image.onerror = () => {
        console.error(
            `Could not load ${imagePath}`,
        )

        if (preloader.value) {
            preloader.value.style.display = 'none'
        }
    }
}

onMounted(() => {
    startPreloader()
})

onBeforeUnmount(() => {
    gsap.killTweensOf([
        preloader.value,
        art.value,
        ...(puzzle.value
            ? Array.from(puzzle.value.children)
            : []),
    ])
})
</script>

<template>
    <div
        ref="preloader"
        class="
            fixed
            inset-0
            z-9999
            overflow-hidden
            bg-background
            text-primary
            font-sans
        "
    >
        <div
            class="
                absolute
                inset-[7vh_5vw_9vh]
                flex
                items-center
                justify-center

                max-[1024px]:inset-[10vh_5vw_10vh]

                max-[640px]:inset-[12vh_4vw_12vh]
            "
        >
            <div
                ref="art"
                class="
                    relative
                    w-[min(92vw,1800px)]
                    shrink-0
                    aspect-[1872/704]
                "
            >
                <div
                    ref="puzzle"
                    class="
                        absolute
                        inset-0
                        overflow-visible
                    "
                ></div>
            </div>
        </div>
    </div>
</template>

<style>
.piece {
    position: absolute;

    overflow: hidden;

    --seam-opacity: 1;

    --cols: 12;
    --rows: 4;

    --col: 0;
    --row: 0;

    width: calc(100% / var(--cols) + 1px);
    height: calc(100% / var(--rows) + 1px);

    left: calc(
        var(--col) * 100% / var(--cols)
    );

    top: calc(
        var(--row) * 100% / var(--rows)
    );

    background-image: url('/images/municipal-hall.png');

    background-repeat: no-repeat;

    background-size:
        calc(var(--cols) * 100%)
        calc(var(--rows) * 100%);

    border: 1px solid
        rgba(255, 255, 255, 0.35);

    will-change:
        transform,
        border-color;
}

.piece::after {
    content: '';

    position: absolute;

    inset: 0;

    pointer-events: none;

    box-shadow:
        inset 0 0 0 0.5px
        rgba(21, 21, 21, 0.15);

    opacity: var(--seam-opacity);
}
</style>