<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="en">

  <script src="https://cdn.tailwindcss.com"></script>


  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

  <div class="w-full min-h-screen flex gap-4">
    <aside class="sticky top-0 bottom-0 left-0 w-[240px] p-4 border-r border-neutral-300">
      <h1 class="font-bold text-sky-500 text-2xl mb-8">
        Welcome!
      </h1>

      <div class="flex gap-2 items-center hover:cursor-pointer mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline stroke-neutral-600 icon-tabler-database">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 6m-8 0a8 3 0 1 0 16 0a8 3 0 1 0 -16 0" />
          <path d="M4 6v6a8 3 0 0 0 16 0v-6" />
          <path d="M4 12v6a8 3 0 0 0 16 0v-6" />
        </svg>
        <b class="font-medium text-neutral-600">Master Manajemen</b>
      </div>
      <a href="/?r=master/patient" class="pl-6 flex gap-2 items-center hover:cursor-pointe text-neutral-600 mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="#707070" class="icon icon-tabler icons-tabler-filled icon-tabler-point stroke-neutral-600 ">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
        </svg>
        <b class="font-medium text-neutral-600">
          Pasien
        </b>
      </a>
      <a href="/?r=master/employee" class="pl-6 flex gap-2 items-center hover:cursor-pointe text-neutral-600 mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="#707070" class="icon icon-tabler icons-tabler-filled icon-tabler-point stroke-neutral-600 ">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
        </svg>
        <b class="font-medium text-neutral-600">
          Pegawai
        </b>
      </a>
      <a href="/?r=master/medicine" class="pl-6 flex gap-2 items-center hover:cursor-pointe text-neutral-600 mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="#707070" class="icon icon-tabler icons-tabler-filled icon-tabler-point stroke-neutral-600 ">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
        </svg>
        <b class="font-medium text-neutral-600">
          Obat
        </b>
      </a>
      <a href="/?r=master/treatment" class="pl-6 flex gap-2 items-center hover:cursor-pointe text-neutral-600 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="#707070" class="icon icon-tabler icons-tabler-filled icon-tabler-point stroke-neutral-600 ">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
        </svg>
        <b class="font-medium text-neutral-600">
          Tindakan Medis
        </b>
      </a>

      <div class="flex gap-2 items-center hover:cursor-pointer mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline stroke-neutral-600 icon-tabler-transform">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M3 6a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
          <path d="M21 11v-3a2 2 0 0 0 -2 -2h-6l3 3m0 -6l-3 3" />
          <path d="M3 13v3a2 2 0 0 0 2 2h6l-3 -3m0 6l3 -3" />
          <path d="M15 18a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
        </svg>
        <b class="font-medium text-neutral-600">Transaksi</b>
      </div>
      <div class="pl-6 flex gap-2 items-center hover:cursor-pointe text-neutral-600 mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="#707070" class="icon icon-tabler icons-tabler-filled icon-tabler-point stroke-neutral-600 ">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
        </svg>
        <b class="font-medium text-neutral-600">
          Pendaftaran Pasien
        </b>
      </div>
      <div class="pl-6 flex gap-2 items-center hover:cursor-pointe text-neutral-600 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="#707070" class="icon icon-tabler icons-tabler-filled icon-tabler-point stroke-neutral-600 ">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
        </svg>
        <b class="font-medium text-neutral-600">
          Pemberian Tindakan
        </b>
      </div>

      <div class="flex gap-2 items-center hover:cursor-pointer mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-coin stroke-neutral-600">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
          <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
          <path d="M12 7v10" />
        </svg>
        <b class="font-medium text-neutral-600">Pembayaran</b>
      </div>

      <div class="flex gap-2 items-center hover:cursor-pointer mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-report stroke-neutral-600">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697" />
          <path d="M18 14v4h4" />
          <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2" />
          <path d="M8 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
          <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
          <path d="M8 11h4" />
          <path d="M8 15h3" />
        </svg>
        <b class="font-medium text-neutral-600">Laporan</b>
      </div>


    </aside>
    <div class="w-[calc(100%_-_216px)] p-4">
      <?php echo $content; ?>
    </div>
  </div>

</body>

</html>