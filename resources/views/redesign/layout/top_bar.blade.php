@php
if($page == 'home'){
    $logo = 'assets/images/fav-icon/icon-ningrat.png';
}else{
    $logo = 'assets/images/fav-icon/icon-ningrat.png';

}
@endphp

<nav class="absolute left-0 top-0 right-0 py-3 px-10 z-50 flex justify-between items-center backdrop-blur-sm bg-white bg-opacity-10">
    <div class="text-white font-bold text-lg">
        <img src="{{asset($logo)}}" alt="Logo Rumah Ningrat" class="h-12 w-auto">
    </div>
    <div class="md:hidden">
        <button id="menuToggle" class="text-white focus:outline-none">
            <!-- Hamburger icon -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Menu (desktop) -->
    <ul id="menu" class="hidden md:flex gap-6 {{($page == 'home') ? 'text-white' : 'text-black'}} font-medium text-sm">
        <li><a href="#" class="hover:underline" id="hoverBtn">Produk Kami</a></li>
        <li><a href="#" class="hover:underline">Layanan Konsumen</a></li>
        <li><a href="#" class="hover:underline">Penjualan</a></li>
    </ul>
</nav>
<div id="mobileMenu"
    class="md:hidden hidden absolute top-20 right-6 bg-white text-sm rounded-lg shadow-md p-4 space-y-2 w-48 z-50">
    <a href="#" class="block text-gray-800 hover:underline" onclick="hoverMobile()">Produk Kami</a>
    <a href="#" class="block text-gray-800 hover:underline">Layanan Konsumen</a>
    <a href="#" class="block text-gray-800 hover:underline">Penjualan</a>
</div>