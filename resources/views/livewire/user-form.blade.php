<div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <form action="{{route('form.create')}}" method="POST">
        @csrf
        <x-form-input name="name" placeholder="name" />

        <x-form-input name="email" placeholder="email" />

        <x-form-input name="password" placeholder="password" />

        <x-form-select name="country_code" :options="$countries" />

        <x-form-submit>Save Contact</x-form-submit>
    </form>
</div>
