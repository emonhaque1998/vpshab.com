@inject('carbon', 'Carbon\Carbon')
<x-user-layout>
    @include('users.dashboard.left-side')

    <div class="right_side background_right mb-5">
        <h3 class="text-body-secondary text-light">My Service</h3>

        <div class="service_data mt-3 px-3">
            <table class="table text-light">
                <thead>
                    <tr>
                        <th scope="col">Service Name</th>
                        <th scope="col">Expiry In</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($orders)
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->product->title }}</td>
                                <td>{{ $order->created_at->diffInDays($carbon::parse($order->created_at)->addDays(30)) }}
                                    Days
                                </td>
                                <td>{{ $order->status }}</td>
                                <td class="text-center"><a href="" class="btn btn-success px-2 py-1"
                                        style="font-size: 12px">Invoice</a>
                                    @if ($order->created_at->diffInDays($carbon::parse($order->created_at)->addDays(30)) <= 3)
                                        <a href="" class="btn btn-success px-2 py-1"
                                            style="font-size: 12px">Renew</a>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div>
    </div>
</x-user-layout>
