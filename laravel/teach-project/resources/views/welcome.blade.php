 @extends('layouts.app')
 
@section('title', 'Home') 
@section('content')
 <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-900 to-blue-700 text-white pt-32 pb-20 md:pt-40 md:pb-28">
        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-pattern"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        Transforming Ideas Into <span class="text-yellow-400">Digital Reality</span>
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-gray-200 max-w-2xl mx-auto lg:mx-0">
                        Custom software development, web applications, mobile apps, and digital solutions tailored to your
                        business needs.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="services.html" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-md text-lg font-medium transition-colors">
                            Explore Our Services
                        </a>
                        <a href="portfolio.html" class="bg-transparent hover:bg-white/10 border border-white text-white px-8 py-3 rounded-md text-lg font-medium transition-colors flex items-center justify-center group">
                            View Our Work
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <img style="width: 400px !important;" src="{{ asset('images/hero.png') }}" alt="WebSaaz Solution - Digital Transformation" class="w-full h-auto rounded-lg shadow-2xl">
                </div>
            </div>

            <!-- Stats -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-2">200+</div>
                    <div class="text-gray-200">Clients Worldwide</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-2">500+</div>
                    <div class="text-gray-200">Projects Completed</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-2">15+</div>
                    <div class="text-gray-200">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-2">50+</div>
                    <div class="text-gray-200">Expert Developers</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Snippet Section -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <img src="assets/images/about-image.jpg" alt="About WebSaaz Solution" class="rounded-lg shadow-lg w-full h-auto z-10 relative">
                    <!-- Decorative element -->
                    <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-blue-100 rounded-lg -z-10 hidden md:block"></div>
                </div>

                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        We Build Digital Solutions That <span class="text-blue-600">Drive Growth</span>
                    </h2>

                    <p class="text-lg text-gray-700 mb-6">
                        WebSaaz Solution is a full-service software development company specializing in creating custom digital
                        solutions that help businesses thrive in today's competitive landscape.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-blue-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Expert Development Team</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-blue-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Tailored Solutions</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-blue-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Cutting-edge Technologies</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-blue-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Agile Methodology</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-blue-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Transparent Communication</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-blue-600 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Ongoing Support</span>
                        </div>
                    </div>

                    <a href="about.html" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md font-medium transition-colors inline-block">
                        Learn More About Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We offer a comprehensive range of digital services to help your business succeed in the digital landscape.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="mb-4 text-blue-600">
                        <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Web Development</h3>
                    <p class="text-gray-600 mb-4">Custom websites and web applications built with the latest technologies.</p>
                    <a href="services.html#web" class="text-blue-600 font-medium inline-flex items-center group">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="mb-4 text-blue-600">
                        <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Mobile App Development</h3>
                    <p class="text-gray-600 mb-4">Native and cross-platform mobile applications for iOS and Android.</p>
                    <a href="services.html#mobile" class="text-blue-600 font-medium inline-flex items-center group">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="mb-4 text-blue-600">
                        <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">UI/UX Design</h3>
                    <p class="text-gray-600 mb-4">User-centered design that combines aesthetics with functionality.</p>
                    <a href="services.html#design" class="text-blue-600 font-medium inline-flex items-center group">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <!-- Service 4 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="mb-4 text-blue-600">
                        <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Digital Marketing</h3>
                    <p class="text-gray-600 mb-4">Strategic digital marketing services to increase your online visibility.</p>
                    <a href="services.html#marketing" class="text-blue-600 font-medium inline-flex items-center group">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <!-- Service 5 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="mb-4 text-blue-600">
                        <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Custom Software</h3>
                    <p class="text-gray-600 mb-4">Tailored software solutions designed to address your specific business challenges.</p>
                    <a href="services.html#software" class="text-blue-600 font-medium inline-flex items-center group">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <!-- Service 6 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="mb-4 text-blue-600">
                        <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">E-commerce Solutions</h3>
                    <p class="text-gray-600 mb-4">End-to-end e-commerce development to help you sell products online.</p>
                    <a href="services.html#ecommerce" class="text-blue-600 font-medium inline-flex items-center group">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="services.html" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md font-medium transition-colors inline-block">
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- Latest Projects Section -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Latest Projects</h2>
                    <p class="text-xl text-gray-600 max-w-2xl">
                        Explore our recent work and see how we've helped businesses achieve their digital goals.
                    </p>
                </div>
                <div class="mt-6 md:mt-0">
                    <a href="portfolio.html" class="border border-blue-600 text-blue-600 hover:bg-blue-50 px-6 py-3 rounded-md font-medium transition-colors inline-flex items-center">
                        View All Projects
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <a href="portfolio.html" class="group block">
                    <div class="relative overflow-hidden rounded-lg shadow-md">
                        <img src="assets/images/project1.jpg" alt="E-commerce Platform" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6">
                            <span class="text-blue-400 font-medium text-sm mb-2">Web Development</span>
                            <h3 class="text-white text-xl font-bold">E-commerce Platform</h3>
                            <span class="text-white/80 mt-2 inline-flex items-center text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                View Project 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>

                <!-- Project 2 -->
                <a href="portfolio.html" class="group block">
                    <div class="relative overflow-hidden rounded-lg shadow-md">
                        <img src="assets/images/project2.jpg" alt="Healthcare Mobile App" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6">
                            <span class="text-blue-400 font-medium text-sm mb-2">Mobile Development</span>
                            <h3 class="text-white text-xl font-bold">Healthcare Mobile App</h3>
                            <span class="text-white/80 mt-2 inline-flex items-center text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                View Project 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>

                <!-- Project 3 -->
                <a href="portfolio.html" class="group block">
                    <div class="relative overflow-hidden rounded-lg shadow-md">
                        <img src="assets/images/project3.jpg" alt="Financial Dashboard" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6">
                            <span class="text-blue-400 font-medium text-sm mb-2">UI/UX Design</span>
                            <h3 class="text-white text-xl font-bold">Financial Dashboard</h3>
                            <span class="text-white/80 mt-2 inline-flex items-center text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                View Project 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">What Our Clients Say</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Don't just take our word for it. Here's what our clients have to say about working with WebSaaz Solution.
                </p>
            </div>

            <div class="testimonial-slider relative">
                <!-- Testimonial 1 -->
                <div class="testimonial-slide">
                    <div class="bg-white rounded-lg shadow-lg p-8 md:p-10 relative mx-4">
                        <svg class="h-12 w-12 text-blue-100 absolute top-6 left-6" fill="currentColor" viewBox="0 0 32 32">
                            <path d="M10 8c-3.3 0-6 2.7-6 6v10h10V14H6c0-2.2 1.8-4 4-4V8zm18 0c-3.3 0-6 2.7-6 6v10h10V14h-8c0-2.2 1.8-4 4-4V8z"/>
                        </svg>
                        <div class="relative z-10">
                            <p class="text-lg md:text-xl text-gray-700 mb-6 italic">
                                "WebSaaz Solution transformed our business with their exceptional web development services. Their team's expertise and dedication to our project exceeded our expectations. We now have a website that not only looks great but also drives real business results."
                            </p>

                            <div class="flex items-center">
                                <img src="assets/images/testimonial1.jpg" alt="John Smith" class="w-16 h-16 rounded-full mr-4 object-cover">
                                <div>
                                    <h4 class="font-bold text-lg">John Smith</h4>
                                    <p class="text-gray-600">CEO, TechCorp</p>
                                    <div class="flex mt-1">
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-slide hidden">
                    <div class="bg-white rounded-lg shadow-lg p-8 md:p-10 relative mx-4">
                        <svg class="h-12 w-12 text-blue-100 absolute top-6 left-6" fill="currentColor" viewBox="0 0 32 32">
                            <path d="M10 8c-3.3 0-6 2.7-6 6v10h10V14H6c0-2.2 1.8-4 4-4V8zm18 0c-3.3 0-6 2.7-6 6v10h10V14h-8c0-2.2 1.8-4 4-4V8z"/>
                        </svg>
                        <div class="relative z-10">
                            <p class="text-lg md:text-xl text-gray-700 mb-6 italic">
                                "Working with WebSaaz Solution was a game-changer for our company. Their mobile app development team created an intuitive, feature-rich application that our customers love. The attention to detail and commitment to quality is evident in every aspect of their work."
                            </p>

                            <div class="flex items-center">
                                <img src="assets/images/testimonial2.jpg" alt="Sarah Johnson" class="w-16 h-16 rounded-full mr-4 object-cover">
                                <div>
                                    <h4 class="font-bold text-lg">Sarah Johnson</h4>
                                    <p class="text-gray-600">Marketing Director, Innovate Inc</p>
                                    <div class="flex mt-1">
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-slide hidden">
                    <div class="bg-white rounded-lg shadow-lg p-8 md:p-10 relative mx-4">
                        <svg class="h-12 w-12 text-blue-100 absolute top-6 left-6" fill="currentColor" viewBox="0 0 32 32">
                            <path d="M10 8c-3.3 0-6 2.7-6 6v10h10V14H6c0-2.2 1.8-4 4-4V8zm18 0c-3.3 0-6 2.7-6 6v10h10V14h-8c0-2.2 1.8-4 4-4V8z"/>
                        </svg>
                        <div class="relative z-10">
                            <p class="text-lg md:text-xl text-gray-700 mb-6 italic">
                                "I've worked with many development teams, but WebSaaz Solution stands out for their professionalism and technical expertise. They delivered our e-commerce platform on time and within budget, and the results have been outstanding. Our online sales have increased by 200% since launch."
                            </p>

                            <div class="flex items-center">
                                <img src="assets/images/testimonial3.jpg" alt="Michael Brown" class="w-16 h-16 rounded-full mr-4 object-cover">
                                <div>
                                    <h4 class="font-bold text-lg">Michael Brown</h4>
                                    <p class="text-gray-600">Founder, GrowthHub</p>
                                    <div class="flex mt-1">
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation buttons -->
                <button id="prev-testimonial" class="absolute top-1/2 left-0 -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100 transition-colors">
                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button id="next-testimonial" class="absolute top-1/2 right-0 -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100 transition-colors">
                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Indicators -->
            <div class="flex justify-center mt-8 space-x-2">
                <button class="w-3 h-3 rounded-full bg-blue-600" data-index="0"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300" data-index="1"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300" data-index="2"></button>
            </div>

            <div class="text-center mt-12">
                <a href="testimonials.html" class="text-blue-600 font-medium hover:underline">
                    View All Testimonials
                </a>
            </div>
        </div>
    </section>

    <!-- Client Logos Section -->
    <section class="py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-xl font-semibold text-center text-gray-700 mb-8">Trusted by Leading Companies Worldwide</h3>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center">
                <div class="flex justify-center">
                    <img src="assets/images/client1.png" alt="Company 1" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="assets/images/client2.png" alt="Company 2" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="assets/images/client3.png" alt="Company 3" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="assets/images/client4.png" alt="Company 4" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="assets/images/client5.png" alt="Company 5" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="assets/images/client6.png" alt="Company 6" class="h-12 md:h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300">
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Section -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Latest from Our Blog</h2>
                    <p class="text-xl text-gray-600 max-w-2xl">
                        Insights, tutorials, and industry news from our expert team.
                    </p>
                </div>
                <div class="mt-6 md:mt-0">
                    <a href="blog.html" class="border border-blue-600 text-blue-600 hover:bg-blue-50 px-6 py-3 rounded-md font-medium transition-colors inline-flex items-center">
                        View All Posts
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <article class="bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="blog-single.html">
                        <img src="assets/images/blog1.jpg" alt="Web Development Trends" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-medium">
                                Web Development
                            </span>
                        </div>
                        <a href="blog-single.html">
                            <h3 class="text-xl font-bold mb-2 hover:text-blue-600 transition-colors">10 Web Development Trends to Watch in 2023</h3>
                        </a>
                        <p class="text-gray-600 mb-4">Explore the latest trends and technologies shaping the future of web development.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>May 15, 2023</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>John Smith</span>
                            </div>
                        </div>
                        <a href="blog-single.html" class="text-blue-600 font-medium inline-flex items-center mt-4 group">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="blog-single.html">
                        <img src="assets/images/blog2.jpg" alt="Tech Stack" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-medium">
                                Technology
                            </span>
                        </div>
                        <a href="blog-single.html">
                            <h3 class="text-xl font-bold mb-2 hover:text-blue-600 transition-colors">How to Choose the Right Tech Stack for Your Project</h3>
                        </a>
                        <p class="text-gray-600 mb-4">A comprehensive guide to selecting the best technologies for your next development project.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>April 28, 2023</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>Sarah Johnson</span>
                            </div>
                        </div>
                        <a href="blog-single.html" class="text-blue-600 font-medium inline-flex items-center mt-4 group">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="blog-single.html">
                        <img src="assets/images/blog3.jpg" alt="UI/UX Design" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-medium">
                                Design
                            </span>
                        </div>
                        <a href="blog-single.html">
                            <h3 class="text-xl font-bold mb-2 hover:text-blue-600 transition-colors">The Importance of UI/UX Design in Modern Applications</h3>
                        </a>
                        <p class="text-gray-600 mb-4">Why user experience should be at the forefront of your application development process.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>April 10, 2023</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>Michael Brown</span>
                            </div>
                        </div>
                        <a href="blog-single.html" class="text-blue-600 font-medium inline-flex items-center mt-4 group">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to transform your digital presence?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto opacity-90">Let's discuss how WebSaaz Solution can help you achieve your business goals.</p>
            <a href="contact.html" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-3 rounded-md text-lg font-medium transition-colors inline-block">
                Contact Us Today
            </a>
        </div>
    </section>

    @endsection