@if($specific['type'] === 'inline-input')
    <div class="form-group input-group {{ $errors->has($specific['type']) ? 'has-error' : '' }}">
        @if($specific['position'] === 'front')
            <span class="input-group-addon">{{ $specific['contents'] }}</span>
        @endif
        <input type="text" class="form-control" placeholder="权限名称" id="{{ $specific['name'] }}" name="{{ $specific['name'] }}" value="{{ old($specific['name'], $specific['value']) }}" @if ($specific['required']) required @endif>
        @if($specific['position'] === 'back')
            <span class="input-group-addon">{{ $specific['contents'] }}</span>
        @endif
    </div>
@endif