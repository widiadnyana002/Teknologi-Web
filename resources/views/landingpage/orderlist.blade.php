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

            <div class="mb-6 mt-6">
                <span class="text-3xl">Your Order</span>
            </div>

            <table class="w-full text-sm lg:text-base" cellspacing="0">
                <tbody>
                    @foreach ($orders as $key=>$item)
                    <tr>
                        <td class="hidden pb-4 md:table-cell border-b border-gray-200">
                            <a href="{{url('orderpage',$item->product_id)}}">
                                <img src="/product_image/{{$item->img}}" class="w-48 mt-6 rounded" alt="Thumbnail">
                            </a>
                        </td>
                        <td class="border-b border-gray-200">
                            <p class="text-sm lg:text-xl font-medium">{{$item->product_title}}</p>
                            <p class="text-sm lg:text-base font-medium">Address: {{$item->address}}</p>
                            <p class="text-sm lg:text-base font-medium">Price: Rp{{$item->price}}</p>
                            <p class="text-sm lg:text-base font-medium">Status: {{$item->status}}</p>
                            <p class="text-sm lg:text-base font-medium">Payment Method: {{$item->payment_method}}</p>
                            <p class="text-sm lg:text-base font-medium">Payment Status: {{$item->payment_status}}</p>
                        </td>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
</x-home-layout>
