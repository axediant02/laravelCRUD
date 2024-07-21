<template>
    <div class="section bg-white">
        <!-- Home Section -->
        <section id="home" class="min-h-screen py-20 flex items-center justify-center">
            <div class="container flex justify-center">
                <div class="coding-image">
                    <img src="/resources/assets/Website-Coding.png" alt="" srcset=""></div>
                    <div class="card content-center">
                        <div class="card-content text-black font-bold text-7xl">
                            <h1 class="text-sky-500">BUILD, CREATE, DEVELOP</h1>
                            <svg height="2" width="100%">
                                <line x1="0" y1="0" x2="100%" y2="0" style="stroke:black;stroke-width:2"/>
                            </svg>
                            <h2 class="text-2xl italic">
                                <br>Coding Dreams into Reality</h2>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- About Section -->
                <section
                    id="about"
                    class="min-h-screen bg-gray-200 py-20 flex items-center text-black">
                    <div class="container mx-auto flex justify-between ">
                        <div
                            class="about-content w-1/2 text-justify p-5 border-sky-500 rounded-md bg-gray-300 w-2/5">
                            <h2 class="text-5xl font-bold mb-4 text-sky-500 ">About Us</h2>
                            <p class="text-xl">
                                At BCD, we're not just software developers - we're digital alchemists. Founded
                                in 2024 by three caffeine-fueled college friends, we've grown from a dorm room
                                startup to a team of passionate tech wizards.
                            </p>

                            <p class="text-lg pt-6">Our mission? To transform the digital landscape, one
                                pixel at a time. We specialize in:</p>
                            <ul class="list-disc list-inside mb-4 pt-4">
                                <li>
                                    <a href="" class="hover:underline italic font-bold text-sky-500">Developing Websites</a>
                                </li>
                                <li>
                                    <a href="" class="hover:underline italic font-bold text-sky-500">Building addictive mobile apps</a>
                                </li>
                                <li>
                                    <a href="" class="hover:underline italic font-bold text-sky-500">Creating apps</a>
                                </li>
                                <li>
                                    <a href="" class="hover:underline italic font-bold text-sky-500">Creating graphic designs</a>
                                </li>
                            </ul>

                            <p class="text-lg pt-6">At BCD, we believe in the power of tech to make the
                                world a better place - or at least a more efficiently running one. Join us on
                                this wild ride through the digital frontier. Buckle up, it's going to be a fun
                                journey!</p>
                        </div>
                        <div class="about-img w-1/2 p-9 flex justify-center">
                            <img
                                src="/resources/assets/codingimg2.png"
                                alt="Coding illustration"
                                class="max-w-full h-auto"></div>
                        </div>
                    </section>

                    <!-- Services Section -->
                    <section
                        id="services"
                        class="min-h-screen bg-gray-300 py-20 flex justify-center">
                        <div class="container mx-auto text-center p-6">

                            <div class="service-container border dark:bg-gray-400 rounded-md">
                                <h2 class="text-4xl font-bold mb-4 dark:text-white">Our Services</h2>

                                <p class="mb-8 dark:text-white">At Software Design & Development, we offer a
                                    comprehensive suite of services designed to meet your digital needs. Our team of
                                    experts brings innovation, creativity, and technical expertise to every project,
                                    ensuring that we deliver exceptional results every time. Whether you're looking
                                    to build a stunning website, develop a cutting-edge mobile application, or
                                    manage complex projects with precision, we have the skills and experience to
                                    help you succeed.?</p>
                            </div>
                            <div class="service-offer p-6 flex justify-center items-center">

                                <!-- Changed to flex-row and added space-x-4 for horizontal spacing -->
                                <div class=" card-container flex flex-row justify-center space-x-4">

                                    <!-- Removed extra nested divs and adjusted width -->
                                    <div
                                        class="max-w-sm p-6 border-gray-200 rounded-lg shadow dark:bg-gray-400 dark:border-gray-700">
                                        <a href="#">
                                            <h5
                                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline ">Web Development
                                            </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 text-white">Our web development team
                                            specializes in creating responsive, user-friendly websites that not only look
                                            great but perform seamlessly across all devices. From front-end design to
                                            back-end functionality, we ensure your online presence is powerful and
                                            effective.</p>
                                        <a
                                            href="#"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg
                                                class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
                                                aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 14 10">
                                                <path
                                                    stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                        </a>
                                    </div>

                                    <div
                                        class="max-w-sm p-6 rounded-lg shadow dark:bg-gray-400 dark:border-gray-700">

                                        <a href="#">
                                            <h5
                                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">Mobile App Development</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 text-white">"Stay connected and engaged
                                            with your audience on the go. Our mobile app development services offer custom
                                            solutions tailored to your business needs. We build apps that are intuitive,
                                            reliable, and designed to provide an exceptional user experience.
                                            <br></p>
                                            <a
                                                href="#"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Read more
                                                <svg
                                                    class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
                                                    aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 14 10">
                                                    <path
                                                        stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                            </a>
                                        </div>

                                        <div
                                            class="max-w-sm p-6 rounded-lg shadow dark:bg-gray-400 dark:border-gray-700">

                                            <a href="#">
                                                <h5
                                                    class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">Project Management</h5>
                                            </a>
                                            <p class="mb-3 font-normal text-gray-700 text-white">Effective project
                                                management is the backbone of successful projects. Our experienced project
                                                managers ensure that every project is delivered on time, within budget, and to
                                                the highest standards. We handle everything from planning and execution to
                                                monitoring and closure, ensuring a smooth and efficient process.</p>
                                            <a
                                                href="#"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Read more
                                                <svg
                                                    class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
                                                    aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 14 10">
                                                    <path
                                                        stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Contact Section -->
                        <div
                            class="flex contact min-h-screen bg-gray-400 py-20 flex items-center justify-center">
                            <main class="container mx-auto px-4 py-8">
                                <section id="contact" class="text-center">
                                    <h2 class="text-3xl mb-8">Contact Us</h2>
                                    <form
                                        @submit.prevent="submitForm"
                                        class="flex flex-col space-y-4 items-center text-black">
                                        <input
                                            v-model="form.name"
                                            type="text"
                                            name="name"
                                            placeholder="Name"
                                            class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full"
                                            required="required">
                                            <input
                                                v-model="form.email"
                                                type="email"
                                                name="email"
                                                placeholder="Email"
                                                class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full"
                                                required="required">
                                                <textarea
                                                    v-model="form.message"
                                                    name="message"
                                                    placeholder="Message"
                                                    class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 h-24 w-full"
                                                    required="required"></textarea>
                                                <button
                                                    type="submit"
                                                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Send</button>
                                            </form>
                                        </section>
                                    </main>
                                </div>
                            </div>

                            <!-- footer -->
                            <footer class="bg-gray-800 text-white py-8">
                                <div class="container mx-auto px-4">
                                    <div class="flex flex-wrap justify-between items-center">

                                        <!-- Contact Information -->
                                        <div class="w-full md:w-1/3 mb-6 md:mb-0">
                                            <h3 class="text-xl font-bold mb-2">Reach Me Out
                                            </h3>
                                            <p class="mb-1">Email: ianfredcaballero@gmail.com</p>
                                            <p>Phone: +639309379227</p>
                                        </div>

                                        <!-- Rights Reserved -->
                                        <div class="w-full md:w-1/3 text-center mb-6 md:mb-0">
                                            <p>&copy; 2024 Made by Ian Fred U Caballero. All rights reserved.</p>
                                        </div>

                                        <!-- Social Media Links -->
                                        <div class="w-full md:w-1/3 flex justify-center md:justify-end">
                                            <a href="#" class="mx-2 hover:text-gray-400" aria-label="Facebook">
                                                <svg
                                                    class="w-6 h-6 fill-current"
                                                    viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                                </svg>
                                            </a>
                                            <a href="#" class="mx-2 hover:text-gray-400" aria-label="Discord">
                                                <svg
                                                    class="w-6 h-6 fill-current"
                                                    viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"/>
                                                </svg>
                                            </a>
                                            <a href="#" class="mx-2 hover:text-gray-400" aria-label="GitHub">
                                                <svg
                                                    class="w-6 h-6 fill-current"
                                                    viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                                                </svg>
                                            </a>
                                            <a href="#" class="mx-2 hover:text-gray-400" aria-label="Instagram">
                                                <svg
                                                    class="w-6 h-6 fill-current"
                                                    viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.  126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </template>

                        <script>
                        import Nav from 'resources/js/Components/Nav.vue'
                            export default {
                                name: 'Home',
                                data() {
                                    return {
                                        form: {
                                            name: '',
                                            email: '',
                                            message: ''
                                        }
                                    };
                                },
                                methods: {
                                    submitForm() {
                                        console.log('Form submitted:', this.form);
                                        // Add your form submission logic here, e.g., an API call Reset form after
                                        // submission
                                        this.form = {
                                            name: '',
                                            email: '',
                                            message: ''
                                        };
                                    }
                                }
                            };
                        </script>

                        <style scoped="scoped">
                            html {
                                scroll-behavior: smooth;
                            }

                            .fade-in {
                                opacity: 0;
                                transform: translateY(20px);
                                transition: opacity 0.6s ease-out, transform 0.6s ease-out;
                            }

                            .fade-in.appear {
                                opacity: 1;
                                transform: translateY(0);
                            }
                        </style>