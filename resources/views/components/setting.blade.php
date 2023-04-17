@props(['heading'])
<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
       {{$heading}}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4">Important Links</h4>

            <ul>

                <li>
                    <a class="{{ request()->is('admin/posts/create') ? ' text-blue-700 ': '' }}" href="/admin/posts/create">New Posts</a>
                </li><li>
                    <a class="{{ request()->is('admin/posts') ? ' text-blue-700 ': '' }}" href="/admin/posts">All Posts </a>
                </li>
            </ul>
        </aside>

<main class="flex-1">
    <x-panel>
        {{$slot}}
    </x-panel>
</main>
    </div>
</section>
