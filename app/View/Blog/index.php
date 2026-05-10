<?php
/** @var array $posts */

function limitText($text, $limit = 120)
{
    return strlen($text) > $limit
        ? substr($text, 0, $limit) . '...'
        : $text;
}

function formatDate($date)
{
    return date('F d, Y', strtotime($date));
}
?>


<main class="max-w-7xl mx-auto px-5 pt-32 pb-10">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <!-- Sidebar Recent Posts -->
            <aside class="lg:col-span-3">
                <div class="sticky top-32">
                    <h2 class="text-2xl font-bold mb-6">
                        Recent Posts
                    </h2>

                    <div class="space-y-5">

                        <?php foreach (array_slice($posts, 0, 3) as $recent): ?>
                            <a href="/blog/show?id=<?= $recent['id'] ?>"
                            class="flex gap-3 group">

                                <img
                                    src="<?= $recent['image'] ?>"
                                    alt="<?= $recent['title'] ?>"
                                    class="w-20 h-20 rounded-2xl object-cover flex-shrink-0"
                                >

                                <div>
                                    <h3 class="font-semibold text-sm leading-5 group-hover:text-orange-500 transition">
                                        <?= $recent['title'] ?>
                                    </h3>

                                    <p class="text-xs text-gray-500 mt-2 leading-4">
                                        <?= limitText(strip_tags($recent['content']), 70) ?>
                                    </p>

                                    <div class="flex items-center gap-2 mt-2 text-xs text-orange-500">
                                        <span>●</span>
                                        <span><?= formatDate($recent['created_at']) ?></span>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>

                    </div>
                </div>
            </aside>

            <!-- Blog Content -->
            <section class="lg:col-span-9 space-y-8">

                <?php foreach ($posts as $post): ?>
                    <article
                        class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden p-5"
                    >
                        <div class="flex flex-col md:flex-row gap-5">

                            <!-- Thumbnail -->
                            <img
                                src="<?= $post['image'] ?>"
                                alt="<?= $post['title'] ?>"
                                class="w-full md:w-[280px] h-[220px] object-cover rounded-2xl"
                            >

                            <!-- Content -->
                            <div class="flex flex-col justify-between flex-1">

                                <div>

                                    <!-- Meta -->
                                    <div class="flex items-center gap-5 text-sm text-gray-500 mb-4">

                                        <div class="flex items-center gap-2">
                                            <span class="text-orange-500">🗓</span>
                                            <span><?= formatDate($post['created_at']) ?></span>
                                        </div>

                                        <div class="flex items-center gap-2">
                                            <span class="text-orange-500">⏰</span>
                                            <span>10 min ago</span>
                                        </div>

                                    </div>

                                    <!-- Title -->
                                    <h2 class="text-3xl font-bold leading-tight mb-4 hover:text-orange-500 transition">
                                        <a href="/blog/show?id=<?= $post['id'] ?>">
                                            <?= $post['title'] ?>
                                        </a>
                                    </h2>

                                    <!-- Description -->
                                    <p class="text-gray-600 leading-7">
                                        <?= limitText(strip_tags($post['content']), 180) ?>
                                    </p>
                                </div>

                                <!-- Category -->
                                <div class="flex items-center gap-2 mt-6 text-sm text-gray-500">
                                    <span class="text-orange-500 text-lg">•</span>
                                    <span><?= $post['category'] ?? 'Technology' ?></span>
                                </div>

                            </div>

                        </div>
                    </article>
                <?php endforeach; ?>

            </section>

        </div>

    </main>