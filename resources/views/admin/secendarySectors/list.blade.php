<div class="col-12">
    <select class="form-control" id="sub_sector_id" name="sub_sector_id">
        <option value="0">@lang('constructorRegister.sub_sector')</option>
        @foreach ($subSectors as $subSector)
            <option value="{{ $subSector->id }}" >{{ $subSector->arabic_name }}</option>
        @endforeach
    </select>
</div>
