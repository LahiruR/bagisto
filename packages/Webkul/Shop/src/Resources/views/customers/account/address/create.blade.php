@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.customer.account.address.create.page-title') }}
@endsection

@section('content-wrapper')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="account-content">

                    @include('shop::customers.account.partials.sidemenu')
            
                    <div class="account-layout">
                        <div class="account-head mb-15">
                            <span class="back-icon"><a href="{{ route('customer.account.index') }}"><i class="icon icon-menu-back"></i></a></span>
                            <span class="account-heading">{{ __('shop::app.customer.account.address.create.title') }}</span>
                            <span></span>
                        </div>
            
                        {!! view_render_event('bagisto.shop.customers.account.address.create.before') !!}
            
                        <form method="post" action="{{ route('customer.address.create') }}" @submit.prevent="onSubmit">
            
                            <div class="account-table-content">
                                @csrf
            
                                {!! view_render_event('bagisto.shop.customers.account.address.create_form_controls.before') !!}
            
                                <div class="form-group" :class="[errors.has('address1[]') ? 'has-error' : '']">
                                    <label for="address_0" class="required">{{ __('shop::app.customer.account.address.create.street-address') }}</label>
                                    <input type="text" class="form-control" name="address1[]" id="address_0" v-validate="'required'" data-vv-as="&quot;{{ __('shop::app.customer.account.address.create.street-address') }}&quot;">
                                    <span class="control-error" v-if="errors.has('address1[]')">@{{ errors.first('address1[]') }}</span>
                                </div>
            
                                @if (core()->getConfigData('customer.settings.address.street_lines') && core()->getConfigData('customer.settings.address.street_lines') > 1)
                                    <div class="form-group" style="margin-top: -25px;">
                                        @for ($i = 1; $i < core()->getConfigData('customer.settings.address.street_lines'); $i++)
                                            <input type="text" class="form-control" name="address1[{{ $i }}]" id="address_{{ $i }}">
                                        @endfor
                                    </div>
                                @endif
            
                                @include ('shop::customers.account.address.country-state', ['countryCode' => old('country'), 'stateCode' => old('state')])
            
                                <div class="form-group" :class="[errors.has('city') ? 'has-error' : '']">
                                    <label for="city" class="required">{{ __('shop::app.customer.account.address.create.city') }}</label>
                                    <input type="text" class="form-control" name="city" v-validate="'required'" data-vv-as="&quot;{{ __('shop::app.customer.account.address.create.city') }}&quot;">
                                    <span class="control-error" v-if="errors.has('city')">@{{ errors.first('city') }}</span>
                                </div>
            
                                <div class="form-group" :class="[errors.has('postcode') ? 'has-error' : '']">
                                    <label for="postcode" class="required">{{ __('shop::app.customer.account.address.create.postcode') }}</label>
                                    <input type="text" class="form-control" name="postcode" v-validate="'required'" data-vv-as="&quot;{{ __('shop::app.customer.account.address.create.postcode') }}&quot;">
                                    <span class="control-error" v-if="errors.has('postcode')">@{{ errors.first('postcode') }}</span>
                                </div>
            
                                <div class="form-group" :class="[errors.has('phone') ? 'has-error' : '']">
                                    <label for="phone" class="required">{{ __('shop::app.customer.account.address.create.phone') }}</label>
                                    <input type="text" class="form-control" name="phone" v-validate="'required'" data-vv-as="&quot;{{ __('shop::app.customer.account.address.create.phone') }}&quot;">
                                    <span class="control-error" v-if="errors.has('phone')">@{{ errors.first('phone') }}</span>
                                </div>
            
                                {!! view_render_event('bagisto.shop.customers.account.address.create_form_controls.after') !!}
            
                                <div class="button-group">
                                    <input class="btn btn-primary btn-lg" type="submit" value="{{ __('shop::app.customer.account.address.create.submit') }}">
                                    {{-- <button class="btn btn-primary btn-lg" type="submit">
                                        {{ __('shop::app.customer.account.address.edit.submit') }}
                                    </button> --}}
                                </div>
            
                            </div>
            
                        </form>
            
                        {!! view_render_event('bagisto.shop.customers.account.address.create.after') !!}
            
                    </div>
                </div>
            </div>
            {{-- ./col-sm-12 --}}
        </div>
        {{-- ./row --}}
    </div>
    {{-- ./container --}}
@endsection