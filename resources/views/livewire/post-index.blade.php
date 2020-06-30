<div>
    <div class="w-full p-6">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <livewire:post-create/>
    </div>

    <hr>
    <div class="py-6 px-6">
        <h2 class="py-4 text-xl font-black text-indigo-500 capitalize border-b border-indigo-700">
            My posts:
        </h2>
        <ul>
            @foreach($posts as $post)
                <livewire:post-single :post="$post" :key="$post->id"/>
            @endforeach
        </ul>
    </div>
    <div>
        <div class="py-4 px-6">
            {{ $posts->appends(Request::except('page'))->links('components.twui-pagination') }}
            {{--{{ $posts->links() }}--}}
        </div>
    </div>
</div>
