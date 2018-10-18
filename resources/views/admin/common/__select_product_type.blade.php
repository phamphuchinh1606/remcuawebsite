<select class="form-control" id="product_type" name="{{$selectName}}">
    @foreach($productTypes as $productType)
        <optgroup label="{{$productType->product_type_name}}" value="{{$productType->id}}">
            @if(isset($productType->childs))
                @foreach($productType->childs as $productTypeChild)
                    <option value="{{$productTypeChild->id}}" @if(isset($defaultValue) && $defaultValue == $productTypeChild->id) selected @endif>
                        {{$productTypeChild->product_type_name}}
                    </option>
                @endforeach
            @endif
        </optgroup>
    @endforeach
</select>