<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Siswa') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk membuat data siswa baru') }}
        </x-slot>

        <x-slot name="form" enctype="multipart/form-data">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="nik" value="{{ __('NIK') }}" />
                <x-jet-input id="nik" name="nik" type="number" class="mt-1 block w-full form-control shadow-none" wire:model="siswa.nik" />
                <x-jet-input-error for="siswa.nik" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="asal_sekolah" value="{{ __('Asal Sekolah') }}" />
                <select name="asal_sekolah" id="asal_sekolah" class="mt-1 block w-full form-control shadow-none" wire:model="siswa.asal_sekolah">
                    <option value="">Pilih Asal Sekolah...</option>
                    <option value="1">SMK TARUNA BHAKTI DEPOK</option>
                    <option value="2">SMK NEGERI 4 DEPOK</option>
                </select>
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="nama_siswa" value="{{ __('Nama Siswa') }}" />
                <x-jet-input id="nama_siswa" name="nama_siswa" type="text" class="mt-1 block w-full form-control shadow-none" wire:model="siswa.nama_siswa" />
                <x-jet-input-error for="siswa.nama_siswa" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="foto_siswa" value="{{ __('Foto Siswa') }}" />
                <x-jet-input id="foto_siswa" name="foto_siswa" type="file" class="mt-1 block w-full form-control shadow-none" wire:model="siswa.foto_siswa" />
                <x-jet-input-error for="siswa.foto_siswa" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="jenis_kelamin" value="{{ __('Jenis Kelamin') }}" />
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki" checked>
                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                  </div>
                <x-jet-input-error for="siswa.jenis_kelamin" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="tanggal_lahir" value="{{ __('Tanggal Lahir') }}" />
                <x-jet-input id="tanggal_lahir" name="tanggal_lahir" type="date" class="mt-1 block w-full form-control shadow-none" wire:model="siswa.tanggal_lahir" />
                <x-jet-input-error for="siswa.tanggal_lahir" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="tempat_lahir" value="{{ __('Tempat Lahir') }}" />
                <x-jet-input id="tempat_lahir" name="tempat_lahir" type="text" class="mt-1 block w-full form-control shadow-none" wire:model="siswa.tempat_lahir" />
                <x-jet-input-error for="siswa.tempat_lahir" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="agama" value="{{ __('Agama') }}" />
                <select name="agama" id="agama" class="mt-1 block w-full form-control shadow-none" wire:model="siswa.asal_sekolah">
                    <option value="">Pilih Agama...</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="budha">Budha</option>
                    <option value="hindu">Hindu</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="alamat_rumah" value="{{ __('Alamat Rumah') }}" />
               <textarea name="alamat_rumah" id="alamat_rumah" wire:model="siswa.alamat_rumah" class="mt-1 block w-full form-control shadow-none" ></textarea>
                <x-jet-input-error for="siswa.tempat_lahir" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="kelurahan" value="{{ __('Keluran') }}" />
                <select name="kelurahan" id="kelurahan" class="mt-1 block w-full form-control shadow-none" wire:model="siswa.kelurahan">
                    <option value="">Pilih Kelurahan...</option>
                    <option value="Sukmajaya">Sukmajaya</option>
                    <option value="Abadijaya">Abadijaya</option>
                </select>
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="kecamatan" value="{{ __('Keluran') }}" />
                <select name="kecamatan" id="kecamatan" class="mt-1 block w-full form-control shadow-none" wire:model="siswa.kecamatan">
                    <option value="">Pilih Kecamatan...</option>
                    <option value="Sukmajaya">Sukmajaya</option>
                    <option value="Abadijaya">Abadijaya</option>
                </select>
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="nomor_telepon" value="{{ __('Nomor Telepon') }}" />
                <x-jet-input id="nomor_telepon" name="nomor_telepon" type="text" class="mt-1 block w-full form-control shadow-none" wire:model="siswa.nomor_telepon" />
                <x-jet-input-error for="siswa.nomor_telepon" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __($button['submit_text']) }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />
</div>
