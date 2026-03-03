<template>
  <div class="w-full min-h-screen flex justify-center pt-20">
    <div class="max-w-5xl w-full px-4 py-10">
      <h1 class="text-3xl font-bold text-center mb-8 text-white">
        Farm
      </h1>

              
      <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 ">
        <li
          v-for="item in farms"
          :key="item.slug"
        >
          <NuxtLink
            :to="`/farm/${item.slug}`"
            class="
              block
              h-full
              rounded-lg
              border
              border-gray-200
              p-2
              text-center
              font-medium
              transition
              duration-200
              text-white
              hover:border-(--ijo-terangs)
            "
          >
            <div class="hover:text-(--ijo-terangs) text-white">
              {{ item.nama }}
            </div>
          </NuxtLink>
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup lang="ts">

type FarmItem = {
  slug: string
  nama: string
}

const farms = ref<FarmItem[]>([
  { slug: 'kuda-poni', nama: 'Kuda Poni' },
  { slug: 'anak-sapi', nama: 'Anak Sapi' },

  { slug: 'kambing-kerdil-nigeria', nama: 'Kambing Kerdil Nigeria' },
  { slug: 'kambing-pigmi', nama: 'Kambing Pigmi' },
  { slug: 'domba-merino', nama: 'Domba Merino' },

  { slug: 'rakun', nama: 'Rakun' },

  { slug: 'anjing-padang-rumput', nama: 'Anjing Padang Rumput' },

  { slug: 'chinchilla', nama: 'Chinchilla' },

  { slug: 'capybara', nama: 'Capybara' },

  { slug: 'blue-gold-macaw', nama: 'Blue & Gold Macaw' },
  { slug: 'kakatua-galah', nama: 'Kakatua Galah' },
  { slug: 'african-grey-parrot', nama: 'African Grey Parrot' },
  { slug: 'green-winged-macaw', nama: 'Green-winged Macaw' },
  { slug: 'sun-conure', nama: 'Sun Conure' },
  { slug: 'cockatiel', nama: 'Cockatiel' },
  { slug: 'lovebird', nama: 'Love Bird' },
  { slug: 'budgie-budgerigar', nama: 'Budgie / Budgerigar' },

  { slug: 'bebek-mandarin', nama: 'Bebek Mandarin' },
  { slug: 'call-duck', nama: 'Call Duck' },
  { slug: 'bebek-putih-jambul', nama: 'Bebek Putih Jambul' },
  { slug: 'ikan-koi', nama: 'Ikan Koi' },

  { slug: 'kura-kura-sulcata', nama: 'Kura-kura Sulcata' },
  { slug: 'iguana', nama: 'Iguana' },
  { slug: 'tegu-argentina', nama: 'Tegu Argentina' },

  { slug: 'ayam-kapas', nama: 'Ayam Kapas' },
  { slug: 'ayam-brahma', nama: 'Ayam Brahma' },
  { slug: 'ayam-poland', nama: 'Ayam Poland' },

  { slug: 'kelinci-flemish-giant', nama: 'Kelinci Flemish Giant' },
  { slug: 'kelinci-biasa', nama: 'Kelinci Biasa' },
  { slug: 'kelinci-rex', nama: 'Kelinci Rex' },
  { slug: 'kelinci-holland-lop', nama: 'Kelinci Holland Lop' },
  { slug: 'guinea-pig', nama: 'Guinea Pig' },

  { slug: 'kupu-kupu', nama: 'Kupu-kupu' },

  { slug: 'fosil-digging', nama: 'Fosil Digging' },
  { slug: 'farm-silinder', nama: 'Farm Silinder' },
  { slug: 'farm-puzzle', nama: 'Farm Puzzle' },
])

// throw showError({
//   statusCode: 404,
//   statusMessage: 'Halaman Belum Tersedia',
//   fatal: true
// })
</script>

<style>

</style>