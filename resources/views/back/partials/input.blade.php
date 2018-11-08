<!--input组件框适配-->
<div class="form-group {{ $errors->has($input['name']) ? 'has-error' : '' }}">
    @isset($input['title'])
        <label for="{{ $input['name'] }}">{{ $input['title'] }}</label>
    @endisset
    @if ($input['input'] === 'textarea')
        <textarea class="form-control" rows="{{ $input['rows'] }}" id="{{ $input['name'] }}" name="{{ $input['name'] }}" @if ($input['required']) required @endif>{{ old($input['name'], $input['value']) }}</textarea>
    @elseif ($input['input'] === 'checkbox')
        @foreach($input['options'] as $option)
            <label class="checkbox-inline">
                <input type="checkbox" name="{{ $input['name'] }}[]" id="{{ $option->id }}" value="{{ $option->id }}" {{ ($input['values']->contains('id', $option->id)) ? 'checked' : '' }}>{{ $option->name }}
            </label>
        @endforeach
    @elseif ($input['input'] === 'select')
        <select {{ $input['styles'] }} class="form-control" name="{{ $input['name'] }}[]" id="{{ $input['name'] }}">
            @foreach($input['options'] as $id => $title)
                <option value="{{ $id }}" {{ old($input['name']) ? (in_array($id, old($input['name'])) ? 'selected' : '') : ($input['values']->contains('id', $id) ? 'selected' : '') }}>{{ $title }}</option>
            @endforeach
        </select>
    @elseif ($input['input'] === 'slider')
        <input class="slider" id="{{ $input['name'] }}" name="{{ $input['name'] }}" type="text" data-slider-min="{{ $input['min'] }}" data-slider-max="{{ $input['max'] }}" data-slider-step="1" data-slider-value="{{ old($input['name'], $input['value']) }}"/>
    @elseif($input['input'] === 'radio')
        @foreach($input['options'] as $id => $title)
            <label class="radio-inline">
                <input type="radio" name="{{ $input['name'] }}" id="{{ $title }}" value="{{ $id }}" {{ ($id === $input['check']) ? 'checked' : '' }}>{{ $title }}
            </label>
        @endforeach
    @else
        <input type="text" class="form-control" id="{{ $input['name'] }}" name="{{ $input['name'] }}" value="{{ old($input['name'], $input['value']) }}" @if ($input['required']) required @endif>
    @endif
    {!! $errors->first($input['name'], '<span class="help-block">:message</span>') !!}
</div>

