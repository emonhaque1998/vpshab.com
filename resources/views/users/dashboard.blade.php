<x-user-layout>
    @include('users.dashboard.left-side')

    <div class="right_side">
        <div class="wpc-vps-info position-relative">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <h3 class="title bg-seccolorstyle noshadow">
                                <i class="icon-cpu"></i> <span class="mergecolor">Service</span> <span
                                    class="info">{{ $orderCount }}</span>
                            </h3>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <h3 class="title bg-seccolorstyle noshadow">
                                <i class="icon-cpu"></i> <span class="mergecolor">Triket</span> <span
                                    class="info">0</span>
                            </h3>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <h3 class="title bg-seccolorstyle noshadow">
                                <i class="icon-cpu"></i> <span class="mergecolor">Invoice</span> <span
                                    class="info">0</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user-layout>
