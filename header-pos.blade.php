<!-- default value -->
@php
    $go_back_url = action([\App\Http\Controllers\SellPosController::class, 'index']);
    $transaction_sub_type = '';
    $view_suspended_sell_url = action([\App\Http\Controllers\SellController::class, 'index']) . '?suspended=1';
    $view_running_orders_url = action([\App\Http\Controllers\SellController::class, 'index']) . '?running_order=1';
    $pos_redirect_url = action([\App\Http\Controllers\SellPosController::class, 'create']);
@endphp

@if (!empty($pos_module_data))
    @foreach ($pos_module_data as $key => $value)
        @php
            if (!empty($value['go_back_url'])) {
                $go_back_url = $value['go_back_url'];
            }

            if (!empty($value['transaction_sub_type'])) {
                $transaction_sub_type = $value['transaction_sub_type'];
                $view_suspended_sell_url .= '&transaction_sub_type=' . $transaction_sub_type;
                $pos_redirect_url .= '?sub_type=' . $transaction_sub_type;
            }
        @endphp
    @endforeach
@endif
<input type="hidden" name="transaction_sub_type" id="transaction_sub_type" value="{{ $transaction_sub_type }}">
@inject('request', 'Illuminate\Http\Request')
<div class="col-md-12 no-print pos-header" style="position: relative">
    <input type="hidden" id="pos_redirect_url" value="{{ $pos_redirect_url }}">

    {{-- <div class="row">
      
        <div class="col-md-6">
            <div class="m-6 mt-5" style="display: flex;">
                <p><strong>@lang('sale.location'): &nbsp;</strong>
                    @if (empty($transaction->location_id))
                        @if (count($business_locations) > 1)
                            <div style="width: 28%;margin-bottom: 5px;">
                                {!! Form::select(
                                    'select_location_id',
                                    $business_locations,
                                    $default_location->id ?? null,
                                    ['class' => 'form-control input-sm', 'id' => 'select_location_id', 'required', 'autofocus'],
                                    $bl_attributes,
                                ) !!}
                            </div>
                        @else
                            {{ $default_location->name }}
                        @endif
                    @endif

                    @if (!empty($transaction->location_id))
                        {{ $transaction->location->name }}
                    @endif &nbsp; <span class="curr_datetime">{{ @format_datetime('now') }}</span>
                    <i class="fa fa-keyboard hover-q text-muted" aria-hidden="true" data-container="body"
                        data-toggle="popover" data-placement="bottom" data-content="@include('sale_pos.partials.keyboard_shortcuts_details')"
                        data-html="true" data-trigger="hover" data-original-title="" title=""></i>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <a href="{{ $go_back_url }}" title="{{ __('lang_v1.go_back') }}"
                class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-info m-5 pull-right">
                <strong><i class="fa fa-backward fa-lg"></i></strong>
            </a>
            @if (!empty($pos_settings['inline_service_staff']))
                <button type="button" id="show_service_staff_availability"
                    title="{{ __('lang_v1.service_staff_availability') }}"
                    class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-primary btn-flat m-6 btn-xs m-5 pull-right"
                    data-container=".view_modal"
                    data-href="{{ action([\App\Http\Controllers\SellPosController::class, 'showServiceStaffAvailibility']) }}">
                    <strong><i class="fa fa-users fa-lg"></i></strong>
                </button>
            @endif

            @can('close_cash_register')
                <button type="button" id="close_register" title="{{ __('cash_register.close_register') }}"
                    class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-error m-5 btn-modal pull-right"
                    data-container=".close_register_modal"
                    data-href="{{ action([\App\Http\Controllers\CashRegisterController::class, 'getCloseRegister']) }}">
                    <strong><i class="fa fa-window-close fa-lg"></i></strong>
                </button>
            @endcan

            @if (!empty($pos_settings['inline_service_staff']) || (in_array('tables', $enabled_modules) || in_array('service_staff', $enabled_modules)))
                <button type="button"
                    class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-primary m-6 btn-xs m-5 pull-right popover-default"
                    id="service_staff_replacement" title="{{ __('restaurant.service_staff_replacement') }}"
                    data-toggle="popover" data-trigger="click"
                    data-content='<div class="m-8"><input type="text" class="form-control" placeholder="@lang('sale.invoice_no')" id="send_for_sell_service_staff_invoice_no"></div><div class="w-100 text-center"><button type="button" class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-error" id="send_for_sercice_staff_replacement">@lang('lang_v1.send')</button></div>'
                    data-html="true" data-placement="bottom">
                    <strong><i class="fa fa-user-plus fa-lg"></i></strong>
                </button>
            @endif

            @can('view_cash_register')
                <button type="button" id="register_details" title="{{ __('cash_register.register_details') }}"
                    class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-success m-6 btn-xs m-5 btn-modal pull-right"
                    data-container=".register_details_modal"
                    data-href="{{ action([\App\Http\Controllers\CashRegisterController::class, 'getRegisterDetails']) }}">
                    <strong><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i></strong>
                </button>
            @endcan

            <button title="@lang('lang_v1.calculator')" id="btnCalculator" type="button"
                class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-success pull-right m-5 btn-xs mt-10 popover-default"
                data-toggle="popover" data-trigger="click" data-content='@include('layouts.partials.calculator')' data-html="true"
                data-placement="bottom">
                <strong><i class="fa fa-calculator fa-lg" aria-hidden="true"></i></strong>
            </button>

            <button type="button"
                class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-error m-6 m-5 pull-right popover-default"
                id="return_sale" title="@lang('lang_v1.sell_return')" data-toggle="popover" data-trigger="click"
                data-content='<div class="m-8"><input type="text" class="form-control" placeholder="@lang('sale.invoice_no')" id="send_for_sell_return_invoice_no"></div><div class="w-100 text-center"><button type="button" class="tw-dw-btn tw-dw-btn-error tw-text-white tw-dw-btn-sm" id="send_for_sell_return">@lang('lang_v1.send')</button></div>'
                data-html="true" data-placement="bottom">
                <strong><i class="fas fa-undo fa-lg"></i></strong>
            </button>

            <button type="button" title="{{ __('lang_v1.full_screen') }}"
                class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-primary m-6 hidden-xs m-5 pull-right"
                id="full_screen">
                <strong><i class="fa fa-window-maximize fa-lg"></i></strong>
            </button>

            <button type="button" id="view_suspended_sales" title="{{ __('lang_v1.view_suspended_sales') }}"
                class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-yellow m-6 btn-xs m-5 btn-modal pull-right"
                data-container=".view_modal" data-href="{{ $view_suspended_sell_url }}">
                <strong><i class="fa fa-pause-circle fa-lg"></i></strong>
            </button>
            @if (empty($pos_settings['hide_product_suggestion']))
                <button type="button" title="{{ __('lang_v1.view_products') }}" data-placement="bottom"
                    class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-success m-6 btn-xs m-5 btn-modal pull-right tw-block md:tw-hidden"
                    data-toggle="modal" data-target="#mobile_product_suggestion_modal">
                    <strong><i class="fa fa-cubes fa-lg"></i></strong>
                </button>
            @endif

            @if (Module::has('Repair') && $transaction_sub_type != 'repair')
                @include('repair::layouts.partials.pos_header')
            @endif

            @if (in_array('pos_sale', $enabled_modules) && !empty($transaction_sub_type))
                @can('sell.create')
                    <a href="{{ action([\App\Http\Controllers\SellPosController::class, 'create']) }}"
                        title="@lang('sale.pos_sale')"
                        class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-success m-6 btn-xs m-5 pull-right">
                        <strong><i class="fa fa-th-large"></i> &nbsp; @lang('sale.pos_sale')</strong>
                    </a>
                @endcan
            @endif
            @can('expense.add')
                <button type="button" title="{{ __('expense.add_expense') }}" data-placement="bottom"
                    class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-primary m-6 btn-xs m-5 btn-modal pull-right"
                    id="add_expense">
                    <strong><i class="fa fas fa-minus-circle"></i> @lang('expense.add_expense')</strong>
                </button>
            @endcan

        </div>

    </div> --}}

    <div
        class="tw-flex tw-flex-col md:tw-flex-row tw-items-center tw-justify-between tw-shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] tw-bg-white tw-rounded-xl tw-mx-0 tw-mt-1 tw-mb-0 md:tw-mb-0 tw-p-3">
        <div class="tw-w-full md:tw-w-1/3">
            <div class="tw-flex tw-items-center tw-gap-2">
                <!---back button -->
                <div class="back">
                    <a href="{{ $go_back_url }}">
                        <img src="{{ asset('img/icon/back-icon.svg') }}" alt="">
                    </a>
                </div>
                <!---back button -->

                <div>
                    <h1 class="tw-font-extrabold">POS</h1>

                </div>

                <p><strong>@lang('sale.location'): &nbsp;</strong></p>
                <div style="width: 28%">
                    @if (empty($transaction->location_id))
                        @if (count($business_locations) > 1)
                            {!! Form::select(
                                'select_location_id',
                                $business_locations,
                                $default_location->id ?? null,
                                ['class' => 'form-control input-sm', 'id' => 'select_location_id', 'required', 'autofocus'],
                                $bl_attributes,
                            ) !!}
                        @else
                            {{ $default_location->name }}
                        @endif
                    @else
                        {{ $transaction->location->name }}
                    @endif
                </div>
                <div class="tw-hidden md:tw-block tw-bg-unset tw-py-1.5 tw-px-2 tw-rounded-md">
                    &nbsp; <span class="curr_datetime text-black tw-font-semibold">{{ @format_datetime('now') }}</span>
                    <i class="fa fa-keyboard hover-q text-black" aria-hidden="true" data-container="body"
                        data-toggle="popover" data-placement="bottom" data-content="@include('sale_pos.partials.keyboard_shortcuts_details')"
                        data-html="true" data-trigger="hover" data-original-title="" title=""></i>
                </div>






                <span class="tw-block md:tw-hidden">
                    <i class="fas hamburger fa-bars tw-mx-5"
                        onclick="document.getElementById('pos_header_more_options').classList.toggle('tw-hidden')"></i>
                </span>

            </div>
        </div>

        <div class="tw-w-full md:tw-w-2/3 !tw-p-0 tw-flex tw-items-center tw-justify-between tw-gap-4 tw-flex-col md:tw-flex-row tw-hidden md:tw-flex"
            id="pos_header_more_options">

            @if (empty($pos_settings['hide_product_suggestion']))
                <button type="button" title="{{ __('lang_v1.view_products') }}" data-placement="bottom"
                    class="tw-shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] tw-bg-white hover:tw-bg-white/60 tw-cursor-pointer tw-border-2 tw-flex tw-items-center tw-justify-center tw-rounded-md tw-w-8 tw-h-8 tw-text-gray-600 btn-modal pull-right tw-block md:tw-hidden"
                    data-toggle="modal" data-target="#mobile_product_suggestion_modal">
                    <strong><i class="fa fa-cubes fa-lg tw-text-[#00935F] !tw-text-sm"></i></strong>
                </button>
            @endif


            <!---calculatior--->
            <button title="@lang('lang_v1.calculator')" id="btnCalculator" type="button"
                class=" hover:tw-bg-white/60 tw-cursor-pointer tw-border-2 tw-flex tw-items-center tw-justify-center tw-rounded-md md:tw-w-8 tw-w-auto tw-h-8 tw-text-gray-600 pull-right popover-default"
                data-toggle="popover" data-trigger="click" data-content='@include('layouts.partials.calculator')' data-html="true"
                data-placement="bottom">
                <img src="{{ asset('img/icon/calculator.svg') }}" style="width: 28px; height:28px" alt="">
                {{-- <span class="tw-inline md:tw-hidden">{{ __('lang_v1.calculator') }}</span> --}}

            </button>

            <!--calculator end-->

            <!---recent transaction --->
            <button class="recent-transaction" type="button" data-toggle="modal"
                data-target="#recent_transactions_modal" id="recent-transactions">
                <img title="@lang('lang_v1.recent_transactions')" data-toggle="tooltip" data-placement="bottom"
                    src="{{ asset('img/icon/recent-transactions.svg') }}" alt=""
                    data-original-title="Recent Transactions" style="width: 28px; height:28px">
                {{-- <span class="tw-inline md:tw-hidden">{{ __('lang_v1.recent_transactions') }}</span> --}}
            </button>
            <!---recent transaction end --->

            <!---suspanded --->
            <button type="button" id="view_suspended_sales" title="{{ __('lang_v1.view_suspended_sales') }}"
                class=" tw-cursor-pointer tw-flex tw-items-center tw-justify-center tw-rounded-md md:tw-w-8 tw-w-auto tw-h-8 tw-text-gray-600 btn-modal pull-right"
                data-container=".view_modal" data-href="{{ $view_suspended_sell_url }}">

                <img src="{{ asset('img/icon/view-suspended.svg') }}" alt="" class=""
                    style="width: 28px; height:28px">
                {{-- <span class="tw-inline md:tw-hidden">{{ __('lang_v1.view_suspended_sales') }}</span> --}}

            </button>
            <!--suspanded sale end--->

            <!--running order --->
            {{-- <button type="button" id="view_running_orders" title="" data-toggle="tooltip" data-placement="bottom"
                class=" btn-modal" data-container=".view_modal"
                data-href="https://demo.bardpos.com/sells?running_order=1" data-original-title="View Running Orders">
                <img src="{{ asset('img/icon/running_order.svg') }}" style="width: 28px; height:28px" alt="">
            </button> --}}

            <!--end running order--->

            <!--Register Details--->
            @can('view_cash_register')
                <button type="button" id="register_details" title="{{ __('cash_register.register_details') }}"
                    class="tw-cursor-pointer tw-flex tw-items-center tw-justify-center tw-rounded-md md:tw-w-8 tw-w-auto tw-h-8 tw-text-gray-600 btn-modal pull-right"
                    data-container=".register_details_modal"
                    data-href="{{ action([\App\Http\Controllers\CashRegisterController::class, 'getRegisterDetails']) }}">

                    <img src="{{ asset('img/icon/register.svg') }}" style="width: 28px; height:28px" alt="">
                </button>
            @endcan
            <!----Register Details End--->




            {{-- <a href="{{ $go_back_url }}" title="{{ __('lang_v1.go_back') }}"
              class="md:tw-hidden tw-shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] tw-bg-white hover:tw-bg-white/60 tw-cursor-pointer tw-border-2 tw-flex tw-items-center tw-justify-center tw-rounded-md md:tw-w-8 tw-w-auto tw-h-8 tw-text-gray-600 pull-right">
            <strong class="!tw-m-3">
                <i class="fa fa-backward fa-lg fa fa-backward tw-fa-lg tw-text-[#009EE4] !tw-text-sm"></i>
                <span class="tw-inline md:tw-hidden">{{ __('lang_v1.go_back') }}</span>
            </strong>
          </a> --}}

            @if (!isset($pos_settings['hide_recent_trans']) || $pos_settings['hide_recent_trans'] == 0)
                <button type="button"
                    class="md:tw-hidden tw-shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] tw-bg-white hover:tw-bg-white/60 tw-cursor-pointer tw-border-2 tw-flex tw-items-center tw-justify-center tw-rounded-md md:tw-w-8 tw-w-auto tw-h-8 tw-text-gray-600 pull-right"
                    data-toggle="modal" data-target="#recent_transactions_modal" id="recent-transactions">
                    <strong class="!tw-m-3">
                        <i class="fa fa-clock fa-lg tw-text-[#646EE4] !tw-text-sm"></i>
                        <span class="tw-inline md:tw-hidden">{{ __('lang_v1.recent_transactions') }}</span>
                    </strong>
                </button>
            @endif

            @if (!empty($pos_settings['inline_service_staff']))
                <button type="button" id="show_service_staff_availability"
                    title="{{ __('lang_v1.service_staff_availability') }}"
                    class=" tw-cursor-pointer tw-flex tw-items-center tw-justify-center tw-rounded-md md:tw-w-8 tw-w-auto tw-h-8 tw-text-white pull-right"
                    data-container=".view_modal"
                    data-href="{{ action([\App\Http\Controllers\SellPosController::class, 'showServiceStaffAvailibility']) }}">
                    <strong class="!tw-m-3">
                        <i class="fa fa-users fa-lg tw-text-black !tw-text-sm" style="width: 28px; height:28px"></i>
                        <span class="tw-inline md:tw-hidden">{{ __('lang_v1.service_staff_availability') }}</span>
                    </strong>
                </button>
            @endif


            <!-----close Register---->
            @can('close_cash_register')
                <button type="button" id="close_register" title="{{ __('cash_register.close_register') }}"
                    class="tw-cursor-pointer tw-flex tw-items-center tw-justify-center tw-rounded-md md:tw-w-8 tw-w-auto tw-h-8 tw-text-gray-600 btn-modal pull-right"
                    data-container=".close_register_modal"
                    data-href="{{ action([\App\Http\Controllers\CashRegisterController::class, 'getCloseRegister']) }}">
                    <img src="{{ asset('img/icon/close-register.svg') }}" style="width: 28px; height:28px"
                        alt="">
                </button>
            @endcan

            <!-----close Register end---->

            @if (
                !empty($pos_settings['inline_service_staff']) ||
                    (in_array('tables', $enabled_modules) || in_array('service_staff', $enabled_modules)))
                <button type="button"
                    class=" tw-cursor-pointer  tw-flex tw-items-center tw-justify-center tw-rounded-md md:tw-w-8 tw-w-auto tw-h-8 tw-text-black pull-right popover-default"
                    id="service_staff_replacement" title="{{ __('restaurant.service_staff_replacement') }}"
                    data-toggle="popover" data-trigger="click"
                    data-content='<div class="m-8"><input type="text" class="form-control" placeholder="@lang('sale.invoice_no')" id="send_for_sell_service_staff_invoice_no"></div><div class="w-100 text-center"><button type="button" class="tw-dw-btn tw-dw-btn-xs tw-dw-btn-outline tw-dw-btn-error" id="send_for_sercice_staff_replacement">@lang('lang_v1.send')</button></div>'
                    data-html="true" data-placement="bottom">

                    <strong class="!tw-m-3">
                        <i class="fa fa-user-plus fa-lg tw-text-[#646EE4] !tw-text-sm"></i>
                        <span class="tw-inline md:tw-hidden">{{ __('restaurant.service_staff_replacement') }}</span>
                    </strong>
                </button>
            @endif




            <!--sell return-->
            <button type="button"
                class="tw-cursor-pointer tw-flex tw-items-center tw-justify-center tw-rounded-md md:tw-w-8 tw-w-auto tw-h-8 tw-text-gray-600 pull-right pull-right popover-default"
                id="return_sale" title="@lang('lang_v1.sell_return')" data-toggle="popover" data-trigger="click"
                data-content='<div class="m-8"><input type="text" class="form-control" placeholder="@lang('sale.invoice_no')" id="send_for_sell_return_invoice_no"></div><div class="w-100 text-center"><button type="button" class="tw-dw-btn tw-dw-btn-error tw-text-white tw-dw-btn-sm" id="send_for_sell_return">@lang('lang_v1.send')</button></div>'
                data-html="true" data-placement="bottom">
                <img src="{{ asset('img/icon/sell-return.svg') }}" style="width: 28px; height:28px" alt=""
                    title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sell Return">
            </button>
            <!---Sell Return ENd--->

            <!--sell Exchange-->
            <button type="button"
                class="tw-cursor-pointer tw-flex tw-items-center tw-justify-center tw-rounded-md md:tw-w-8 tw-w-auto tw-h-8 tw-text-gray-600 pull-right pull-right popover-default"
                id="return_sale" title="@lang('lang_v1.sell_exchange')" data-toggle="popover" data-trigger="click"
                data-content='<div class="m-8"><input type="text" class="form-control" placeholder="@lang('sale.invoice_no')" id="send_for_sell_exchange_invoice_no"></div><div class="w-100 text-center"><button type="button" class="tw-dw-btn tw-dw-btn-error tw-text-white tw-dw-btn-sm" id="send_for_sell_exchange">@lang('lang_v1.send')</button></div>'
                data-html="true" data-placement="bottom">
                <img src="{{ asset('img/icon/sell-return.svg') }}" style="width: 28px; height:28px" alt=""
                    title="" data-toggle="tooltip" data-placement="bottom"
                    data-original-title="Sell Exchange">
            </button>
            <!---Sell Exchange ENd--->


            <!----full screen Start---->
            <button type="button" title="{{ __('lang_v1.full_screen') }}"
                class="tw-cursor-pointer tw-flex tw-items-center tw-justify-center tw-rounded-md md:tw-w-8 tw-w-auto tw-h-8 tw-text-gray-600 pull-right"
                id="full_screen">
                <img src="{{ asset('img/icon/full-screen.svg') }}" style="width: 28px; height:28px" alt="">
            </button>

            <!------------Full Screen End---------->

            <!---------Customer Display---------->
            <a href="{{ route('customer-display') }}"
            class="pos-3d-btn tw-flex tw-items-center tw-justify-center tw-rounded-md"
            target="_blank">
                <img src="{{ asset('img/icon/dual-screen.svg') }}" style="width:30px">
            </a>

            <!----------------Customer Display End---------------------->

            @if (Module::has('Repair') && $transaction_sub_type != 'repair')
                @include('repair::layouts.partials.pos_header')
            @endif

            @if (in_array('pos_sale', $enabled_modules) && !empty($transaction_sub_type))
                @can('sell.create')
                    <a href="{{ action([\App\Http\Controllers\SellPosController::class, 'create']) }}"
                        title="@lang('sale.pos_sale')"
                        class="tw-shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] tw-bg-white hover:tw-bg-white/60 tw-cursor-pointer tw-border-2 tw-w-auto tw-h-auto tw-py-1 tw-px-4 tw-rounded-md pull-right">
                        <strong><i class="fa fa-th-large tw-text-[#00935F] !tw-text-sm"></i> &nbsp;
                            @lang('sale.pos_sale')</strong>
                    </a>
                @endcan
            @endif

            <!--expense start-->
            @can('expense.add')
                <button type="button" title="{{ __('expense.add_expense') }}" data-placement="bottom"
                    class="tw-cursor-pointer tw-w-auto tw-h-auto tw-py-1 tw-px-4 tw-rounded-md btn-modal pull-right"
                    id="add_expense">
                    <img src="{{ asset('img/icon/expense.svg') }}" style="width: 34px; " alt="">
                </button>
            @endcan

            <!----expense End--->

        </div>
    </div>
</div>

<div class="modal fade" id="service_staff_modal" tabindex="-1" role="dialog"
    aria-labelledby="gridSystemModalLabel">
</div>
<style>
    /* Auto 3D effect for POS header buttons */
.pos-header button,
.pos-header a {
    position: relative;
    transition: all 0.18s ease-in-out;
    transform-style: preserve-3d;
    border-radius: 10px;
    background: #f3f2edff;
    box-shadow:
        0 6px 0 #c6d6f7ff,
        0 10px 20px rgba(0, 0, 0, 0.12);
}

.pos-header button:hover,
.pos-header a:hover {
    transform: translateY(-2px);
    box-shadow:
        0 8px 0 #d1d5db,
        0 14px 25px rgba(0, 0, 0, 0.18);
}

.pos-header button:active,
.pos-header a:active {
    transform: translateY(4px);
    box-shadow:
        0 2px 0 #d1d5db,
        0 6px 12px rgba(0, 0, 0, 0.12);
}
.pos-3d-btn:hover::after {
    content: "";
    position: absolute;
    inset: -2px;
    border-radius: 12px;
    background: linear-gradient(120deg, #00935f, #00b4d8);
    opacity: 0.15;
    z-index: -1;
}


</style>