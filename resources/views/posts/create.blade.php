
<x-app-layout meta-title="Crear nuevo post" meta-description="formulario">


    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('crear un nuevo post') }}
        </h1>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('posts.store', $post) }}"
                          class="space-y-4 max-w-xl"
                          method="POST"  >

                        @include('posts.form-fields')

                        <x-primary-button type="submit">{{ __('save') }}</x-primary-button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('posts.index') }}">{{__('Back')}}</a>

</x-app-layout>

