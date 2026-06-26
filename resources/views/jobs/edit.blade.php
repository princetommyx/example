<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium">Title</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <input id="title" type="text" name="title" placeholder="Software Engineer" class="block min-w-0 grow bg-transparent py-1.5 pr-3 px-3 text-base placeholder:text-gray-500 focus:outline-none sm:text-sm/6" required />
                            </div>

                            @error('title')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium">Salary</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <input id="salary" type="text" name="salary" placeholder="$50,000 USD" class="block min-w-0 grow bg-transparent py-1.5 pr-3 px-3 text-base placeholder:text-gray-500 focus:outline-none sm:text-sm/6" required />
                            </div>

                            @error('salary')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                    <!-- <div class="mt-10">
                        @if($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li class="text-red-500">{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>-->
                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>

</x-layout>