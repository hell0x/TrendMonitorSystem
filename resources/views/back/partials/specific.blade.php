@if($specific['type'] === 'inline-input')
    <div class="form-group input-group {{ $errors->has($input['name']) ? 'has-error' : '' }}">
        @if($specific['position'] === 'front')
            <span class="input-group-addon">{{ $specific['contents'] }}</span>
        @endif
        <input type="text" class="form-control" id="name" name="name" placeholder="权限名称">
        @if($specific['position'] === 'back')
            <span class="input-group-addon">{{ $specific['contents'] }}</span>
        @endif
    </div>
@endif