<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Siswa Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Siswa</a></div>
            <div class="breadcrumb-item"><a href="{{ route('siswa') }}">Buat Siswa Baru</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-siswa action="createSiswa" />
    </div>
</x-app-layout>
