<div>
    <x-page-content page-name="{{ __('site.dashboard') }}">
        <h1 class="mb-5 p-2 text-2xl font-semibold text-gray-700 text-center">
            {{ __('site.wellcome_to_dashboard') }} {{ auth()->user()->name ?? '' }}
        </h1>
        
        <div class="p-6 lg:p-6 bg-white border-b border-gray-200 rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-3">
                @foreach ($this->dashboardLinks() as $link)
                    @can($link['role'])
                        <a wire:navigate href="{{ route($link['name']) }}">
                            <div class="{{ $link['bg'] }} {{ $link['hover'] }} rounded p-3 text-white">
                                <div class="flex text-2xl justify-between">
                                    <div class="text-center">
                                        <x-icon class="w-12 h-12 text-center" name="{{ $link['icon'] }}" />
                                        <div class="mt-3">{{ $link['count'] }}</div>
                                    </div>
                                    <div class="text-center">
                                        <div>{{ $link['value'] }}</div>
                                        <div class="mt-3">
                                            {{ $link['total'] ? number_format($link['total'], 2) . ' ' . __('site.EGP') : '' }}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endcan
                @endforeach
            </div>
        </div>
    </x-page-content>
</div>