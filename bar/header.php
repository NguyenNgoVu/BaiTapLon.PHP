<div class='bg-[#f7f7f7] w-full h-20 flex flex-col sticky top-0 z-20 select-none'>
  <div class="flex flex-row w-full h-20 justify-center items-center gap-20">
    <script>
      function openMenu() {
        let list = document.getElementById('leftmenu').classList
        if (list.contains('hidden')) {
          list.remove('hidden')
          list.add('flex')
        } else if (list.contains('flex')) {
          list.remove('flex')
          list.add('hidden')
        }
      }
    </script>

    <div class="absolute left-2 w-12 h-12 cursor-pointer" onclick="openMenu()">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 6H20M4 12H20M4 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </div>

    <a href='/' class='flex flex-row'>
      <img src='/public/Logo.png' class='object-contain self-center mr-2' width='60' height='60' alt='' />
      <div class='font-bold'>
        <span class='text-justify'>NGUYEN<br />NGO<br />NGUYEN</span>
      </div>
    </a>

    <script>
      function search() {
        let search = document.getElementById('searchbar').value
        window.location.href = `/search.php?q=${search}`
      }
    </script>
    <div class='flex flex-row w-[40%] border border-[#01a14b] rounded-full'>
      <input type='text' placeholder='Tìm kiếm...' class='w-full rounded-l-full p-2' id='searchbar' onkeydown="event.keyCode == 13 && search()" />
      <div class='bg-[#01a14b] rounded-r-full p-2 px-4 cursor-pointer' onclick="search()">
        <svg class='self-center h-full ' fill='#fff' height='20px' width='20px' viewBox='0 0 490.4 490.4'>
          <g>
            <path d='M484.1,454.796l-110.5-110.6c29.8-36.3,47.6-82.8,47.6-133.4c0-116.3-94.3-210.6-210.6-210.6S0,94.496,0,210.796 s94.3,210.6,210.6,210.6c50.8,0,97.4-18,133.8-48l110.5,110.5c12.9,11.8,25,4.2,29.2,0C492.5,475.596,492.5,463.096,484.1,454.796z M41.1,210.796c0-93.6,75.9-169.5,169.5-169.5s169.6,75.9,169.6,169.5s-75.9,169.5-169.5,169.5S41.1,304.396,41.1,210.796z' />
          </g>
        </svg>
      </div>
    </div>

    <a href='/btl/Cart'>
      <span class='flex rounded-full text-[#01a14b] h-5 w-5 absolute items-center justify-center mt-[11px] ml-[19px] text-sm font-semibold'>
        {count}
      </span>
      <svg fill='#01a14b' width='50px' height='50px' viewBox='0 0 902.86 902.86' stroke='#01a14b' transform='matrix(-1, 0, 0, 1, 0, 0)rotate(0)'>
        <path d='M671.504,577.829l110.485-432.609H902.86v-68H729.174L703.128,179.2L0,178.697l74.753,399.129h596.751V577.829z M685.766,247.188l-67.077,262.64H131.199L81.928,246.756L685.766,247.188z'></path>
        <path d='M578.418,825.641c59.961,0,108.743-48.783,108.743-108.744s-48.782-108.742-108.743-108.742H168.717 c-59.961,0-108.744,48.781-108.744,108.742s48.782,108.744,108.744,108.744c59.962,0,108.743-48.783,108.743-108.744 c0-14.4-2.821-28.152-7.927-40.742h208.069c-5.107,12.59-7.928,26.342-7.928,40.742 C469.675,776.858,518.457,825.641,578.418,825.641z M209.46,716.897c0,22.467-18.277,40.744-40.743,40.744 c-22.466,0-40.744-18.277-40.744-40.744c0-22.465,18.277-40.742,40.744-40.742C191.183,676.155,209.46,694.432,209.46,716.897z M619.162,716.897c0,22.467-18.277,40.744-40.743,40.744s-40.743-18.277-40.743-40.744c0-22.465,18.277-40.742,40.743-40.742 S619.162,694.432,619.162,716.897z'></path>
      </svg>
    </a>
  </div>

  <div class='flex flex-row justify-center gap-x-28 p-2 font-bold mb-7 uppercase sticky top-0 bg-white border-b-2 border-b-[#01a14b] z-10' id='topbar'>
    <a id='home' href='/' class="text-black hover:underline">Trang chủ</a>
    <a id='about' href='/company/about.php' class="text-black hover:underline">Về NNV</a>
    <a id='contact' href='/company/contact.php' class="text-black hover:underline">Liên hệ</a>
  </div>

  <!-- LEFT MENU -->
  <div id='leftmenu' class="h-[26rem] w-72 top-28 left-0 bg-white absolute rounded-br-lg border-2 border-b-[#01a14b] border-r-[#01a14b] opacity-90 text-xl gap-5 hidden flex-col">
    <div class="flex flex-col mt-4 gap-1 ml-2">
      <span class="text-2xl font-semibold">Trang sức</span>
      <a href="/search.php?c=bongtai" class="flex flex-row"><span class="ml-4 flex cursor-pointer hover:underline">Bông Tai</span><span class="ml-2 text-xs justify-self-center items-center my-auto">⮞</span></a>
      <a href="/search.php?c=nhancuoi" class="flex flex-row"><span class="ml-4 flex cursor-pointer hover:underline">Nhẫn cưới</span><span class="ml-2 text-xs justify-self-center items-center my-auto">⮞</span></a>
      <a href="/search.php?c=vongtay" class="flex flex-row"><span class="ml-4 flex cursor-pointer hover:underline">Vòng tay</span><span class="ml-2 text-xs justify-self-center items-center my-auto">⮞</span></a>
    </div>

    <div class="flex flex-col mt-4 gap-1 ml-2">
      <span class="text-2xl font-semibold">Đá quý</span>
      <div class="flex flex-row"><span class="ml-4 flex cursor-pointer hover:underline">Vàng 24K</span><span class="ml-2 text-xs justify-self-center items-center my-auto">⮞</span></div>
      <div class="flex flex-row"><span class="ml-4 flex cursor-pointer hover:underline">Kim cương</span><span class="ml-2 text-xs justify-self-center items-center my-auto">⮞</span></div>
      <div class="flex flex-row"><span class="ml-4 flex cursor-pointer hover:underline">Ngọc trai</span><span class="ml-2 text-xs justify-self-center items-center my-auto">⮞</span></div>
    </div>

    <div class="flex flex-row mt-4 gap-1 ml-2 bottom-4 absolute right-4">
      <svg class="cursor-pointer w-12 h-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.97 1H18.03C16.76 1 16 1.76 16 3.03V5.97C16 7.24 16.76 8 18.03 8H20.97C22.24 8 23 7.24 23 5.97V3.03C23 1.76 22.24 1 20.97 1ZM21.61 4.68C21.24 5.86 19.95 6.5 19.5 6.5C19.05 6.5 17.77 5.88 17.39 4.68C17.33 4.5 17.3 4.3 17.3 4.11C17.3 3.46 17.63 2.79 18.32 2.57C18.73 2.44 19.17 2.51 19.48 2.77C19.8 2.52 20.24 2.44 20.66 2.57C21.58 2.86 21.87 3.89 21.61 4.68Z" fill="#292D32"></path>
        <path d="M18.03 9.5C16.08 9.5 14.5 7.92 14.5 5.97V3C14.5 2.45 14.05 2 13.5 2H7C4.24 2 2 4.23 2 6.98V13.95C2 16.71 4.24 18.95 7 18.95H8.5C8.78 18.95 9.14 19.13 9.3 19.35L10.8 21.34C11.46 22.22 12.54 22.22 13.2 21.34L14.7 19.35C14.89 19.1 15.19 18.95 15.5 18.95H17.01C19.77 18.95 22 16.72 22 13.96V10.5C22 9.95 21.55 9.5 21 9.5H18.03ZM8 12C7.44 12 7 11.55 7 11C7 10.45 7.44 10 8 10C8.55 10 9 10.45 9 11C9 11.55 8.56 12 8 12ZM12 12C11.44 12 11 11.55 11 11C11 10.45 11.44 10 12 10C12.55 10 13 10.45 13 11C13 11.55 12.56 12 12 12Z" fill="#292D32"></path>
      </svg>
      <svg class="cursor-pointer w-12 h-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.14844 7.48828C8.58844 7.48828 8.14844 7.93828 8.14844 8.48828C8.14844 9.03828 8.59844 9.48828 9.14844 9.48828C9.69844 9.48828 10.1484 9.03828 10.1484 8.48828C10.1484 7.93828 9.69844 7.48828 9.14844 7.48828Z" fill="#292D32"></path>
        <path d="M21.46 5.04C20.62 3.09 18.77 2 16.19 2H7.81C4.6 2 2 4.6 2 7.81V16.19C2 18.77 3.09 20.62 5.04 21.46C5.23 21.54 5.45 21.49 5.59 21.35L21.35 5.59C21.5 5.44 21.55 5.22 21.46 5.04ZM10.53 12.24C10.14 12.62 9.63 12.8 9.12 12.8C8.61 12.8 8.1 12.61 7.71 12.24C6.69 11.28 5.57 9.75 6 7.93C6.38 6.28 7.84 5.54 9.12 5.54C10.4 5.54 11.86 6.28 12.24 7.94C12.66 9.75 11.54 11.28 10.53 12.24Z" fill="#292D32"></path>
        <path d="M19.4689 20.5295C19.6889 20.7495 19.6589 21.1095 19.3889 21.2595C18.5089 21.7495 17.4389 21.9995 16.1889 21.9995H7.80892C7.51892 21.9995 7.39892 21.6595 7.59892 21.4595L13.6389 15.4195C13.8389 15.2195 14.1489 15.2195 14.3489 15.4195L19.4689 20.5295Z" fill="#292D32"></path>
        <path d="M22.0017 7.80892V16.1889C22.0017 17.4389 21.7517 18.5189 21.2617 19.3889C21.1117 19.6589 20.7517 19.6789 20.5317 19.4689L15.4117 14.3489C15.2117 14.1489 15.2117 13.8389 15.4117 13.6389L21.4517 7.59892C21.6617 7.39892 22.0017 7.51892 22.0017 7.80892Z" fill="#292D32"></path>
      </svg>
      <svg class="cursor-pointer w-12 h-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.4199 13.4181H13.2599L13.5799 10.5781H10.7399L10.4199 13.4181Z" fill="#292D32"></path>
        <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM18.82 10.58H15.05L14.73 13.43H18.1C18.5 13.43 18.83 13.76 18.83 14.16C18.83 14.56 18.5 14.89 18.1 14.89H14.57L14.16 18.55C14.12 18.92 13.8 19.2 13.43 19.2C13.4 19.2 13.38 19.2 13.35 19.2C12.95 19.16 12.66 18.79 12.7 18.39L13.09 14.89H10.25L9.84 18.55C9.8 18.92 9.48 19.2 9.11 19.2C9.08 19.2 9.06 19.2 9.03 19.2C8.63 19.16 8.34 18.79 8.38 18.39L8.77 14.89H5.18C4.78 14.89 4.45 14.56 4.45 14.16C4.45 13.76 4.78 13.43 5.18 13.43H8.95L9.27 10.58H5.9C5.5 10.58 5.17 10.25 5.17 9.85C5.17 9.45 5.5 9.12 5.9 9.12H9.43L9.84 5.46C9.88 5.06 10.25 4.77 10.65 4.81C11.05 4.85 11.34 5.22 11.3 5.62L10.91 9.12H13.75L14.16 5.46C14.21 5.06 14.57 4.77 14.97 4.81C15.37 4.85 15.66 5.22 15.62 5.62L15.23 9.12H18.84C19.24 9.12 19.57 9.45 19.57 9.85C19.57 10.25 19.22 10.58 18.82 10.58Z" fill="#292D32"></path>
      </svg>
    </div>
  </div>
</div>