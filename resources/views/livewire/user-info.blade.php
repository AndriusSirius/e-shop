<div>
{{--    {{$userinfo}}--}}
</div>
@foreach($user as $userinfo)
<div class="mt-8">
    <h4 class="text-sm text-gray-500 font-medium">Pristatymo adresas</h4>
    <div class="mt-6 flex">
        <label class="block w-3/12">
            <select class="form-select text-gray-700 mt-1 block w-full">
                <option>{{ $userinfo->country }}</option>
            </select>
        </label>
        <label class="block flex-1 ml-3">
            <input type="text" class="form-input mt-1 block w-full text-gray-700"
                   placeholder="Miestas" value="{{ $userinfo->city }}">
        </label>
        <label class="block flex-1 ml-3">
            <input type="text" class="form-input mt-1 block w-full text-gray-700"
                   placeholder="Pašto kodas" value="{{ $userinfo->post_code }}">
        </label>
    </div>
    <label class="block flex-1">
        <input type="text" class="form-input mt-1 block w-full text-gray-700"
               placeholder="Adresas" value="{{ $userinfo->address }}">
    </label>
    <label class="block flex-1">
        <input type="number" class="form-input mt-1 block w-full text-gray-700"
               placeholder="Telefono numeris" value="{{ $userinfo->phone_number }}">
    </label>
</div>


<div class="mt-8">
    <h4 class="text-sm text-gray-500 font-medium">Apmokėjimo metodas</h4>
    <div class="mt-6 flex">
        <label class="block flex-1">
            <select>
                <option>Bankiniu pavedimu</option>
                <option>Kreditinė kortele</option>
                <option>Paysera</option>
            </select>
        </label>
    </div>
</div>
@endforeach
