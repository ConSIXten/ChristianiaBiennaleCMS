/**
 * Main JavaScript file for Christiania Biennale CMS
 * This file will be the entry point for React integration
 * 
 * @package ChristianiaBiennaleCMS
 * @since 1.0.0
 */

(function () {
    'use strict';

    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.main-navigation');

    if (menuToggle && navigation) {
        menuToggle.addEventListener('click', function () {
            const expanded = menuToggle.getAttribute('aria-expanded') === 'true' || false;
            menuToggle.setAttribute('aria-expanded', !expanded);
            navigation.classList.toggle('toggled');
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // Header scroll effect
    let lastScroll = 0;
    const header = document.querySelector('.site-header');

    if (header) {
        window.addEventListener('scroll', function () {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                header.style.boxShadow = '0 2px 8px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.05)';
            }

            lastScroll = currentScroll;
        });
    }

    // WordPress REST API helper
    window.ChristianiaBiennaleAPI = {
        baseUrl: christianiaBiennaleData.siteUrl + '/wp-json/wp/v2/',
        nonce: christianiaBiennaleData.nonce,

        async fetch(endpoint, options = {}) {
            const url = this.baseUrl + endpoint;
            const defaultOptions = {
                headers: {
                    'Content-Type': 'application/json',
                    'X-WP-Nonce': this.nonce
                }
            };

            try {
                const response = await fetch(url, { ...defaultOptions, ...options });
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return await response.json();
            } catch (error) {
                console.error('API Error:', error);
                throw error;
            }
        }
    };

    // Dropdown menu toggle
    window.toggleDropdown = function () {
        const dropdown = document.getElementById('dropdown-menu');
        if (dropdown) {
            dropdown.classList.toggle('open');
        }
    };

    // Close dropdown when clicking outside
    document.addEventListener('click', function (event) {
        const dropdown = document.getElementById('dropdown-menu');
        const dropbtn = dropdown ? dropdown.querySelector('.dropbtn') : null;

        if (dropdown && !dropdown.contains(event.target)) {
            dropdown.classList.remove('open');
        }
    });

    // Prevent dropdown from closing when clicking inside
    const dropdown = document.getElementById('dropdown-menu');
    if (dropdown) {
        dropdown.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    }

    // React root initialization placeholder
    // This will be replaced with actual React code
    console.log('Christiania Biennale CMS Theme Loaded');
    console.log('React Root Element:', document.getElementById('react-root'));

})();
