<div>
  <h1 class="mb-3 font-bold text-3xl text-sky-500">
    Manajemen Obat
  </h1>
  <p class="max-w-[720px] w-full text-[14px] mb-10">
    Kelola dan pantau data obat di klinik Anda. Tambah, Ubah, hapus, atau perbaiki data obat sesuai kebutuhan.
  </p>
  <div class="flex gap-3">
    <div class="w-[240px] rounded-md shadow-sm">
      <input type="password" name="password" id="password" class="block w-full rounded-md py-1 px-4 text-gray-800 focus:outline-none border border-sky-200 focus:border focus:border-sky-500 text-[13.5px] sm:text-sm sm:leading-6" placeholder="Cari nama obat">
    </div>
    <button class="block bg-sky-500 text-[13.5px] rounded-md px-4 py-1 font-bold text-center text-white hover:bg-sky-500/80">
      Tambah Data +
    </button>
  </div>

  <div class="overflow-auto mt-8 rounded-md">
    <table class="w-full">
      <thead class="border-b border-neutral-200 bg-neutral-50">
        <tr>
          <th class="w-[200px] p-3 rounded-l-md font-semibold tracking-wide text-left">Produksi
          </th>
          <th class="w-[200px] p-3 rounded-l-md font-semibold tracking-wide text-left">Kadaluwarsa
          </th>
          <th class="w-[200px] p-3 rounded-l-md font-semibold tracking-wide text-left">Vendor
          </th>
          <th class="p-3 font-semibold tracking-wide text-left">Nama Obat</th>
          <th class="w-[200px] p-3 font-semibold tracking-wide text-left">Harga Beli</th>
          <th class="w-[240px] p-3 font-semibold tracking-wide text-left">Harga Jual</th>
          <th class="w-[40px] p-3 rounded-r-md font-semibold tracking-wide text-left">:</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-neutral-200">
        <tr>
          <td class="w-[200px] p-3">
            10 Agustus 2021
          </td>
          <td class="w-[200px] p-3">
            10 Januari 2028
          </td>
          <td class="w-[200px] p-3">
            Kimia Farma
          </td>
          <td class="p-3">Antimo</td>
          <td class="w-[200px] p-3">10.000</td>
          <td class="w-[240px] p-3">12.000</td>
          <td class="w-[40px] p-3 hover:cursor-pointer relative dropdown-button">
            :
            <div class="dropdown-content hidden absolute right-0 top-[75%] z-[2] bg-neutral-50 p-3 rounded-md shadow-xl w-[140px] border">
              <a class="flex mb-2" href="#">Lihat Detail</a>
              <a class="flex mb-2" href="#">Edit</a>
              <a class="flex" href="#">Hapus</a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<script>
  const dropdownButton = document.querySelectorAll('.dropdown-button')
  const dropdownContent = document.querySelectorAll('.dropdown-content')

  for (let index = 0; index < dropdownButton.length; index++) {
    dropdownButton[index].addEventListener('click', function() {
      dropdownContent[index].classList.toggle('hidden')
    });
  }

  // Menutup dropdown jika klik di luar area dropdown
  // window.onclick = function(event) {
  //   if (!event.target.matches('.dropdown-content')) {
  //     for (let i = 0; i < dropdownContent.length; i++) {
  //       if (!dropdownContent[index].classList.contains('hidden')) {
  //         dropdownContent[index].classList.add('hidden')
  //       }
  //     }
  //   }
  // }
</script>