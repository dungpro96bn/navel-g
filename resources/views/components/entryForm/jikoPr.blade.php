@props(['fEntUserApplyInfo', 'items', 'isOpen'])

<section  class="free-entry-field">
    <p class="toggleSwitchApply text-gray {{$isOpen ? 'open' : 'close'}}">フリー入力欄（特記事項など）<span class="btn-toggle"></span></p>
    <div  class="body {{$isOpen ? 'open' : 'close'}}">
        @if($items['pr']['pr']['required'])<i class="required">*</i>@endif
        <textarea name="pr" placeholder="" id="pr">{{old('pr', $fEntUserApplyInfo->jikoPr ?? '')}}</textarea>
        <small class="note-textarea">最大5000文字まで</small>
        <x-molecules.validation-errors :errors="$errors" for="pr" />
    </div>
</section>
