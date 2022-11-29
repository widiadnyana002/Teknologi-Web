<x-home-layout>

    <div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
        <div class="xl:w-2/6 lg:w-2/5 w-80">
            <img class="w-full rounded-lg" width="50" height="50" alt="Pizza Menu" src="/product_image/{{$product->img}}" />
        </div>

        <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
            <div class="border-b border-gray-200 pb-6">
                <h1 class="lg:text-2xl text-xl font-semibold text-black mt-2">{{$product->product_title}}</h1>
            </div>
            <div>
                <p class="xl:pr-48 text-base leading-normal text-black mt-7">{{$product->product_desc}}</p>
                <h2 class="mt-16 text-gray-900 poppins text-2xl font-bold">Rp{{$product->price}}</h2>
            </div>

            
            
            <form action="/cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product->product_id}}" class="text-sm bg-gray-100">
                <button type="submit" class="flex items-center bg-red-600 text-white px-6 py-2 focus:outline-none poppins rounded-lg mt-12 hover:bg-red-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                    <span class="pl-3 font-bold">Add to Cart</span>
                </button>
            </form>

        </div>
    </div>



</x-home-layout>