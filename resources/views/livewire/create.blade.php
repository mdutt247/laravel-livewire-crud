<div>
    <form>
        <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">

                <div class="mb-4 text-xl">
                    Create Contact
                </div>
                <div class="mb-4">
                    <label for="textname"
                        class="block mb-2 text-sm font-bold text-gray-700">Name</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="textname"
                        placeholder="Enter name"
                        wire:model="name">
                    @error('name') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div class="mb-4">
                    <label for="textemail"
                        class="block mb-2 text-sm font-bold text-gray-700">Email</label>
                    <input type="text"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="textemail"
                        wire:model="email"
                        placeholder="Enter email">
                    @error('email') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                </div>
                <div>
                    <button wire:click.prevent="store()" type="button"
                    class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                    Save
                </button>
                </div>

        </div>
    </form>
</div>
