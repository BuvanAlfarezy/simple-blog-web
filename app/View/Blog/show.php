<?php
/** @var array $post */

function formatDate($date)
{
    return date('F d, Y', strtotime($date));
}
?>

<main class="max-w-4xl mx-auto px-5 pt-32 pb-16">

    <!-- Back -->
    <a 
        href="/blog"
        class="inline-flex items-center gap-2 text-lg font-semibold hover:text-orange-500 transition mb-8"
    >
        ← Back
    </a>

    <!-- Title -->
    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-8">
        <?= $post['title'] ?>
    </h1>

    <!-- Thumbnail -->
    <img
        src="<?= $post['image'] ?>"
        alt="<?= $post['title'] ?>"
        class="w-full h-[250px] md:h-[420px] object-cover rounded-3xl mb-6"
    >

    <!-- Meta -->
    <div class="flex items-center gap-6 text-sm text-gray-500 mb-8">

        <div class="flex items-center gap-2">
            <span class="text-orange-500">🗓</span>
            <span><?= formatDate($post['created_at']) ?></span>
        </div>

        <div class="flex items-center gap-2">
            <span class="text-orange-500">⏰</span>
            <span>10 min ago</span>
        </div>

    </div>

    <!-- Content -->
    <article class="space-y-6 text-lg leading-9 text-gray-700">

        <?= $post['content'] ?>

    </article>

</main>