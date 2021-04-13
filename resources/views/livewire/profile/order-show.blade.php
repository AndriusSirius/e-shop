<div>
    <table class="border-collapse w-full">
        <thead>
            <tr>
                <th
                    class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                    PREKĖ</th>
                <th
                    class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                    KAINA</th>
                <th
                    class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                    NUOLAIDA</th>
                <th
                    class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                    KIEKIS</th>
                <th
                    class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                    UŽSAKYMO BŪSENA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderItems as $order)
                <tr
                    class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td
                        class="w-full lg:w-auto p-3 text-black-800 font-semibold uppercase text-left border border-b block lg:table-cell relative lg:static">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">PREKĖ</span>
                        <a
                            href="{{ route('product', [$order->products['id']]) }}">{{ $order->products['title'] }}</a>
                    </td>
                    <td
                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-300 px-2 py-1 text-xs font-bold uppercase">KAINA</span>
                        {{ $order->products['price'] }} €
                    </td>

                    @if (!isset($order->discount))
                        <td
                            class="w-full lg:w-auto p-3 line-through text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">NUOLAIDA</span>
                            Nuolaidos nėra
                        </td>
                    @else
                        <td
                            class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">NUOLAIDA</span>
                            {{ $order->discount['percentage'] }} %
                        </td>
                    @endif

                    <td
                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">KIEKIS</span>
                        {{ $order->total }} vnt
                    </td>

                    <td
                        class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">UŽSAKYMO
                            BŪSENA</span>
                        <span class="rounded bg-green-400 py-1 px-3 text-xs font-bold">{{ $order->status }}</span>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
