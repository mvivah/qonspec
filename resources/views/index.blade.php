<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config("app.name") }}</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{asset('images/logo.png')}}">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BaMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-300{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="relative w-full overflow-scroll bg-gradient-to-b from-blue-50 to-blue-200">
    {{-- <body> --}}
        <header class="sticky top-0 mb-16">
            <nav class="w-full bg-white bg-opacity-70 navbar peer-checked:navbar-active md:absolute md:bg-transparent">
                <div class="container m-auto px-2 md:px-12 lg:px-7">
                    <div class="flex flex-wrap items-center justify-between gap-6 md:py-3 md:gap-0">
                        <div class="w-full px-6 flex justify-between lg:w-max md:px-0">
                            <a href="#home" aria-label="logo" class="flex space-x-2 items-center">
                                <div aria-hidden="true" class="flex space-x-1">
                                <img src="images/logo.png" alt="Qonspec"  class="h-10"/>
                                </div>onspec
                            </a>
                        {{-- Hambuger --}}
                        <input class="peer hidden" type="checkbox" name="hambuger" id="hambuger">
                        <label for="hambuger" class="peer-checked:hambuger block relative cursor-pointer lg:hidden border-2 border-sky-300 peer-checked:border-2 peer-checked:border-white p-3 rounded-md transition-all">
                            <div class="m-auto w-6 h-0.5 rounded bg-sky-500 transition-all duration-300"></div>
                            <div class="m-auto mt-2 w-6 h-0.5 rounded bg-sky-500 transition-all duration-300"></div>
                            <div class="m-auto mt-2 w-6 h-0.5 rounded bg-sky-500 transition-all duration-300"></div>
                        </label>
                        </div>
                        <div class="navmenu w-full flex-wrap justify-end items-center mb-16 mx-6 space-y-20 p-6 rounded-xl shadow-lg bg-white lg:space-y-0 lg:p-0 lg:m-0 lg:flex md:flex-nowrap lg:bg-transparent lg:w-7/12 lg:shadow-none">
                            <div class="text-gray-600 pr-4">
                                <ul class="space-y-6 tracking-wide font-medium text-lg lg:text-sm lg:flex lg:space-y-0">
                                    <li>
                                        <a href="#about" class="block md:px-4 group">
                                            <div class="relative group before:absolute before:-bottom-2 before:w-full before:h-px before:origin-left before:mt-auto before:rounded-full before:bg-sky-500 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                <span class="group-hover:text-sky-700">About</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#services" class="block md:px-4 group">
                                            <div class="relative group
                                                        before:absolute before:-bottom-2 before:w-full before:h-px before:origin-left before:mt-auto before:rounded-full before:bg-sky-500 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                <span class="group-hover:text-sky-700">Services</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#team" class="block md:px-4 group">
                                            <div class="relative group
                                                        before:absolute before:-bottom-2 before:w-full before:h-px before:origin-left before:mt-auto before:rounded-full before:bg-sky-500 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                <span class="group-hover:text-sky-700">Team</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#contact" class="block md:px-4 group">
                                            <div class="relative group
                                                        before:absolute before:-bottom-2 before:w-full before:h-px before:origin-left before:mt-auto before:rounded-full before:bg-sky-500 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                <span class="group-hover:text-sky-700">Contact Us</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="min-h-screen flex">
        <div class="container m-auto px-6 py-20 md:pb-0 md:pt-40 md:px-12 lg:py-0 lg:px-10">
            <div>
                <section id="home" class="min-h-screen">
                    <div class="container px-8 md:px-12 xl:max-w-5xl mx-auto lg:px-7 xl:px-0">
                        <div class="md:flex md:gap-12 pt-40 lg:py-56">
                            <div class="md:w-6/12">
                                <h1 class="text-gray-900 font-bold text-4xl xl:text-5xl">Build your dream with our expertise and <span class="text-sky-500">support.</span></h1>
                                <p class="mt-8 text-gray-700">We design and develop web and mobile applications that enhance user productivity and grow your business. Enterprise systems with outstanding craftsmanship!</p>
                                <div class="md:-mr-32">
                                </div>
                            </div>
                            <div class="mt-12 h-70 mr-0 md:-mr-24 overflow-hidden sm:h-72 md:h-auto md:mt-0 lg:mr-0 lg:-mt-12 md:w-7/12">
                                <img src="images/team.webp" alt="" />
                            </div>
                        </div>
                        <div class="py-16 white">
                            <div class="container m-auto text-gray-600 md:px-12 xl:px-6">
                                <div class="mb-12 space-y-4 px-6 md:px-0">
                                    <div class="py-16 bg-white">
                                        <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12 lg:px-20">
                                            {{-- <div class="flex items-center justify-center -space-x-2">
                                                <img loading="lazy" width="220" height="220" src="images/avatars/second_user.webp" alt="member photo" class="w-8 h-8 object-cover rounded-full">
                                                <img loading="lazy" width="220" height="220" src="images/avatars/first_user.webp" alt="member photo" class="w-12 h-12 object-cover rounded-full">
                                                <img loading="lazy" width="220" height="220" src="images/avatars/third_user.webp" alt="member photo" class="z-10 w-16 h-16 object-cover rounded-full">
                                                <img loading="lazy" width="220" height="220" src="images/avatars/first_user.webp" alt="member photo" class="relative w-12 h-12 object-cover rounded-full">
                                                <img loading="lazy" width="220" height="220" src="images/avatars/second_user.webp" alt="member photo" class="w-8 h-8 object-cover rounded-full">
                                            </div> --}}
                                            <div class="m-auto space-y-6 md:w-8/12 lg:w-7/12">
                                                <h1 class="text-4xl text-gray-700 font-bold text-center md:text-5xl">Join our clientele.</h1>
                                                <p class="text-xl text-center">We do system requirements analysis, systems maintenance and everything in between. Can we show you how?</p>
                                                <div class="flex flex-wrap justify-center gap-6">
                                                    <a href="#about" title="More" class="block w-full py-3 px-6 text-center rounded-xl bg-sky-100 transition hover:bg-sky-200 active:bg-sky-500 focus:bg-sky-200 sm:w-max">
                                                        <span class="text-sky-700 font-semibold">
                                                            More about
                                                        </span>
                                                    </a>
                                                    <a href="#contact" title="Get started" class="block w-full py-3 px-6 text-center rounded-xl bg-sky-600 transition hover:bg-sky-700 active:bg-sky-800 focus:bg-sky-600 sm:w-max">
                                                        <span class="text-white font-semibold">
                                                            Get started
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <h2 class="text-center text-2xl text-gray-900 font-bold md:text-4xl">We have some fans.</h2>
                                    <p class="text-center">We don't like to brag, but we don't mind letting our customers do it for us. <br>
                                    Here are a few nice things folks have said about our themes over the years.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <section id="about" class="min-h-screen">
                <div class="container px-8 md:px-12 xl:max-w-5xl mx-auto lg:px-7 xl:px-0">
                    <div class="md:flex md:gap-12 pt-40 lg:py-40">
                        <div class="md:w-6/12">
                            <h1 class="text-gray-900 font-bold text-4xl xl:text-5xl">Our <span class="text-sky-500">Aspiration.</span></h1>
                            <p class="mt-8 text-gray-700">To design and build reliable systems and applications that simplify the way we do business.</p>
                            <div class="md:-mr-32">
                            </div>
                        </div>
                        <div class="mt-12 h-56 mr-0 md:-mr-24 overflow-hidden sm:h-72 md:h-auto md:mt-0 lg:mr-0 lg:-mt-12 md:w-7/12">
                            <img src="images/about.png" alt="">
                        </div>
                    </div>
                    <div class="md:flex md:gap-12 pt-2 lg:py-2">
                        <div class="mt-12 h-56 mr-0 md:-mr-24 overflow-hidden sm:h-72 md:h-auto md:mt-0 lg:mr-0 lg:-mt-12 md:w-7/12">
                            <img src="images/developers.webp" alt="">
                        </div>
                        <div class="md:w-6/12">
                            <h1 class="text-gray-900 font-bold text-4xl xl:text-5xl">Our <span class="text-sky-500">Mission.</span></h1>
                            <p class="mt-8 text-gray-700">Growing steadily, offering world class solutions to our clients and conquering the tech world, one milestone at a time!</p>
                            <div class="md:-mr-32">
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section id="services" class="min-h-screen">
            <div class="py-24">
                <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
                    <div class="grid lg:grid-cols-7 gap-6">
                        <div class="lg:col-span-2">
                            <div class="bg-white rounded-xl shadow-lg px-8 space-y-4 py-12 sm:px-12 lg:px-8">
                                <img src="images/how.png" alt="illustration" loading="lazy" width="900" height="600">
                                <h3 class="text-2xl font-semibold text-sky-900">Systems Consultancy</h3>
                                <p class="mb-6">It is our task as technology futurologists to paint an image for you of how technology can beused to achieve reliable high-performance, simple and yet precisely designed technological solutions that meet the business outcomes you need.</p>

                            </div>
                        </div>
                        <div class="lg:col-span-2">
                            <div class="bg-white rounded-xl shadow-lg px-8 space-y-4 py-12 sm:px-12 lg:px-8">
                                <img src="images/service.webp" alt="illustration" loading="lazy" width="900" height="600">
                                <h3 class="text-2xl font-semibold text-sky-900">Web Apps</h3>
                                <p class="mb-6">Our web applications are tailored to your specific business and technological requirements that help you achieve the intended business objectives.</p>

                            </div>
                        </div> <div class="lg:col-span-2">
                            <div class="bg-white rounded-xl shadow-lg px-8 space-y-4 py-12 sm:px-12 lg:px-8">
                                <img src="images/appconcept.webp" alt="illustration" loading="lazy" width="300" height="200">
                                <h3 class="text-2xl font-semibold text-sky-900">Mobile Apps</h3>
                                <p class="mb-6">Mobile Apps give you an extra touch of flexibility communicating with your clients while maintining consistance.</p>

                            </div>
                        </div>
                        <div class="lg:col-span-2">
                            <div class="h-full flex flex-col justify-between bg-white rounded-xl shadow-lg px-8 py-12 sm:px-12 lg:px-8">
                                <div class="space-y-4 mb-6">
                                    <img src="images/business.webp" alt="illustration" loading="lazy" width="350" height="400">
                                    <h3 class="text-2xl font-semibold text-sky-900">Quality Assurance (QA)</h3>
                                    <p>As a critical processes in software and systems development, we conduct Quality Assurance to guarantee the delivery of the intended value to the business.</p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-2">
                            <div class="h-full flex flex-col justify-between bg-white rounded-xl shadow-lg px-8 py-12 sm:px-12 lg:px-8">
                                <div class="space-y-4 mb-6">
                                    <img src="images/repairs.jpg" alt="illustration" loading="lazy" width="616" height="400">
                                    <h3 class="text-2xl font-semibold text-sky-900">Project Management</h3>
                                    <p>We do hardware installation, maintenance and provide technical advisory as and when required.</p>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="bg-white rounded-xl shadow-lg px-8 space-y-4 py-12 sm:px-12 lg:px-8">
                                <img src="images/mentor.webp" alt="illustration" loading="lazy" width="900" height="600">
                                <h3 class="text-2xl font-semibold text-sky-900">Developer Mentorship</h3>
                                <p class="mb-6">We strongly believe that none of us the there yet, we therefore pull each others’ hands through providing internships and career guidance workshops.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <section id="team" class="min-h-screen">
                <div class="py-20 bg-white">
                    <div class="container mx-auto px-6 md:px-12">
                        <div class="mb-16 mt-16 text-center">
                            <p class="text-gray-600 lg:w-8/12 lg:mx-auto">Qonspec prides itself not only on award-winning technology, but also on the talent of its people of some of the brightest minds and most experienced executives in business.</p>
                        </div>
                        <div class="grid gap-12 md:grid-cols-3">
                            <div class="space-y-4 text-center">
                                <img class="w-64 h-64 mx-auto object-cover rounded-full md:w-40 md:h-40 lg:w-64 lg:h-64"
                                    src="images/Mugisha.jpg" alt="Mugisha" loading="lazy" width="650" height="900">
                                <div>
                                    <h4 class="text-2xl">Mugisha Vivacious</h4>
                                    <span class="block text-sm text-gray-500">CEO-Founder</span>
                                </div>
                                <div class="flex justify-center space-x-4 text-gray-500">
                                    <a href="https://www.facebook.com/" target="www.facebook.com/vmugisha" aria-label="facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 hover:text-sky-600" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.twitter.com/" target="www.twitter.com/vmugisha" aria-label="twitter">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 hover:text-blue-600" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/" target="www.linkedin.com/vmugisha" aria-label="linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 hover:text-blue-600" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="space-y-4 text-center">
                                <img class="w-64 h-64 mx-auto object-cover rounded-full md:w-40 md:h-40 lg:w-64 lg:h-64"
                                    src="images/Hillary.jpg" alt="Agaba Hillary" loading="lazy" width="1000" height="667">
                                <div>
                                    <h4 class="text-2xl">Agaba Hillary</h4>
                                    <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                                </div>
                                <div class="flex justify-center space-x-4 text-gray-500">
                                    <a href="#" target="_blank" aria-label="facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 hover:text-sky-600" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="space-y-4 text-center">
                                <img class="w-64 h-64 mx-auto object-cover rounded-full md:w-40 md:h-40 lg:w-64 lg:h-64"
                                    src="images/Davis.jpg" alt="Agaba Davis" loading="lazy" width="1000" height="667">
                                <div>
                                    <h4 class="text-2xl">Agaba Davis</h4>
                                    <span class="block text-sm text-gray-500">Chief Technical Officer</span>
                                </div>
                                <div class="flex justify-center space-x-4 text-gray-500">
                                    <a href="#" target="_blank" aria-label="facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 hover:text-sky-600" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="min-h-screen">
                <div class="container px-8 md:px-12 xl:max-w-5xl mx-auto lg:px-7 xl:px-0">
                    <div class="md:flex md:gap-12 pt-40 lg:py-56">
                        <div class="mt-12 h-56 mr-0 md:-mr-24 overflow-hidden sm:h-72 md:h-auto md:mt-0 lg:mr-0 lg:-mt-12 md:w-7/12">
                            <img src="images/support.webp" alt="">
                        </div>
                        <div class="md:w-8/12">
                            <h1 class="text-gray-900 font-bold text-4xl xl:text-5xl">Get in touch!</h1>
                            <p class="text-gray-700 text-lg mb-12 mt-12">
                                We are here to help you with any questions you may have...
                                </p>
                            <div class="md:-mr-32">
                                <!-- component -->
                                <form class="w-full max-w-lg mt-19">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label class="block tracking-wide text-gray-700 text-md mb-2" for="grid-first-name">
                                        First Name
                                        </label>
                                        <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none" id="grid-first-name" type="text" placeholder="Firstname">
                                    </div>
                                    <div class="w-full md:w-1/2 px-3">
                                        <label class="block tracking-wide text-gray-700 text-md mb-2" for="grid-last-name">
                                        Last Name
                                        </label>
                                        <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:border-gray-500" id="grid-last-name" type="text" placeholder="Lastname">
                                    </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full px-3">
                                        <label class="block tracking-wide text-gray-700 text-md mb-2" for="grid-password">
                                        E-mail
                                        </label>
                                        <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" id="email" type="email" placeholder="Email">
                                    </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full px-3">
                                        <label class="block tracking-wide text-gray-700 text-md mb-2" for="grid-password">
                                        Message
                                        </label>
                                        <textarea class=" no-resize appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500 h-48 resize-none" id="message"></textarea>
                                    </div>
                                    </div>
                                    <div class="md:flex md:items-center">
                                    <div class="md:w-1/3">
                                        <button class="shadow bg-sky-400 hover:bg-sky-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded-lg" type="button">
                                        Send
                                        </button>
                                    </div>
                                    <div class="md:w-2/3"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="fixed bottom-0">
                <div class="text-center">
                    <p>Copyright © 2022 - Qonspec</p>
                </div>
            </footer>
            <div name="fade">
                <div id="toTop" class="fixed right-0 bottom-0" v-show="scY > 300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="#4a5568"
                        stroke-width="1" stroke-linecap="square" stroke-linejoin="arcs">
                        <path d="M18 15l-6-6-6 6"/>
                    </svg>
                </div>
            </div>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        {{-- <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script> --}}
        <script>
            function Menu(e){
                let list = document.querySelector('ul');
                e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
            }
            </script>
    </body>
</html>
