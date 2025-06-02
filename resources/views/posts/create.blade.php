<x-app-layout meta-title="Create Formulario" meta-desc="Crear Formulario">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New POST') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form 
                    class="space-y-4 max-w-xl"
                    action="{{route('post.store')}}" method="Post">
                     
                        @include('posts.form-fields')
                          <x-primary-button type="submit">{{__('Enviar')}}</x-primary-button >
                               @csrf
                    </form>
                </div>
            </div>
        </div>

        </x-layout>