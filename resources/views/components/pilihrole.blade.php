<div class="container py-5">
    <div class="d-flex gap-3 align-items-center">
        <p class="mt-3">Pilih Role : </p>
        <form action="/" method="post">
            @csrf
            <input type="hidden" name="role" value="admin">
            <button type="submit" class="btn btn-sm btn-primary px-3">Admin</button>
        </form>
        <form action="/" method="post">
            @csrf
            <input type="hidden" name="role" value="user">
            <button type="submit" class="btn btn-sm btn-danger px-3">User</button>
        </form>
    </div>
</div>