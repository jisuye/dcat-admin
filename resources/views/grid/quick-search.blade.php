<form action="{!! $action !!}" pjax-container style="display: inline-block;">
    <div class="input-group input-group-sm quick-search" style="display: inline-block;">
        <input type="text" placeholder="{{ $placeholder }}" name="{{ $key }}" class="form-control " style="width:200px;" value="{{ $value }}">

        <div class="input-group-btn" style="display: inline-block;">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>