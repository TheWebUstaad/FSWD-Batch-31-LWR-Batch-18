<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') || WebSaaz Solution - Professional Software Development</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="font-sans antialiased text-gray-800">
    <!-- Header -->
    <header class="fixed w-full bg-white shadow-md z-50 transition-all duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="index.html" class="flex items-center">
                        <span class="text-2xl font-bold text-blue-600">WebSaaz</span>
                        <span class="text-2xl font-medium">Solution</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-blue-600 font-medium">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 transition-colors">About</a>
                    <a href="services.html" class="text-gray-700 hover:text-blue-600 transition-colors">Services</a>
                    <a href="portfolio.html" class="text-gray-700 hover:text-blue-600 transition-colors">Portfolio</a>
                    <a href="courses.html" class="text-gray-700 hover:text-blue-600 transition-colors">Courses</a>
                    <a href="blog.html" class="text-gray-700 hover:text-blue-600 transition-colors">Blog</a>
                    <a href="contact.html" class="text-gray-700 hover:text-blue-600 transition-colors">Contact</a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="contact.html" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-md transition-colors">
                        Get a Quote
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="index.html" class="block px-3 py-2 text-blue-600 font-medium">Home</a>
                <a href="about.html" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50">About</a>
                <a href="services.html" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50">Services</a>
                <a href="portfolio.html" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50">Portfolio</a>
                <a href="courses.html" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50">Courses</a>
                <a href="blog.html" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50">Blog</a>
                <a href="contact.html" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50">Contact</a>
                <div class="pt-4 pb-2">
                    <a href="contact.html" class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-md transition-colors">
                        Get a Quote
                    </a>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">WebSaaz Solution</h3>
                    <p class="mb-4 text-gray-300">
                        Transforming ideas into powerful digital solutions. We build custom software, websites, and mobile apps
                        that drive business growth.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                            <span class="sr-only">Twitter</span>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-instagram"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                            <span class="sr-only">LinkedIn</span>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="index.html" class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                        <li><a href="about.html" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="services.html" class="text-gray-300 hover:text-white transition-colors">Services</a></li>
                        <li><a href="portfolio.html" class="text-gray-300 hover:text-white transition-colors">Portfolio</a></li>
                        <li><a href="courses.html" class="text-gray-300 hover:text-white transition-colors">Courses</a></li>
                        <li><a href="blog.html" class="text-gray-300 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="contact.html" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Our Services</h3>
                    <ul class="space-y-2">
                        <li><a href="services.html#web" class="text-gray-300 hover:text-white transition-colors">Web Development</a></li>
                        <li><a href="services.html#mobile" class="text-gray-300 hover:text-white transition-colors">Mobile App Development</a></li>
                        <li><a href="services.html#design" class="text-gray-300 hover:text-white transition-colors">UI/UX Design</a></li>
                        <li><a href="services.html#marketing" class="text-gray-300 hover:text-white transition-colors">Digital Marketing</a></li>
                        <li><a href="services.html#software" class="text-gray-300 hover:text-white transition-colors">Custom Software</a></li>
                        <li><a href="services.html#ecommerce" class="text-gray-300 hover:text-white transition-colors">E-commerce Solutions</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-400 mr-3 mt-1"></i>
                            <span class="text-gray-300">
                                123 Tech Street, Silicon Valley<br>
                                California, USA
                            </span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt text-blue-400 mr-3"></i>
                            <a href="tel:+1234567890" class="text-gray-300 hover:text-white transition-colors">
                                +1 (234) 567-890
                            </a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-blue-400 mr-3"></i>
                            <a href="mailto:info@websaaz.com" class="text-gray-300 hover:text-white transition-colors">
                                info@websaaz.com
                            </a>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="contact.html" class="border border-blue-400 text-blue-400 hover:bg-blue-400 hover:text-white px-5 py-2 rounded-md transition-colors inline-block">
                            Get in Touch
                        </a>
                    </div>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="border-t border-gray-800 mt-12 pt-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-xl font-bold mb-2">Subscribe to Our Newsletter</h3>
                        <p class="text-gray-300">Stay updated with our latest news and offers.</p>
                    </div>
                    <div>
                        <form class="flex flex-col sm:flex-row gap-2">
                            <input type="email" placeholder="Your email address" class="px-4 py-2 rounded-md flex-grow bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-md transition-colors">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p>&copy; 2023 WebSaaz Solution. All rights reserved.</p>
                    <div class="flex space-x-4 mt-4 md:mt-0">
                        <a href="privacy-policy.html" class="hover:text-white transition-colors">Privacy Policy</a>
                        <a href="terms-of-use.html" class="hover:text-white transition-colors">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-blue-600 text-white p-2 rounded-full shadow-lg opacity-0 invisible transition-all duration-300">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Header Scroll Effect
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.classList.add('bg-white', 'shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        });

        // Testimonial Slider
        const testimonialSlides = document.querySelectorAll('.testimonial-slide');
        const prevButton = document.getElementById('prev-testimonial');
        const nextButton = document.getElementById('next-testimonial');
        const indicators = document.querySelectorAll('.flex.justify-center.mt-8.space-x-2 button');
        let currentSlide = 0;

        function showSlide(index) {
            testimonialSlides.forEach((slide, i) => {
                slide.classList.add('hidden');
                if (i === index) {
                    slide.classList.remove('hidden');
                }
            });

            indicators.forEach((indicator, i) => {
                indicator.classList.remove('bg-blue-600');
                indicator.classList.add('bg-gray-300');
                if (i === index) {
                    indicator.classList.remove('bg-gray-300');
                    indicator.classList.add('bg-blue-600');
                }
            });
        }

        prevButton.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + testimonialSlides.length) % testimonialSlides.length;
            showSlide(currentSlide);
        });

        nextButton.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % testimonialSlides.length;
            showSlide(currentSlide);
        });

        indicators.forEach((indicator, i) => {
            indicator.addEventListener('click', () => {
                currentSlide = i;
                showSlide(currentSlide);
            });
        });

        // Back to Top Button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>