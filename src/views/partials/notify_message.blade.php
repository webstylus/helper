@if (session()->exists('message'))
    <div class="toast-content">
        @switch(session()->get('type'))
            @case('primary')
            <div class="toast" data-delay="{{ session()->get('time') }}" role="alert" aria-live="assertive"
                 aria-atomic="true">
                <div class="toast-header text-white bg-primary">
                    <i class="fas fa-bell mr-2"></i>
                    <strong class="mr-auto">{{ session()->get('title') }}</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    {{ session()->get('message') }}
                </div>
            </div>
            @break

            @case('success')
            <div class="toast" data-delay="{{ session()->get('time') }}" role="alert" aria-live="assertive"
                 aria-atomic="true">
                <div class="toast-header text-white bg-success">
                    <i class="fas fa-bell mr-2"></i>
                    <strong class="mr-auto">{{ session()->get('title') }}</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    {{ session()->get('message') }}
                </div>
            </div>
            @break

            @case('danger')
            <div class="toast" data-delay="{{ session()->get('time') }}" role="alert" aria-live="assertive"
                 aria-atomic="true">
                <div class="toast-header text-white bg-danger">
                    <i class="fas fa-bell mr-2"></i>
                    <strong class="mr-auto">{{ session()->get('title') }}</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    {{ session()->get('message') }}
                </div>
            </div>
            @break

            @case('warning')
            <div class="toast" data-delay="{{ session()->get('time') }}" role="alert" aria-live="assertive"
                 aria-atomic="true">
                <div class="toast-header text-white bg-warning">
                    <i class="fas fa-bell mr-2"></i>
                    <strong class="mr-auto">{{ session()->get('title') }}</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    {{ session()->get('message') }}
                </div>
            </div>
            @break

            @case('info')
            <div class="toast" data-delay="{{ session()->get('time') }}" role="alert" aria-live="assertive"
                 aria-atomic="true">
                <div class="toast-header text-white bg-info">
                    <i class="fas fa-bell mr-2"></i>
                    <strong class="mr-auto">{{ session()->get('title') }}</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    {{ session()->get('message') }}
                </div>
            </div>
            @break

            @default
            <div class="toast" data-delay="{{ session()->get('time') }}" role="alert" aria-live="assertive"
                 aria-atomic="true">
                <div class="toast-header">
                    <i class="fas fa-bell mr-2"></i>
                    <strong class="mr-auto">{{ session()->get('title') }}</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    {{ session()->get('message') }}
                </div>
            </div>
            @break
        @endswitch
    </div>
@endif
