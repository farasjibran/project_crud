<div>
    <x-data-table :data="$data" :model="$siswas">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    ID
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th><a href="#" wire:click.prevent="sortBy('asal_sekolah')">
                    Asal Sekolah
                    @include('components.sort-icon', ['field' => 'asal_sekolah'])
                </a></th>
                <th><a wire:click.prevent="sortBy('nik')" role="button" href="#">
                    NIK
                    @include('components.sort-icon', ['field' => 'nik'])
                </a></th>
                <th><a wire:click.prevent="sortBy('nama_siswa')" role="button" href="#">
                    Nama Siswa
                    @include('components.sort-icon', ['field' => 'nama_siswa'])
                </a></th>
                <th><a wire:click.prevent="sortBy('foto_siswa')" role="button" href="#">
                    Foto Siswa
                    @include('components.sort-icon', ['field' => 'foto_siswa'])
                </a></th>
                <th><a wire:click.prevent="sortBy('jenis_kelamin')" role="button" href="#">
                    Jenis Kelamin
                    @include('components.sort-icon', ['field' => 'jenis_kelamin'])
                </a></th>
                <th><a wire:click.prevent="sortBy('tanggal_lahir')" role="button" href="#">
                    Tanggal Lahir
                    @include('components.sort-icon', ['field' => 'tanggal_lahir'])
                </a></th>
                <th><a wire:click.prevent="sortBy('tempat_lahir')" role="button" href="#">
                    Tempat Lahir
                    @include('components.sort-icon', ['field' => 'tempat_lahir'])
                </a></th>
                <th><a wire:click.prevent="sortBy('agama')" role="button" href="#">
                    Agama
                    @include('components.sort-icon', ['field' => 'agama'])
                </a></th>
                <th><a wire:click.prevent="sortBy('alamat_rumah')" role="button" href="#">
                    Alamat Rumah
                    @include('components.sort-icon', ['field' => 'alamat_rumah'])
                </a></th>
                <th><a wire:click.prevent="sortBy('kelurahan')" role="button" href="#">
                    Kelurahan
                    @include('components.sort-icon', ['field' => 'kelurahan'])
                </a></th>
                <th><a wire:click.prevent="sortBy('kecamatan')" role="button" href="#">
                    Kecamatan
                    @include('components.sort-icon', ['field' => 'kecamatan'])
                </a></th>
                <th><a wire:click.prevent="sortBy('nomor_telepon')" role="button" href="#">
                    Nomor Telepon
                    @include('components.sort-icon', ['field' => 'nomor_telepon'])
                </a></th>
                <th><a wire:click.prevent="sortBy('nomor_hp')" role="button" href="#">
                    Nomor Handphone
                    @include('components.sort-icon', ['field' => 'nomor_hp'])
                </a></th>
                <th><a wire:click.prevent="sortBy('email')" role="button" href="#">
                    Email
                    @include('components.sort-icon', ['field' => 'email'])
                </a></th>
                <th><a wire:click.prevent="sortBy('nama_ayah')" role="button" href="#">
                    Nama Ayah
                    @include('components.sort-icon', ['field' => 'nama_ayah'])
                </a></th>
                <th><a wire:click.prevent="sortBy('tanggal_lahir_ayah')" role="button" href="#">
                    Tanggal Lahir Ayah
                    @include('components.sort-icon', ['field' => 'tanggal_lahir_ayah'])
                </a></th>
                <th><a wire:click.prevent="sortBy('pendidikan_ayah')" role="button" href="#">
                    Pendidikan Ayah
                    @include('components.sort-icon', ['field' => 'pendidikan_ayah'])
                </a></th>
                <th><a wire:click.prevent="sortBy('pekerjaan_ayah')" role="button" href="#">
                    Pekerjaan Ayah
                    @include('components.sort-icon', ['field' => 'pekerjaan_ayah'])
                </a></th>
                <th><a wire:click.prevent="sortBy('penghasilan_ayah')" role="button" href="#">
                    Penghasilan Ayah
                    @include('components.sort-icon', ['field' => 'penghasilan_ayah'])
                </a></th>
                <th><a wire:click.prevent="sortBy('nomor_telepon_ayah')" role="button" href="#">
                    Nomor Telepon Ayah
                    @include('components.sort-icon', ['field' => 'nomor_telepon_ayah'])
                </a></th>
                <th><a wire:click.prevent="sortBy('nama_ibu')" role="button" href="#">
                    Nama Ibu
                    @include('components.sort-icon', ['field' => 'nama_ibu'])
                </a></th>
                <th><a wire:click.prevent="sortBy('tanggal_lahir_ibu')" role="button" href="#">
                    Tanggal Lahir Ibu
                    @include('components.sort-icon', ['field' => 'tanggal_lahir_ibu'])
                </a></th>
                <th><a wire:click.prevent="sortBy('pendidikan_ibu')" role="button" href="#">
                    Pendidikan Ibu
                    @include('components.sort-icon', ['field' => 'pendidikan_ibu'])
                </a></th>
                <th><a wire:click.prevent="sortBy('pekerjaan_ibu')" role="button" href="#">
                    Pekerjaan Ibu
                    @include('components.sort-icon', ['field' => 'pekerjaan_ibu'])
                </a></th>
                <th><a wire:click.prevent="sortBy('penghasilan_ibu')" role="button" href="#">
                    Penghasilan Ibu
                    @include('components.sort-icon', ['field' => 'penghasilan_ibu'])
                </a></th>
                <th><a wire:click.prevent="sortBy('nomor_telepon_ibu')" role="button" href="#">
                    Nomor Telepon Ibu
                    @include('components.sort-icon', ['field' => 'nomor_telepon_ibu'])
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Data Tanggal Dibuat
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($siswas as $siswa)
                <tr x-data="window.__controller.dataTableController({{ $siswa->id }})">
                    <td>{{ $siswa->id }}</td>
                    <td>{{ $siswa->asal_sekolah }}</td>
                    <td>{{ $siswa->nik }}</td>
                    <td>{{ $siswa->nama_siswa }}</td>
                    <td><img src="https://ui-avatars.com/api/?name=John+Doe/?size=512"></td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td>{{ $siswa->tanggal_lahir->format('d M Y') }}</td>
                    <td>{{ $siswa->tempat_lahir }}</td>
                    <td>{{ $siswa->agama }}</td>
                    <td>{{ $siswa->alamat_rumah }}</td>
                    <td>{{ $siswa->kelurahan }}</td>
                    <td>{{ $siswa->kecamatan }}</td>
                    <td>{{ $siswa->nomor_telepon }}</td>
                    <td>{{ $siswa->nomor_hp }}</td>
                    <td>{{ $siswa->email }}</td>
                    <td>{{ $siswa->nama_ayah }}</td>
                    <td>{{ $siswa->tanggal_lahir_ayah->format('d M Y') }}</td>
                    <td>{{ $siswa->pendidikan_ayah }}</td>
                    <td>{{ $siswa->pekerjaan_ayah }}</td>
                    <td>{{ $siswa->penghasilan_ayah }}</td>
                    <td>{{ $siswa->nomor_telepon_ayah }}</td>
                    <td>{{ $siswa->nama_ibu }}</td>
                    <td>{{ $siswa->tanggal_lahir_ibu->format('d M Y') }}</td>
                    <td>{{ $siswa->pendidikan_ibu }}</td>
                    <td>{{ $siswa->pekerjaan_ibu }}</td>
                    <td>{{ $siswa->penghasilan_ibu }}</td>
                    <td>{{ $siswa->nomor_telepon_ibu }}</td>
                    <td>{{ $siswa->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/siswa/edit/{{ $siswa->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
