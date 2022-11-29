<x-home-layout>
    <div class="w-full h-full items-center justify-between p-20 md:pl-24 grid grid-cols-1 sm:grid-cols-3">
        <div class="sm:col-span-2 flex flex-col justify-start items-center space-y-4">
            <div class="flex flex-row justify-start items-start w-full">
                <div class="bg-gray-900 text-white py-1 px-6">30% OFF</div>
                <div class="bg-gray-300 text-gray-900 py-1 px-4">First Order</div>
            </div>

            <div class="flex justify-start items-start w-full">
                <p class="text-gray-900 text-3xl md:text-6xl tracking-wider font-bold">
                    Order Your <br /> Favorite Food
                </p>
            </div>

            <div class="flex justify-start items-start w-full">
                <p class="text-gray-400">Fresh Food and Good Quality</p>
            </div>

            <div class="flex justify-start items-start w-full">
                <a href="#menu">
                    <button class="rounded-lg bg-red-600 hover:bg-red-800 duration-500 text-white py-2 px-8" type="submit">
                        Order Now
                    </button></a>
            </div>
        </div>
        <div class="hidden sm:block">
            <img src="https://parspng.com/wp-content/uploads/2022/05/pizzapng.parspng.com-3.png" alt="Pizza Home" width="" />
        </div>
    </div>

    <section id="menu" class="bg-white mt-12 max-w-screen-xl mx-auto pt-8 px-6">
        <div class="text-center font-poppins p-6 text-gray-900 border-b border-gray-300 pt-2 pb-6">
            <span class="text-4xl font-bold tracking-tight text-gray-900">Our</span>
            <span class="text-4xl font-bold tracking-tight text-red-600">Menu</span>
            <h1 class="pt-3 font-medium">Fresh taste and good price</h1>
        </div>
        <div class="flex flex-wrap">
            <div class="w-full">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 rounded">
                    <div class="px-4 py-5 flex-auto">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-4">
                            @foreach ($products as $key=>$item)
                            <div class="bg-white border border-gray-100 transition transform duration-700 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
                                <img class="w-64 mt-6 mx-auto transform transition duration-300 hover:scale-105" src="/product_image/{{$item->img}}" alt="Menu1" width="100%" />
                                <div class="flex flex-col items-center my-3 space-y-2">
                                    <h1 class="text-gray-900 poppins text-lg">{{$item->product_title}}</h1>
                                    <p class="text-gray-500 poppins text-sm text-center">
                                        {{$item->product_desc}}
                                    </p>
                                    <h2 class="text-gray-900 poppins text-2xl font-bold">Rp{{$item->price}}</h2>
                                    <a href="{{url('orderpage',$item->product_id)}}">
                                        <button class="bg-red-600 text-white px-8 py-2 focus:outline-none poppins rounded-full mt-4 transform transition duration-300 hover:scale-105">
                                            Order Now
                                        </button>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="service" class="px-2">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">

        </div>
        <div class="text-center font-poppins pt-6 text-gray-900">
            <span class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 font-poppins">Service</span>
            <h1 class="pt-3">Our Awesome Service</h1>
        </div>

        <div class=" items-center grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3">
            <div class="transition p-16 rounded-2xl">
                <div class="overflow-hidden rounded-xl flex flex-grow">
                    <img class="transition duration-700 hover:scale-125" src="https://store.sirclo.com/blog/wp-content/uploads/2022/03/online-shopping-fast-shipping-concept-friendly-smiling-young-asian-male-courier-blue-uniform-carry-boxes-with-orders-delivery-man-bring-parcels-your-doorstep-standing-white-background.jpg" alt="Fast Delivery">
                </div>
                <div class="flex mt-6 space-x-3 ">
                    <div class="flex flex-col space-y-3 text-center font-poppins">
                        <h1 class="text-xl text-gray-800">Fast Delivery</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="transition p-16 rounded-2xl">
                <div class="overflow-hidden rounded-xl flex flex-grow">
                    <img class="transition duration-700 hover:scale-125" src="https://verihubs.com/wp-content/uploads/2022/11/fast-respon.jpg" alt="Fast Responder">
                </div>
                <div class="flex mt-6 space-x-3 ">
                    <div class="flex flex-col space-y-3 text-center font-poppins">
                        <h1 class="text-xl text-gray-800">Fast Responder</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="transition p-16 rounded-2xl">
                <div class="overflow-hidden rounded-xl flex flex-grow">
                    <img class="transition duration-700 hover:scale-125" src="https://www.bring.no/en/services/parcels-and-cargo/domestic-private-consumers/home-delivery-parcel/_/image/ec628c1e-db69-4763-ac9d-e840eee446a3:90cf9ae4f24d5ef300cfa60eca576b3bb4950506/block-1000-600/Home%20Delivery.jpg.jpeg?quality=50" alt="Home Delivery">
                </div>
                <div class="flex mt-6 space-x-3 ">
                    <div class="flex flex-col space-y-3 text-center font-poppins">
                        <h1 class="text-xl text-gray-800">Home Delivery</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-white">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 font-poppins">Contact Us</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                    <input type="email" id="email" class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 bg-gray-200 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Subject</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 bg-gray-200 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your message</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 bg-gray-200 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
            </form>
        </div>
    </section>

    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <div class="container pt-9">
            <div class="flex justify-center mb-9">
                <a href="#!" class="mr-9 text-gray-800">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f w-2.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                    </svg>
                </a>
                <a href="#!" class="mr-9 text-gray-800">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/aa_bread08/" class="mr-9 text-gray-800">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                    </svg>
                </a>
                <a href="#!" class="text-gray-800">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="svg-inline--fa fa-github w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="text-center text-gray-700 p-4" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-gray-800" href="https://tailwind-elements.com/">Kadek Widiadnyana</a>
        </div>
    </footer>

</x-home-layout>