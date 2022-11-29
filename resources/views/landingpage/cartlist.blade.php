<x-home-layout>

    <div class="flex justify-center my-6">
        <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
            <div class="flex-1">
                <a href="/">
                    <div class="flex mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                        <p class="font-medium pl-1">Back</p>
                    </div>
                </a>

                <div class="text-center mb-6">
                    <span class="border-b-2 border-red-400 text-center text-3xl">Your Products</span>
                </div>

                <table class="w-full text-sm lg:text-base" cellspacing="0">
                    <thead>
                        <tr class="h-12 uppercase">
                            <th class="hidden md:table-cell"></th>
                            <th class="text-left">Product</th>
                            <th class="hidden text-right md:table-cell">Unit price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key=>$item)
                        <tr>
                            <td class="hidden pb-4 md:table-cell border-b border-gray-200">
                                <a href="{{url('orderpage',$item->product_id)}}">
                                    <img src="/product_image/{{$item->img}}" class="w-20 mt-6 rounded" alt="Thumbnail">
                                </a>
                            </td>
                            <td class="border-b border-gray-200">
                                <a href="{{url('orderpage',$item->product_id)}}">
                                    <p class="mb-2 md:ml-0">{{$item->product_title}}</p>
                                    <a href="/cartremove/{{$item->cart_id}}">
                                        <button type="submit" class="text-sky-700 md:ml-0">
                                            <small>(Remove item)</small>
                                        </button>
                                    </a>

                                </a>
                            </td>
                            <td class="hidden border-b border-gray-200 text-right md:table-cell">
                                <span class="text-sm lg:text-base font-medium">
                                    Rp{{$item->price}}
                                </span>
                            </td>
                    </tbody>
                    @endforeach
                </table>
                <a href="/ordernow">
                    <button class="bg-red-600 text-white px-8 py-2 focus:outline-none poppins rounded-full mt-4 transform transition duration-300 hover:scale-105">
                        Order Now
                    </button>
                </a>
            </div>
        </div>
    </div>
</x-home-layout>