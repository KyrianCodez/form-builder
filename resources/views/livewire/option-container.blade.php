<div>
    @for ($key = 0; $key < $increment; $key++)

    <div class="flex flex-row justify-between pt-12">
        <input type={{$type}} disabled  value="form.questions.{{$i}}.options{{$key}}.value" />
        <x-form-input type="text"  name="form.questions.{{$i}}.options.{{$key}}.value"></x-form-input>
     
    </div>
    @endfor
    <button type="button" wire:click="add_option">
        add row
    </button>
</div>
