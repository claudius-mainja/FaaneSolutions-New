import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 800,
        once: true,
        offset: 100,
    });

    gsap.from('.nav-container', {
        y: -20,
        opacity: 0,
        duration: 0.6,
        ease: 'power3.out',
    });

    gsap.utils.toArray('.parallax-section').forEach((section) => {
        const bg = section.querySelector('.parallax-bg');
        if (bg) {
            gsap.fromTo(bg,
                { y: '-20%' },
                {
                    y: '20%',
                    ease: 'none',
                    scrollTrigger: {
                        trigger: section,
                        start: 'top bottom',
                        end: 'bottom top',
                        scrub: true,
                    },
                }
            );
        }
    });

    gsap.utils.toArray('.img-reveal-onscroll').forEach((el) => {
        gsap.from(el, {
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
            },
            clipPath: 'inset(0 100% 0 0)',
            duration: 1.2,
            ease: 'power3.out',
        });
    });

    gsap.utils.toArray('.img-scale-in').forEach((el) => {
        gsap.from(el, {
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
            },
            scale: 0.8,
            opacity: 0,
            duration: 1,
            ease: 'power3.out',
        });
    });

    gsap.utils.toArray('.img-float-in').forEach((el, i) => {
        const dir = i % 2 === 0 ? -1 : 1;
        gsap.from(el, {
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
            },
            x: dir * 80,
            opacity: 0,
            duration: 1,
            ease: 'power3.out',
        });
    });

    gsap.utils.toArray('.ken-burns-trigger').forEach((el) => {
        const img = el.querySelector('img');
        if (img) {
            ScrollTrigger.create({
                trigger: el,
                start: 'top bottom',
                end: 'bottom top',
                onEnter: () => img.classList.remove('img-ken-burns-paused'),
                onLeave: () => img.classList.add('img-ken-burns-paused'),
                onEnterBack: () => img.classList.remove('img-ken-burns-paused'),
                onLeaveBack: () => img.classList.add('img-ken-burns-paused'),
            });
        }
    });


});
