@extends('layouts.admin')

@section('title', 'Manajemen Pengguna & Siswa - YukBelajar Admin')

@section('content')
<div class="flex flex-col gap-6"
     x-data="{
         roleFilter: 'all', // 'all', 'student', 'parent', 'teacher', 'admin'
         searchQuery: '',
         statusFilter: 'all', // 'all', 'active', 'inactive'
         showModal: false,
         showResetModal: false,
         modalMode: 'create', // 'create' or 'edit'
         activeUser: null,
         showAlert: {{ session('success') ? 'true' : 'false' }},
         alertMessage: '{{ session('success') ?? '' }}',
         
         users: {{ Js::from($usersData['users']) }},
         avatars: {{ Js::from($avatars) }},
         
         formData: {
             id: null,
             name: '',
             username: '',
             email: '',
             phone: '',
             parent_name: '',
             parent_relationship: 'bunda',
             role: 'student',
             age: 4,
             avatar: 'dino',
             status: 'active',
             parent_pin: '1234',
             password: ''
         },

         get filteredUsers() {
             return this.users.filter(u => {
                 const matchesRole = this.roleFilter === 'all' || u.role === this.roleFilter || (this.roleFilter === 'teacher' && (u.role === 'teacher' || u.role === 'admin'));
                 const matchesStatus = this.statusFilter === 'all' || (this.statusFilter === 'active' ? u.is_active : !u.is_active);
                 const q = this.searchQuery.toLowerCase();
                 const matchesSearch = !q || u.name.toLowerCase().includes(q) || u.username.toLowerCase().includes(q) || (u.email && u.email.toLowerCase().includes(q)) || (u.parent_name && u.parent_name.toLowerCase().includes(q));
                 return matchesRole && matchesStatus && matchesSearch;
             });
         },

         openCreateModal() {
             this.modalMode = 'create';
             this.formData = {
                 id: null,
                 name: '',
                 username: '',
                 email: '',
                 phone: '',
                 parent_name: '',
                 parent_relationship: 'bunda',
                 role: 'student',
                 age: 4,
                 avatar: 'dino',
                 status: 'active',
                 parent_pin: '1234',
                 password: '1234'
             };
             this.showModal = true;
         },

         openEditModal(user) {
             this.modalMode = 'edit';
             this.formData = { 
                 id: user.id,
                 name: user.name,
                 username: user.username,
                 email: user.email === '-' ? '' : user.email,
                 phone: user.phone === '-' ? '' : user.phone,
                 parent_name: user.parent_name === '-' ? '' : user.parent_name,
                 parent_relationship: user.parent_relationship || 'bunda',
                 role: user.role,
                 age: user.age,
                 avatar: user.avatar_key,
                 parent_pin: user.parent_pin || '1234',
                 status: user.is_active ? 'active' : 'inactive',
                 password: ''
             };
             this.showModal = true;
         },

         openResetModal(user) {
             this.activeUser = user;
             this.showResetModal = true;
         }
     }">

    <!-- Top Header Banner -->
    <div class="bg-gradient-to-r from-sky-600 via-indigo-600 to-purple-600 text-white rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
        <div>
            <span class="inline-block px-3 py-1 bg-white/20 text-white rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                Panel Manajemen Pengguna
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-white">
                Kelola Akun Siswa, Orang Tua & Pengajar
            </h2>
            <p class="text-sm text-sky-100 mt-1 max-w-xl">
                Atur hak akses, pantau perolehan bintang siswa, lihat kontak orang tua / wali, dan kelola profil pengguna YukBelajar PAUD.
            </p>
        </div>

        <button @click="openCreateModal()" 
                class="px-6 py-4 bg-yellow-400 hover:bg-yellow-300 text-yellow-950 font-black rounded-2xl shadow-md transition-all flex items-center gap-2.5 shrink-0 hover:scale-105 cursor-pointer">
            <span class="text-2xl">➕</span>
            <span>Tambah Pengguna Baru</span>
        </button>
    </div>

    <!-- Alert Success Notification -->
    @if(session('success'))
    <div class="p-4 bg-emerald-100 border-3 border-emerald-400 text-emerald-950 font-extrabold text-sm rounded-2xl flex items-center justify-between shadow-xs animate-pop-star">
        <div class="flex items-center gap-3">
            <span class="text-2xl">✨</span>
            <span>{{ session('success') }}</span>
        </div>
    </div>
    @endif

    <!-- Alert Error Notification -->
    @if($errors->any())
    <div class="p-4 bg-rose-100 border-3 border-rose-400 text-rose-950 font-bold text-sm rounded-2xl shadow-xs">
        <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Main Table Container -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border-3 border-slate-200 shadow-xs flex flex-col gap-6">
        
        <!-- Filter Controls -->
        <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
            
            <!-- Role Tabs -->
            <div class="flex items-center gap-1.5 bg-slate-100 p-1.5 rounded-2xl overflow-x-auto">
                <button @click="roleFilter = 'all'"
                        class="px-3.5 py-2 rounded-xl font-bold text-xs transition-all whitespace-nowrap cursor-pointer"
                        :class="roleFilter === 'all' ? 'bg-white text-slate-800 shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                    Semua ({{ count($usersData['users']) }})
                </button>
                <button @click="roleFilter = 'student'"
                        class="px-3.5 py-2 rounded-xl font-bold text-xs transition-all whitespace-nowrap cursor-pointer"
                        :class="roleFilter === 'student' ? 'bg-emerald-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                    👶 Siswa ({{ $usersData['stats']['total_students'] }})
                </button>
                <button @click="roleFilter = 'parent'"
                        class="px-3.5 py-2 rounded-xl font-bold text-xs transition-all whitespace-nowrap cursor-pointer"
                        :class="roleFilter === 'parent' ? 'bg-amber-500 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                    👨‍👩‍👧 Orang Tua ({{ $usersData['stats']['total_parents'] }})
                </button>
                <button @click="roleFilter = 'teacher'"
                        class="px-3.5 py-2 rounded-xl font-bold text-xs transition-all whitespace-nowrap cursor-pointer"
                        :class="roleFilter === 'teacher' ? 'bg-purple-600 text-white shadow-xs' : 'text-slate-600 hover:bg-slate-200'">
                    🦁 Guru / Admin ({{ $usersData['stats']['total_teachers'] }})
                </button>
            </div>

            <!-- Search and Status Filter -->
            <div class="flex items-center gap-3">
                <div class="relative flex-1 sm:w-64">
                    <input type="text" x-model="searchQuery"
                           placeholder="Cari nama / username / orang tua..."
                           class="w-full pl-9 pr-3.5 py-2.5 bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-xl text-xs font-bold outline-none">
                    <span class="absolute left-3 top-2.5 text-slate-400 text-sm">🔍</span>
                </div>

                <select x-model="statusFilter"
                        class="p-2.5 bg-slate-50 border-2 border-slate-200 focus:border-sky-500 rounded-xl text-xs font-bold outline-none cursor-pointer">
                    <option value="all">Semua Status</option>
                    <option value="active">🟢 Aktif</option>
                    <option value="inactive">⚪ Non-aktif</option>
                </select>
            </div>

        </div>

        <!-- Users Table -->
        <div class="overflow-x-auto rounded-2xl border border-slate-200">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-slate-500 font-extrabold text-[11px] uppercase tracking-wider">
                        <th class="p-4">Pengguna / Avatar</th>
                        <th class="p-4">Username & Email</th>
                        <th class="p-4">Orang Tua / Wali</th>
                        <th class="p-4">Peran & Usia</th>
                        <th class="p-4">Bintang</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Terdaftar</th>
                        <th class="p-4 text-right">Aksi Manajemen</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-xs">
                    <template x-for="u in filteredUsers" :key="u.id">
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            
                            <!-- Avatar & Name -->
                            <td class="p-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-2xl bg-amber-100 border border-amber-300 flex items-center justify-center text-2xl shrink-0 shadow-xs relative">
                                        <span x-text="u.avatar_emoji"></span>
                                    </div>
                                    <div>
                                        <p class="font-extrabold text-slate-900 text-sm" x-text="u.name"></p>
                                    </div>
                                </div>
                            </td>

                            <!-- Username & Email -->
                            <td class="p-4">
                                <span class="px-2 py-0.5 bg-slate-100 text-slate-700 font-mono font-bold rounded-md" x-text="'@' + u.username"></span>
                                <p class="text-[11px] text-slate-400 font-semibold mt-0.5" x-text="u.email"></p>
                            </td>

                            <!-- Parent / Guardian Information -->
                            <td class="p-4">
                                <template x-if="u.parent_name && u.parent_name !== '-'">
                                    <div>
                                        <p class="font-extrabold text-purple-900 flex items-center gap-1">
                                            <span>👨‍👩‍👧</span>
                                            <span x-text="u.parent_name"></span>
                                        </p>
                                        <p class="text-[11px] text-slate-500 font-semibold mt-0.5" x-text="'📱 ' + (u.phone !== '-' ? u.phone : 'Tanpa No. HP')"></p>
                                    </div>
                                </template>
                                <template x-if="!u.parent_name || u.parent_name === '-'">
                                    <span class="text-slate-400 font-bold">-</span>
                                </template>
                            </td>

                            <!-- Role & Age -->
                            <td class="p-4">
                                <div class="flex items-center gap-1.5">
                                    <span class="px-2.5 py-0.5 rounded-full font-black text-[10px] uppercase"
                                          :class="u.role === 'student' ? 'bg-emerald-100 text-emerald-800' : (u.role === 'parent' ? 'bg-amber-100 text-amber-900' : 'bg-purple-100 text-purple-900')"
                                          x-text="u.role_label">
                                    </span>
                                    <template x-if="u.age && u.role === 'student'">
                                        <span class="px-2 py-0.5 bg-sky-100 text-sky-800 font-bold rounded-md text-[10px]" x-text="u.age + ' Thn'"></span>
                                    </template>
                                </div>
                            </td>

                            <!-- Stars Count -->
                            <td class="p-4">
                                <template x-if="u.role === 'student'">
                                    <div class="flex items-center gap-1 font-extrabold text-amber-700">
                                        <span class="text-sm">⭐</span>
                                        <span class="text-sm" x-text="u.stars"></span>
                                    </div>
                                </template>
                                <template x-if="u.role !== 'student'">
                                    <span class="text-slate-400 font-bold">-</span>
                                </template>
                            </td>

                            <!-- Status Toggle -->
                            <td class="p-4">
                                <span class="px-2.5 py-1 rounded-full font-bold text-[10px] inline-flex items-center gap-1"
                                      :class="u.is_active ? 'bg-emerald-100 text-emerald-800' : 'bg-slate-200 text-slate-600'">
                                    <span class="w-1.5 h-1.5 rounded-full" :class="u.is_active ? 'bg-emerald-500' : 'bg-slate-400'"></span>
                                    <span x-text="u.is_active ? 'Aktif' : 'Nonaktif'"></span>
                                </span>
                            </td>

                            <!-- Registered Date -->
                            <td class="p-4 text-slate-500 font-semibold" x-text="u.registered_date"></td>

                            <!-- Actions -->
                            <td class="p-4 text-right">
                                <div class="flex items-center justify-end gap-1.5">
                                    <button type="button" @click="openEditModal(u)" title="Edit Profil"
                                            class="p-2 bg-slate-100 hover:bg-sky-100 text-slate-600 hover:text-sky-700 rounded-xl transition-all font-bold cursor-pointer">
                                        ✏️
                                    </button>
                                    <button type="button" @click="openResetModal(u)" title="Reset PIN/Password"
                                            class="p-2 bg-slate-100 hover:bg-amber-100 text-slate-600 hover:text-amber-700 rounded-xl transition-all font-bold cursor-pointer">
                                        🔑
                                    </button>
                                    
                                    <!-- Delete Form -->
                                    <form :action="'{{ url('admin/users') }}/' + u.id" method="POST" 
                                          onsubmit="return confirm('Yakin ingin menghapus akun ini secara permanen dari database?')" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Hapus Pengguna"
                                                class="p-2 bg-slate-100 hover:bg-rose-100 text-slate-600 hover:text-rose-700 rounded-xl transition-all font-bold cursor-pointer">
                                            🗑️
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

    </div>

    <!-- MODAL FORM: TAMBAH USER BARU (REAL DATABASE POST) -->
    <div x-show="showModal && modalMode === 'create'" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full border-4 border-sky-400 shadow-2xl relative my-8"
             @click.away="showModal = false">
            
            <button @click="showModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="flex items-center gap-3 mb-4">
                <span class="text-3xl">➕</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">
                        Daftarkan Pengguna Baru ke Database
                    </h3>
                    <p class="text-xs font-bold text-slate-500">Kredensial login akan langsung aktif.</p>
                </div>
            </div>

            <form action="{{ route('admin.users.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <input type="hidden" name="avatar_icon" :value="formData.avatar">
                
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Peran Akun (Role)</label>
                        <select name="role" x-model="formData.role"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                            <option value="student">👶 Siswa PAUD</option>
                            <option value="parent">👨‍👩‍👧 Orang Tua</option>
                            <option value="teacher">🦁 Guru / Admin</option>
                        </select>
                    </div>

                    <div x-show="formData.role === 'student'">
                        <label class="block text-xs font-bold text-slate-700 mb-1">Usia Belajar Anak</label>
                        <select name="age" x-model="formData.age"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                            <option :value="3">3 Tahun (Level 1: Dasar)</option>
                            <option :value="4">4 Tahun (Level 2: Menengah)</option>
                            <option :value="5">5 Tahun (Level 3: Pra-SD)</option>
                            <option :value="6">6 Tahun (Level 3: Siap SD)</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Nama Lengkap Pengguna</label>
                    <input type="text" name="name" x-model="formData.name" required placeholder="Contoh: Alif Rahman"
                           class="w-full p-3 text-sm font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <!-- Section Data Orang Tua / Pendamping -->
                <div x-show="formData.role === 'student'" class="p-3.5 bg-amber-50/70 border-2 border-amber-200 rounded-2xl flex flex-col gap-3">
                    <span class="text-xs font-black text-amber-950 uppercase tracking-wide flex items-center gap-1">
                        <span>👨‍👩‍👧</span>
                        <span>Data Orang Tua / Pendamping:</span>
                    </span>
                    
                    <div class="grid grid-cols-2 gap-2.5">
                        <div>
                            <label class="block text-[11px] font-bold text-slate-700 mb-1">Nama Orang Tua</label>
                            <input type="text" name="parent_name" x-model="formData.parent_name" placeholder="Bunda Siti"
                                   class="w-full p-2.5 text-xs font-bold bg-white border-2 border-slate-300 focus:border-amber-500 rounded-xl outline-none">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-slate-700 mb-1">Peran / Hubungan</label>
                            <select name="parent_relationship" x-model="formData.parent_relationship"
                                    class="w-full p-2.5 text-xs font-bold bg-white border-2 border-slate-300 focus:border-amber-500 rounded-xl outline-none cursor-pointer">
                                <option value="bunda">🌸 Bunda / Ibu</option>
                                <option value="ayah">⚡ Ayah</option>
                                <option value="wali">🌟 Wali / Pendamping</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold text-slate-700 mb-1">No. WhatsApp / HP Orang Tua</label>
                        <input type="text" name="phone" x-model="formData.phone" placeholder="0812-3456-7890"
                               class="w-full p-2.5 text-xs font-bold bg-white border-2 border-slate-300 focus:border-amber-500 rounded-xl outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Username Unik</label>
                        <input type="text" name="username" x-model="formData.username" required placeholder="alif_ceria"
                               class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none font-mono">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Email / Kontak</label>
                        <input type="email" name="email" x-model="formData.email" placeholder="alif@student.com"
                               class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Kata Sandi / PIN Awal</label>
                    <input type="password" name="password" required placeholder="Minimal 4 karakter"
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <!-- Avatar Selector for Student -->
                <div x-show="formData.role === 'student'">
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Pilih Karakter Avatar</label>
                    <div class="grid grid-cols-4 gap-2">
                        <template x-for="av in avatars" :key="av.key">
                            <button type="button" @click="formData.avatar = av.key"
                                    class="p-2 rounded-xl border-2 flex flex-col items-center gap-1 transition-all cursor-pointer"
                                    :class="formData.avatar === av.key ? 'bg-amber-100 border-amber-400 scale-105 shadow-xs' : 'bg-slate-50 border-slate-200'">
                                <span class="text-2xl" x-text="av.emoji"></span>
                                <span class="text-[9px] font-bold text-slate-700" x-text="av.name.split(' ')[0]"></span>
                            </button>
                        </template>
                    </div>
                </div>

                <div class="flex gap-3 mt-2">
                    <button type="button" @click="showModal = false"
                            class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl cursor-pointer">
                        Batal
                    </button>
                    <button type="submit"
                            class="flex-1 py-3 bg-sky-600 hover:bg-sky-700 text-white font-extrabold text-xs rounded-xl shadow-xs cursor-pointer">
                        Simpan ke Database
                    </button>
                </div>

            </form>

        </div>
    </div>

    <!-- MODAL FORM: EDIT USER (REAL DATABASE PUT) -->
    <div x-show="showModal && modalMode === 'edit'" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full border-4 border-amber-400 shadow-2xl relative my-8"
             @click.away="showModal = false">
            
            <button @click="showModal = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 font-black text-xl cursor-pointer">
                ✖
            </button>

            <div class="flex items-center gap-3 mb-4">
                <span class="text-3xl">✏️</span>
                <div>
                    <h3 class="text-xl font-black font-heading text-slate-800">
                        Edit Profil Pengguna di Database
                    </h3>
                    <p class="text-xs font-bold text-slate-500">Perubahan akan langsung diperbarui.</p>
                </div>
            </div>

            <form :action="'{{ url('admin/users') }}/' + formData.id" method="POST" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                <input type="hidden" name="avatar_icon" :value="formData.avatar">
                
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Peran Akun (Role)</label>
                        <select name="role" x-model="formData.role"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                            <option value="student">👶 Siswa PAUD</option>
                            <option value="parent">👨‍👩‍👧 Orang Tua</option>
                            <option value="teacher">🦁 Guru / Admin</option>
                        </select>
                    </div>

                    <div x-show="formData.role === 'student'">
                        <label class="block text-xs font-bold text-slate-700 mb-1">Usia Belajar Anak</label>
                        <select name="age" x-model="formData.age"
                                class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 rounded-xl outline-none cursor-pointer">
                            <option :value="3">3 Tahun (Level 1: Dasar)</option>
                            <option :value="4">4 Tahun (Level 2: Menengah)</option>
                            <option :value="5">5 Tahun (Level 3: Pra-SD)</option>
                            <option :value="6">6 Tahun (Level 3: Siap SD)</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Nama Lengkap</label>
                    <input type="text" name="name" x-model="formData.name" required
                           class="w-full p-3 text-sm font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <!-- Section Data Orang Tua / Pendamping -->
                <div x-show="formData.role === 'student'" class="p-3.5 bg-amber-50/70 border-2 border-amber-200 rounded-2xl flex flex-col gap-3">
                    <span class="text-xs font-black text-amber-950 uppercase tracking-wide flex items-center gap-1">
                        <span>👨‍👩‍👧</span>
                        <span>Data Orang Tua / Pendamping:</span>
                    </span>
                    
                    <div class="grid grid-cols-2 gap-2.5">
                        <div>
                            <label class="block text-[11px] font-bold text-slate-700 mb-1">Nama Orang Tua</label>
                            <input type="text" name="parent_name" x-model="formData.parent_name" placeholder="Bunda Siti"
                                   class="w-full p-2.5 text-xs font-bold bg-white border-2 border-slate-300 focus:border-amber-500 rounded-xl outline-none">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-slate-700 mb-1">Peran / Hubungan</label>
                            <select name="parent_relationship" x-model="formData.parent_relationship"
                                    class="w-full p-2.5 text-xs font-bold bg-white border-2 border-slate-300 focus:border-amber-500 rounded-xl outline-none cursor-pointer">
                                <option value="bunda">🌸 Bunda / Ibu</option>
                                <option value="ayah">⚡ Ayah</option>
                                <option value="wali">🌟 Wali / Pendamping</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold text-slate-700 mb-1">No. WhatsApp / HP Orang Tua</label>
                        <input type="text" name="phone" x-model="formData.phone" placeholder="0812-3456-7890"
                               class="w-full p-2.5 text-xs font-bold bg-white border-2 border-slate-300 focus:border-amber-500 rounded-xl outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Email Resmi</label>
                    <input type="email" name="email" x-model="formData.email"
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Ganti Password (Opsional)</label>
                    <input type="password" name="password" placeholder="Biarkan kosong jika tidak diganti"
                           class="w-full p-3 text-xs font-bold bg-slate-50 border-2 border-slate-300 focus:border-sky-500 rounded-xl outline-none">
                </div>

                <!-- Avatar Selector for Student -->
                <div x-show="formData.role === 'student'">
                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Pilih Karakter Avatar</label>
                    <div class="grid grid-cols-4 gap-2">
                        <template x-for="av in avatars" :key="av.key">
                            <button type="button" @click="formData.avatar = av.key"
                                    class="p-2 rounded-xl border-2 flex flex-col items-center gap-1 transition-all cursor-pointer"
                                    :class="formData.avatar === av.key ? 'bg-amber-100 border-amber-400 scale-105 shadow-xs' : 'bg-slate-50 border-slate-200'">
                                <span class="text-2xl" x-text="av.emoji"></span>
                                <span class="text-[9px] font-bold text-slate-700" x-text="av.name.split(' ')[0]"></span>
                            </button>
                        </template>
                    </div>
                </div>

                <div class="flex gap-3 mt-2">
                    <button type="button" @click="showModal = false"
                            class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl cursor-pointer">
                        Batal
                    </button>
                    <button type="submit"
                            class="flex-1 py-3 bg-amber-500 hover:bg-amber-600 text-white font-extrabold text-xs rounded-xl shadow-xs cursor-pointer">
                        Simpan Perubahan ke Database
                    </button>
                </div>

            </form>

        </div>
    </div>

    <!-- MODAL RESET PIN/PASSWORD -->
    <div x-show="showResetModal" x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-sm w-full border-4 border-amber-400 shadow-2xl relative my-8 text-center"
             @click.away="showResetModal = false">
            
            <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center text-3xl mx-auto mb-3">
                🔑
            </div>

            <h3 class="text-xl font-black font-heading text-slate-800 mb-1">
                Reset PIN / Password
            </h3>
            <p class="text-xs font-bold text-slate-500 mb-4">
                Atur ulang kata sandi / PIN untuk akun <b class="text-slate-800" x-text="activeUser ? activeUser.name : ''"></b>?
            </p>

            <div class="bg-amber-50 border border-amber-200 rounded-2xl p-3 mb-6 text-xs text-amber-950 font-semibold">
                Password / PIN akan direset menjadi default: <b class="font-mono text-sm bg-white px-2 py-0.5 rounded border">1234</b>
            </div>

            <form :action="'{{ url('admin/users') }}/' + (activeUser ? activeUser.id : '') + '/reset-pin'" method="POST" class="flex gap-3">
                @csrf
                <button type="button" @click="showResetModal = false"
                        class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 font-bold text-xs text-slate-700 rounded-xl cursor-pointer">
                    Batal
                </button>
                <button type="submit"
                        class="flex-1 py-3 bg-amber-500 hover:bg-amber-600 text-white font-extrabold text-xs rounded-xl shadow-xs cursor-pointer">
                    Konfirmasi Reset PIN
                </button>
            </form>

        </div>
    </div>

</div>
@endsection
