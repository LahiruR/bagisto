<accordian :title="'{{ __('admin::app.catalog.products.channel') }}'" :active="true">
    <div slot="body">
        <div class="control-group" :class="[errors.has('channels[]') ? 'has-error' : '']">
            <label for="channels" class="required">{{ __('admin::app.catalog.products.channel') }}</label>
            <select class="control" name="channels[]" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.catalog.products.channel') }}&quot;" multiple>
                @foreach (app('Webkul\Core\Repositories\ChannelRepository')->all() as $channel)
                    <option value="{{ $channel->id }}">
                        {{ $channel->name }}
                    </option>
                @endforeach
            </select>

            <span class="control-error" v-if="errors.has('channels[]')">
                @{{ errors.first('channels[]') }}
            </span>
        </div>
    </div>
</accordian>