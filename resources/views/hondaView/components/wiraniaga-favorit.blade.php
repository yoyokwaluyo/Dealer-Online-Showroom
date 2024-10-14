<div class="grid grid-cols-3 max-sm:grid-cols-1 gap-x-10 gap-y-14 my-14">
    @foreach($sales as $data)
    <div class="flex gap-4 rounded-md">
        <img data-src="{{ $data['img'] }}" alt="{{ $data['name'] }}" class="w-[100px] h-[100px] rounded-full shadow-md lazy">
        <div class="w-full py-2">
            <div class="flex justify-between items-center">
                <div class="truncate max-w-[230px] font-medium text-gray-800">{{ $data['name'] }}</div>
                <div class="flex gap-1">
                    <div class="w-[20px] h-[20px] rounded-full flex items-center justify-center bg-yellow-300 border-2 border-yellow-700"><i class='bx bxs-star'></i></div>
                    <i class='bx bxs-check-shield text-[21px] text-blue-600'></i>
                </div>
            </div>
            <hr class="mt-2 bg-gray-500 py-[0.5px]">
            <div class="flex items-center">
                <i class='bx bx-purchase-tag bx-rotate-90'></i> &nbsp;
                <span class="text-xs">Promo : <b>1000 Promo Mobil</b></span>
            </div>
            <div class="grid grid-cols-2 gap-2 mt-2">
                <a href="#" class="px-3 py-1 text-xs font-medium inline-flex items-center gap-1 justify-center border border-orange-500 rounded-lg text-orange-500 group hover:text-white hover:bg-orange-500 transition duration-150 ease-out hover:ease-in">
                    <i class='bx bxs-phone text-lg group-hover:text-white'></i>
                    Telephone
                </a>
                <a href="#" class="px-3 py-1 text-xs font-medium inline-flex items-center gap-1 justify-center border border-[#18b512] rounded-lg text-[#18b512] group hover:text-white hover:bg-[#18b512] transition duration-150 ease-out hover:ease-in">
                    <i class='bx bxl-whatsapp text-lg group-hover:text-white'></i>
                    Whatsapp
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>