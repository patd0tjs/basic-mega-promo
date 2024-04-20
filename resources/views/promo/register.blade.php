<x-promo-layout>
    <form action="{{ route('promo.join') }}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" name="customer" class="form-control" placeholder="Juan Dela Cruz" required>
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="tel" name="mobile" class="form-control" placeholder="09XXXXXXXXX" required>
            <label for="floatingInput">Mobile Number</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" placeholder="name@example.com" required>
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" placeholder="name@example.com" required>
            <label for="floatingInput">Receipt</label>
        </div>
        <center>
            <button type="submit" class="btn btn-success">Submit Entry</button>
        </center>
    </form>
</x-promo-layout>
