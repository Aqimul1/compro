@csrf

<div class="mb-3">
    <label for="name">Nama</label>
    <input type="text" name="name" id="name" class="form-control"
        value="{{ old('name', $user->name ?? '') }}">
</div>

<div class="mb-3">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control"
        value="{{ old('email', $user->email ?? '') }}">
</div>

<div class="mb-3">
    <label for="password">Password {{ isset($user) ? '(Biarkan kosong jika tidak diubah)' : '' }}</label>
    <input type="password" name="password" id="password" class="form-control">
</div>

<div class="mb-3">
    <label for="role">Role</label>
    <select name="role" id="role" class="form-control">
        <option value="admin" {{ old('role', $user->role ?? '') == 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="staff" {{ old('role', $user->role ?? '') == 'staff' ? 'selected' : '' }}>Staff</option>
    </select>
</div>

<button type="submit" class="btn btn-primary">{{ $button ?? 'Simpan' }}</button>
