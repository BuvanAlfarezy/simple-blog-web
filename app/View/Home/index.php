<?php

function limitText($text, $limit = 100)
{
    return strlen($text) > $limit
        ? substr($text, 0, $limit) . '...'
        : $text;
}

?>
<div class="pt-16 md:pt-16">
<section class="bg-[#F3EFE4] px-6 md:px-14 py-12 md:py-20 pt">

    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

        <!-- Left -->
        <div class="space-y-8 text-center lg:text-left">

            <div class="space-y-4">

                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                    Selamat Datang,
                    <br>
                    segera baca
                    <br>
                    <span class="text-orange-500">
                        blog
                    </span>
                    anda
                </h1>

                <p class="text-gray-700 text-lg md:text-2xl leading-relaxed max-w-xl">
                    tempat di mana ide-ide sederhana
                    bisa berkembang jadi sesuatu yang
                    lebih bermakna.
                </p>

            </div>

            <div class="flex justify-center lg:justify-start">

    <button class="bg-orange-500 hover:bg-orange-600 transition text-white font-semibold px-10 py-4 rounded-full text-lg">
        <a href="/blog">Lihat Blog</a>
    </button>

</div>

        </div>

        <!-- Right -->
        <div class="flex justify-center">

            <div class="grid grid-cols-2 gap-4 items-center">

                <div class="flex flex-col gap-4">

                    <img
                        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=600"
                        class="w-[170px] md:w-[220px] h-[220px] md:h-[300px] object-cover rounded-3xl"
                    >

                    <img
                        src="https://images.unsplash.com/photo-1611605698335-8b1569810432?q=80&w=600"
                        class="w-[170px] md:w-[220px] h-[110px] md:h-[150px] object-cover rounded-3xl"
                    >

                </div>

                <img
                    src="https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?q=80&w=600"
                    class="w-[190px] md:w-[260px] h-[350px] md:h-[500px] object-cover rounded-3xl"
                >

            </div>

        </div>

    </div>

</section>

<!-- Top Blog -->
<section class="bg-[#F3EFE4] px-6 md:px-14 py-16">

    <div class="max-w-7xl mx-auto">

        <!-- Heading -->
        <div class="text-center mb-14">

            <h2 class="text-4xl md:text-5xl font-bold">
                Top <span class="text-orange-500">Blog</span>
            </h2>

            <div class="w-16 h-1 bg-orange-500 mx-auto mt-3 rounded-full"></div>

        </div>

        <!-- Cards -->
        <div class="flex gap-8 overflow-x-auto pb-5 scrollbar-hide">

            <div class="flex gap-8 overflow-x-auto pb-5 scrollbar-hide">

    <?php foreach (array_slice($posts, 0, 5) as $post): ?>

        <a 
            href="/blog/show?id=<?= $post['id'] ?>"
            class="min-w-[320px] md:min-w-[340px] bg-orange-500 rounded-3xl p-6 shadow-lg flex gap-5 hover:scale-[1.02] transition"
        >

            <img
                src="<?= $post['image'] ?>"
                class="w-20 h-20 rounded-2xl object-cover flex-shrink-0"
                alt="<?= limitText($post['title'], 30) ?>"
            >

            <div>

                <h3 class="text-2xl text-white font-semibold mb-3 leading-tight">
                    <?= limitText($post['title'], 30) ?>
                </h3>

                <p class="text-white/90 leading-relaxed text-sm">
                    <?= limitText(strip_tags($post['content']), 100) ?>
                </p>

            </div>

        </a>

    <?php endforeach; ?>

</div>

        </div>

    </div>

</section>

<!-- Explore Blog -->
<section class="bg-[#F3EFE4] px-6 md:px-14 py-20">

    <div class="max-w-5xl mx-auto text-center">

        <!-- Title -->
        <h2 class="text-4xl md:text-5xl font-bold leading-tight">

            Explore & Baca 
            
            <span class="text-orange-500">
                Blog
            </span>

        </h2>

        <!-- Line -->
        <div class="w-16 h-1 bg-orange-500 mx-auto mt-3 rounded-full"></div>

        <!-- Description -->
        <p class="mt-8 text-gray-700 text-xl md:text-3xl leading-relaxed mb-20">

            Temukan berbagai artikel menarik, mulai dari tips,
            insight, hingga cerita yang bisa nambah wawasan lo.

        </p>

    </div>

</section>
</div>
